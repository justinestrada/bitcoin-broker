<footer id="footer-second-row" class="footer-second-row">
  <div class="footer-container container">
    <div class="footer-menu-col col-xs-12 col-sm-6">

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
<!--     <div class="footer-social-col col-xs-12 col-sm-6 text-center sm-text-right">
		<a href="https://www.facebook.com/kingblessdotcom/?ref=aymt_homepage_panel" title="<?php bloginfo('title'); ?> Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/KingBlessDotCom" title="<?php bloginfo('title'); ?> Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
		<a href="https://www.youtube.com/channel/UCUtkyPjTdm7qZMNhlEw9CEg" title="<?php bloginfo('title'); ?> YouTube" target="_blank"><i class="fa fa-youtube"></i></a>
		<a href="https://www.instagram.com/kingblessdotcom/" title="<?php bloginfo('title'); ?> Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
    </div>
 -->  </div><!-- end of <div class="footer-container"> -->
</footer>