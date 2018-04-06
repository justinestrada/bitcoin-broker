<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bitcoin_broker
 */

get_header(); ?>
<div class="outer-row row clearfix">
  <div class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'archive-navigation'); ?>

      	<?php if ( have_posts() ) { ?>
          <section class="section-page">
            <div class="container">
              <div class="content-col col-xs-12">
                <?php printf( esc_html__( 'Search Results for: %s', 'bitcoin_broker' ), '<span>' . get_search_query() . '</span>' ); ?>
              </div><!-- end of <div class="content-col -->
            </div>
          </section><!-- end of <section class="section-page"> -->

          <div class="blog-page-container container">
            <div class="blog-posts-col col-xs-12 col-sm-7 clearfix">

          <?php while( have_posts() ): the_post(); ?>
            <?php get_template_part('template-parts/content', 'section-single-posts'); ?> 
          <?php endwhile;

      	} else {

      		get_template_part( 'template-parts/content', 'none' );

      	} ?>
            </div><!-- end of <div class="blog-wrapper clearfix"> -->
            <div class="blog-sidebar-widgets-col col-xs-12 col-sm-5">
              
                <?php dynamic_sidebar('post-sidebar-widget'); ?>
              </div>
            </div><!-- end of <div class="blog-page-container container"> -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?>

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
