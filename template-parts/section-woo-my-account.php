<style>
/*
 * Off Canvas
 * --------------------------------------------------
 */
@media screen and (max-width: 767px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all .25s ease-out;
         -o-transition: all .25s ease-out;
            transition: all .25s ease-out;
  }
  .row-offcanvas-left {
    left: 0;
  }
  .sidebar-offcanvas {
    right: -50%; /* 6 columns */
  }
  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -50%; /* 6 columns */
  }
  .row-offcanvas-left.active {
    left: 50%; /* 6 columns */
  }
  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 50%; /* 6 columns */
  }
}
</style>
<style>
.section-page {
	margin-top: 0;
	background: #f5f5f5;
}
.fab-btn {
	display: block;
	position: fixed;
    box-shadow: 0 1px 1.5px 0 rgba(0,0,0,.12), 0 1px 1px 0 rgba(0,0,0,.26);
    width: 50px;
    min-width: 50px;
    height: 50px;
    color: #fff;
    background-color: #5cb860;
    border-color: #5cb860;
    padding: 0;
    border-radius: 50%;
    padding: 0;
    border-radius: 50%;
    z-index: 1000;
    font-size: 16px;
}
.fab-btn.top {
	top: 15px;
}
.fab-btn.right {
	right: 15px;
}
.fab-btn.bottom {
	bottom: 15px;
}
.fab-btn .fa,
.fab-btn .fa:hover,
.fab-btn .fa:focus {
	color: #fff;
}
</style>
<style>
.row-eq-height {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}
.dashboard-nav-col,
.dashboard-content-col {
    min-height: 1000px;
    background: #fff;
}
.dashboard-nav-col,
.dashboard-content-col {
    padding-top: 25px;
    padding-bottom: 25px;
}
.dash-wrapper:first-child {
	margin-top: 30px;
}
.dash-wrapper {
	padding: 15px;
	border-radius: 5px;
	border: 1px solid #c7c7c7;
	margin: 0 15px;
	box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
	background: #fff;
    margin-top: 45px;
}
.toggle-members-area-btn {
    display: block;
    width: 100%;
    background: #444;
    color: #fff;
    border-radius: 5px;
    padding: 15px;
    min-height: 40px;
    text-align: center;
    margin-bottom: 15px;
    -webkit-box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
}
.toggle-members-area-btn:hover,
.toggle-members-area-btn:focus {
    color: #fff;
}
.toggle-fixed {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1000;
    -webkit-box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
}
.dashboard-nav-group a.list-group-item {
    margin: 0;
    line-height: 32px;
    display: block;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.dashboard-nav-group a.list-group-item .fa {
    color: #444;
}
.dashboard-nav-group a.list-group-item.active .fa {
    color: #fff;
}
.dashboard-nav-group a.active {
	cursor: default;
    box-shadow: 0 12px 20px -10px rgba(255, 165, 0, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(255, 165, 0, 0.2);

}
.dashboard-nav-group a.list-group-item.active .fa {
    color: #fff;
}
.dashboard-nav-group a.active,
.dashboard-nav-group a.active:hover,
.dashboard-nav-group a.active:focus {
    background-color: #f7931a;
    border-color: #f7931a;
}
.dashboard-row {
	display: none;
}
.dashboard-row.active {
	display: block;
}
.dash-card {
    background: linear-gradient(60deg, #f7931a, #ff0000);
    position: relative;
    min-height: 1px;
    padding: 15px;
    color: #fff;
    border-radius: 5px;
    text-align: center;
    top: -45px;
    width: 100%;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}
.notice .fa-close {
	cursor: pointer;
}
table.rcp-table {
    width: 100%;
    margin: 25px 0;
}
.rcp_form input[type=text], .rcp_form input[type=password], .rcp_form input[type=email] {
    width: 100%;
    border: 1px solid #c7c7c7;
    border-radius: 5px;
}
#rcp_profile_submit_wrap input[type="submit"] {
    max-width: 100%;
}
#rcp_profile_display_name_wrap select {
    width: 100%;
    min-height: 40px;
    padding: 5px;
    font-size: 16px;
    padding-left: 15px;
    border-radius: 5px;
}
.newsletter-wrapper .view-newsletter-btn,
.resource-wrapper .download-btn,
.join-meeting-btn,
.shop-btn {
	display: block;
	width: 100%;
	text-align: center;
	background: #f7931a;
	color: #fff;
	border-radius: 5px;
	margin-top: 15px;
	font-size: 16px;
	padding: 15px;
}
.newsletter-wrapper .view-newsletter-btn:hover,
.newsletter-wrapper .view-newsletter-btn:focus,
.resource-wrapper .download-btn:hover,
.resource-wrapper .download-btn:focus,
.join-meeting-btn:hover,
.join-meeting-btn:focus {
	display: block;
	width: 100%;
	text-align: center;
	background: #f7931a;
	color: #fff;
	border-radius: 5px;
	margin-top: 15px;
	font-size: 16px;
	padding: 15px;
}
.newsletter-wrapper img,
.resource-wrapper img {
    display: block;
    width: 100%;
}
.resource-wrapper {
	margin-bottom: 25px;
}
.podcast-wrapper {
    background: #fff;
    border: 1px solid #c7c7c7;
    padding: 15px;
    margin-bottom: 25px;
    border-radius: 25px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border-left: 10px solid #f78417;
}
.podcast-title {
	display: block;
	margin-top: 0;
}
.discount-badge {
	display: block;
	width: 100%;
	position: absolute;
	top: -15px;
	max-width: 250px;
	left: -15px;
}
.rcp-table thead tr th {
    padding: 5px;
}
.rcp-table thead {
    background: #f7931a;
}
.rcp-table tbody tr td {
    padding: 5px;
}
.rcp-table tbody tr:nth-child(odd) {
    background: #c7c7c7;
}
.rcp-table tbody tr:nth-child(even) {
    background: #fff;
}
.charts-wrapper .select2-selection.select2-selection--multiple.ccc-select2-container {
    position: relative;
    top: -30px;
    border: 1px solid #c7c7c7;
}
.charts-wrapper .amcharts-center-div {
    margin-top: 30px;
}
.charts-loader-wrapper {
    display: block;
    text-align: center;
    color: #444;
    padding-bottom: 25px;
}
.footer-wrapper {
    margin-top: 0;
}
@media (max-width: 767px) {
	html {
	    margin-top: 0;
	}
	#wpadminbar {
	    display: none;
	}
}
@media (min-width: 768px) {
	.dashboard-nav-col {
		/* position: fixed;
	  top: 330px;
	  bottom: 0;
	  left: 0;
	  z-index: 1; */
	  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
	  z-index: 2;
	}
	.dashboard-nav-group a.list-group-item .fa {
	    margin-right: 15px;
	}
}
</style>

