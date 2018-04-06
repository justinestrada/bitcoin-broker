
		    	<div class="charts-wrapper dash-wrapper clearfix">
					<div class="dash-card">
						<h3>Charts</h3>
					</div>
					<div class="charts-loader-wrapper clearfix">
						<i class="fa fa-cog fa-spin" style="font-size: 64px;"></i>
					</div>
		    		<!--
					coinmarket
		    		<div class="col-sm-6">
					</div>
		    		<div class="col-sm-6">
						<h3>ETH - Ethereum</h3>
						<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
						<div class="coinmarketcap-currency-widget" data-currency="ethereum" data-base="USD"  data-secondary="BTC"></div>
		    		</div>
		    		<div class="col-sm-6">
						<h3>LTC - Litecoin</h3>
						<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
						<div class="coinmarketcap-currency-widget" data-currency="litecoin" data-base="USD"  data-secondary="BTC"></div>
		    		</div>
		    		<div class="col-sm-6">
						<h3>ADA - Cardano</h3>
						<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
						<div class="coinmarketcap-currency-widget" data-currency="cardano" data-base="USD"  data-secondary="BTC"></div>
		    		</div> -->
						<div class="coinmarket-tickers-col col-xs-12 col-md-6">
							<h3>BTC - Bitcoin</h3>
							<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
							<div class="coinmarketcap-currency-widget" data-currency="bitcoin" data-base="USD" ></div>
						</div>
						<div class="coinmarket-tickers-col col-xs-12 col-md-6">
							<h3>ETH - Ethereum</h3>
							<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
							<div class="coinmarketcap-currency-widget" data-currency="ethereum" data-base="USD"  data-secondary="BTC"></div>
						</div>

						<div class="clearfix"></div>
		    		<div class="crypto-charts-col col-xs-12" style="display: none;" >
		    			<?php the_field('crypto_charts'); ?>
		    		</div>
		    	</div>
