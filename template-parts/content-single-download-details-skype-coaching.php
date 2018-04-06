<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
/* Post Vars */
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$tags = get_the_term_list( $post->ID, 'download_tag', '', ', ', '' );
$categories = get_the_terms( get_the_ID(), 'download_category' );
/* User Vars */
$user = new WP_User( $post->post_author );
$user_id = $user->ID;
$user_avatar_img_url = get_avatar_url($user_id);
$user_url = get_author_posts_url( $user_id );
$user_display_name = $user->display_name;
/* EDD Vars */
$download_id = get_the_ID();
$edd_price = edd_price( $download_id, false );
if (strpos($edd_price, '0.00') !== false) {
	$edd_price = "FREE";
}
$download_sales_stats = edd_get_download_sales_stats( $download_id );
/* */
$download_sales_stats += 7;
?>

<style>
.download-details-skype-coaching-col {
    margin-top: 25px;
}
.download-details-skype-coaching-col .download-preview-wrapper {
    background: #ececec;
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #c7c7c7;	
}
.edd_price_options label {
    display: block;
    width: 100%;
    padding: 5px 15px;
    margin-bottom: 15px;
    text-align: center;
    border-radius: 5px;
    border: 1px solid #d2973b;
    background: #fff;
    color: #d2973b;
    cursor: pointer;
}
.edd_price_options label.selected {
    background: #d2973b;
    color: #fff;
    cursor: default;
}
.edd_price_options label .edd_price_option_name {
    float: left;
}
.edd_price_options label input[type="radio"],
.edd_price_options label .edd_price_option_sep {
    display: none;
}
.edd_price_options label .edd_price_option_price {
    float: right;
}
</style>

<div class="download-details-skype-coaching-col col-xs-12">

	<div class="download-preview-wrapper clearfix">
		<img class="download-img" src="<?php echo $feat_img_url; ?>" alt="<?php the_title_attribute(); ?>"/>
		<div class="item-actions-row row">
			<div class="col-xs-12">
				<?php echo do_shortcode('[saucy_social_shares]'); ?>
			</div>
		</div>
	</div>

	<div class="download-content-wrapper clearfix">

		<div class="download-purchase-details-wrapper download-purchase-details-wrapper clearfix hidden-sm hidden-md hidden-lg">
			<?php if( edd_has_user_purchased($user_id, $download_id) ) { ?>
				<a href="<?php echo get_site_url(); ?>/checkout/purchase-history" title="Purchases" class="download-details-btn view-purchases-btn">View Your Purchases</a>
			<?php } else { ?>
				<h2 class="rating-price-h2" style="margin: 0;"><span class="rating float-left"><?php for ($i = 1; $i <= 5; $i++): echo '<i class="fa fa-star star-clr"></i>'; endfor; ?> <?php _e('Rating'); ?></span> <!-- <span class="price float-right"><?php // echo $edd_price; ?></span> --></h2>

				<?php echo do_shortcode('[purchase_link id="'.$download_id.'" price=0 text="Reserve Now"]'); ?>
			<?php } ?>
		</div>

		<h2>Why <?php the_title(); ?>?</h2>
		<?php the_content(); ?>

<h3 style="text-align: center;">Reviews</h3>

<!-- TESTIMONIALS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
<link rel="stylesheet" href="http://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">
<style>
					.shadow-effect {
					    background: #fff;
					    padding: 15px;
					    border-radius: 5px;
					    text-align: center;
						border:1px solid #ECECEC;
					    box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
					}
					#customers-testimonials .shadow-effect p {
					    font-family: inherit;
					    font-size: 16px;
					    line-height: 1.5;
					    margin: 0 0 15px 0;
					    font-weight: 300;
					}
					.testimonial-name {
					    margin: -15px auto 0;
					    display: table;
					    width: auto;
					    background: #2f586e;
					    padding: 15px;
					    border-radius: 50px;
					    text-align: center;
					    color: #fff;
					    box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
					}
					#customers-testimonials .item {
					    text-align: center;
					    padding: 25px 15px;
							margin-bottom:80px;
					    opacity: .2;
					    -webkit-transform: scale3d(0.8, 0.8, 1);
					    transform: scale3d(0.8, 0.8, 1);
					    -webkit-transition: all 0.3s ease-in-out;
					    -moz-transition: all 0.3s ease-in-out;
					    transition: all 0.3s ease-in-out;
					}
					#customers-testimonials .owl-item.active.center .item {
					    opacity: 1;
					    -webkit-transform: scale3d(1.0, 1.0, 1);
					    transform: scale3d(1.0, 1.0, 1);
					}
					.owl-carousel .owl-item img {
					    transform-style: preserve-3d;
					    max-width: 90px;
						margin: 0 auto 15px;
					}
					#customers-testimonials.owl-carousel.owl-theme .owl-dots .owl-dot.active span, #customers-testimonials.owl-carousel.owl-theme .owl-dots .owl-dot:hover span {
					    background: #28CB75;
					    transform: translate3d(0px, -50%, 0px) scale(0.7);
					}
					#customers-testimonials.owl-carousel.owl-theme .owl-dots .owl-dot span {
					    background: #C4C4CC;
					    display: block;
					    height: 20px;
					    margin: 0 2px 5px;
					    transform: translate3d(0px, -50%, 0px) scale(0.3);
					    transform-origin: 50% 50% 0;
					    transition: all 250ms ease-out 0s;
					    width: 20px;
					}
