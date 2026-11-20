<?php
$title = 'Contact Afkar Mumthas | Book a Free Consultation';
$description = 'Book a free 15-minute conversation. Mobile 0420 661 919. Available in English, Sinhala and Tamil.';
$active = 'contact';
include __DIR__ . '/includes/header.php';
?>

<section class="phero">
  <div class="wrap">
    <p class="crumb"><a href="./">Home</a> <span style="opacity:.5">/</span> Contact</p>
    <h1>Let's Get You Home.</h1>
    <p>Tell me a little about yourself and I'll come back to you within one business day.</p>
  </div>
</section>

<section class="section section--navy" style="padding-top:clamp(46px,6vw,72px)">
  <div class="wrap contact">
    <div>
      <p class="eyebrow">Get in touch</p>
      <h2>Start with a conversation.</h2>
      <p style="margin:1.2rem 0 2rem;max-width:40ch">Fifteen minutes, no cost and no obligation. You'll know where you stand by the end of it.</p>
      <dl class="cinfo">
        <dt>Mobile</dt><dd><a href="tel:+61420661919">0420 661 919</a></dd>
        <dt>Email</dt><dd><a href="mailto:afkar@lendd.com.au">afkar@lendd.com.au</a></dd>
        <dt>Languages</dt><dd class="scr">English &middot; &#3523;&#3538;&#3458;&#3524;&#3517; &middot; &#2980;&#2990;&#3007;&#2996;&#3021;</dd>
        <dt>Servicing</dt><dd>Australia-wide</dd>
        <dt>Hours</dt><dd>Mon&ndash;Fri 9:00am &ndash; 6:00pm<br>Evenings and weekends by appointment</dd>
      </dl>
    </div>

    <form class="form" id="enquiry" novalidate>
      <!-- Honeypot: hidden from people, bots fill it in -->
      <input type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true"
             style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">

      <div class="form__prog">
        <span class="form__dot on" id="d1">1</span> About you
        <span class="form__bar"></span>
        <span class="form__dot" id="d2">2</span> Your plans
      </div>

      <div class="form__step" id="step1">
        <div class="form__grid">
          <div><label for="fname">First name</label><input type="text" id="fname" name="fname" autocomplete="given-name" required></div>
          <div><label for="lname">Last name</label><input type="text" id="lname" name="lname" autocomplete="family-name" required></div>
          <div><label for="mobile">Mobile</label><input type="tel" id="mobile" name="mobile" autocomplete="tel" required></div>
          <div><label for="email">Email</label><input type="email" id="email" name="email" autocomplete="email" required></div>
          <div class="full">
            <label for="goal">What are you looking to do?</label>
            <select id="goal" name="goal">
              <option>Buy my first home</option>
              <option>Build my first home</option>
              <option>Buy an investment</option>
              <option>Refinance</option>
              <option>Buy another home</option>
              <option>Other</option>
            </select>
          </div>
          <div class="full">
            <button class="btn btn--brass" type="button" id="next" style="width:100%">Continue</button>
            <p class="form__fine">Two short steps. Your details are saved as soon as you continue.</p>
          </div>
        </div>
      </div>

      <div class="form__step" id="step2" hidden>
        <div class="form__grid">
          <div class="full">
            <label for="state">Where are you looking to buy?</label>
            <select id="state" name="state">
              <option>SA</option><option>VIC</option><option>NSW</option><option>QLD</option>
              <option>WA</option><option>TAS</option><option>ACT</option><option>NT</option>
              <option>Not sure</option>
            </select>
          </div>
          <div>
            <label for="deposit">Approximate deposit <span class="opt">(optional)</span></label>
            <select id="deposit" name="deposit">
              <option>Not sure</option>
              <option>Under $10,000</option>
              <option>$10,000 - $30,000</option>
              <option>$30,000 - $50,000</option>
              <option>$50,000 - $100,000</option>
              <option>$100,000+</option>
            </select>
          </div>
          <div>
            <label for="employment">Employment</label>
            <select id="employment" name="employment">
              <option>PAYG</option><option>Self-employed</option><option>Casual</option>
              <option>Contractor</option><option>Other</option>
            </select>
          </div>
          <div class="full">
            <label for="lang">Preferred language for our conversation</label>
            <select id="lang" name="lang" class="scr">
              <option>English</option>
              <option>&#3523;&#3538;&#3458;&#3524;&#3517; (Sinhala)</option>
              <option>&#2980;&#2990;&#3007;&#2996;&#3021; (Tamil)</option>
            </select>
          </div>
          <div class="full">
            <label for="msg">Anything I should know? <span class="opt">(optional)</span></label>
            <textarea id="msg" name="msg"></textarea>
          </div>
          <div class="full">
            <div class="form__nav">
              <button class="btn btn--brass" type="submit" id="send" style="flex:1">SEND MY ENQUIRY</button>
              <button class="form__back" type="button" id="back">Back</button>
            </div>
            <p class="form__fine" id="form-status" role="status" aria-live="polite"></p>
            <p class="form__fine">Your information will be handled in accordance with our privacy policy. Submitting this form does not constitute loan approval.</p>
          </div>
        </div>
      </div>
    </form>

  </div>
