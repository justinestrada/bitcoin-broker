<?php
/**
 * The template for displaying all single download posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bitcoin_broker
 */
get_header(); ?>
<div class="outer-row row clearfix">
  <div class="single-download-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'single-navigation'); ?> 

    <section class="section-single-download">
      <div class="container">
        <div class="item-details-row row">
          <?php while( have_posts() ): the_post(); ?>
              <div id="content-id-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php get_template_part( 'template-parts/content', 'single-download-details' ); ?>
              </div><!-- end of <div class="content-wrapper -->
          <?php endwhile; ?>
          <!-- Create an author loop here to show more products by the same author -->
        </div><!-- end of <div class="item-details-row row -->
      </div>
    </section>

    <?php get_template_part('template-parts/section', 'email-sub'); ?> 

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();