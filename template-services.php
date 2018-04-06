<?php
/**
* Custom template for displaying the home page
*
* Template Name: Services
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package bitcoin_broker
*/
get_header(); ?>
<style>.services-row .pricing-package-wrapper {
  border-radius: 5px;
  background: #444;
  width: 100%;
  max-width: 350px;
  margin: 0 auto;
      margin-bottom: 30px;
}
.services-row .pricing-package-wrapper .pricing-package-title {
  padding: 15px;
  color: #fff;
}
.services-row .pricing-package-wrapper .pricing-package-desc {
  padding: 15px;
  background: #fff;
  color: #444;
    border-left: 5px solid #444;
    border-right: 5px solid #444;
}
.services-row .pricing-package-wrapper .pricing-package-icon-wrapper {
  text-align: center;
  padding: 15px;
  background: rgba( 255, 255, 255, 0.15);
  font-size: 24px;
  color: #fff;
}
.services-row .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  color: #fff;
  background: #f7931a;
  display: block;
  text-align: center;
  width: 100%;
  padding: 15px;
  font-weight: bold;
  font-size: 24px;
}
.book-row {
  display: none;
}
@media (min-width: 768px){
  .services-row .pricing-package-wrapper {
    margin-bottom: 0;
  }

}
</style>

<div class="outer-row row clearfix">
  <div class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">
      <div class="container">
        <div class="content-col">

          <?php while( have_posts() ): the_post(); ?>

            <?php // the_content(); ?>

            <div class="row" style="margin-bottom: 75px;">
              <div class="col-xs-12 col-sm-4">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/bigstock--line-chart.png" style="width: 100%; max-width: 250px; margin: 0 auto;"/>
              </div>
              <div class="col-xs-12 col-sm-8">
                <p>Whether you are looking to incorporate Bitcoin into your business, hold a group seminar or want details on the digital economy, we are here to provide answers to your questions.</p>
                <a href="https://bitcoinzay.shop/collections/frontpage/products/bitcoin-starter-guide-2-0" target="_blank" style="color: #f7931a;"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-certificate fa-stack-2x"></i><i class="fa fa-check fa-stack-1x" style="color: #fff;"></i></span> <?php _e( 'Get a KRBE approved Bitcoin Started Guide 2.0'); ?></a>
              </div>
            </div>

            <div class="services-row row" style="margin-bottom: 75px;">
              <div class="col-xs-12 col-sm-6">

                <div class="pricing-package-wrapper">
                  <div class="pricing-package-title">
                    <h3 class="text-center" style="margin-bottom: 25px;">One-on-One Consultation</h3>                       </div>
                  <div class="pricing-package-desc">
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-check"></i> General Bitcoin information session</li>
                      <li><i class="fa-li fa fa-check"></i> Wallet set-up and creation (Cold storage and Multi-signature wallets)</li>
                      <li><i class="fa-li fa fa-check"></i> Payment Demo</li>
                      <li><i class="fa-li fa fa-check"></i> Legal Information</li>					  					  <li><i class="fa-li fa fa-check"></i> ICO and Token Due Diligence</li>
                      <li><i class="fa-li fa fa-check"></i> FREE Bitcoin Starter Guide 2.0</li>
                    </ul>      
                  </div>
                  <div class="pricing-package-icon-wrapper">
                    <!-- <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i style="color: #fff;" class="fa fa-university fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <i>Contact for Rates</i>
                  </div>
                  <a href="#book-now-consulting-form" class="smooth-scroll btn buy-service-btn">Get Started</a>
                </div>

              </div>
              <div class="col-xs-12 col-sm-6">

                <div class="pricing-package-wrapper">
                  <div class="pricing-package-title">
                    <h3 class="text-center" style="margin-bottom: 25px;">Group Seminar</h3>
                  </div>
                  <div class="pricing-package-desc">
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-check"></i> General Bitcoin information session</li>
                      <li><i class="fa-li fa fa-check"></i> Payment demo</li>
                      <li><i class="fa-li fa fa-check"></i> International news regarding Bitcoin and cryptocurrency</li>
                      <li><i class="fa-li fa fa-check"></i> Investment figures and future growth</li>
                      <li><i class="fa-li fa fa-check"></i> Blockchain innovations</li>
                      <li><i class="fa-li fa fa-check"></i> FREE Paper Wallet</li>
                      <li><i class="fa-li fa fa-check"></i> 20% Discount on Bitcoin Starter Guide 2.0</li>
                      <li><i class="fa-li fa fa-check"></i> Bitcoin Giveaway</li>
                    </ul>
                  </div>
                  <div class="pricing-package-icon-wrapper">
                    <!-- <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i style="color: #fff;" class="fa fa-university fa-stack-1x fa-inverse"></i>
                    </span> -->          
                    <i>Contact for Rates</i>
                  </div>
                  <a href="#book-now-consulting-form" class="smooth-scroll btn buy-service-btn">Get Started</a>
                </div>

              </div>
              <!-- <div class="col-xs-12 col-sm-4">
                <h3>Products</h3>
                <p>Bitcoin Starter Guide 2.0</p>
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/products/bsg_cover.png" style="width: 100%; max-width: 250px; display: block;"/>
                <a class="btn" href="https://bitcoinzay.shop/" target="_blank"><?php _e( 'Buy'); ?></a>
              </div> -->
            </div><!-- end of <div class="row"> -->

            <div id="book-now-consulting-form" class="book-row row">
              <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                <div class="consulting-form-wrapper wrapper">
                  <?php echo do_shortcode( '[ninja_form id=2]' ); ?>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

        </div><!-- end of <div class="content-col -->
      </div>
    </section><!-- end of <section class="section-page"> -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?>

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<script>
jQuery( '.buy-service-btn' ).on( 'click', function() {
  jQuery( '.book-row' ).slideDown();
});
</script>

<?php get_footer();