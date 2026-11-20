<?php
$title = 'Afkar Mumthas | My Lending Partner &ndash; Mortgage &amp; Finance Broker';
$description = 'Mortgage and finance broker with access to 80+ lenders. First home buyers, investors and refinancing, explained in plain English. English, Sinhala and Tamil.';
$active = '';
include __DIR__ . '/includes/header.php';
?>

<section class="hero" id="top">
  <div class="wrap hero__grid">
    <div class="reveal">
      <p class="eyebrow">Mortgage and finance broking</p>
      <h1>Clear guidance for the biggest financial decision you'll make.</h1>
      <p class="hero__sub">Your first home, your next investment, or a better deal on the loan you already have. I'll show you what's actually available and explain the trade-offs in plain English.</p>
      <div class="hero__cta">
        <a class="btn btn--brass" href="contact">Book a free 15-minute call</a>
        <a class="btn btn--ghost" href="about">See how I work</a>
      </div>
      <div class="hero__creds">
        <span><b>80+</b> lenders through AFG</span>
        <span><b>FBAA</b> member</span>
        <span><b>Cert IV</b> Mortgage &amp; Finance</span>
        <span><b>B. International Business</b>, Monash</span>
        <span class="scr"><b>English &middot; &#3523;&#3538;&#3458;&#3524;&#3517; &middot; &#2980;&#2990;&#3007;&#2996;&#3021;</b></span>
      </div>
    </div>
    <div class="calc reveal">
      <h2>What would it cost me?</h2>
      <p class="calc__note">Move the sliders for an indicative repayment.</p>
      <div class="field">
        <div class="field__top"><label for="amt">Loan amount</label><output class="field__val" id="amtOut">$650,000</output></div>
        <input type="range" id="amt" min="100000" max="2000000" step="10000" value="650000">
      </div>
      <div class="field">
        <div class="field__top"><label for="term">Loan term</label><output class="field__val" id="termOut">30 years</output></div>
        <input type="range" id="term" min="10" max="30" step="1" value="30">
      </div>
      <div class="field">
        <div class="field__top"><label for="rate">Interest rate</label><output class="field__val" id="rateOut">6.10%</output></div>
        <input type="range" id="rate" min="3" max="10" step="0.05" value="6.1">
      </div>
      <div class="calc__out">
        <div class="calc__big"><span>Monthly repayment</span><strong id="repayOut">$3,939</strong></div>
        <div class="calc__row"><span>Total interest</span><b id="interestOut">$768,000</b></div>
        <div class="calc__row"><span>Total repaid</span><b id="totalOut">$1,418,000</b></div>
      </div>
      <p class="calc__fine">Estimate only, based on principal and interest repayments at a constant rate. It doesn't account for fees, offset accounts or rate changes, and it isn't an offer of credit. <a href="calculators" style="color:var(--brass)">More calculators</a>.</p>
    </div>
  </div>
</section>

<div class="facts">
  <div class="fact"><strong>80+</strong><span>Lenders and partners</span></div>
  <div class="fact"><strong>3</strong><span>Languages spoken</span></div>
  <div class="fact"><strong>$0</strong><span>Cost to you in most cases</span></div>
  <div class="fact"><strong>15 min</strong><span>Free first conversation</span></div>
</div>

<section class="section">
  <div class="wrap split">
    <img class="portrait" src="assets/afkar-home.jpg" alt="Afkar Mumthas, mortgage and finance broker" width="1200" height="1500" loading="lazy" decoding="async">
    <div>
      <p class="eyebrow">About Afkar</p>
      <h2>Trained in the numbers. Experienced inside the bank.</h2>
      <p class="lede">Most brokers can quote you a rate. Fewer can tell you why a lender assessed your income the way it did, and what to do about it.</p>
      <ul class="checks">
        <li><b>Formally trained, not just licensed</b>A Bachelor of International Business majoring in Accounting from Monash, a Diploma of Business, and a Cert IV in Mortgage and Finance sit behind every recommendation.</li>
        <li><b>Bank-side experience</b>Time inside a top-tier financial institution means I know how credit assessment actually happens, including where applications quietly come unstuck.</li>
        <li><b>Three languages, one conversation</b>English, Sinhala and Tamil. Financial vocabulary is where second-language confidence breaks down, and that's exactly where switching language helps most.</li>
        <li><b>Educated clients make better decisions</b>I'd rather you understood the structure than simply signed it.</li>
      </ul>
      <a class="btn btn--outline" href="about">More about Afkar</a>
    </div>
  </div>
