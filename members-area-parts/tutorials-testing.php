<style>
.ellipsis {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.tutorial-feat-img {
  display: block;
  width: 100%;
}
.tutorial-feat-vid-wrapper {
  display: none;
}
/*
put a video duration bottom right of thumbnail
.tutorial-feat-img-wrapper::after {
  content: "";
  background: #000;
  color: #fff;
}*/
</style>

<div class="tutorials-wrapper dash-wrapper clearfix">
  <div class="dash-card">
    <h3>Tutorials</h3>
    <p>Tutorials every Tuesday and Thursday</p>
  </div>

  <div class="tutorials-row row">
    <div class="col-xs-12">
      <img src="https://krbecrypto.com/wp-content/uploads/2018/04/members-area-tutorials-screenshot-example-e1522829395760.png" style="width: 100%;" />
    </div>
  	<?php
    wp_reset_query();
  	$args = array(
  		'post_type' => 'tutorial'
  	);
  	$query = new WP_Query( $args );
  	$inc = 0;
  	while( $query->have_posts() ){ $query->the_post(); ?>
      <div class="tutorial-col col-xs-12 col-sm-6 col-md-4">

          <div class="tutorial-feat-img-wrapper clearfix">
            <img src="https://krbecrypto.com/wp-content/uploads/2018/04/Ways-to-Make-Money-in-a-Bear-Market-thumbnail.jpg" class="tutorial-feat-img" tutorial-id="<?php echo get_the_ID(); ?>" />
          </div>
          <div id="tut-feat-vid-<?php echo get_the_ID(); ?>" class="tutorial-feat-vid-wrapper clearfix">
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
            <h3><?php the_title(); ?></h3>  
            <div class="ellipsis"><?php the_excerpt(); ?></div>
            <ul>
              <li>By Bitcoin Zay</li>
              <li><?php echo get_the_time( 'F j, Y'); ?></li>
            </ul>
          </div>

        </div>
    		<?php // if ($inc % 4) { ?>
    		  <!-- <div class="clearfix"></div>	 -->
    		<?php // } ?>
        <?php
    	$inc++;
  	} ?>
  </div>

  <div class="col-xs-12">
    <!-- <p style="color: #f7931a;"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-certificate fa-stack-2x"></i><i class="fa fa-check fa-stack-1x" style="color: #fff;"></i></span> More Tutorials Coming Soon</p> -->
    <a style="color: #f7931a;" class="btn"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-certificate fa-stack-2x"></i><i class="fa fa-check fa-stack-1x" style="color: #fff;"></i></span> Load More...n</a>
  </div>
</div>

<script>
jQuery('.tutorial-feat-img-wrapper .tutorial-feat-img').on('click', function() {
  var tutID = jQuery(this).attr('tutorial-id');
  jQuery(this).hide();
  jQuery('#tut-feat-vid-' + tutID).show();
  // run vid rescale func

  // or better yet expand video full dropdown
});
</script>
