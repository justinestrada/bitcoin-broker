<?php
$post_format = get_post_format();
?>
<section <?php post_class(); ?>>
	<div class="section-post clearfix">
		<p class="entry-meta">
			<span class="entry-date"><i class="fa fa-calendar"></i> <?php the_time( 'F j Y'); ?></span><span class="entry-categories sm-float-right"><i class="fa fa-list-ul"></i> <?php the_category(', '); ?></span>
		</p>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="h3 entry-title-link">
			<?php 
			if ( isset( $post_format ) && $post_format == "video" ) {
				echo '<i class="fa fa-youtube-play"></i>&nbsp;';
			}
			the_title(); ?>
		</a>
		<p class="entry-summary"><?php the_excerpt(); ?></p>
		<p class="continue-reading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="continue-reading-btn"><?php _e('Continue Reading...'); ?></a></p>
		
		<?php // If comments are open show comment number
		if ( comments_open() || get_comments_number() ) : ?>
			<i class="fa fa-comments-o"></i> <?php echo get_comments_number().' '; comments_number( 'Comments', 'Comment', 'Comments' ); ?> 
		<?php endif; ?>
	</div>
</section><!-- end of <section id="home" class="section-intro-header clearfix"> -->
