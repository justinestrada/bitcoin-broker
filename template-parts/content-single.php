<?php

/**

 * Template part for displaying single posts.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package bitcoin_broker

 */

/* Post Vars */

$post_format = get_post_format();

if ( isset( $post_format ) && $post_format == "video" ) {

	$media = get_media_embedded_in_content(

	    apply_filters( 'the_content', get_the_content() )

	);

	function removeIframe( $content ){

	    $content = preg_replace('/<iframe.*?>/', "", $content); // removes iframes

	     return $content;

	}

	add_filter('the_content','removeIframe',99);

}

$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

/* User Vars */

$author = new WP_User( $post->post_author );

$author_id = $author->ID;

$author_avatar_img_url = get_avatar_url($author_id);

$author_url = get_author_posts_url( $author_id );

$author_display_name = $author->display_name;

$author_desc = get_the_author_meta('description'); ?>



<div class="single-post-feat-img-wrapper clearfix">

	<?php

	if( ! empty( $media ) && $post_format == "video"  ) {

		echo $media[0];

	} else if ( empty( $media )&& $post_format == "video"  ) { ?>

		<p><?php _e('No Video is Embeded, Go to the Post Editor and Input a Video into the WordPress Content Area.'); ?></p>

	<?php } else if ( $feat_img_url ) { ?>

		<img class="single-post-feat-img" src="<?php echo $feat_img_url; ?>" alt="<?php the_title_attribute(); ?>"/>

	<?php } ?>

	<!-- <div class="item-actions-row row">

		<div class="col-xs-offset-2 col-xs-8"></div>

	</div> -->

</div>

<div class="single-post-content-wrapper clearfix">

	<p class="post-meta">

		<span class="entry-author author">

			Posted by <strong><?php echo $author_display_name; ?></strong>

		</span>

		<span class="entry-date">published on <i class="fa fa-clock-o"></i> <span class="date"><?php the_time( 'F j Y'); ?></span></span>

	</p>

	<div class="post-content">

		<?php the_content(); ?>

	</div>

	<div class="single-post-author-box-row row">

		<div class="single-post-author-box-avatar-col col-xs-3">

			<?php if ( strpos($author_display_name, 'Zay') ) { ?>
				<img src="https://krbecrypto.com/wp-content/uploads/2018/01/cartoon-isaiah-jackson-profile.jpg" alt="<?php echo $author_display_name; ?>" class="author-box-avatar"/>
			<?php } else { ?>
				<img src="https://krbecrypto.com/wp-content/uploads/2018/01/cartoon-king-bless-profile.jpg" alt="<?php echo $author_display_name; ?>" class="author-box-avatar"/>
			<?php } ?>
			<!-- <img src="<?php echo $author_avatar_img_url; ?>" alt="<?php echo $author_display_name; ?>" class="author-box-avatar"/> -->

		</div>

		<div class="single-post-author-box-desc-col col-xs-9">

			<h3 class="author-box-title">Written By <?php echo $author_display_name; ?></h3>

			<p class="author-box-desc"><?php echo $author_desc; ?></p>

		</div>

	</div>

	<p class="single-post-footer-post-meta post-meta hidden">

		<span class="entry-terms">

			<?php $categories = get_categories( array(

			    'orderby' => 'name',

			    'parent'  => 0

			) ); ?>

			<span class="entry-categories"><i class="fa fa-th-list"></i> <?php _e('Categories:'); ?>

				<?php if ($categories):

					foreach ( $categories as $category ) { echo esc_html( $category->name ) . ', '; }

				endif; ?>

			</span>

			<?php $tags = get_the_tags();

			if ($tags): ?>

				<span class="entry-tags"><i class="fa fa-tag"></i> <?php _e('Tags:'); ?> <?php foreach($tags as $tag) { echo $tag->name . ', '; } ?></span>

			<?php endif; ?>

		</span>

	</p>

</div>

<div class="single-post-comments-wrapper clearfix">

	<?php // If comments are open or we have at least one comment, load up the comment template.

	if ( comments_open() || get_comments_number() ) :

	comments_template();

	endif; ?>

</div>
