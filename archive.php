<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */

get_header(); ?>
<div class="outer-row row clearfix">
  <div class="archive-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'archive-navigation'); ?>

    <div class="blog-page-container container">
      <div class="blog-posts-col col-xs-12 col-sm-7 clearfix">
        <?php  while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('template-parts/content', 'section-single-posts'); ?>
        
        <?php endwhile; ?>

      </div><!-- end of <div class="blog-wrapper clearfix"> -->
      <div class="blog-sidebar-widgets-col col-xs-12 col-sm-5">
        <?php dynamic_sidebar('post-sidebar-widget'); ?>
      </div>
    </div><!-- end of <div class="blog-page-container container"> -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?>

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->
<?php get_footer();