<div class="container-fluid">

	<div id="top" class="row row-offcanvas row-offcanvas-left row-eq-height">

		<div class="dashboard-nav-col col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
			<h2 class="text-center" style="color: #f7931a; border-bottom: 3px solid #f7931a; padding-bottom: 15px; margin-bottom: 25px;">Members Area</h2>
		  <div class="dashboard-nav-group list-group">
		    <a tab="charts" class="list-group-item active"><i class="fa fa-bar-chart" ></i> Charts</a>
		    <a tab="newsletters" class="list-group-item"><i class="fa fa-bell" ></i> Newsletters</a>
		    <a tab="conferences" class="list-group-item"><i class="fa fa-comments" ></i> Live Conferences</a>
		    <a tab="podcasts" href="http://krbecrypto.libsyn.com/" class="list-group-item" target="_blank"><i class="fa fa-microphone" ></i> Podcasts</a>
		    <a tab="resources" class="list-group-item"><i class="fa fa-clipboard" ></i> Helpful Resources</a>
		    <a tab="tutorials" class="list-group-item"><i class="fa fa-play-circle" ></i> Tutorials</a>
		    <a tab="discounts" class="list-group-item"><i class="fa fa-tags" ></i> Discounts</a>
		    <a href="https://krbecrypto.com/members-area/?tab=profile" class="list-group-item"><i class="fa fa-user" ></i> Profile</a>
		    <a tab="account" class="list-group-item"><i class="fa fa-cogs" ></i> Account</a>
		    <a href="https://krbecrypto.com/wp-login.php?action=logout" class="list-group-item"><i class="fa fa-power-off" ></i> Logout</a>
		  </div>
		</div><!--/.sidebar-offcanvas-->

		 <!-- col-sm-offset-3  -->
		<div class="dashboard-content-col col-xs-12 col-sm-9">

			<button class="btn fab-btn right bottom show-contact-form-modal"><i class="fa fa-comments"></i></button>


			<div class="row visible-xs">
				<div class="col-xs-12">
					<a href="#top" type="button" class="toggle-members-area-btn" data-toggle="offcanvas" style="width: 100%;"><i class="fa fa-angle-right" style="float: left;"></i> Menu</a>
				</div>
			</div>

			<div class="notices-row row">
			    <div class="col-xs-12">
			    	<div class="discord-notice notice alert alert-success">
					  <a href="https://discord.gg/5wtt5kn" target="_blank" title="Join Discord Group"><b><img src="https://krbecrypto.com/wp-content/uploads/2018/02/discord-logo.png" style="height: 40px; width: 40px; margin-right: 15px" alt="Discord" /> Join Discord Group</b></a> <!--<i class="fa fa-close notice-dismiss" style="float: right; transform: rotate(90deg);"></i>-->
					</div>
				</div>
			</div>

			<div id="charts" class="dashboard-row row active">
				<?php get_template_part( 'members-area-parts/charts' ); ?>
		    </div>

			<div id="newsletters" class="dashboard-row row">
				<?php get_template_part( 'members-area-parts/newsletters' ); ?>
			</div>

			<div id="tutorials" class="dashboard-row row">
				<div class="tutorials-wrapper dash-wrapper clearfix">
					<div class="dash-card">
						<h3>Tutorials</h3>
					</div>
					<div class="col-xs-12 text-center">
						<iframe class="responsive-video-tutorial" width="100%" height="315" src="https://www.youtube.com/embed/ahmpm9TGAtI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <p>More Coming Soon</p>
            <p>Tutorials every Tuesday and Thursday</p>
          </div>
				</div>
			</div>
			<div id="conferences" class="dashboard-row row">
				<div class="conferences-wrapper dash-wrapper clearfix">
					<div class="dash-card">
						<h3>Live Conferences</h3>
					</div>
					<div class="col-xs-12 text-center">
						<!-- <iframe class="responsive-video-conference" width="100%" height="315" src="https://www.youtube.com/embed/g6ENcyEZRSE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe> -->
            <p>Just enter in the 9-digit meeting ID</p>
            <a href="https://www.gotomeeting.com/webinar/join-webinar" target="_blank" title="Join Webinar" class="join-meeting-btn">Join Webinar</a>
					</div>
				</div>
			</div>
			<!-- <div id="podcasts" class="dashboard-row row">
				<?php get_template_part('members-area-parts/podcasts'); ?>
			</div> -->
			<div id="resources" class="dashboard-row row">
				<?php get_template_part('members-area-parts/helpful', 'resources'); ?>
			</div>
			<div id="profile" class="dashboard-row profile-row row">
				<div class="dash-wrapper clearfix">
					<div class="dash-card">
				    	<h3>Edit Profile</h3>
				    </div>
				    <div class="col-xs-12">
				    	<?php echo do_shortcode( '[rcp_profile_editor]' ); ?>
				    </div>
				</div>
			</div>
			<div id="discounts" class="dashboard-row discounts-row row">
				<?php get_template_part('members-area-parts/discounts'); ?>
			</div>
	    <div id="account" class="dashboard-row account-row row">

        <style>

        </style>

          <!-- Nav tabs -->
          <div class="dash-wrapper clearfix">
            <div class="dash-card">
              <h3>Account Details</h3>
            </div>
            <br/>
            <p>Your account details are under the medium you used for payment.</p>
            <br/>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h3 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 24px;" >
                      <i class="fa fa-money" style="margin-right: 15px;"></i>Paid with Credit Card</a> <i class="fa fa-caret-down" style="float: right;"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <div class="col-xs-12">
                        <h3>Credit Card Subscription Details</h3>
                        <?php echo do_shortcode( '[subscription_details]' ); ?>
                    </div>
                    <div class="col-xs-12">
                        <h3>Updated Credit Card</h3>
                        <?php echo do_shortcode( '[rcp_update_card]' ); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <a class="h3" href="<?php echo get_site_url(); ?>/members-area/paid-with-crypto" title="Paid With Crypto">
                <i class="fa fa-bitcoin" style="margin-right: 15px;"></i> Paid With Cryptocurrency</a>
            </div>

          </div>

	    </div><!-- end of <div id="account" -->

			<div class="terms-of-service-row row" style="margin-top: 15px;">
				<p class="text-center" >As a member you agree to <span class="show-terms" data-toggle="tooltip" data-placement="top" title="Show Terms" style="cursor: pointer;" >terms of use.</span></p>
			</div>

		</div><!--/.col-xs-12.col-sm-9-->

	</div><!--/row-->

	<?php get_template_part('members-area-parts/modals'); ?>


