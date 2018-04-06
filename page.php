<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */

get_header(); ?>
<div class="outer-row row clearfix">
  <div class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">
      <div class="container">
        <div class="content-col col-xs-12">
          <?php while( have_posts() ): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div><!-- end of <div class="content-col -->
      </div>
    </section><!-- end of <section class="section-page"> -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?>

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
