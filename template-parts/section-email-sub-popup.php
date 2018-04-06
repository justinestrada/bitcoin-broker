<?php
/**
 * Email Subscribe Section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
?>
<style>
.email-sign-up-modal .modal-header {
    background: #f7921a;
}
.email-sign-up-modal .modal-email-signup-wrapper label {
	float: left;
}
.email-sign-up-modal .modal-email-signup-wrapper input {
	width: 100%;
}
.email-sign-up-modal .modal-email-signup-wrapper input[type="button"] {
    max-width: 100%;
}
/*.email-sign-up-modal .modal-email-signup-wrapper #es_shortcode_msg {
    background: green;
    border-radius: 5px;
}*/
.email-sign-up-modal .modal-email-signup-wrapper #es_msg_pg {
    color: green;
    font-weight: bold;
}
</style>
<div id="emailSignUpModal" class="email-sign-up-modal modal fade" tabindex="-1" role="dialog" aria-labelledby="clientModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close closed-email-set-cookie" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h3 class="text-center" style="color: #fff;">KRBE Digital Assets Group Newsletter</h3>
      </div> 
      <div class="modal-body text-center">
        <p>Sign-Up here for the KRBE Digital Assets Group updates!</p>
        <div class="modal-email-signup-wrapper">
		<?php // echo do_shortcode( '[email-subscribers namefield="YES" desc="" group="Public"]' ); ?>
		  <style>
.af-form .af-header {
display: none !important;
}
.af-form {
width: 100%;
max-width: none !important;
}
.af-form .af-body label.previewLabel {
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
padding: 15px !important;    background: linear-gradient(60deg, #f7931a, #ff0000) !important;
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
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<script>
jQuery(document).ready(function() {
	// console.log(readCookie("Closed_Email_Sign-Up"));
	if (!readCookie("Closed_Email_Sign-Up")) {
		setTimeout(function(){	
			jQuery( '#emailSignUpModal' ).modal('show');
		}, 10000);				
	}
});

jQuery('.closed-email-set-cookie').click(function() {
	createCookie("Closed_Email_Sign-Up", true, 1);
});
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
</script>