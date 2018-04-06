<?php
/**
 * The template for displaying all pages
 *
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */

get_header(); ?>

<style>
.feat-img-text .type-wrap span {
  font-size: 30px;
}
.founder-img {
  width: 100%;
  border-radius: 50%;
  max-width: 200px;
  margin: 25px auto;
  display: block;
  border: 1px solid rgba(0,0,0,0.25);
  border-bottom: 2px solid rgba(0,0,0,0.25);
  box-shadow: 0 4px 3px rgba(0,0,0,0.15), 0 0 2px rgba(0,0,0,0.15);  
}
</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js" type="text/javascript"></script>
    <script>
    
    jQuery(document).ready(function(){

        Typed.new("#typed", {
            stringsElement: document.getElementById('typed-strings'),
            typeSpeed: 30,
            backDelay: 3000,
            loop: true,
            contentType: 'html', // or text
            // defaults to null for infinite loop
            loopCount: null,
            callback: function(){ typedJsLog(); },
            resetCallback: function() { newTyped(); }
        });

        var resetElement = document.querySelector('.reset');
        if(resetElement) {
            resetElement.addEventListener('click', function() {
                document.getElementById('typed')._typed.reset();
            });
        }

    });

    function newTyped(){ /* A new typed object */ }

    function typedJsLog(){
        console.log("Callback");
    }
    </script>

<div class="outer-row row clearfix">
  <div class="about-wrapper wrapper clearfix">

    <?php
    $feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <section class="section-feat-img section-body clearfix" style="background-image: url(<?php echo $feat_img_url; ?>);">
      <div class="container">
        <div class="col-xs-12">
          <div class="feat-img-text">


        <!-- Start of the jQuery plugin Typed JS elements -->
        <div class="type-wrap">
            <h2><?php _e('KRBE Crypto is'); ?></h2>
            <div id="typed-strings">
                <?php
                $traits = [
                  'a <i>digital assets group</i>',
                  'a fantastic bitcoin <i>consultant</i>',
                  'your <i>friend</i> in this digital age',
                  'here to navigate you to <i>success</i>',
                ];
                foreach($traits as $trait) {
                  echo '<span>' . $trait . '</span>';
                } ?>
            </div>
            <span id="typed" style="white-space:pre;"></span>
        </div>
        <!-- End of the jQuery plugin Typed JS elements -->



          </div>
        </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
      </div>
    </section><!-- end of <section id="home" class="section-feat-img clearfix"> -->

    <section class="section-page">
      <div class="container">

        <div class="content-col col-xs-12 col-sm-8">
          <?php while( have_posts() ): the_post(); ?>
            <?php // the_content(); ?>

            <h2 style="margin-bottom: 50px;"><?php _e( 'Meet The Team' ); ?></h2>

            <div class="row">

              <div class="col-xs-12 col-sm-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/profile/cartoon-isaiah-jackson-profile.png" class="founder-img"/>
                <h3>Bitcoin Zay</h3>
                <h4><?php _e( 'Chief Operations Officer'); ?></h4>
                <p><?php _e( 'Isaiah Jackson is a member of the Digital Currency Council and Bitcoin trader who has over 4 years of experience in the digital currency market. Jackson believes that the only way for mainstream Bitcoin adoption is to educate interested consumers, investors and students through a variety of resources. He is the author of the Bitcoin Starter Guide 2.0 and curator for the Yellowbird Financial Education application.'); ?></p>
              </div>

              <div class="col-xs-12 col-sm-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/profile/cartoon-king-bless-profile.png" class="founder-img"/>
                <h3>King</h3>
                <h4><?php _e( 'Chief Executive Officer'); ?></h4>
                <p><?php _e( 'King has served as a Naval Public Affairs Officer providing intuitive advice to senior level decision makers on a daily basis. During his time in the Navy, he was responsible for developing and presenting briefings for over 500 distinguished visitors, including CEOs, International Media, Congressional Delegations, U.S. and Foreign Ambassadors, and senior military members, visiting or working in over 15 countries. After his final deployment King began investing, trading, and consulting in the FinTech sector with Bitcoin and cryptocurrency. In addition, he is an executive performance coach, has authored 3 books, and blogs/vlogs with partnerships at YouTube and IGOlive.'); ?></p>
              </div>

            </div><!-- end of <div class="row"> -->

            <div class="row">            
              <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
            </div>

          <?php endwhile; ?>
        </div><!-- end of <div class="content-col -->

        <div class="page-sidebar-widgets-col col-xs-12 col-sm-4">
          <?php dynamic_sidebar('post-sidebar-widget'); ?>
        </div>

      </div>
    </section><!-- end of <section class="section-page"> -->

    <?php // get_template_part('template-parts/section', 'seperator'); ?>

    <?php get_template_part('template-parts/section', 'email-sub'); ?>

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->

<?php get_footer();
