<style>
@media (min-width: 768px) {
  .sm-margin-left {
    margin-left: 0;
  }  
}
</style>
<footer id="footer-first-row" class="footer-first-row">
  <div class="footer-container container">

    <div class="footer-social-col footer-one-col col-xs-12 col-sm-8 text-center xs-text-center sm-text-left">
      <div class="footer-social-wrapper row">
        <a href="https://www.facebook.com/krbecrypto/" title="<?php bloginfo('title'); ?> Facebook" target="_blank" class="sm-margin-left"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/krbecrypto" title="<?php bloginfo('title'); ?> Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UCJ0QV-XhATeq4-hTgqMz1TQ" title="<?php bloginfo('title'); ?> YouTube" target="_blank"><i class="fa fa-youtube"></i></a>
        <a href="https://www.instagram.com/krbecrypto/" title="<?php bloginfo('title'); ?> Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
      </div>
      <div class="footer-menu-wrapper">
      <?php wp_nav_menu( array(
          'menu'              => 'footer-menu',
          'theme_location'    => 'footer-menu',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'footer-menu-row row',
          'container_id'      => '',
          'menu_class'        => 'footer-menu-ul',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
      ); ?>
      </div>  
      <div class="footer-company-name-row row">
        <?php echo date('Y'); ?> &copy; <?php bloginfo('name'); ?><small>&trade;</small><?php _e(' Digital Assets Group'); ?>
      </div> 
    </div>
    <div class="footer-company-activity-col col-xs-12 col-sm-4">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo/KRBE-digital-assets-group-logo-white.png" alt="King Bless Footer Logo" class="footer-logo"/>
    </div>
  </div><!-- end of <div class="footer-container"> -->
</footer>