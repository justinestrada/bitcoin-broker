<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<section class="section-feat-img section-body clearfix" style="background-image: url(<?php echo $feat_img_url; ?>);">
  <div class="container">
    <div class="col-xs-12 text-center">
    	<?php if ( is_page_template('template-members-area.php') && is_user_logged_in() ) { ?>
			<h2 class="feat-img-text">Members Area</h2>
    	<?php } else { ?>
			<h2 class="feat-img-text"><?php the_title(); ?></h2>
    	<?php } ?>
    </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
  </div>
</section><!-- end of <section id="home" class="section-feat-img clearfix"> -->