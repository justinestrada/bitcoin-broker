<?php
/**
 * Custom template for displaying the home page
 *
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); ?>

<div class="outer-wrapper clearfix">
  <div id="home" class="home-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'feat-carousel'); ?>

    <?php get_template_part('template-parts/section', 'about'); ?>

    <?php get_template_part('template-parts/section', 'splash-divider'); ?>

    <?php get_template_part('template-parts/section', 'why-bitcoin'); ?>

    <?php get_template_part('template-parts/section', 'watch-us-live'); ?>

    <?php get_template_part('template-parts/section', 'email-sub'); ?> 

    <?php get_template_part('template-parts/section', 'email-sub-popup'); ?> 

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-wrapper -->

<?php get_footer();
