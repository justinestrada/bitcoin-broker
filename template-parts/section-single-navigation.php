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
      <div class="breadcrumb-wrapper clearfix">
      	<ul id="breadcrumbs" class="breadcrumbs">
      		<li class="item-home"><a class="bread-link bread-home" href="<?php echo get_site_url(); ?>" title="Home">Home</a></li>
      		<li class="separator separator-home"> » </li>

          <?php if ( is_singular( 'download' ) ) { ?>
            <li class="item-cat item-custom-post-type-download"><a class="bread-cat bread-custom-post-type-download" href="<?php echo get_site_url(); ?>/store/category/books" title="Books">Books</a></li>
          <?php } else { ?>
            <li class="item-cat item-post-type"><a class="bread-cat bread-custom-post-type-download" href="<?php echo get_site_url(); ?>/blog" title="Blog">Blog</a></li>
          <?php } ?>

      	</ul>
      </div>
      <?php if (is_singular('post') || is_singular('download')): ?>
	      <h2 class="breadcrumb-title"><?php the_title(); ?></h2>
	  <?php endif; ?>
    </div><!-- end of <div class="breadcrumb-col col-xs-12"> -->
  </div>
</section><!-- end of <section class="section-single-breadcrumb -->