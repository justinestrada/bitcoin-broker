<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
/* Set Current User Variables 
=========================================== */
if (is_user_logged_in()): 
  global $current_user;
  get_currentuserinfo();
  $userName = $current_user->user_login;
  $userAvatar = get_avatar( $current_user->ID , 24); ?>
  <header class="header-user-row row">
    <div class="header-user-container container padding-0">
      <div class="header-user-options-col col-xs-offset-8 col-xs-4">
        <?php echo $userAvatar; ?>
        <a class="header-user-btn logout-btn" href="<?php echo get_site_url(); ?>/logout" title="Logout"><i class="fa fa-sign-out"></i>
      </div>
    </div><!-- end of <div class="header-container -->
  </header>
<?php else: ?>
  <header class="header-user-row row">
    <div class="header-user-container container padding-0">
      <div class="header-user-options-col col-xs-offset-8 col-xs-4">
        <i class="fa fa-user"></i>
        <a class="header-user-btn login-btn" href="<?php echo get_site_url(); ?>/login" title="login"><i class="fa fa-key"></i>
      </div>
    </div><!-- end of <div class="header-container -->
  </header>
<?php endif; /* end of if (is_user_logged_in()): */ ?>