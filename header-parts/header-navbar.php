<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
?>

<header class="header-row row">
  <div class="header-container lg-container padding-0">
    <div class="header-logo-col col-xs-8 col-sm-4">
      <a href="<?php echo get_site_url(); ?>" title="Home" class="header-site-logo-anchor">
        <?php if ( is_page_template( 'template-home.php' ) ) { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo/KRBE-digital-assets-group-logo.png" class="header-site-logo-icon">
        <?php } else { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo/KRBE-digital-assets-group-logo.png" class="header-site-logo-icon hidden-sm hidden-md hidden-lg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo/KRBE-digital-assets-group-logo-white.png" class="header-site-logo-icon hidden-xs">
        <?php } ?>
        <h1 style="display: none;"><?php bloginfo('name'); ?></h1>
      </a>
    </div>
    <div class="header-menu-col hidden-xs col-sm-6 padding-0" style="position: relative;">
      <div class="header-menu-wrapper">
        <?php
		wp_nav_menu( array(
            'menu'              => 'header-menu',
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'header-menu-row row',
            'container_id'      => '',
            'menu_class'        => 'header-menu-ul create-dropdown-from-this-menu',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        ); ?>
        <!--<div class="header-menu-row row">
          <ul id="menu-main-menu" class="header-menu-ul create-dropdown-from-this-menu">
            <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4 active"><a title="Home" href="<?php echo get_site_url(); ?>/home"><?php _e( 'Home' ); ?></a></li>
            <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8"><a title="Services" href="<?php echo get_site_url(); ?>/services" ><?php _e( 'Services' ); ?></a></li>
            <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a title="About" href="<?php echo get_site_url(); ?>/about" ><?php _e( 'About' ); ?></a></li>
            <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a title="Watch LIVE" href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#watch-live" style="background: #f00; border: #f00; color: #fff; padding: 5px;"><i class="fa fa-youtube-play"></i> Watch LIVE</a></li>
          </ul>
        </div>-->
		</div></div>
<div class="hidden-xs col-sm-2">
            <button title="Watch LIVE" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#watch-live" style="background: #f00; border: #f00; color: #fff; padding: 5px; margin: 23px auto"><i class="fa fa-youtube-play"></i> Watch LIVE</button>
		</div>
    </div><!-- end of <div class="header-menu-col -->
    <div class="header-mobile-menu-toggle-col col-xs-4 hidden-sm hidden-md hidden-lg">
      <button type="button" class="header-dropdown-btn navbar-toggle collapsed" data-toggle="collapse" data-target="#header-dropdown-menu" aria-expanded="false">
        <span class="sr-only"><?php _e('Toggle navigation'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </div><!-- end of <div class="header-container -->
</header>

<style>
#watch-live .responsive-video {
  height: 168px;
}
@media (min-width: 768px) {
  #watch-live .responsive-video {
    height: 336px;
  }
}
@media (min-width: 992px) {
  #watch-live .responsive-video {
    height: 505px;
  }
}
@media (min-width: 992px) {
  #watch-live .responsive-video {
    height: 500px;
  }
}
</style>

<div class="modal fade" id="watch-live" tabindex="-1" role="dialog" aria-labelledby="watchlivelabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #f7931a;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="watchlivelabel" style="color: #fff;">KRBE Crypto YouTube Video</h4>
      </div>
      <div class="modal-body">
        <iframe class="responsive-video" width="100%" src="https://www.youtube.com/embed/iQp4a7YfNis" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <script src="https://apis.google.com/js/platform.js"></script>

        <div class="g-ytsubscribe" data-channelid="UCJ0QV-XhATeq4-hTgqMz1TQ" data-layout="full" data-count="default"></div>
      </div>
    </div>
  </div><!-- end of <div class="modal-dialog" -->
</div>

<script>
var channelID = "UCJ0QV-XhATeq4-hTgqMz1TQ";
jQuery.getJSON('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fwww.youtube.com%2Ffeeds%2Fvideos.xml%3Fchannel_id%3D'+channelID, function(data) {
   var link = data.items[0].link;
   var id = link.substr(link.indexOf("=")+1);
    // jQuery( "#watch-live .responsive-video" ).attr("src","https://youtube.com/embed/"+id + "?controls=0&showinfo=0&rel=0");
    jQuery( "#watch-live .responsive-video" ).attr("src","https://youtube.com/embed/"+id);
});
</script>
