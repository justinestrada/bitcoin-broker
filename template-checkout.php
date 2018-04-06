<?php
/**
 * Custom template for displaying the page with right sidebar
 *
 * Template Name: Woo Checkout
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
.section-page {
  background: #f5f5f5;
  margin-top: 0;
  padding-top: 50px;
  padding-bottom: 50px;
}
.woocommerce-message {
    border-top-color: #5cb860;
}
.woocommerce-message::before {
    color: #5cb860;
}
.section-page .woocommerce {
    background: #fff;
    border-radius: 5px;
    margin-bottom: 50px;
    border: 1px solid #c7c7c7;
    box-shadow: 0 1px 2px 0 rgba(86,94,102,.35);
}
.section-page .woocommerce .woocommerce-info {
    margin: 15px;
}
.section-page .woocommerce .checkout {
    margin: 16px;
}
.woocommerce-checkout table.cart td.actions .coupon .input-text {
    border-radius: 5px;
    border: 1px solid #c7c7c7;
    min-width: 150px;
}
.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
    padding: 5px;
    border-radius: 5px;
    border: 2px solid #c7c7c7;
    font-size: 16px;
    min-height: 40px;
        padding-left: 15px;
}
.woocommerce-info {
    border-top-color: #f7921a;
}
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
    background-color: #f7921a;
    color: #fff;
}
.woocommerce-info::before {
      color: #f7921a;
}
.woocommerce #payment #place_order, .woocommerce-page #payment #place_order {
    min-height: 40px;
    font-size: 16px;
    width: 100%;
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
        background: linear-gradient(60deg, #f7931a, #ff0000);
}
.woocommerce #payment #place_order:hover,
.woocommerce-page #payment #place_order:focus {
    background: linear-gradient(60deg, #f7931a, #ff0000);
}
.woocommerce-checkout #payment div.payment_box {
    background: #5cb860;
    color: #fff;
}
.woocommerce-checkout #payment div.payment_box::before {
    border-bottom: 1em solid #5cb860;
}
.footer-wrapper {
    margin-top: 0;
}
.footer-first-row .footer-logo {
    max-width: 200px;
    margin: 0 auto;
}
.coupon input.button {
    width: 100%;
    max-width: 125px;
    display: inline-block;
    text-align: center;
}
.woocommerce table.shop_table {
    margin-bottom: 0;
}
.woocommerce form .form-row label.checkbox span, .woocommerce-page form .form-row label.checkbox span {
    position: relative;
    left: 25px;
}
.quantity input.qty {
    border: 1px solid #c7c7c7;
}
</style>

<div class="outer-row row clearfix">
  <div class="modeling-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">
      <div class="container">

        <div class="content-col col-xs-12" style="" >
          <?php while( have_posts() ): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div><!-- end of <div class="content-col -->

        <!-- <div class="page-sidebar-widgets-col col-xs-12 col-sm-5">
          <?php dynamic_sidebar('post-sidebar-widget'); ?>
        </div> -->

      </div>
    </section><!-- end of <section class="section-page"> -->

    <?php // get_template_part('template-parts/section', 'email-sub'); ?>

    </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
