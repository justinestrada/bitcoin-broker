<?php
/**
* Custom template for displaying the members page
*
* Template Name: Members Area Child Page
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package bitcoin_broker
*/
get_header(); ?>
<style>
.section-feat-img::before {
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: block;
    position: absolute;
    top: 0;
}
.footer-wrapper {
	margin-top: 75px;
}
section.section-page {
    background: #f5f5f5;
    margin-top: 0;
}
.dash-card {
    background: linear-gradient(60deg, #f7931a, #ff0000);
    position: relative;
    min-height: 1px;
    padding: 5px;
    color: #fff;
    border-radius: 5px;
    text-align: center;
    top: -40px;
    width: 100%;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    margin-top: 30px;
    max-width: 250px;
    margin: 0 auto;
    left: 0;
    right: 0;
}
.dash-wrapper {
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #c7c7c7;
    margin: 0 15px;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    background: #fff;
    margin-top: 45px;
    margin-bottom: 30px;
}
form input[type="button"], form input[type="submit"] {
    background: #f7931a;
}
.footer-wrapper {
    margin-top: 0;
}
@media (max-width: 767px) {
    .section-page {
        margin-top: 0;
    }
}
.rcp_form input[type="text"],
form input[type="email"],
.rcp_form input[type=password],
.rcp_form select {
    display: block;
    width: 100%;
    border-radius: 5px !important;
    border: 1px solid #c7c7c7 !important;
    font-size: 16px !important;
}
form input[type="submit"] {
    width: 100%;
    max-width: 100%;
}
.back-to-members-area-btn {
  display: block;
  width: 100%;
  background: #444;
  color: #fff;
  border-radius: 5px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  padding: 15px;
  min-height: 40px;
  text-align: center;
  margin-bottom: 15px;
  -webkit-box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
  box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);
}
.back-to-members-area-btn:hover,
.back-to-members-area-btn:focus {
  color: #fff;
}
.rcp-table {
    width: 100%;    margin-bottom: 15px;
}
.rcp-table thead tr th,
.rcp-table tbody tr td {
    border: 1px solid #c7c7c7;
    padding: 5px;
}
</style>

<div class="outer-wrapper clearfix">
  <div class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <section class="section-page">

            <style>
            </style>
            <div class="container">
              <div class="row">
                <a href="https://krbecrypto.com/members-area" class="back-to-members-area-btn" title="Back to Members Area"><i class="fa fa-angle-left" style="float: left;"></i> Back To Members Area</a>
        				<div class="dash-wrapper clearfix">
                    <div class="dash-card">
                        <h3 style="color: #fff;"><?php the_title(); ?></h3>
                    </div>
                    <div class="col-xs-12" >

                      <?php the_content(); ?>
                    </div>
                </div>
              </div>
            </div>

    </section><!-- end of <section class="section-page"> -->

  </div><!-- end of .wrapper -->
</div><!-- end of .outer-row -->


<?php get_footer();
