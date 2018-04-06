<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bitcoin_broker
 */

?>
	<footer class="clearfix grey-bg">
	  <div class="footer-wrapper wrapper footer-small-body clearfix">

	    <!-- Footer - First Row -->
		<?php get_template_part( 'footer-parts/footer', 'first-row' ); ?>

	    <!-- Footer - Second Row -->
		<?php // get_template_part( 'footer-parts/footer', 'second-row' ); ?>

	  </div><!-- end of <div class="footer-wrapper wrapper clearfix"> -->
	</footer><!-- end of <footer class="footer-row -->

</div><!-- end of <div class="container-fluid"> -->
<?php wp_footer(); ?>
</body>
</html>