</section>

<section class="section section--mist">
  <div class="wrap">
    <div class="head">
      <p class="eyebrow">What I help with</p>
      <h2>Whatever stage you're at, the questions are the same.</h2>
      <p class="lede">How much can I borrow, what will it cost me, and am I in the right structure? Here's where I do that work.</p>
    </div>
  </div>
  <div class="wrap">
    <div class="services">
      <a class="svc" href="home-loans">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M5 18 20 6l15 12"/><path d="M9 17v16h22V17"/><path d="M16 33V23h8v10"/></svg>
        <h3>Home loans</h3>
        <p>Variable, fixed or split &ndash; compared side by side, with the trade-offs spelled out rather than glossed over.</p>
      </a>
      <a class="svc" href="first-home-buyers">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M20 4v32"/><path d="M27 11c0-3-3-5-7-5s-7 2-7 5 3 4.5 7 5.5 7 2.5 7 5.5-3 5-7 5-7-2-7-5"/></svg>
        <h3>First home buyers</h3>
        <p>Deposit, grants, guarantees and LMI, explained once and properly, including what applies in your state.</p>
      </a>
      <a class="svc" href="construction-loans">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M6 34h28"/><path d="M10 34V16l10-8 10 8v18"/><path d="M17 34V24h6v10"/></svg>
        <h3>Building &amp; construction</h3>
        <p>House and land packages, fixed-price contracts and progress payments. Building works differently from buying.</p>
      </a>
      <a class="svc" href="investment-loans">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M5 33h30"/><path d="M9 33V19"/><path d="M18 33V12"/><path d="M27 33V24"/><path d="M35 8 27 16"/></svg>
        <h3>Investment loans</h3>
        <p>Structure matters more than the headline rate. We look at how this purchase affects the next one.</p>
      </a>
      <a class="svc" href="refinancing">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M34 14a15 15 0 1 0 1 10"/><path d="M35 6v9h-9"/></svg>
        <h3>Refinancing</h3>
        <p>If you haven't reviewed your loan in two years, you're likely paying for the privilege.</p>
      </a>
      <a class="svc" href="low-deposit-guarantor">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M20 21a7 7 0 1 0 0-14 7 7 0 0 0 0 14z"/><path d="M7 35c0-6 6-10 13-10s13 4 13 10"/></svg>
        <h3>Low deposit &amp; guarantor</h3>
        <p>You don't always need 20%. Family security, government guarantees and low-deposit options, with the risks made clear.</p>
      </a>
      <a class="svc" href="self-employed-low-doc">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M6 32V12h28v20z"/><path d="M14 12V7h12v5"/><path d="M6 21h28"/></svg>
        <h3>Self-employed &amp; low doc</h3>
        <p>Company income, trusts, ABN income, multiple entities. My accounting background earns its keep here.</p>
      </a>
      <a class="svc" href="equity-cash-out">
        <svg class="svc__ico" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M4 14h32v18H4z"/><path d="M4 20h32"/><path d="M12 27h6"/></svg>
        <h3>Equity &amp; cash-out</h3>
        <p>Access equity for a purchase, renovation or investment. Borrowing against your home carries real risk, so we plan it carefully.</p>
      </a>
    </div>
  </div>
</section>

