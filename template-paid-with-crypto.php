<?php
/**
 * Custom template for displaying the page with right sidebar
 *
 * Template Name: Paid With Crypto
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
section.section-page {
    background: #f5f5f5;
    margin-top: 0;
}
.dash-card {
    background: linear-gradient(60deg, #f7931a, #ff0000);
    position: relative;
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
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #c7c7c7;
    margin: 0 15px;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    background: #fff;
    margin-top: 45px;
}
.back-to-members-area-btn {
  display: block;
  width: 100%;
  background: #444;
  color: #fff;
  border-radius: 5px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
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
table {
    width: 100%;    margin-bottom: 15px;
}
table thead tr th,
table tbody tr td {
    border: 1px solid #c7c7c7;
    padding: 5px;
}
</style>
<style>
.woocommerce-account .woocommerce-MyAccount-navigation ul {
    padding: 0;
    margin: 0;
}
.woocommerce-MyAccount-navigation li {
  margin: 0;
    line-height: 32px;
    display: block;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    padding: 5px;
}
.woocommerce-MyAccount-navigation li a {
    color: #444;
    display: block;
}
.woocommerce-MyAccount-navigation li a:focus,
.woocommerce-MyAccount-navigation li a:hover {
    color: #555;
    text-decoration: none;
    background-color: #f5f5f5;
}
.woocommerce-MyAccount-navigation li.is-active {
    cursor: default;
    box-shadow: 0 12px 20px -10px rgba(255, 165, 0, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(255, 165, 0, 0.2);
}
.woocommerce-MyAccount-navigation li.is-active a {
    cursor: default;
}
.woocommerce-MyAccount-navigation li.is-active a {
    color: #fff;
}
.woocommerce-MyAccount-navigation li.is-active,
.woocommerce-MyAccount-navigation li.is-active:hover,
.woocommerce-MyAccount-navigation li.is-active:focus {
    background-color: #f7931a;
    border-color: #f7931a;
}
.woocommerce form .form-row input.input-text {
    border-radius: 5px;
    border: 1px solid #c7c7c7;
    padding: 5px;
    padding-left: 15px;
}
@media (min=width: 768px) {
    .woocommerce-account .woocommerce-MyAccount-navigation {
        box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }
    .woocommerce-account .woocommerce-MyAccount-navigation ul {
        padding: 0;
        margin: 15px;
    }
}
.footer-logo {
    max-width: 200px !important;
}
.woocommerce-MyAccount-navigation li a:focus, .woocommerce-MyAccount-navigation li a:hover {
    text-decoration: none;
    background-color: transparent;
}
</style>

<div class="outer-row row clearfix">
  <div class="get-paid-with-crypto-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <div class="container">
      <div class="row">
        <a href="https://krbecrypto.com/members-area" class="back-to-members-area-btn" title="Back to Members Area"><i class="fa fa-angle-left" style="float: left;"></i>  Back To Members Area</a>
        <div class="dash-wrapper clearfix">
            <div class="dash-card">
                <h3 style="color: #fff;"><?php the_title(); ?></h3>
            </div>
            <div class="col-xs-12" >

              <?php the_content(); ?>
            </div>
        </div>
      </div>
    </div>

    <?php // get_template_part('template-parts/section', 'email-sub'); ?>

    </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
