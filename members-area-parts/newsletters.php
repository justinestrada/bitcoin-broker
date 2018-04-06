<div class="newsletters-wrapper dash-wrapper clearfix" >
	<div class="dash-card">
		<h3>Newsletters</h3>
	</div>
	<?php
	$args = array(
		'post_type' => 'newsletters'
	);
	$query = new WP_Query( $args );
	while( $query->have_posts() ){ $query->the_post(); ?>
		<div class="col-xs-12 col-sm-4">
			<div class="newsletter-wrapper">
				<a href="<?php the_field( 'newsletter_pdf_link' ); ?>" class="h3" target="_blank" ><?php the_title(); ?></a>
				<p><?php the_content(); ?></p>
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" />
				<a href="<?php the_field( 'newsletter_pdf_link' ); ?>" class="view-newsletter-btn" target="_blank" ><i class="fa fa-bell"></i> Keep Reading</a>
			</div>
		</div>
	<?php } ?>
</div>