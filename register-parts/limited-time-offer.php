<style>
.limited-time-offer-row {
    margin-top: 50px;
    margin-bottom: 50px;
}
.limited-time-offer-img {
    display: block;
    width: 100%;
    max-width: 450px;
    margin: 25px auto 0;
}
.limited-time-offer-month-img,
.limited-time-offer-annual-img {
    display: block;
    width: 100%;
    max-width: 200px;
    margin: 0 auto 25px;
}
.time-until-price-increases {
    font-weight: bold;
    font-size: 32px;
    color: #fff;
}
.or-col::after {
    content: "OR";
    position: absolute;
    bottom: 5px;
    text-align: center;
    font-weight: bold;
    right: 0;
    top: 0;
    bottom: 0;
    padding-top: 40px;
    left: initial;
}
@media (min-width: 768px) {
  .limited-time-offer-month-img,
  .limited-time-offer-annual-img {
      max-width: 250px;
  }
  .sm-float-right {
    float: right;
  }
  .sm-float-left {
    float: left;
  }
}
</style>
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
    /* background: #fff; */
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
  color: #fff;
  margin-top: 10px;
  font-size: 16px;
}
@media (min-width: 768px) {
  #clockdiv div > span {
    font-size: 32px;
  }
}
</style>
<div class="">

  <div class="row">
    <div class="col-xs-12" >
      <img src="https://krbecrypto.com/wp-content/uploads/2018/03/limited-time-offer.png" alt="49 Monthly Payment" class="limited-time-offer-img" />
    </div>
  </div>
  <div class="row">
    <div class="or-col col-xs-6 col-sm-offset-1 col-sm-5 col-md-offset-2 col-md-4" >
      <img src="https://krbecrypto.com/wp-content/uploads/2018/03/monthly.png" alt="49 Monthly Payment" class="limited-time-offer-month-img sm-float-right" />
    </div>
    <div class="col-xs-6 col-sm-5 col-md-4" >
      <img src="https://krbecrypto.com/wp-content/uploads/2018/03/annual-1.png" alt="499 Annual Payment" class="limited-time-offer-annual-img sm-float-left" />
    </div>
  </div>
  <div class="row">
    <div class="separator-col col-xs-12" style="margin-top: 0;">
      <h2 class="time-until-price-increases text-center"><i class="fa fa-clock-o"></i> Time Until Price Increases</h3>
      <div class="clearfix"></div>
      <div  class="countdown-wrapper" style="display: none;">
        <div id="clockdiv">
          <div >
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
        <!-- <div class="col-xs-12 col-md-offset-2 col-md-8" style="margin-top: 0;" >
        </div> -->
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-xs-12 col-md-offset-2 col-md-8">
      <a href="#rcp_registration_form" class="package-order-btn smooth-scroll" title="Get Access Now">Get Access Now</a></div>
  </div> -->

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


jQuery(document).ready(function() {
    // deadline = new Date(Date.parse(new Date()) + 1 * 24 * 60 * 60 * 1000);
    // deadline = new Date("Wed Mar 14 2018 00:00:01");
    deadline = new Date("Mar 18 2018 00:00:01");
    initializeClock('clockdiv', deadline);
    jQuery('.countdown-wrapper').show();
});
</script>
