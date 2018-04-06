<?php
/**
 * Custom template for displaying the home page
 *
 * Template Name: Home w Blog Posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); ?>

<div class="outer-row row clearfix">
  <div id="home" class="home-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'feat-carousel'); ?>

    <?php get_template_part('template-parts/section', 'about'); ?>

    <?php get_template_part('template-parts/section', 'splash-divider'); ?>

    <?php get_template_part('template-parts/section', 'why-bitcoin'); ?>

    <?php get_template_part('template-parts/section', 'watch-us-live'); ?>

    <div class="blog-page-container container">
      <h3 style="text-align: center; margin-bottom: 50px;"><?php _e( 'Lastest Blog Posts' ); ?></h3>
      <?php
      $posts_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $posts_query = new WP_Query( $posts_args );
        while( $posts_query->have_posts() ): $posts_query->the_post(); ?>
          <div class="col-xs-12 col-md-4">
            <?php get_template_part('template-parts/section', 'home-single-posts'); ?> 
          </div>
        <?php endwhile; ?>
        <div class="col-xs-12">
            <a href="<?php echo get_site_url(); ?>/blog" title="Read Blog" style="
            display: block;
            width: 100%;
            display: block;
            margin: 0 auto;
            background: #444444;
            padding: 15px 5px;
            border-radius: 0;
            text-align: center;
            color: #fff;
            max-width: 200px;
            font-size: 16px;
        ">Read Blog</a></div>
    </div>

    <div class="products-wrapper clearfix">
      <?php // get_template_part('template-parts/content', 'section-downloads-books'); ?>
    </div>

    <?php get_template_part('template-parts/section', 'email-sub'); ?> 

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