<section class="section section--navy">
  <div class="wrap">
    <div class="head">
      <p class="eyebrow">Government schemes and grants</p>
      <h2>There is more help available than most buyers realise.</h2>
      <p class="lede">Eligibility rules, price caps and thresholds differ by state and change regularly. Here's the shape of what exists &ndash; we'll check what actually applies to you.</p>
    </div>
  </div>
  <div class="wrap">
    <div class="schemes">
      <a class="scheme" href="scheme-5-percent-deposit">
        <span class="scheme__tag">FROM 5% DEPOSIT</span>
        <h3>5% Deposit Scheme</h3>
        <p>Helps eligible first home buyers purchase with a lower deposit and without paying Lenders Mortgage Insurance.</p>
        <ul><li>From a 5% deposit for eligible first home buyers</li><li>No LMI payable under the scheme</li><li>Available for new and existing homes</li><li>Property price caps apply</li><li>A 2% deposit pathway exists for eligible single parents</li></ul>
      </a>
      <a class="scheme" href="help-to-buy">
        <span class="scheme__tag">FROM 2% DEPOSIT</span>
        <h3>Help to Buy</h3>
        <p>A shared-equity scheme where the government takes an equity interest in the property while you own and live in it.</p>
        <ul><li>Government contribution toward an existing or newly built home</li><li>Minimum 2% deposit</li><li>Open to eligible first-time buyers and some previous homeowners</li><li>Income caps, property price caps and limited places apply</li></ul>
      </a>
      <a class="scheme" href="first-home-owner-grant">
        <span class="scheme__tag">STATE ADMINISTERED</span>
        <h3>First Home Owner Grant</h3>
        <p>Administered separately by each state and territory, so the amount and the eligibility rules depend entirely on where you buy.</p>
        <ul><li>Generally applies to new homes, house-and-land packages or owner-builder situations</li><li>Established homes are usually excluded</li><li>Amounts and caps vary by state</li></ul>
      </a>
      <a class="scheme" href="stamp-duty">
        <span class="scheme__tag">STATE ADMINISTERED</span>
        <h3>Stamp duty concessions</h3>
        <p>Depending on your state, you may be eligible for a full exemption from transfer duty or a significant concession.</p>
        <ul><li>Thresholds differ in every state and territory</li><li>Some states have removed price caps entirely for eligible buyers</li><li>Rules change with each state budget</li></ul>
      </a>
    </div>
    <p class="reviewed">
      Eligibility criteria are set by government, not by us. <a href="schemes">See all schemes</a> or <a href="contact">talk to me about what applies to you</a>.
    </p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="head">
      <p class="eyebrow">Islamic home finance</p>
      <h2>A different approach to home finance.</h2>
      <p class="lede">Islamic home finance generally avoids conventional interest and instead uses structures based on co-ownership, leasing or cost-plus arrangements. The exact structure, fees and ownership arrangements vary between providers, and I can help you compare them properly.</p>
    </div>
    <p><a class="btn btn--outline" href="islamic-finance">How these structures work</a></p>
  </div>
</section>

<section class="section section--mist">
  <div class="wrap">
    <div class="head">
      <p class="eyebrow">How it works</p>
      <h2>Four steps, and you'll know where you stand after the first one.</h2>
    </div>
  </div>
  <div class="wrap">
    <div class="steps">
      <div class="step"><span class="step__n">1</span><h3>A conversation</h3><p>Fifteen minutes on where you are now and where you're trying to get to. No cost, no obligation, no paperwork.</p></div>
      <div class="step"><span class="step__n">2</span><h3>Your position, clearly</h3><p>I work out what you can genuinely borrow and what that means in the market you're buying in.</p></div>
      <div class="step"><span class="step__n">3</span><h3>Options, explained</h3><p>A shortlist of lenders and structures with the trade-offs spelled out, so the decision is yours to make.</p></div>
      <div class="step"><span class="step__n">4</span><h3>Through to settlement</h3><p>I manage the application, chase the lender, and stay in touch afterwards to review it annually.</p></div>
    </div>
  </div>
</section>

