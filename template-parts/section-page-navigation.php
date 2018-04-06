<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
?>
<section class="section-page-navigation section-body clearfix">
  <div class="container">
    <?php if (is_page()): ?>

      <div class="col-xs-12">
          <h2 class="breadcrumb-title"><?php _e('Your favorite place to Learn Leadership Skills.'); ?></h2>
      </div>

    <?php elseif (is_home()): ?>

      <div class="breadcrumb-col col-xs-12">
        <div class="breadcrumb-wrapper clearfix"><?php echo do_shortcode('[breadcrumb]'); ?></div>
        <h2 class="breadcrumb-title"><?php _e('Read powerful knowledge about leadership.'); ?></h2>	 
      </div><!-- end of <div class="breadcrumb-col col-xs-12"> -->

      <div class="search-col col-xs-12 col-sm-5">
        <form id="search-all-sauces" class="row" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
            <div class="search-form-inner-col col-xs-12">
                <input name="s" id="s" class="form-control input-search" type="text" value="" placeholder="<?php _e('Search Blog'); ?>" />
                <button id="" class="btn-search" type="submit"  value="Search"><i class="fa fa-search"></i></button>
            </div>
        </form><!-- end of <form id="search-all-sauces" -->
      </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
      
     <?php endif; ?>

  </div>
</section><!-- end of <section class="section-page-navigation -->