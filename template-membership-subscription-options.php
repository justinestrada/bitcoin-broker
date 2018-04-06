<?php
/**
 * Custom template for displaying the page with right sidebar
 *
 * Template Name: Membership Subscription Options
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
.register-form-row {
    background: #f5f5f5;
    /* display: none; */
    padding: 50px 0;
    margin-top: 0;
    background-image: url( "https://krbecrypto.com/wp-content/uploads/2018/02/bitcoins-white.jpg" );
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.register-form-col {
	margin-top: 50px;
}
.register-form-col .rcp_form {
    margin: 0 auto;
    width: 100%;
    background: #fff;
    padding: 15px !important;
    border-radius: 5px;
    box-shadow: 0 1px 2px 0 rgba(86,94,102,.35);
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.register-form-col .nav-tabs>li:first-child {
    border-top-left-radius: 5px;
}
.register-form-col .nav-tabs>li:last-child {
    border-top-left-radius: 5px;
}
.register-form-col .nav-tabs>li>a {
    padding: 15px;
    font-weight: bold;
}
.register-form-col .rcp_header {
    display: none;
}
.register-form-col .nav-tabs li {
    width: 50%;
    background: #f5f5f5;
}
.rcp_registration_total_details.rcp-table {
    width: 100%;
    border-radius: 5px;
    background: #f5f5f5;
    margin-bottom: 25px;
}
.rcp-table tr th, .rcp-table tr td {
    padding: 5px;
}
.rcp_registration_total_details tr th:first-child,
.rcp_registration_total_details tr td:first-child {
    text-align: left;
    padding-left: 15px;
}
.rcp_registration_total_details tr th:last-child,
.rcp_registration_total_details tr td:last-child {
    text-align: right;
    padding-right: 15px;
}
.rcp_form .rcp_gateway_stripe_fields input {
    width: 100%;
}
#rcp_registration_form input {
    width: 100%;
    border: 1px solid #c7c7c7;
    border-radius: 5px;
}
form select {
    border: 1px solid #c7c7c7;
    border-radius: 0;
    font-size: 26px;
    background: #fff;
}
.rcp_form input#rcp_submit {
  max-width: none;
  min-height: 40px;
  font-size: 16px;
  padding: 15px;
  font-size: 24px;
  font-weight: bold;
  text-transform: uppercase;
  border: none;
  border: 1px solid rgba(0,0,0,0.2);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}
.rcp_order_summary_total {
    background: #f5f5f5;
    padding: 15px;
    border-radius: 5px;
}
.rcp_subscription_level {
  display: inline-block;
  width: 100%;
  float: left;
}
.rcp_subscription_level label {
  display: block;
  border: 1px solid #c7c7c7;
  background: #f5f5f5;
  border-radius: 5px;
  padding: 15px 5px;
  margin: 5px;
  text-align: center;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}
.rcp_subscription_level.selected label {
  background: #f7921a;
  border: 1px solid #f7921a;
  color: #fff;
}
.rcp_subscription_level.selected label {
  background: #f7921a;
  border: 1px solid #f7921a;
  color: #fff;
}
.rcp_subscription_level label .rcp_level_description {
  font-size: 16px;     border: none;
}
.rcp_subscription_level input[type="radio"] {
  display: none;
}
.pay-with-crypto-wrapper {

}
.pay-with-crypto-wrapper .pay-with-crypto-inner-wrap {
  border: 1px solid #c7c7c7;
  background: #f5f5f5;
  border-radius: 5px;
  padding: 15px 5px;
  margin: 25px 5px;
  text-align: center;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}
.product .button.add_to_cart_button {
  display: block;
  color: #fff;
  min-height: 40px;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  background: linear-gradient(50deg, #f7931a, #ff0000);
  max-width: none;
  min-height: 40px;
  font-size: 16px;
  padding: 15px 0;
  font-size: 24px;
  font-weight: bold;
  text-transform: uppercase;
  border: none;
  border: 1px solid rgba(0,0,0,0.2);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  background: linear-gradient(50deg, #f7931a, #ff0000);
}
.product .button.add_to_cart_button:hover, .product .button.add_to_cart_button:focus {
  background: #444;
  border-color: #444;
  color: #fff;
}
.product .button.add_to_cart_button:hover,
.product .button.add_to_cart_button:focus {
  background: linear-gradient(50deg, #f7931a, #ff0000);
  border: 1px solid rgba(0,0,0,0.2);
}
#rcp_auto_renew_wrap input#rcp_auto_renew {
  width: 16px;
  height: 16px;
  margin: 0;
  position: absolute;
}
.register-wrapper {
  background: #fff;
  padding: 15px;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}
.register-form-col p.rcp_subscription_message {
  display: none;
}
.dont-miss-out-separator-col {
  margin-top: 0;
}
#rcp_auto_renew_wrap label[for="rcp_auto_renew"] {
  position: relative;
  top: 10px;
  border-bottom: 5px solid #f78617;
  left: 20px;
  display: inline-block;
}
.rcp_subscription_level .rcp_subscription_level_name {
  display: block;
  font-size: 20px;
  font-weight: bold;
}
.rcp_subscription_level .rcp_separator {
  display: none;
}
.rcp_subscription_level .rcp_price {
  display: block;
}
p#rcp_auto_renew_wrap {
  margin-bottom: 30px;
  margin-top: 10px;
}
@media (min-width: 768px) {
  .rcp_subscription_level {
    width: 50%;
    display: inline-block;
    float: left;
  }
  .dont-miss-out-separator-col {
    margin-top: 50px;
  }
}
.pay-with-crypto-inner-wrap .product {
    display: block;
    width: 100% !important;
    margin: 0 !important;
}
.product a.woocommerce-LoopProduct-link {
    display: none;
}
.section-page {
    margin-top: 0;
}
.footer-wrapper {
    margin-top: 0;
}
.back-to-members-area-btn {
  display: block;
  width: 100%;
  background: #444;
  color: #fff;
  border-radius: 5px;
  border-top-left-radius: 0;
  border-top-left-radius: 0;
  padding: 15px;
  min-height: 40px;
  text-align: center;
  margin-bottom: 15px;
  -webkit-box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
  box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
}
.back-to-members-area-btn:hover,
.back-to-members-area-btn:focus {
  color: #fff;
}
</style>

<div class="outer-row row clearfix">
  <div class="modeling-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">

      <?php while( have_posts() ): the_post(); ?>

        <div class="container-fluid">

          <div id="register-form-row" class="register-form-row row">
            <?php if ( is_user_logged_in() ) { ?>
              <div class="container">
                <div class="row">
                  <a href="https://krbecrypto.com/members-area" class="back-to-members-area-btn" title="Back to Members Area"><i class="fa fa-angle-left" style="float: left;"></i> Back To Members Area</a>
                </div>
              </div>
            <?php } ?>
            <?php // the_content(); ?>
            <?php get_template_part('register-parts/payment', 'options'); ?>
          </div>

        </div>

      <?php endwhile; ?>

    </section><!-- end of <section class="section-page"> -->

    <?php // get_template_part('template-parts/section', 'email-sub'); ?>

    </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