<section class="langband">
  <div class="wrap langband__in">
    <div>
      <h2>Prefer Sinhala or Tamil?</h2>
      <p>Just say so when you book. A home loan is the largest commitment most people ever make, and it's worth having that conversation in the language you think in. Loan documents are in English, but we can talk them through in whichever language suits.</p>
    </div>
    <div class="langband__scripts scr">
      &#3523;&#3538;&#3458;&#3524;&#3517;&#3545;&#3505;&#3530; &#3482;&#3501;&#3535; &#3482;&#3515;&#3512;&#3540;<br>
      &#2980;&#2990;&#3007;&#2996;&#3007;&#2994;&#3021; &#2986;&#3015;&#2970;&#2994;&#3006;&#2990;&#3021;
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="head head--mid">
      <p class="eyebrow">Client feedback</p>
      <h2>What people say afterwards</h2>
    </div>
    <div role="region" aria-roledescription="carousel" aria-label="Client reviews">
    <div class="quotes quotes--carousel" id="reviewTrack">
      <div class="quote">
        <p>I had a fantastic experience with Afkar. He was incredibly professional and knowledgeable. Despite a tight timeline, they managed to get everything approved for us quickly and smoothly. Their clear communication and dedication made the whole process stress free.</p>
        <p>I highly recommend Afkar to anyone looking for expert financial assistance.</p>
        <cite>Chamika Karunanayaka<span>Facebook recommendation &middot; October 2025</span></cite>
      </div>
      <div class="quote">
        <p>I was busy working and by the end of the day it was all sorted. Fantastic and positive and friendly communicated. He has done my loan application process within 4 days. Highly recommended. Afkar you are a absolutely legend. Thank you again.</p>
        <cite>Raveen De Silva<span>Facebook recommendation &middot; November 2024</span></cite>
      </div>
      <div class="quote">
        <p>Afkar was a pleasure to work with! He went above and beyond for us to get the results. So thank you again.</p>
        <cite>Dilanka Perera<span>Facebook recommendation &middot; November 2024</span></cite>
      </div>
      <div class="quote">
        <p>I recently had the pleasure of working with Afkar as my broker, and I couldn't be more satisfied with the experience. Afkar's skills as a broker are truly exceptional.</p>
        <details>
          <summary><span class="more">Read more</span><span class="less">Show less</span></summary>
          <p>From the moment we began, he demonstrated a deep understanding of the market and provided invaluable insights that guided me through every step of the process. With my borrowing capacity he has demonstrated me with multiple different lenders who can accept Afkar went above and beyond conducted wide range of searches.</p>
          <p>What impressed me the most was his efficiency and speed. Afkar was always prompt in his responses, handled all the paperwork seamlessly, and ensured everything was completed ahead of schedule.</p>
          <p>If you're looking for a broker who is knowledgeable, efficient, and dedicated to delivering outstanding service, I highly recommend Afkar.</p>
        </details>
        <cite>Chris Polat<span>Facebook recommendation &middot; July 2024</span></cite>
      </div>
    </div>
    <div class="carousel__nav" id="reviewNav" hidden>
      <button class="carousel__btn" type="button" data-dir="-1" aria-label="Previous review"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg></button>
      <div class="carousel__dots"></div>
      <button class="carousel__btn" type="button" data-dir="1" aria-label="Next review"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg></button>
    </div>
    </div>
