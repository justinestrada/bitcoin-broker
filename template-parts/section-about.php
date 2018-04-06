<?php
/**
 * About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
?>
<style>
.bitcoin-gif {
	display: block;
	width: 100%;
	max-width: 200px;
	margin: 0 auto;
}
</style>

<section id="about" class="section-about section-body clearfix">
  <div class="container">
    <div class="col-xs-12 text-center">
      <h3 style="margin-bottom: 75px;"><?php _e('About KRBE Digital Assets Group '); ?></h3>
  	</div>
		<div class="row">
	  	<div class="col-xs-12 col-sm-5 col-md-3">
	        <img src="<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/bitcoin.webp" class="bitcoin-gif">
	    </div>
	  	<div class="col-xs-12 col-sm-7 col-md-6">
	        <blockquote><?php _e( 'We are bridging the gap between cryptocurrency and the community' ); ?></blockquote>
	        <p><?php _e( 'The invention of Bitcoin in 2009 sparked a new wave of innovation around the world using blockchain technology. This innovation has led engineers, designers, cypherpunks and financial leaders to help foster a new digital economy.'); ?></p>
	        <p><?php _e( 'But what about consumers? We understand that everyone is not a programmer or an investment banker so we aim to help small business owners, consumers and potential investors learn to use cryptocurrency.' ); ?></p>
	      </div><!-- end of <div class="col-xs-12 col-sm-6"> -->
	    <div class="hidden-xs hidden-sm col-md-3">
	      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
	      <div class="coinmarketcap-currency-widget" data-currency="bitcoin" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
	    </div>
		</div>
  </div>
</section><!-- end of <section id="email-sub" class="section-email-sub -->
