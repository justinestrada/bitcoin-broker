<div class="tutorials-wrapper dash-wrapper clearfix">
  <div class="dash-card">
    <h3>Tutorials</h3>
    <p>Tutorials every Tuesday and Thursday</p>
  </div>

  <div class="tutorials-row row">
  	<?php
    wp_reset_query();
  	$args = array(
  		'post_type' => 'tutorial'
  	);
  	$query = new WP_Query( $args );
	$inc = 0;
  	while( $query->have_posts() ){ $query->the_post(); ?>
      <div class="tutorial-col col-xs-12 col-sm-6">

          <h3><?php the_title(); ?></h3>
          <div class="tutorial-feat-vid-wrapper clearfix">
            <?php if ( get_field("featured_video_link") ) {
              $featured_video_link = get_field( 'featured_video_link' );
              $featured_video_link = str_replace( 'https://www.youtube.com/watch?v=', '', $featured_video_link );
              ?>
              <iframe class="responsive-video-tutorial" width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $featured_video_link; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <?php
            }
            // the_field('featured_video_link');
            ?>
          </div>
          <div class="tutorial-content-wrapper clearfix" style="margin-top: 15px;">
            <?php the_content(); ?>
          </div>

        </div>
		<?php if ($inc % 2) { ?>
		  <div class="clearfix"></div>	
		<?php } ?>
      <?php
	$inc++;
	} ?>
  </div>

  <div class="col-xs-12 text-center">
    <p style="color: #f7931a;"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-certificate fa-stack-2x"></i><i class="fa fa-check fa-stack-1x" style="color: #fff;"></i></span> More Tutorials Coming Soon</p>
  </div>
</div>
