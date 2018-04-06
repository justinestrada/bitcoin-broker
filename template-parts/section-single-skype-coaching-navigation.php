<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
?>
<section class="section-single-navigation section-body clearfix">
  <div class="container">
    <div class="breadcrumb-col col-xs-12">
      <!-- <div class="breadcrumb-wrapper clearfix">
      	<?php echo do_shortcode('[breadcrumb]'); ?>
      </div> -->
      <?php if (is_singular('post') || is_singular('download')): ?>
	      <h2 class="breadcrumb-title"><?php the_title(); ?></h2>
	  <?php endif; ?>
    </div><!-- end of <div class="breadcrumb-col col-xs-12"> -->
  </div>
</section><!-- end of <section class="section-single-breadcrumb -->