<?php
$title = 'Mortgage Calculators | Repayments, Extra Repayments, Borrowing Power';
$description = 'Loan repayment, extra repayment and borrowing power calculators. Estimates only &ndash; lenders assess differently.';
$active = 'calculators';
include __DIR__ . '/includes/header.php';
?>

<section class="phero">
  <div class="wrap">
    <p class="crumb"><a href="./">Home</a> <span style="opacity:.5">/</span> Calculators</p>
    <h1>Run the numbers yourself.</h1>
    <p>Useful for getting a feel for the shape of things. Every result is an estimate &ndash; the real answer depends on the lender, and that's the conversation.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem" class="calcgrid">

      <div class="calc calc--flat">
        <h2>Loan repayment</h2>
        <p class="calc__note">What a loan of this size would cost each month.</p>
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
        <p class="calc__fine">Estimate only, based on principal and interest repayments at a constant rate. It doesn't account for fees, offset accounts or rate changes, and it isn't an offer of credit.</p>
      </div>

      <div class="calc calc--flat">
        <h2>Extra repayments</h2>
        <p class="calc__note">What paying a little more each month does to the term.</p>
        <div class="field">
          <div class="field__top"><label for="eAmt">Loan amount</label><output class="field__val" id="eAmtOut">$650,000</output></div>
          <input type="range" id="eAmt" min="100000" max="2000000" step="10000" value="650000">
        </div>
        <div class="field">
          <div class="field__top"><label for="eRate">Interest rate</label><output class="field__val" id="eRateOut">6.10%</output></div>
          <input type="range" id="eRate" min="3" max="10" step="0.05" value="6.1">
        </div>
        <div class="field">
          <div class="field__top"><label for="eExtra">Extra per month</label><output class="field__val" id="eExtraOut">$200</output></div>
          <input type="range" id="eExtra" min="0" max="2000" step="50" value="200">
        </div>
        <div class="calc__out">
          <div class="calc__big"><span>Time saved</span><strong id="eSaved">3 yrs 8 mths</strong></div>
          <div class="calc__row"><span>Interest saved</span><b id="eInt">$111,000</b></div>
          <div class="calc__row"><span>New loan term</span><b id="eTerm">26 yrs 4 mths</b></div>
        </div>
        <p class="calc__fine">Assumes a 30-year principal and interest loan at a constant rate, with the extra amount paid every month from the start. Fixed loans often restrict extra repayments.</p>
      </div>

      <div class="calc calc--flat">
        <h2>Borrowing power</h2>
        <p class="calc__note">A rough indication only. Lenders assess very differently.</p>
        <div class="field">
          <div class="field__top"><label for="bInc">Household income before tax</label><output class="field__val" id="bIncOut">$150,000</output></div>
          <input type="range" id="bInc" min="50000" max="500000" step="5000" value="150000">
        </div>
        <div class="field">
          <div class="field__top"><label for="bExp">Monthly living expenses</label><output class="field__val" id="bExpOut">$4,000</output></div>
          <input type="range" id="bExp" min="1500" max="12000" step="100" value="4000">
        </div>
        <div class="field">
          <div class="field__top"><label for="bDebt">Other monthly commitments</label><output class="field__val" id="bDebtOut">$500</output></div>
          <input type="range" id="bDebt" min="0" max="5000" step="50" value="500">
        </div>
        <div class="calc__out">
          <div class="calc__big"><span>Indicative capacity</span><strong id="bOut">$550,000</strong></div>
          <div class="calc__row"><span>Assessed at</span><b>rate + 3% buffer</b></div>
        </div>
        <p class="calc__fine"><b>Treat this as a rough guide only.</b> Lenders differ enormously in how they assess income, expenses and existing debts, and two lenders can reach very different numbers for the same borrower. A proper assessment is a short conversation.</p>
      </div>

      <div class="calc calc--flat">
        <h2>Stamp duty</h2>
        <p class="calc__note">Deliberately not calculated here.</p>
        <div style="padding:1rem 0 0">
          <p style="font-size:.97rem">Stamp duty is set by each state and territory, with different rates, brackets, first home buyer thresholds and vacant land rules in every jurisdiction &ndash; all of which change at state budgets.</p>
          <p style="font-size:.97rem">A calculator that's wrong is worse than no calculator, so rather than build one that quietly goes stale, the state revenue offices maintain official calculators that are always current. Those are the ones to use.</p>
          <p style="font-size:.97rem">Then talk to me about what concessions you may be eligible for &ndash; <a href="stamp-duty" style="color:var(--brass)">see the state-by-state position</a>.</p>
          <p style="margin-top:1.4rem"><a class="btn btn--outline" href="stamp-duty">First home buyer concessions</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--mist">
  <div class="wrap narrow prose">
    <h2 style="margin-top:0">A word on calculators</h2>
    <p>Calculators are useful for understanding the shape of a decision &ndash; how much difference an extra $200 a month makes, or how sensitive your repayment is to a rate change. They're much less useful for telling you what you can borrow.</p>
    <p>Borrowing capacity in particular varies substantially between lenders, because each applies its own assessment to your income, your expenses and your existing commitments. The same borrower can receive materially different answers from different lenders, which is most of the reason a broker is worth talking to.</p>
  </div>
</section>

<section class="band">
  <div class="wrap band__in">
    <h2>Want the real number rather than an estimate?</h2>
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

<script>
function fmtMonths(m){
  var y=Math.floor(m/12), mm=Math.round(m%12);
  if(mm===12){y+=1;mm=0;}
  return y+' yr'+(y===1?'':'s')+(mm?' '+mm+' mth'+(mm===1?'':'s'):'');
}
bind(['eAmt','eRate','eExtra'],function(){
  var P=+document.getElementById('eAmt').value,
      rt=+document.getElementById('eRate').value,
      extra=+document.getElementById('eExtra').value;
  var base=repay(P,30,rt), r=(rt/100)/12, pay=base+extra;
  document.getElementById('eAmtOut').textContent=money0.format(P);
  document.getElementById('eRateOut').textContent=rt.toFixed(2)+'%';
  document.getElementById('eExtraOut').textContent=money0.format(extra);
  var n;
  if(extra<=0){ n=360; }
  else { n=Math.log(pay/(pay-P*r))/Math.log(1+r); }
  if(!isFinite(n)||n>360) n=360;
  var saved=360-n;
  document.getElementById('eSaved').textContent=extra<=0?'—':fmtMonths(saved);
  document.getElementById('eTerm').textContent=fmtMonths(n);
  document.getElementById('eInt').textContent=money0.format((base*360-P)-(pay*n-P));
});
bind(['bInc','bExp','bDebt'],function(){
  var inc=+document.getElementById('bInc').value,
      exp=+document.getElementById('bExp').value,
      debt=+document.getElementById('bDebt').value;
  document.getElementById('bIncOut').textContent=money0.format(inc);
  document.getElementById('bExpOut').textContent=money0.format(exp);
  document.getElementById('bDebtOut').textContent=money0.format(debt);
  /* crude after-tax approximation, then surplus capitalised at rate+3% over 30y */
  var net=inc*0.72/12;
  var surplus=net-exp-debt;
  var cap=0;
  if(surplus>0){
    var r=(9.1/100)/12, n=360;
    cap=surplus*(1-Math.pow(1+r,-n))/r;
  }
  document.getElementById('bOut').textContent=money0.format(Math.max(0,Math.round(cap/10000)*10000));
});
</script>
<style>@media(max-width:960px){.calcgrid{grid-template-columns:1fr!important}}</style>

<?php include __DIR__ . '/includes/footer.php'; ?>
