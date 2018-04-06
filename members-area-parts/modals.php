<?php
/*
* Members Area > Modals
*/
$current_user = wp_get_current_user(); ?>

<style>
@media (min-width: 1200px) {
  .modal-dialog {
      margin: 15px auto;
  }
}
</style>

<div id="terms-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="watchlivelabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #f7931a;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="watchlivelabel" style="color: #fff;">Terms of Use</h4>
      </div>
      <div class="modal-body" style="height: 100%; max-height: 450px; overflow-y: scroll;" >
		<p>This newsletter and our various other products include forward-looking statements. All statements other than statements of historical facts contained in these products, including statements regarding our future financial position, business strategy and plans and objectives of management for future operations, are forward-looking statements. The words “believe,” “may,” “will,” “estimate,” “continue,” “anticipate,” “intend,” “expect” and similar expressions are intended to identify forward-looking statements. We have based these forward-looking statements largely on our current expectations and projections about future events and financial trends that we believe may affect our financial condition, results of operations, business strategy, short term and long-term business operations and objectives, and financial needs.</p>

		<p>The newsletter is for long-term holds; the discord group is for day-trading, short, and mid term signals.</p>

		<p>Because of these risks, uncertainties and assumptions, the forward-looking events and circumstances discussed in the newsletters or various other products may not occur and actual results could differ materially and adversely from those anticipated or implied in the forward-looking statements.</p>

		<p>You could lose money by following signals from KRBE Digital Assets Group. Bitcoin, cryptocurrencies, altcoins and ICO’s are not deposits or obligations of, or guaranteed or endorsed by, any bank, and are not insured by the Federal Deposit Insurance Corporation, the Federal Reserve Board, or any other agency of the U.S. government. Our goal is to be as transparent as possible to help you make an educated informed decision about whether this is the right opportunity for you or not.</p>

		<p>This letter reflects our analysis and opinions as of the date and time released, unless otherwise indicated. The information is not a complete analysis of every aspect of any market, country, industry, security or fund.</p>

		<p>The foregoing information reflects our analysis, opinions and portfolio holdings as of the time of release. The way we implement our main investment strategies and the resulting portfolio holdings may change depending on factors such as market and economic conditions. These opinions may not be relied upon as investment advice or an offer for a particular cryptocurrency. Statements of fact are from sources considered reliable, but KRBE Digital Assets Group makes no representation or warranty as to their completeness or accuracy. Although historical performance is no guarantee of future results, these insights may help you understand our investment management philosophy.</p>

		<p>Performance data represent past performance, which does not guarantee future results. Investment return and principal value will fluctuate, and you may have a gain or loss when you redeem your investment. Current performance may differ from figures shown.</p>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div><!-- end of <div class="modal-dialog" -->
</div>

<style>
#clockdiv {
  color: #fff;
  display: inline-block;
  font-weight: 100;
  text-align: center;
  margin: 16px auto;
  width: 100%;
}
#clockdiv > div {
    padding: 5px;
    border-radius: 3px;
    background: #fff;
    display: inline-block;
}
#clockdiv div > span {
  border-radius: 5px;
  background: #f7931a;
  display: inline-block;
  padding: 15px;
  font-size: 16px;
}
#clockdiv .smalltext {
    color: #000;
}
</style>

<div id="members-area-contact-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="watchlivelabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #f7931a;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="watchlivelabel" style="color: #fff;">(1) Question per 24-hrs</h4>
      </div>
      <div class="modal-body">

        <div class="ask-question-form-wrapper">
      		<h3 class="text-center" style="color: #ffa500;">Ask Your Question</h3>
      		<p>Ask about crypto investments, trends and news.</p>
      		<?php echo do_shortcode( '[ninja_form id=4]' ); ?>
        </div>

        <div  class="countdown-wrapper" style="display: none;">
          <h3 class="text-center">Time until you can ask another question.</h3>
          <div id="clockdiv">
            <div style="display: none;">
              <span class="days"></span>
              <div class="smalltext">Days</div>
            </div>
            <div>
              <span class="hours"></span>
              <div class="smalltext">Hours</div>
            </div>
            <div>
              <span class="minutes"></span>
              <div class="smalltext">Minutes</div>
            </div>
            <div class="seconds-wrapper">
              <span class="seconds"></span>
              <div class="smalltext">Seconds</div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div><!-- end of <div class="modal-dialog" -->
</div>

<script>
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

  // alert(t);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

/* Cookie Functions */
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    createCookie(name,"",-1);
}

jQuery(document).ready(function() {


  if( document.cookie && readCookie("Submitted_Daily_Question") ){
    // hide question form
    jQuery('.ask-question-form-wrapper').hide();

    // init countdown
    deadline = readCookie("Submitted_Daily_Question");
    initializeClock('clockdiv', deadline);
    // show countdown clock
    jQuery('.countdown-wrapper').show();
  } else {
    console.log('daily question not yet submitted');
  }

  jQuery("#members-area-contact-modal").on('show.bs.modal', function () {
    jQuery('#members-area-contact-modal .nf-form-cont input[name="nf-field-14"]').val('<?php echo $current_user->display_name; ?>');
    jQuery('#members-area-contact-modal .nf-form-cont input[name="nf-field-15"]').val('<?php echo $current_user->user_email; ?>');
  });

});

// jQuery('.nf-form-cont input[type="button"]').on('click', function() {
jQuery( document ).on( 'nfFormSubmitResponse', function() {
  console.log('submit clicked');

  var checkContents = setInterval(function(){
    // Check if element has been found
    if (jQuery("#nf-form-4-cont .nf-response-msg").text().indexOf('submitted successfully') !== -1){
      console.log('element found');
      // create cookie
      deadline = new Date(Date.parse(new Date()) + 1 * 24 * 60 * 60 * 1000);
      createCookie("Submitted_Daily_Question", deadline, 1);
      // create countdown
      initializeClock('clockdiv', deadline);
      jQuery('.ask-question-form-wrapper').hide();
      jQuery('.countdown-wrapper').fadeIn(2000);
      clearInterval(checkContents);
    }
  }, 500);

});
</script>
