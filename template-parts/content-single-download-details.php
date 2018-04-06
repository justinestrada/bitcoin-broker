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

<div class="download-details-left-col col-xs-12 col-sm-8">
    <div class="single-download-tabs-wrapper clearfix">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab"><?php _e('Item Details', 'bitcoin_broker'); ?></a></li>
        <!-- <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li> -->
        <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab"><?php _e('Comments', 'bitcoin_broker'); ?></a></li>
      </ul>

      <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="details">
                <div class="download-preview-wrapper clearfix">
                    <img class="download-img" src="<?php echo $feat_img_url; ?>" alt="<?php the_title_attribute(); ?>"/>
                    <div class="item-actions-row row">
                        <div class="col-xs-12">
                            <?php echo do_shortcode('[saucy_social_shares]'); ?>
                        </div>
                    </div>
                </div>
                <div class="download-content-wrapper clearfix">

                    <div class="mobile-download-purchase-details-wrapper download-purchase-details-wrapper clearfix hidden-sm hidden-md hidden-lg">
                        <?php if( edd_has_user_purchased($user_id, $download_id) ) { ?>
                            <a href="<?php echo get_site_url(); ?>/checkout/purchase-history" title="Purchases" class="download-details-btn view-purchases-btn">View Your Purchases</a>
                        <?php } else { ?>
                            <h2 class="rating-price-h2" style="margin: 0;"><span class="rating float-left"><?php for ($i = 1; $i <= 5; $i++): echo '<i class="fa fa-star star-clr"></i>'; endfor; ?> <?php _e('Rating'); ?></span> <!-- <span class="price float-right"><?php // echo $edd_price; ?></span> --></h2>
                            <p style="margin: 5px 0;"><i class="fa fa-check"></i> <?php _e('Read on Any Device'); ?></p>
                            <?php // echo do_shortcode('[purchase_link id="'.$download_id.'" price=0]'); ?>
                              <?php if ( 'Tabula Rasa' === strip_tags( get_the_title() ) ) { ?>
                                <a href="https://www.amazon.com/Tabula-Rasa-Leadership-Success-Management-ebook/dp/B01N7USNOA/" class="edd-submit" title="BUY ON AMAZON" target="_blank"><span class="edd-add-to-cart-label">BUY ON AMAZON</span></a>
                              <?php } else if ( 'Capture Your Career' === strip_tags( get_the_title() ) ) { ?>
                                <a href="https://www.amazon.com/Capture-Your-Career-Position-Hours/dp/0991070534/" class="edd-submit" title="BUY ON AMAZON" target="_blank"><span class="edd-add-to-cart-label">BUY ON AMAZON</span></a>
                              <?php } ?>
                        <?php } ?>
                    </div>

                    <h2>Why <?php the_title(); ?>?</h2>
                    <?php the_content(); ?>

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
                    <div id="customers-testimonials" class="owl-carousel">
                        <?php if ( 'Tabula Rasa' === strip_tags( get_the_title() ) ) { ?>

                            <!--TESTIMONIAL 1 -->
                            <div class="item">
                              <div class="shadow-effect">
                                <img class="img-circle" src="https://justinestrada.com/kingbless/wp-content/uploads/2017/07/default-avatar.png" alt="">
                                <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
                                <p>If you’re looking for a step by step guide on to develop the habits of the highly successful then this book is for you. The author breaks down the different steps and paths you will face as well as how to handle adversity. Can’t recommend this book enough. Will definitely be rereading this anytime I need some guidance!</p>
                              </div>
                              <div class="testimonial-name">John</div>
                            </div>
                            <!--END OF TESTIMONIAL 1 -->

                        <?php } else if ( 'Capture Your Career' === strip_tags( get_the_title() ) ) { ?>

                            <!--TESTIMONIAL 1 -->
                            <div class="item">
                              <div class="shadow-effect">
                                <img class="img-circle" src="https://justinestrada.com/kingbless/wp-content/uploads/2017/07/default-avatar.png" alt="">
                                <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
                                <p>Great book to help anyone get out of his/her comfort zone and start going after dreams and goals. Rather the reader is looking to move positions within a specific company, industry, or even become an entrepreneur, the tips in the book will definitely be helpful</p>
                              </div>
                              <div class="testimonial-name">Keonte’ Davis</div>
                            </div>
                            <!--END OF TESTIMONIAL 1 -->
                            <!--TESTIMONIAL 2 -->
                            <div class="item">
                              <div class="shadow-effect">
                                <img class="img-circle" src="https://justinestrada.com/kingbless/wp-content/uploads/2017/07/default-avatar.png" alt="">
                                <p class="text-center"><span class="rating"><i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;<i class="fa fa-star star-clr"></i>&nbsp;</span></p>
                                <p>Amazing book!!! Would recommend to anyone stuck trying to figure out where to start or go next!!!</p>
                              </div>
                              <div class="testimonial-name">Amazon Customer</div>
                            </div>
                            <!--END OF TESTIMONIAL 2 -->

                        <?php } ?>
                    </div><!-- end of #customers-testimonials -->
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
            <!-- <div role="tabpanel" class="tab-pane" id="reviews">...</div> -->
            <div role="tabpanel" class="tab-pane" id="comments">
              <?php // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif; ?>
            </div>
        </div><!-- end of <div class="tab-content"> -->
    </div><!-- end of <div class="single-download-tabs-wrapper -->
