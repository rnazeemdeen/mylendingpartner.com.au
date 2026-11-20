<?php
// Shared <head>, topbar and header. Each page sets $title, $description and
// $active (one of the $nav keys, or '' for none) before including this file.
// Top-level items also light up automatically when you're on one of their sub-pages.
$active = $active ?? '';
$nav = [
  'first-home-buyers' => ['First home buyers', [
    'schemes' => 'Government schemes',
    'scheme-5-percent-deposit' => '5% Deposit Scheme',
    'first-home-owner-grant' => 'First Home Owner Grant',
    'stamp-duty' => 'Stamp duty concessions',
    'help-to-buy' => 'Help to Buy',
  ]],
  'property' => ['Property', [
    'home-loans' => 'Home loans',
    'construction-loans' => 'Building &amp; construction',
    'investment-loans' => 'Investment loans',
    'refinancing' => 'Refinancing',
    'low-deposit-guarantor' => 'Low deposit &amp; guarantor',
    'self-employed-low-doc' => 'Self-employed &amp; low doc',
    'equity-cash-out' => 'Equity &amp; cash-out',
    'islamic-finance' => 'Islamic finance',
  ]],
  'vehicle-finance' => ['Vehicle', []],
  'business-finance' => ['Business', []],
  'personal-loans' => ['Personal', []],
  'calculators' => ['Calculators', []],
  'resources' => ['Resources', []],
];
// The page being viewed: the included file that lives in the site root (not in includes/)
$pages = array_values(array_filter(get_included_files(), function ($f) { return dirname($f) === dirname(__DIR__); }));
$current = $pages ? basename($pages[0], '.php') : '';
?>
<!DOCTYPE html>
<html lang="en-AU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title ?></title>
<meta name="description" content="<?= $description ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Newsreader:opsz,wght@6..72,300;6..72,400;6..72,500&family=Noto+Sans+Sinhala:wght@400;600&family=Noto+Sans+Tamil:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="topbar">
  <div class="topbar__in">
    <div class="topbar__meta">
      <a href="tel:+61420661919">0420 661 919</a>
      <a href="mailto:afkar@lendd.com.au">afkar@lendd.com.au</a>
      <span class="topbar__lang scr">English &middot; &#3523;&#3538;&#3458;&#3524;&#3517; &middot; &#2980;&#2990;&#3007;&#2996;&#3021;</span>
    </div>
    <div>
      <span class="social"><a href="https://www.linkedin.com/in/afkar-mumthas-a0b1a6158" aria-label="LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a><a href="https://www.instagram.com/afkar.lenddfinance" aria-label="Instagram"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><path d="M17.5 6.5h.01"/></svg></a><a href="https://www.facebook.com/share/1RA2jsMB3F/" aria-label="Facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a></span>
    </div>
  </div>
</div>

<header class="header">
  <div class="header__in">
    <a class="logo" href="./">
      <img src="assets/afk-finance-logo.png" alt="AFK Finance" width="81" height="48">
    </a>
    <button class="navtoggle" id="navtoggle" aria-expanded="false" aria-controls="nav">Menu</button>
    <nav class="nav" id="nav">
<?php foreach ($nav as $href => [$label, $sub]):
  $on = $href === $active || $href === $current || isset($sub[$current]); ?>
<?php if ($sub): ?>
      <div class="nav__item">
        <a href="<?= $href ?>"<?= $on ? ' class="on"' : '' ?>><?= $label ?></a>
        <div class="nav__sub">
<?php foreach ($sub as $subHref => $subLabel): ?>
          <a href="<?= $subHref ?>"<?= $subHref === $current ? ' class="on"' : '' ?>><?= $subLabel ?></a>
<?php endforeach; ?>
        </div>
      </div>
<?php else: ?>
      <a href="<?= $href ?>"<?= $on ? ' class="on"' : '' ?>><?= $label ?></a>
<?php endif; ?>
<?php endforeach; ?>
    </nav>
    <a class="btn btn--brass" href="contact">Book a call</a>
  </div>
</header>
