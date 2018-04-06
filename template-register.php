<?php
/**
* Custom template for displaying the members page
*
* Template Name: Members Area Register
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
.pay-with-crypto-inner-wrap .product {
    display: block;
    width: 100% !important;
    margin: 0 !important;
}
.product a.woocommerce-LoopProduct-link {
    display: none;
}
</style>

<div class="outer-wrapper clearfix">
  <div class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">
        <?php get_template_part('template-parts/section', 'rcp-register'); ?>
    </section><!-- end of <section class="section-page"> -->

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->


<?php get_footer();
