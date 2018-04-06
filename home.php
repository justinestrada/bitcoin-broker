<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */

get_header(); ?>

<style>
/*.blog-categories-listing-wrapper {
  margin-bottom: 25px;
}
.blog-categories-listing-wrapper .cat-item {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  float: left;
  width: 33.33333333%;
  list-style: none;
  text-align: center;
  background: #2f586e;
  padding: 5px;
  border-radius: 5px;
  border-right: 2px solid #fff;
}
.blog-categories-listing-wrapper .cat-item a,
.blog-categories-listing-wrapper .cat-item a:hover,
.blog-categories-listing-wrapper .cat-item a:focus {
  color: #fff;
}
@media (min-width: 768px) {
  .blog-categories-listing-wrapper .cat-item {
    width: 25%;
  }  
}*/
.pagination-navigation {
    margin-bottom: 30px;
}
</style>

<div class="outer-row row clearfix">
  <div class="blog-page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'blog-navigation'); ?> 

    <div class="blog-page-container container">
      <div class="blog-posts-col col-xs-12 col-sm-7 col-md-8 clearfix">

        <div class="blog-categories-listing-wrapper clearfix hidden">
    			<h3>Categories</h3>
          <?php // wp_list_categories( array( 'title_li' => '' ) ); ?>
        </div>

        <?php while( have_posts() ): the_post(); ?>
          <?php get_template_part('template-parts/content', 'section-single-posts'); ?> 
        <?php endwhile; ?>
        <?php bitcoinbroker_numeric_posts_nav(); ?>

      </div><!-- end of <div class="blog-wrapper clearfix"> -->
      <div class="blog-sidebar-widgets-col col-xs-12 col-sm-5 col-md-4">
        <?php dynamic_sidebar('post-sidebar-widget'); ?>
      </div>
    </div><!-- end of <div class="blog-page-container container"> -->

    <?php get_template_part('template-parts/section', 'email-sub'); ?> 

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
