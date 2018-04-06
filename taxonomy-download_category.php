<?php
/**
 * The template for displaying taxonomy download category pages
 *
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); ?>
<div class="outer-row row clearfix">
  <div class="taxonomy-download-category-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'taxonomy-download-cat-navigation'); ?>

    <div class="products-wrapper clearfix">
        <?php get_template_part('template-parts/content', 'section-taxonomy-downloads-cat'); ?>
    </div><!-- end of <div class="products-wrapper -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?> 

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