<script>
(function(){
  var track=document.getElementById('reviewTrack'), nav=document.getElementById('reviewNav'),
      dots=nav.querySelector('.carousel__dots'), slides=track.children,
      still=window.matchMedia('(prefers-reduced-motion: reduce)'), timer, scrollEnd;
  function step(){ return slides[1].offsetLeft-slides[0].offsetLeft; }
  function pages(){ return slides.length-Math.round(track.clientWidth/step())+1; }
  function current(){ return Math.round(track.scrollLeft/step()); }
  function go(i){
    var n=pages();
    track.scrollTo({left:(i%n+n)%n*step(),behavior:still.matches?'auto':'smooth'});
  }
  function paint(){
    var n=pages(), c=current(), i;
    if(dots.children.length!==n){
      dots.innerHTML='';
      for(i=0;i<n;i++){
        var b=document.createElement('button');
        b.type='button';
        b.setAttribute('aria-label','Show review '+(i+1));
        b.addEventListener('click',go.bind(null,i));
        dots.appendChild(b);
      }
    }
    for(i=0;i<n;i++) dots.children[i].setAttribute('aria-current',i===c);
  }
  function stop(){ clearInterval(timer); }
  function start(){ stop(); if(!still.matches) timer=setInterval(function(){ go(current()+1); },6000); }
  for(var k=0;k<slides.length;k++){
    slides[k].setAttribute('role','group');
    slides[k].setAttribute('aria-roledescription','slide');
    slides[k].setAttribute('aria-label',(k+1)+' of '+slides.length);
  }
  nav.addEventListener('click',function(e){
    var b=e.target.closest('[data-dir]');
    if(b){ go(current()+Number(b.dataset.dir)); start(); }
  });
  track.addEventListener('scroll',function(){ clearTimeout(scrollEnd); scrollEnd=setTimeout(paint,100); });
  window.addEventListener('resize',paint);
  [track,nav].forEach(function(el){
    el.addEventListener('mouseenter',stop); el.addEventListener('mouseleave',start);
    el.addEventListener('focusin',stop); el.addEventListener('focusout',start);
  });
  track.addEventListener('touchstart',stop,{passive:true});
  track.addEventListener('touchend',start);
  nav.hidden=false;
  paint(); start();
})();
</script>
    <div class="head head--mid" style="margin-top:clamp(46px,6vw,72px);margin-bottom:0">
      <h3 style="font-size:1.12rem">Access to more than 80 lenders and partners</h3>
      <p style="font-size:.95rem;margin-top:.8rem">Major banks, non-banks and specialist providers, through the AFG lender panel &ndash; spanning residential, commercial, asset and personal finance.</p>
      <p style="font-size:.83rem;margin-top:.8rem;color:#7A889A">A broker must be accredited with a lender to submit applications, and I'm not accredited with every lender on the AFG panel. Where I'm not, I can refer you to an AFG broker who is. See the <a href="credit-guide">Credit Guide</a>.</p>
    </div>
    <ul class="lenders" id="lenders" aria-label="AFG lenders and partners">
        <li><img src="assets/lenders/afg-commercial.png" alt="AFG Commercial" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/afg-home-loans.png" alt="AFG Home Loans" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/aia.png" alt="AIA" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/alex-bank.png" alt="Alex Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/allianz.png" alt="Allianz" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/amp-bank.png" alt="AMP Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/anz.png" alt="ANZ" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/angle-finance.png" alt="Angle Finance" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/ascf.png" alt="Australian Secure Capital Fund" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/australian-military-bank.png" alt="Australian Military Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/auswide-bank.png" alt="Auswide Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/automotive-financial-services.png" alt="Automotive Financial Services" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/azora.png" alt="Azora" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bank-australia.png" alt="Bank Australia" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bank-of-china.png" alt="Bank of China" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bank-of-melbourne.png" alt="Bank of Melbourne" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bank-of-sydney.png" alt="Bank of Sydney" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/banksa.png" alt="BankSA" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/banjo-loans.png" alt="Banjo Loans" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bankwest.png" alt="Bankwest" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bcu.png" alt="BCU" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bendigo-bank.png" alt="Bendigo Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/beyond-bank.png" alt="Beyond Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bizcap.png" alt="Bizcap" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/bond-property-lawyers.png" alt="Bond Property Lawyers" width="500" height="201" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/boq.png" alt="BOQ" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/branded-financial.png" alt="Branded Financial" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/broli-finance.png" alt="Broli Finance" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/capital-finance.png" alt="Capital Finance" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/corelogic.png" alt="CoreLogic" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/commonwealth-bank.png" alt="Commonwealth Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/compare-and-connect.png" alt="Compare &amp; Connect" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/credit-union-sa.png" alt="Credit Union SA" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/deposit-power.png" alt="Deposit Power" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/dynamoney.png" alt="Dynamoney" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/equifax.png" alt="Equifax" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/finance-one.png" alt="Finance One" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/firefighters-mutual-bank.png" alt="Firefighters Mutual Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/firstmac.png" alt="Firstmac" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/flexicommercial.png" alt="Flexicommercial" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/funding.png" alt="Funding" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/gmcu.png" alt="GMCU" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/granite-home-loans.png" alt="Granite Home Loans" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/great-southern-bank.png" alt="Great Southern Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/health-professionals-bank.png" alt="Health Professionals Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/helia.png" alt="Helia" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/heartland.png" alt="Heartland" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/heritage-bank.png" alt="Heritage Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/hejaz.png" alt="Hejaz" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/homestart.png" alt="HomeStart" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/hsbc.png" alt="HSBC" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/hume-bank.png" alt="Hume Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/illion-bankstatements.png" alt="illion BankStatements" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/imb-bank.png" alt="IMB Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/ing.png" alt="ING" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/judo-bank.png" alt="Judo Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/keystart.png" alt="Keystart" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/la-trobe-financial.png" alt="La Trobe Financial" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/latitude-financial.png" alt="Latitude Financial" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/liberty.png" alt="Liberty" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/lumi.png" alt="Lumi" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/macquarie.png" alt="Macquarie" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/maple-commercial.png" alt="Maple Commercial" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/marketplace-finance.png" alt="Marketplace Finance" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/me-bank.png" alt="ME Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/metro-finance.png" alt="Metro Finance" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/moneyme.png" alt="MoneyMe" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/moneyplace.png" alt="MoneyPlace" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/moneytech.png" alt="Moneytech" width="500" height="251" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/moula.png" alt="Moula" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/m2-capital.png" alt="M Squared Capital" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/mystate.png" alt="MyState" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/nab.png" alt="NAB" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/newcastle-permanent.png" alt="Newcastle Permanent" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/now-finance.png" alt="NOW Finance" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/ondeck.png" alt="OnDeck" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/people-first-bank.png" alt="People First Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/pepper-money.png" alt="Pepper Money" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/plenti.png" alt="Plenti" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/pn-bank.png" alt="P&amp;N Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/prime-capital.png" alt="Prime Capital" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/prospa.png" alt="Prospa" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/qbank.png" alt="QBANK" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/qbe.png" alt="QBE" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/queensland-country-bank.png" alt="Queensland Country Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/redzed.png" alt="RedZed" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/resimac.png" alt="Resimac" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/scotpac.png" alt="Scotpac" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/selfco.png" alt="Selfco" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/sherlok.png" alt="Sherlok" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/shift.png" alt="Shift" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/societyone.png" alt="SocietyOne" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/st-george.png" alt="St.George" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/suncorp.png" alt="Suncorp" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/teachers-mutual-bank.png" alt="Teachers Mutual Bank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/the-capricornian.png" alt="The Capricornian" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/trailblazer-finance.png" alt="Trailblazer Finance" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/ubank.png" alt="ubank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/unibank.png" alt="UniBank" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/westpac.png" alt="Westpac" width="500" height="250" loading="lazy" decoding="async"></li>
        <li><img src="assets/lenders/wisr.png" alt="Wisr" width="500" height="250" loading="lazy" decoding="async"></li>
    </ul>
    <p class="lenders__more">
      <button class="btn btn--outline" id="lendersToggle" type="button" aria-controls="lenders" aria-expanded="false" hidden></button>
    </p>
  </div>