</div>

<script>
/* Functions
* ===================== ===================== =====================*/
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
})
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
function getSectionQuery() {
	var activeSection = getParameterByName('section');
	if ( activeSection !== null ) {
		jQuery('.dashboard-nav-group .list-group-item').each( function() {
			if ( activeSection == jQuery(this).attr('tab') ) {
				alert('test');
			}
		});
	}
}
function loadMembersAreaInit() {
	// getSectionQuery();
}
function loadChartsSection() {
	jQuery('.charts-loader-wrapper').hide();
	jQuery('.crypto-charts-col').fadeIn(1500);
}
/* Document Ready
* ===================== ===================== =====================*/
jQuery(document).ready(function () {
	loadMembersAreaInit();
});
/* Window Ready
* ===================== ===================== =====================*/
jQuery(window).ready(function () {
	loadChartsSection();
});
/* Scroll
* ===================== ===================== =====================*/
jQuery(window).scroll(function(){
	if ( jQuery(this).scrollTop() >= 354 ) {
	    jQuery(".toggle-members-area-btn").addClass("toggle-fixed");
	} else {
	    jQuery(".toggle-members-area-btn").removeClass("toggle-fixed");
	}
});
/* Click
* ===================== ===================== =====================*/
jQuery('[data-toggle="offcanvas"]').on('click', function () {
	jQuery('.row-offcanvas').toggleClass('active');
});
jQuery('.toggle-members-area-btn').on('click', function() {
	if ( jQuery(this).children('.fa').hasClass('fa-angle-right') ) {
		jQuery(this).children('.fa').removeClass('fa-angle-right');
		jQuery(this).children('.fa').addClass('fa-angle-left');
	} else {
		jQuery(this).children('.fa').removeClass('fa-angle-left');
		jQuery(this).children('.fa').addClass('fa-angle-right');
	}
});
jQuery('.dashboard-nav-group a').on('click', function() {
	if ( ! jQuery(this).hasClass('active') && jQuery(this).attr('tab') != 'podcasts' && jQuery(this).attr('tab') != 'logout'  ) {
		// var href = jQuery(this).attr('href').substr(1);
		var tab = jQuery(this).attr('tab');
		jQuery('.dashboard-nav-group a, .dashboard-row').removeClass('active');
		jQuery(this).addClass('active');
		jQuery('#' + tab).addClass('active');

		vidRescale('responsive-video-tutorial, .responsive-video-conference');
		// console.log("Window width:". window.innerWidth);
		if ( window.width < 768 ) {
			jQuery( '.row-offcanvas' ).removeClass('active');
		}
	}
});
jQuery('.notice .notice-dismiss').on('click', function() {
	jQuery(this).parent().fadeOut(2500);
});
jQuery('.show-contact-form-modal').on('click', function() {
	// jQuery("#myModal").modal();
	jQuery('#members-area-contact-modal').modal('show')
});
jQuery('.show-terms').on('click', function() {
	jQuery('#terms-modal').modal('show')
});
</script>
<script>
function vidRescale(e){
  /* aspectRatio = 16:9 */
  var aspectRatioW = 16;
  var aspectRatioH = 9;
  jQuery(e).attr('width', '100%');
  var w = jQuery(e).width();
  var h = (w*aspectRatioH)/aspectRatioW;
  jQuery(e).height(h);
}
/* Function Calls */
jQuery(window).on('load resize', function(){
  vidRescale('responsive-video-tutorial, .responsive-video-conference');
});
</script>
