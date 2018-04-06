<?php 
$categories = get_the_category($post->ID); 
if ( ! empty( $categories ) ) {
    $first_category = strtolower(esc_html( $categories[0]->name ));   
}
if (isset($first_category)) {
  $related_posts_args = array(
    'category_name' => $first_category,
    'post__not_in' => array( $post->ID ),
    'post_count' => 4
  );
} else {
  $related_posts_args = array( );
}
$related_posts_query = new WP_Query($related_posts_args);
if( $related_posts_query->have_posts() ) { ?>
  <h3 style="text-decoration: underline;"><?php _e('Related Posts'); ?></h3>
  <?php while ($related_posts_query->have_posts()) : $related_posts_query->the_post(); ?>
    <div class="col-xs-12 col-sm-6">
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php the_time( 'F j Y'); ?>
    </div>
  <?php endwhile;
}
wp_reset_query(); ?>