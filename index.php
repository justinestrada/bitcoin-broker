<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */

get_header();
$featImgURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div class="outer-row row clearfix">
  <div class="home-wrapper wrapper clearfix">


<section class="section-feat-img section-body clearfix" style="background-image: url(<?php echo $featImgURL; ?>);">
  <div class="container">
    <div class="col-xs-12">
      <h2 class="intro-text xs-only-text-center"><?php _e('Premium WordPress Themse and Plugins!'); ?></h2>
    </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
  </div>
</section><!-- end of <section id="home" class="section-intro-header clearfix"> -->


  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
