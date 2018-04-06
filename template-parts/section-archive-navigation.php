<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
$count_posts = wp_count_posts('post'); ?>
<section class="section-archive-navigation section-body clearfix">
  <div class="container">
    <div class="breadcrumb-col col-xs-12">
      <div class="breadcrumb-wrapper clearfix"><?php echo do_shortcode('[breadcrumb]'); ?></div>
      <h2 class="breadcrumb-title"><?php _e('Awesome blog posts.'); ?></h2>
    </div><!-- end of <div class="col-xs-12"> -->
  </div>
</section><!-- end of <section class="section-single-breadcrumb -->