</section>
<script>
(function(){
  var list=document.getElementById('lenders'), btn=document.getElementById('lendersToggle'),
      label='Show all '+list.children.length;
  list.classList.add('is-collapsed');
  btn.textContent=label;
  btn.hidden=false;
  btn.addEventListener('click',function(){
    var open=!list.classList.toggle('is-collapsed');
    btn.setAttribute('aria-expanded',open);
    btn.textContent=open?'Show fewer':label;
  });
})();
</script>

<section class="band">
  <div class="wrap band__in">
    <h2>Not sure where to start? That's usually the right time to call.</h2>
    <a class="btn btn--brass" href="contact">Book a free 15-minute call</a>
  </div>
</section>

<script>
var money0=new Intl.NumberFormat('en-AU',{style:'currency',currency:'AUD',maximumFractionDigits:0});
function repay(P,years,ratePct){
  var n=years*12, r=(ratePct/100)/12;
  return r===0 ? P/n : P*r/(1-Math.pow(1+r,-n));
}
function bind(ids,fn){
  ids.forEach(function(id){var el=document.getElementById(id); if(el) el.addEventListener('input',fn);});
  fn();
}
</script>

<script>
bind(['amt','term','rate'],function(){
  var P=+document.getElementById('amt').value,
      y=+document.getElementById('term').value,
      rt=+document.getElementById('rate').value;
  var m=repay(P,y,rt), paid=m*y*12;
  document.getElementById('amtOut').textContent=money0.format(P);
  document.getElementById('termOut').textContent=y+' year'+(y===1?'':'s');
  document.getElementById('rateOut').textContent=rt.toFixed(2)+'%';
  document.getElementById('repayOut').textContent=money0.format(m);
  document.getElementById('interestOut').textContent=money0.format(paid-P);
  document.getElementById('totalOut').textContent=money0.format(paid);
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
