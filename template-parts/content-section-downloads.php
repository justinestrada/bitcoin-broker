<?php $products_args = array(
  'post_type' => 'download',
  'cat' => -15,
);
$products_query = new WP_Query( $products_args );
while ( $products_query->have_posts() ) : $products_query->the_post();
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
/* EDD Vars */
$download_id = get_the_ID();
$edd_price = edd_price( $download_id, false );
if (strpos($edd_price, '0.00') !== false) {
  $edd_price = "FREE";
} ?>

    <section class="section-product clearfix">
      <div class="container">
          <div class="product-img-col <?php if ($products_query->current_post % 2 == 0): echo 'float-right';  endif; ?> col-xs-12 col-sm-7">
            <img src="<?php echo $feat_img_url; ?>" class="product-img" alt="<?php the_title_attribute(); ?>"/>
          </div>
          <div class="product-desc-col col-xs-12 col-sm-5">
            <p class="product-category"><i class="fa fa-list-ul"></i> <?php /* display download categories */ the_terms( $post->ID, 'download_category', '', ', ', '' ); ?></p>
            <h2 class="product-title"><?php the_title(); ?></h2>
            <p class="product-date hidden"><i class="fa fa-calendar"></i> <?php the_time( 'F j Y'); ?></p>
            <p class="product-excerpt"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="product-btn view-more-btn"><?php _e('VIEW MORE'); ?></a>
            <?php if ($edd_price == 'FREE'): ?>
              <?php echo do_shortcode('[purchase_link id="'.$download_id.'" price=0]'); ?>
            <?php else: ?>
              <a href="<?php echo get_site_url(); ?>/checkout?edd_action=add_to_cart&amp;download_id=<?php the_ID(); ?>"class="product-btn buy-btn"><?php _e('BUY'); ?></a>
            <?php endif; ?>
          </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
      </div><!-- end of <div class="container"> -->
    </section><!-- end of <section id="home" class="section-intro-header clearfix"> -->

<?php endwhile; ?>