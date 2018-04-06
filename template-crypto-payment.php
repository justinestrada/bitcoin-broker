<?php
/**
* Custom template for displaying the members page
*
* Template Name: Crypto Payment
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
</style>
<div class="outer-row row clearfix">
  <div class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">
      <div class="container">
        <div class="content-col col-xs-12">
          <?php while( have_posts() ): the_post(); ?>

						<h3>Congratulations you have chosen to pay for KRBE Digital Assets Group with Cryptocurrency.</h3>

						<b>Product selected:</b>
						<?php
						$item_added = $_GET["notice"];
						if ( $item_added == 'monthly_package_selected_return' ) {
							?>
							<h3>Monthly Premium Package - $49.00 - 1 Month</h3>
							<p>All Access Premium Package. Access exclusive KRBE Crypto Group content! Billed Monthly</p>
						<?php } else if ( $item_added == 'annual_package_selected_return' )  { ?>
							<h3>Annual Premium Package - $499.00 - 1 Year</h3>
							<p>All Access Premium Package. Access exclusive KRBE Crypto Group content! Billed Annually</p>
						<?php } ?>

						<ol>
							<li>Click the checkout link below to pay for your KRBE Digital Assets Group membership.</li>
							<li>You will receive a follow up email within 24hours from KRBE Crypto staff with your membership details.</li>
						</ol>


          	<a href="https://www.coinpayments.net/index.php?cmd=_cart" target="_blank" class="checkout-btn" title="Checkout Now">Checkout Now</a>

          <?php endwhile; ?>
        </div><!-- end of <div class="content-col -->
      </div>
    </section><!-- end of <section class="section-page"> -->

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();










