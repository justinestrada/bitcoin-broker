<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bitcoin_broker
 */
get_header(); ?>
<div class="outer-row row clearfix">
  <div class="single-post-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'single-navigation'); ?> 

    <section class="section-single-post">
      <div class="container">

          <div class="single-post-col col-xs-12 col-sm-8 clearfix">
            <?php while( have_posts() ): the_post(); ?>
                <div id="content-id-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <?php get_template_part( 'template-parts/content', 'single' ); ?>
                </div><!-- end of <div class="content-wrapper -->
            <?php endwhile; ?>
          </div><!-- end of <div class="single-post-col -->
          
          <div class="single-post-sidebar-widgets-col col-xs-12 col-sm-4">
            <?php dynamic_sidebar('post-sidebar-widget'); ?>
            <?php get_template_part('template-parts/content', 'single-related-posts'); ?>
          </div>

      </div>
    </section>

    <?php get_template_part('template-parts/section', 'email-sub'); ?> 

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();