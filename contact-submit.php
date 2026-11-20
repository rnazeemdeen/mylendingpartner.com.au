<?php
/**
 * Afkar enquiry form -> LeadConnector (HighLevel) API v2
 * Location: public_html/contact-submit.php
 * Config:   /home/cpaneluser/lc-config.php (outside public_html)
 *
 * Two-stage submission:
 *   stage=1  sent when the visitor clicks "Continue" (captures the lead early)
 *   stage=2  sent on "SEND MY ENQUIRY" (adds the plan details)
 */

declare(strict_types=1);
header('Content-Type: application/json');

$config = require dirname($_SERVER['DOCUMENT_ROOT']) . '/lc-config.php';

// --- POST only, from your own site ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['ok' => false, 'error' => 'Method not allowed']));
}
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin && !in_array($origin, $config['allowed_origins'], true)) {
    http_response_code(403);
    exit(json_encode(['ok' => false, 'error' => 'Forbidden']));
}

$input = $_POST;
if (empty($input)) {
    $input = json_decode(file_get_contents('php://input'), true) ?: [];
}

// --- Honeypot ---
if (!empty($input['website'])) {
    exit(json_encode(['ok' => true]));
}

// --- Fields (names match contact.php) ---
$clean = fn(string $k): string => trim(strip_tags((string)($input[$k] ?? '')));

$stage      = ($input['stage'] ?? '2') === '1' ? 1 : 2;
$firstName  = $clean('fname');
$lastName   = $clean('lname');
$email      = filter_var($clean('email'), FILTER_VALIDATE_EMAIL) ?: '';
$phone      = preg_replace('/[^\d+]/', '', $clean('mobile'));
$goal       = $clean('goal');
$state      = $clean('state');
$deposit    = $clean('deposit');
$employment = $clean('employment');
$lang       = $clean('lang');
$msg        = $clean('msg');

if ($firstName === '' || ($email === '' && $phone === '')) {
    http_response_code(422);
    exit(json_encode(['ok' => false, 'error' => 'Please enter your name and a mobile or email.']));
}

// 0420 661 919 -> +61420661919
if (preg_match('/^0\d{9}$/', $phone)) {
    $phone = '+61' . substr($phone, 1);
}

// "සිංහල (Sinhala)" -> "Sinhala"
if (preg_match('/\(([^)]+)\)/', $lang, $m)) {
    $lang = $m[1];
}

$slug = fn(string $s): string => trim(strtolower(preg_replace('/[^A-Za-z0-9]+/', '-', $s)), '-');

// --- API helper ---
function lc(string $method, string $path, array $body, array $config): array {
    $ch = curl_init('https://services.leadconnectorhq.com' . $path);
    curl_setopt_array($ch, [
        CURLOPT_CUSTOMREQUEST  => $method,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 15,
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . $config['token'],
            'Version: 2021-07-28',
            'Accept: application/json',
            'Content-Type: application/json',
        ],
        CURLOPT_POSTFIELDS     => json_encode($body),
    ]);
    $res  = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err  = curl_error($ch);
    curl_close($ch);
    return ['code' => $code, 'body' => json_decode((string)$res, true), 'raw' => $res, 'err' => $err];
}

// --- 1. Upsert contact (matched on email/phone, so stage 2 updates the same record) ---
$up = lc('POST', '/contacts/upsert', array_filter([
    'locationId' => $config['location_id'],
    'firstName'  => $firstName,
    'lastName'   => $lastName ?: null,
    'email'      => $email ?: null,
    'phone'      => $phone ?: null,
    'source'     => 'Afkar website enquiry form',
]), $config);

$contactId = $up['body']['contact']['id'] ?? null;

if ($up['code'] >= 300 || !$contactId) {
    error_log("LC upsert failed (stage {$stage}): {$up['code']} {$up['raw']} {$up['err']}");
    if ($stage === 2) {
        fallback_email($config, $firstName, $lastName, $email, $phone, $goal);
    }
    http_response_code(502);
    exit(json_encode(['ok' => false, 'error' => 'Something went wrong. Please call 0420 661 919.']));
}

// --- 2. Tags ---
$tags = ['website-enquiry'];
if ($goal) $tags[] = 'goal-' . $slug($goal);

if ($stage === 1) {
    // Visitor finished step one only — a workflow can follow up on this tag
    $tags[] = 'enquiry-incomplete';
} else {
    if ($lang)  $tags[] = 'lang-' . $slug($lang);
    if ($state) $tags[] = 'state-' . $slug($state);
    $tags[] = 'enquiry-complete';
    // Step two done — clear the incomplete flag
    lc('DELETE', "/contacts/{$contactId}/tags", ['tags' => ['enquiry-incomplete']], $config);
}

$t = lc('POST', "/contacts/{$contactId}/tags", ['tags' => $tags], $config);
if ($t['code'] >= 300) {
    error_log("LC tags failed: {$t['code']} {$t['raw']}");
}

// --- 3. Note with the plan details (stage 2 only) ---
if ($stage === 2) {
    $note = "Website enquiry\n"
          . "Looking to: " . ($goal ?: '-') . "\n"
          . "Where: " . ($state ?: '-') . "\n"
          . "Deposit: " . ($deposit ?: '-') . "\n"
          . "Employment: " . ($employment ?: '-') . "\n"
          . "Preferred language: " . ($lang ?: '-') . "\n"
          . ($msg !== '' ? "\nMessage:\n{$msg}" : '');

    $n = lc('POST', "/contacts/{$contactId}/notes", ['body' => $note], $config);
    if ($n['code'] >= 300) {
        error_log("LC note failed: {$n['code']} {$n['raw']}");
    }
}

echo json_encode(['ok' => true]);

/**
 * Fallback if the CRM is unreachable.
 * Contact details only — deposit and employment stay out of email.
 */
function fallback_email(array $config, string $fn, string $ln, string $email, string $phone, string $goal): void {
    if (empty($config['fallback_email'])) return;
    $body = "A website enquiry could not be saved to the CRM. Please call them back.\n\n"
          . "Name: {$fn} {$ln}\n"
          . "Mobile: {$phone}\n"
          . "Email: {$email}\n"
          . "Looking to: {$goal}\n";
    @mail(
        $config['fallback_email'],
        'Website enquiry (CRM sync failed)',
        $body,
        'From: ' . $config['from_email']
    );
}
