<?php
/**
* Custom template for displaying the members page
*
* Template Name: Members Area
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package bitcoin_broker
*/
get_header(); ?>
<style>
.section-feat-img::before {
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: block;
    position: absolute;
    top: 0;
}
.footer-wrapper {
    margin-top: 75px;
}
@media (max-width: 767px) {
    .section-page {
        margin-top: 0;
    }   
}
.dash-card {
    background: linear-gradient(60deg, #f7931a, #ff0000);
    position: absolute;
    min-height: 1px;
    padding: 5px;
    color: #fff;
    border-radius: 5px;
    text-align: center;
    top: -40px;
    width: 100%;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    margin-top: 30px;
    max-width: 250px;
    margin: 0 auto;
    left: 0;
    right: 0;
}
.dash-wrapper {
    padding: 30px 15px 15px 15px;
    border-radius: 5px;
    border: 1px solid #c7c7c7;
    margin: 0 15px;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    background: #fff;
    margin-top: 45px;
    margin-bottom: 30px;
    position: relative;
}
</style>

<div class="outer-wrapper clearfix">
  <div class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">

        <?php if ( is_user_logged_in() ) {

            $member = new RCP_Member( get_current_user_id() );
            // $member = new RCP_Member( 1 );
            $status = $member->get_status();
            // active, expired, cancelled, pending, free
            if ($status == "free" || $status == "expired" || $status == "cancelled" ) { ?>

                <div class="container-fluid">
                  <div class="container">
                      <div class="row" style="margin-top: 25px;">
                        <div class="dash-wrapper clearfix">
                            <div class="dash-card">
                                <h3 style="color: #fff;">Membership Status</h3>
                            </div>
                            <div class="col-xs-12" >
                              <?php if ($status == "free") { ?>
                                <div class="alert alert-warning" role="alert">
                                  <i class="fa fa-exclamation-circle"></i> You are a registered user but not a member, yet.
                                </div>
                                <p>If you've made a purchase with cryptocurrency your purchase is awaiting verification. Please allow us 12 hours to verify your purchase and make the adjustments to your membership. We will notify you soon.</p>
                                <p>If you've just registered and abandoned the checkout process, select one of the payment options below or contact krbe@krbecrypto.com for help.</p>
                              <?php } else if ($status == "expired" || $status == "cancelled") { ?>
                                <div class="alert alert-danger" role="alert">
                                  <i class="fa fa-exclamation-circle"></i> Your membership is <?php echo $status; ?>.
                                </div>
                                <p>Renew your membership, select a payment option below.</p>
                              <?php } ?>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="whats-included-row row" style="background: #fff;">
                    <div class="col-xs-12 text-center" style="padding: 50px 0 50px;">
                      <h3>Payment Options</h3>
                      <p><i>Your KRBE Digital Assets Membership Awaits</i></p>
                      <img src="https://10x.grantcardone.com/hosted/images/70/d7c1606d6211e79ddc13ee91fe3967/cuspecial0617-arrow-down.png" alt="Crypto Members Area" style="width: 100%; max-width: 50px; margin: 0 auto; display: block;">
                    </div>
                  </div>
                </div>

                <div class="container-fluid">
                    <div id="register-form-row" class="register-form-row row">
                        <div class="container">
                            <div class="row">

                              <?php get_template_part('template-parts/section', 'payment-options-css'); ?>
                              <?php get_template_part('register-parts/payment', 'options'); ?>

                            </div>
                        </div>
                    </div>
                </div>

            <?php } else if ($status == "pending")  { ?>
                <div class="container-fluid"><div class="row">
                  <div class="container"><div class="row">
                    <div class="dash-wrapper clearfix">
                        <div class="dash-card">
                            <h3 style="color: #fff;">Membership Status</h3>
                        </div>
                        <div class="col-xs-12" >
                            <div class="alert alert-warning" role="alert">
                              <i class="fa fa-exclamation-circle"></i> Your membership is pending.
                            </div>
                            <p>Contact krbe@krbecrypto.com for help.</p>
                        </div>
                    </div>
                  </div></div>
                </div></div>
            <?php } else if ($status == "active")  {
                get_template_part('template-parts/section', 'rcp-members-area'); 
            } ?>

        <?php }
        // is not logged in
        else { ?>

            <?php get_template_part('template-parts/section', 'login'); ?>

            <?php get_template_part('template-parts/section', 'splash-divider'); ?>
        <?php } ?>
    </section><!-- end of <section class="section-page"> -->

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->


<?php get_footer();