<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bitcoin_broker
 */
get_header(); ?>
<div class="outer-row row clearfix">
  <div class="page-404-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-navigation'); ?>

    <section class="section-page">
      <div class="container">
        <div class="content-col col-xs-12">
          <h3><?php _e( '404 - Page Not Found', 'bitcoin_broker' ); ?></h3>
          <p><?php _e( 'Looks like this page does not exist, try one of the options below:', 'bitcoin_broker' ); ?></p>
          <div class="explore-actions-row row">

<div class="col-xs-12 col-sm-4">
	<a class="explore-action explore-action-learn" href="https://www.youtube.com/channel/UCJ0QV-XhATeq4-hTgqMz1TQ">
		<div class="explore-action-inner">
			<div class="explore-action-wrapper">
				<div class="explore-action-content">
				<h3 class="explore-action-title"><?php _e('Learn'); ?></h3>
				<p class="desc explore-action-desc">From The Professionals</p>
				</div><!-- end of <div class="explore-action-content"> -->
			</div>
		</div><!-- end of <div class="explore-action-inner"> -->
	</a><!-- end of <div class="customer -->
</div>
<div class="col-xs-12 col-sm-4">
	<a class="explore-action explore-action-join" href="<?php echo get_site_url(); ?>/join/">
		<div class="explore-action-inner">
			<div class="explore-action-wrapper">
				<div class="explore-action-content">
				<h3 class="explore-action-title"><?php _e('Access'); ?></h3>
				<p class="desc explore-action-desc">Signals, Charts, Tips, and an International Network</p>
				</div><!-- end of <div class="explore-action-content"> -->
			</div>
		</div><!-- end of <div class="explore-action-inner"> -->
	</a><!-- end of <div class="customer -->
</div>
<div class="col-xs-12 col-sm-4">
	<a class="explore-action explore-action-buy" href="https://shopkrbecrypto.com">
		<div class="explore-action-inner">
			<div class="explore-action-wrapper">
				<div class="explore-action-content">
				<h3 class="explore-action-title"><?php _e('Buy'); ?></h3>
				<p class="desc explore-action-desc">Official KRBE Crypto Products</p>
				</div><!-- end of <div class="explore-action-content"> -->
			</div>
		</div><!-- end of <div class="explore-action-inner"> -->
	</a><!-- end of <div class="customer -->
</div>

          </div>
        </div><!-- end of <div class="content-col -->
      </div>
    </section><!-- end of <section class="section-page"> -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?> 

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();