<?php
/**
 * Custom template for displaying the page with right sidebar
 *
 * Template Name: Page with Right Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); ?>

<div class="outer-row row clearfix">
  <div class="modeling-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">
      <div class="container">
        
        <div class="content-col col-xs-12 col-sm-7">
          <?php while( have_posts() ): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div><!-- end of <div class="content-col -->

        <div class="page-sidebar-widgets-col col-xs-12 col-sm-5">
          <?php dynamic_sidebar('post-sidebar-widget'); ?>
        </div>

      </div>
    </section><!-- end of <section class="section-page"> -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?>

    </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
