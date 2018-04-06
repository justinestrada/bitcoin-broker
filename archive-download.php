<?php
/**
 * The template for displaying archive download pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); ?>
<div class="outer-row row clearfix">
  <div class="archive-download-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'archive-download-navigation'); ?>

    <div class="products-wrapper clearfix">
        <?php get_template_part('template-parts/content', 'section-downloads'); ?>
    </div><!-- end of <div class="products-wrapper -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?>

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();