</div><!-- end of <div class="download-details-left-col -->
<div class="download-details-right-col col-xs-12 col-sm-4">
    <div class="download-purchase-details-wrapper clearfix hidden-xs">
        <?php if( edd_has_user_purchased( $user_id, $download_id ) ) { ?>
            <a href="<?php echo get_site_url(); ?>/checkout/purchase-history" title="Purchases" class="download-details-btn view-purchases-btn">View Your Purchases</a>
        <?php } else { ?>
            <h2 class="rating-price-h2" style="margin: 0;"><span class="rating float-left"><?php for ($i = 1; $i <= 5; $i++): echo '<i class="fa fa-star star-clr"></i>'; endfor; ?> <?php _e('Rating'); ?></span> <!-- <span class="price float-right"><?php // echo $edd_price; ?></span> --></h2>
            <p style="margin: 5px 0;"><i class="fa fa-check"></i> <?php _e('Read on Any Device'); ?></p>
            <!-- <p style="margin: 5px 0;"><i class="fa fa-check"></i> <?php _e('Future Updates'); ?></p> -->
            <?php // echo do_shortcode('[purchase_link id="'.$download_id.'" price=0 text="BUY"]'); ?>

              <?php if ( 'Tabula Rasa' === strip_tags( get_the_title() ) ) { ?>
                <a href="https://www.amazon.com/Tabula-Rasa-Leadership-Success-Management-ebook/dp/B01N7USNOA/" class="edd-submit" title="BUY ON AMAZON" target="_blank"><span class="edd-add-to-cart-label">BUY ON AMAZON</span></a>
              <?php } else if ( 'Capture Your Career' === strip_tags( get_the_title() ) ) { ?>
                <a href="https://www.amazon.com/Capture-Your-Career-Position-Hours/dp/0991070534/" class="edd-submit" title="BUY ON AMAZON" target="_blank"><span class="edd-add-to-cart-label">BUY ON AMAZON</span></a>
              <?php } ?>

        <?php } ?>
    </div>
    <div class="download-author-details-wrapper clearfix">
        <div class="author-row row">
            <div class="avatar-col col-xs-4">
                <img src="<?php echo get_template_directory_uri() . '/img/profile/king-bless-profile.jpg'; ?>" class="avatar-img"/>
            </div>
            <div class="col-xs-8">
                <h3 class="h3 author-display-name">by King Bless</h3>
            </div>
        </div><!-- end of <div class="author-row -->
    </div>
    <!--
    <div class="download-sales-details-wrapper clearfix">
        <i class="fa fa-shopping-cart"></i> <?php echo $download_sales_stats.' '; _e('Sales'); ?>
    </div>
    -->
    <div class="download-comments-details-wrapper clearfix">
        <i class="fa fa-comments-o"></i> <?php echo get_comments_number().' '; comments_number( 'Comments', 'Comment', 'Comments' ); ?> 
    </div>
    <div class="download-meta-attr-details-wrapper clearfix">
        <table cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <?php foreach($categories as $category){
                    if ( $category->slug == 'ebook' ) {
                        get_template_part('download-parts/download', 'meta-attr-cat-ebook');
                    } else if ( $category->slug == 'paperback' ){
                        get_template_part('download-parts/download', 'meta-attr-cat-paperback');
                    }
                    // echo $category->slug;
                } /* end foreach() */ ?>
                <?php if ( $tags != '' ) { ?>
                    <tr><td>Tags</td><td><?php echo $tags; ?></td></tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php dynamic_sidebar('sauce-sidebar-widget'); ?>
</div><!-- end of <div class="download-details-right-col -->

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