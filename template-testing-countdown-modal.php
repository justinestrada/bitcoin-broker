<?php
/**
 * Custom template for displaying the home page
 *
 * Template Name: Testing Countdown
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); ?>
 <style>

#clockdiv {
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    margin: 9.5px 0;
}
#clockdiv > div {
    padding: 5px;
    border-radius: 3px;
    background: #fff;
    display: inline-block;
}
#clockdiv div > span {
    border-radius: 3px;
    background: green;
    display: inline-block;
    padding: 5px;
}
</style>


<div class="outer-row row clearfix">
  <div class="testing-modal-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <div class="container">
      <div class="row">
		  
		  <hr/>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
		  <style>
.af-form .af-header {
display: none !important;
}
.af-form {
width: 100%;
max-width: none !important;
}
af-form .af-body label.previewLabel {
color: #000 !important;
font-size: 16px !important;
margin: 5px 0 !important;
}
			  .af-form .af-body input.submit {
    display: block;
    width: 100% !important;
    max-width: none;
    margin: 10px 0 !important;
    font-size: 24px !important;
    padding: 15px !important;
}
.af-form .af-body input.text {
border: 1px solid #444 !important;
border-radius: 5px;
padding: 5px !important;
font-size: 16px !important;
color: #000 !important;
}
.af-form .af-element.poweredBy {
	display: none !important; }
		  </style>
		  <div class="AW-Form-379119726"></div>
<script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//forms.aweber.com/form/26/379119726.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, "script", "aweber-wjs-g6chnitb7"));
</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		  

		  
		  <hr/>
		  

        <div class="submitted-form">
        <?php echo do_shortcode('[ninja_form id=5]'); ?>
        </div>

        <div id="clockdiv" class="countdown-wrapper" style="display: none;">
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

  </div>
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
    jQuery('.submitted-form').hide();

    // init countdown
    deadline = readCookie("Submitted_Daily_Question");
    initializeClock('clockdiv', deadline);
    // show countdown clock
    jQuery('.countdown-wrapper').show();
  }
});

jQuery( '.ninja-forms-form' ).on( 'submitResponse', function( e, response ) {
    var errors = response.errors;
    if ( errors == false ) {
        // Event tracking code
        alert('test');
        // Do stuff here.
        deadline = new Date(Date.parse(new Date()) + 1 * 24 * 60 * 60 * 1000);
        // create Cookie
        createCookie("Submitted_Daily_Question", deadline, 1);
        // start countdown
        initializeClock('clockdiv', deadline);
        // show countdown
        jQuery('.countdown-wrapper').show();
    }
});
</script>

<?php get_footer();
