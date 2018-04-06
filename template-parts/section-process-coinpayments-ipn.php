<section class="process-coinpayments-ipn-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3>Process Coinpayments IPN</h3>
				<?php
				// https://krbecrypto.com/process-coinpayments-ipn/?merchant=bcd73cd2c9bb50d89a74b67d6d484c4c

				$merchant_id = 'bcd73cd2c9bb50d89a74b67d6d484c4c';
				$secret = 'ER*^at4x)qwt12KRhXc';

				// $merchant = isset($_POST['merchant']) ? $_POST['merchant']:'';
				$merchant = isset($_GET['merchant']) ? $_GET['merchant'] : '';
				if (empty($merchant)) {
				  die("No Merchant ID passed");
				}
				if ($merchant != $merchant_id) {
				  die("Invalid Merchant ID");
				}

				$first_name = $_GET["first_name"];
				$last_name = $_GET["last_name"];
				$email = $_GET["email"];
				$item_name = $_GET["item_name"];
				$status = $_GET["status"];

				// <0 = Failures/Errors
				// 0-99 = Payment is Pending in some way
				// >=100 = Payment completed successfully
				if ( $status < 0 ) {
					// -2 = PayPal Refund or Reversal
					// -1 = Cancelled / Timed Out
					if ($status == -1) {
						echo 'Payment cancelled/timed out.';	
					} else {
						echo 'Payment error.';								
					}			
				} else if ( $status < 0 ) {
					// 1 = We have confirmed coin reception from the buyer
					// 2 = Queued for nightly payout (if you have the Payout Mode for this coin set to Nightly)
					// 3 = PayPal Pending (eChecks or other types of holds)
					echo 'Payment is pending';
				} else if ( $status >= 100 ) {
					// 1 = We have confirmed coin reception from the buyer
					// 2 = Queued for nightly payout (if you have the Payout Mode for this coin set to Nightly)
					// 3 = PayPal Pending (eChecks or other types of holds)
					echo 'Payment Complete.'; ?>

					<h3>Payment Details</h3>
					<!-- // set user's membership to active -->
					<?php
					echo $first_name;
					echo $last_name;
					echo $email;
					echo $item_name;
					echo $status;
					?>

					<?php
				}

				?>
			</div>
		</div>
	</div>
</section>