</section>

<section class="langband">
  <div class="wrap langband__in">
    <div>
      <h2>Prefer Sinhala or Tamil?</h2>
      <p>Just say so when you book. A home loan is the largest commitment most people ever make, and it's worth having that conversation in the language you think in.</p>
    </div>
    <div class="langband__scripts scr">
      &#3523;&#3538;&#3458;&#3524;&#3517;&#3545;&#3505;&#3530; &#3482;&#3501;&#3535; &#3482;&#3515;&#3512;&#3540;<br>
      &#2980;&#2990;&#3007;&#2996;&#3007;&#2994;&#3021; &#2986;&#3015;&#2970;&#2994;&#3006;&#2990;&#3021;
    </div>
  </div>
</section>

<script>
(function () {
  var ENDPOINT = '/contact-submit.php';
  var form = document.getElementById('enquiry'),
      s1 = document.getElementById('step1'), s2 = document.getElementById('step2'),
      d1 = document.getElementById('d1'),    d2 = document.getElementById('d2'),
      sendBtn = document.getElementById('send'),
      status = document.getElementById('form-status');

  function post(stage) {
    var data = new FormData(form);
    data.append('stage', stage);
    return fetch(ENDPOINT, { method: 'POST', body: data, keepalive: stage === '1' })
      .then(function (r) { return r.json(); });
  }

  // Step 1 -> validate, capture lead, show step 2
  document.getElementById('next').addEventListener('click', function () {
    var ok = true;
    ['fname', 'lname', 'mobile', 'email'].forEach(function (id) {
      var el = document.getElementById(id), v = el.value.trim();
      var bad = !v
        || (id === 'email'  && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v))
        || (id === 'mobile' && v.replace(/[^\d]/g, '').length < 8);
      el.style.borderColor = bad ? '#C0392B' : '';
      if (bad) ok = false;
    });
    if (!ok) return;

    post('1').catch(function () { /* step 2 resends everything anyway */ });

    s1.hidden = true; s2.hidden = false;
    d1.classList.remove('on'); d2.classList.add('on');
    document.getElementById('state').focus();
  });

  document.getElementById('back').addEventListener('click', function () {
    s2.hidden = true; s1.hidden = false;
    d2.classList.remove('on'); d1.classList.add('on');
  });

  // Step 2 -> full submission
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    sendBtn.disabled = true;
    status.textContent = 'Sending…';

    post('2').then(function (res) {
      if (res.ok) {
        form.classList.add('is-done');
        form.innerHTML =
          '<div class="form__done">' +
          '<span class="form__tick" aria-hidden="true">' +
          '<svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>' +
          '</span>' +
          '<h3>Thank you.</h3>' +
          '<p>Your enquiry is with me. I\'ll be in touch within one business day.</p>' +
          '<p class="form__done-call">Need to talk sooner? Call <a href="tel:+61420661919">0420 661 919</a></p>' +
          '</div>';
        form.scrollIntoView({ behavior: 'smooth', block: 'center' });
      } else {
        status.textContent = res.error || 'Something went wrong. Please call 0420 661 919.';
        sendBtn.disabled = false;
      }
    }).catch(function () {
      status.textContent = 'Connection problem. Please try again or call 0420 661 919.';
      sendBtn.disabled = false;
    });
  });
})();
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