</style>
<section class="testimonials">
	<div class="container">

		<div class="row">
		<div class="col-sm-12">
		  <div id="customers-testimonials" class="owl-carousel">

		    <!--TESTIMONIAL 0 -->
		    <div class="item">
		      <div class="shadow-effect">
		        <img class="img-circle" src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/coaching-reviews/tami.jpg" alt="Tamie Estrada">
		        <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
		        <p>At my fast paced level of work it's hard to find someone that can understand my goals and challenges. King worked with me to organize my thoughts and discuss what direction my career should go. Thank you for the impeccable advice.</p>
		      </div>
		      <div class="testimonial-name">Tami Estrada</div>
		    </div>
		    <!--END OF TESTIMONIAL 0 -->
		    <!--TESTIMONIAL 1 -->
		    <div class="item">
		      <div class="shadow-effect">
		        <img class="img-circle" src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/coaching-reviews/kelsey.jpg" alt="Kelsey Kinyon">
		        <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
		        <p>The best Skype Call of my life! I learned a lot about time management and leadership skills that helped me tackle the managerial position at my work.</p>
		      </div>
		      <div class="testimonial-name">Kelsey Kinyon</div>
		    </div>
		    <!--END OF TESTIMONIAL 1 -->
		    <!--TESTIMONIAL 2 -->
		    <div class="item">
		      <div class="shadow-effect">
		        <img class="img-circle" src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/coaching-reviews/gavin.jpg" alt="Gavin Andrews">
		        <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
		        <p>Running a catering company can be challenging, and King helped me see work through some issues that helps me be a more professional leader in the field! I appreciate his wise words.</p>
		      </div>
		      <div class="testimonial-name">Gavin Andrews</div>
		    </div>
		    <!--END OF TESTIMONIAL 2 -->
		    <!--TESTIMONIAL 3 -->
		    <div class="item">
		      <div class="shadow-effect">
		        <!-- <img class="img-circle" src="https://secure.gravatar.com/avatar/54c78292ff466dc56241e0777413e522?s=96&d=mm&r=g" alt=""> -->
		        <img class="img-circle" src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/coaching-reviews/justin.jpg" alt="Justin Estrada">
		        <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
		        <p>King has a wealth of knowledge to share! He helped me tackle my interview and was a contributing factor that helped me land my job.</p>
		      </div>
		      <div class="testimonial-name">Justin Estrada</div>
		    </div>
		    <!--END OF TESTIMONIAL 3 -->
		    <!--TESTIMONIAL 4 -->
		    <div class="item">
		      <div class="shadow-effect">
		        <img class="img-circle" src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/coaching-reviews/thomas.jpg" alt="Justin Estrada">
		        <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
		        <p>There aren't many people that can understand my high ambition and determination. It was a 'blessing' that I found King when I did. We discussed a strategic work schedule I implement in my career daily.</p>
		      </div>
		      <div class="testimonial-name">Thomas Kenny</div>
		    </div>
		    <!--END OF TESTIMONIAL 4 -->
		    <!--TESTIMONIAL 5 -->
		    <div class="item">
		      <div class="shadow-effect">
		        <img class="img-circle" src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/coaching-reviews/wylan.jpg" alt="Wylan Neely">
		        <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
		        <p>As an iOS Developer sometimes I don't see beyond the technical aspect of my work. King helped me present my work in a professional manner to secure more clients!</p>
		      </div>
		      <div class="testimonial-name">Wylan Neely</div>
		    </div>
		    <!--END OF TESTIMONIAL 5 -->
		  </div>
		</div>
		</div>

  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
<script>
jQuery(document).ready( function() {
	jQuery( '#customers-testimonials' ).owlCarousel({
        loop: true,
        center: true,
        items: 3,
        margin: 0,
        autoplay: true,
        dots:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1170: {
            items: 3
          }
        }
    });
});
</script>
<!-- END OF TESTIMONIALS -->

	</div>

</div>

<div class="download-details-right-col col-xs-12 col-sm-8">
	<div class="download-purchase-details-wrapper clearfix">
		<?php if( edd_has_user_purchased( $user_id, $download_id ) ) { ?>
			<a href="<?php echo get_site_url(); ?>/checkout/purchase-history" title="Purchases" class="download-details-btn view-purchases-btn">View Your Purchases</a>
		<?php } else { ?>
			<h2 class="rating-price-h2" style="margin: 0;"><span class="rating float-left"><?php for ($i = 1; $i <= 5; $i++): echo '<i class="fa fa-star star-clr"></i>'; endfor; ?> <?php _e('Rating'); ?></span> <!-- <span class="price float-right"><?php // echo $edd_price; ?></span> --></h2>

			<!-- <p style="margin: 5px 0;"><i class="fa fa-check"></i> <?php _e('Future Updates'); ?></p> -->
			<?php echo do_shortcode('[purchase_link id="'.$download_id.'" price=0 text="Reserve Now"]'); ?>
		<?php } ?>
	</div>
</div><!-- end of <div class="download-details-right-col -->
<div class="download-details-right-col col-xs-12 col-sm-4">
		<?php dynamic_sidebar('sauce-sidebar-widget'); ?>
</div>

<script>
function whichPriceOptionIsChecked() {
	jQuery('.edd_price_options input[type="radio"]').each(function() {
		if ( jQuery(this).is( ':checked' ) ) {
			jQuery(this).parent().addClass('selected');
		} else {
			jQuery(this).parent().removeClass('selected');			
		}
	});	
}
jQuery(document).ready(function(){
	whichPriceOptionIsChecked();
});
jQuery('.edd_price_options input[type="radio"]').on('click', function() {
	whichPriceOptionIsChecked();
});
</script>