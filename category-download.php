<?php
/**
 * The template for displaying category download pages
 *
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); 
?>
<div class="outer-row row clearfix">
  <div class="category-download-wrapper wrapper clearfix">

    <section class="section-single-breadcrumb section-body clearfix">
      <div class="container">
        <div class="col-xs-12">
          <div class="section-single-breadcrumb-wrapper clearfix"><?php echo do_shortcode('[breadcrumb]'); ?></div>
          <h2 class="section-single-breadcrumb-title"><?php echo get_the_title(); ?></h2>
        </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
      </div>
    </section><!-- end of <section class="section-single-breadcrumb -->

    <div class="products-wrapper clearfix">
      <?php $products_args = array(
        'post_type' => 'download',
      );
      $products_query = new WP_Query( $products_args );
      while ( $products_query->have_posts() ) : $products_query->the_post();
        $feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

        <section class="section-product clearfix">
          <div class="container">
              <div class="product-img-col col-xs-12 col-sm-7">
                <img src="<?php echo $feat_img_url; ?>" class="product-img" alt="<?php echo get_the_title(); ?>"/>
              </div>
              <div class="product-desc-col col-xs-12 col-sm-5">
                <p class="product-category"><i class="fa fa-tag"></i> <?php /* display download categories */ the_terms( $post->ID, 'download_category', '', ', ', '' ); ?></p>
                <h2 class="product-title"><?php the_title(); ?></h2>
                <p class="product-excerpt"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="product-btn view-more-btn"><?php _e('VIEW MORE'); ?></a>
                <a href="<?php echo get_site_url(); ?>/checkout?edd_action=add_to_cart&amp;download_id=<?php the_ID(); ?>"class="product-btn buy-btn"><?php _e('BUY'); ?></a>
              </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
          </div><!-- end of <div class="container"> -->
        </section><!-- end of <section class="section-product -->

      <?php endwhile; ?>
    </div><!-- end of <div class="products-wrapper -->

    <section class="section-email-sub section-body clearfix">
      <div class="container">
        <div class="col-xs-12 text-center">
          <h2 class="email-sub-text"><?php _e('Sign up for our newsletter'); ?></h2>
          <p class="email-sub-desc"><?php _e('Be the first to know about all new releases and product updates'); ?></p> 
          <div class="email-sub-form-wrapper"><?php echo do_shortcode('[mc4wp_form id="22"]'); ?></div>
        </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
      </div>
    </section><!-- end of <section class="section-email-sub -->

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
