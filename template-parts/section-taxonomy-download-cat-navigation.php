<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
$count_downloads = wp_count_posts('download');
$category_desc = category_description( );
$category_title = single_cat_title( '', false ); ?>
<section class="section-archive-navigation section-body clearfix">
  <div class="container">
    <div class="breadcrumb-col col-xs-12">

      <div class="breadcrumb-wrapper clearfix">
        <ul id="breadcrumbs" class="breadcrumbs">
          <li class="item-home"><a class="bread-link bread-home" href="https://justinestrada.com/kingbless" title="Home">Home</a></li>
          <li class="separator separator-home"> » </li>
          <li class="item-current item-archive"><strong class="bread-current bread-archive">Books</strong></li>
        </ul>
      </div>
      <h2 class="breadcrumb-title">
        <?php echo strip_tags( $category_desc ); ?>
      </h2>

    </div><!-- end of <div class="col-xs-12"> -->
  </div>
</section><!-- end of <section class="section-single-breadcrumb -->