<?php
/**
 * Custom template for displaying the coming soon page
 *
 * Template Name: Coming Soon
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fire_packaging
 */
get_header(); 
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<style type="text/css">
.header-row, .footer-row {
  display: none;
}
.coming-soon-wrapper {
    display: block;
    position: fixed;
    height: 100%;
    width: 100%;
    min-height: 550px;
}
.section-coming-soon {
  position: relative;
  width: auto;
  margin: 10px;
  background: #fff;
  border-radius: 5px;
}
.section-coming-soon .coming-soon-col {
  padding: 15px;
}
.section-coming-soon .coming-soon-title {
  font-size: 30px;
  text-transform: uppercase;
  text-align: left;
  margin: 0 0 5px;
}
.section-coming-soon .coming-soon-logo {
    display: block;
    width: 100%;
    margin: 0 auto 5px;
    max-width: 250px;
    margin-bottom: 5px;
}
.section-coming-soon .coming-soon-desc {
  font-weight: bold;
}
.coming-soon-subscribed .social-icons-ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.coming-soon-subscribed .social-icons-ul li {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    float: left;
    width: 33.33%;
    text-align: center;
    background: #444;
    padding: 5px;
    margin: 0 0 15px 0;
}
.coming-soon-subscribed .social-icons-ul li:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
.coming-soon-subscribed .social-icons-ul li:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.coming-soon-subscribed .social-icons-ul li a {
    color: #fff;
    font-size: 16px;
}
@media (min-width: 768px){
  .coming-soon-wrapper {
      background-image: url('<?php echo $feat_img_url; ?>');
      background-attachment: fixed;
      background-size: cover;
      display: block;
      position: fixed;
      height: 100%;
      width: 100%;
      min-height: 750px;
  }
  .section-coming-soon {
    width: 100%;
    max-width: 600px;
    margin: 5% auto;
  }
  .section-coming-soon .coming-soon-title {
    font-size: 50px;
  }
}
/**/
.mailchimp-subscribe-form .form-group {
    position: relative;
    width: 100%;
}
.mailchimp-subscribe-form .form-group input[type="email"] {
    border: none;
    border-bottom: 2px solid #c7c7c7;
    box-shadow: none;
    min-height: 40px;
    font-size: 16px;
}
.mailchimp-subscribe-form .form-group .subscribe-arrow-btn {
    position: absolute;
    right: 0;
    top: 0;
    background: transparent;
    border: none;
    width: 50px;
    height: 40px;
    color: #f50;
}
</style>
<div class="outer-row row clearfix">
  <div class="coming-soon-wrapper wrapper clearfix">

  <section class="section-coming-soon section-body clearfix">
      <div class="section-coming-soon-col col-xs-12">
        <h1 class="coming-soon-title" style="display: none;"><?php bloginfo( 'title' ); ?></h1>
        <img class="coming-soon-logo" src="<?php echo get_template_directory_uri().'/img/logo/KRBE-digital-assets-group-logo.png'; ?>"/>

          <p class="coming-soon-desc"><?php _e('We are bridging the gap between cryptocurrency and the community!'); ?></p>
          <p class="coming-soon-desc"><?php _e('Sign up and receive early access to our awesome website.'); ?>
          <div class="mailchimp-subscribe-form">
            <?php // echo do_shortcode('[mc4wp_form id="15"]'); ?>
            <?php echo do_shortcode( '[contact-form-7 id="13" title="Subscription Form"]' ); ?>
          </div>

        <!-- coming soon mailchimp list id: 5ef6e0f03c -->
      </div><!-- end of <div class="col-xs-12 col-sm-8"> -->
  </section><!-- end of <section id="home" class="section-intro-header clearfix"> -->

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->
<?php get_footer();