<style>
.register-wrapper-title {
  text-align: center;
  color: #f7921a;
}
.rcp_subscription_level {
  display: inline-block;
  width: 100%;
  float: left;
}
.rcp_subscription_level label {
  display: block;
  border: 1px solid #c7c7c7;
  background: #f5f5f5;
  border-radius: 5px;
  padding: 15px 5px;
  margin: 5px;
  text-align: center;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}
.rcp_subscription_level.selected label {
  background: #f7921a;
  border: 1px solid #f7921a;
  color: #fff;
}
.rcp_subscription_level.selected label {
  background: #f7921a;
  border: 1px solid #f7921a;
  color: #fff;
}
.rcp_subscription_level label .rcp_level_description {
  font-size: 16px;     border: none;
}
.rcp_subscription_level input[type="radio"] {
  display: none;
}
.pay-with-crypto-wrapper {

}

.pay-with-crypto-wrapper .pay-with-crypto-inner-wrap {
border: 1px solid #c7c7c7;
background: #f5f5f5;
border-radius: 5px;
padding: 15px 5px;
margin: 25px 5px;
text-align: center;
box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}
.product .button.add_to_cart_button {
  display: block;
  color: #fff;
  min-height: 40px;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  background: linear-gradient(50deg, #f7931a, #ff0000);
  max-width: none;
  min-height: 40px;
  font-size: 16px;
  padding: 15px 0;
  font-size: 24px;
  font-weight: bold;
  text-transform: uppercase;
  border: none;
  border: 1px solid rgba(0,0,0,0.2);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  background: linear-gradient(50deg, #f7931a, #ff0000);
}
.product .button.add_to_cart_button:hover, .product .button.add_to_cart_button:focus {
  background: #444;
  border-color: #444;
  color: #fff;
}
.product .button.add_to_cart_button:hover,
.product .button.add_to_cart_button:focus {
background: linear-gradient(50deg, #f7931a, #ff0000);
border: 1px solid rgba(0,0,0,0.2);
}
#rcp_auto_renew_wrap input#rcp_auto_renew {
width: 16px;
height: 16px;
margin: 0;
position: absolute;
}
.register-wrapper {
background: #fff;
padding: 15px;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
}
.register-form-col p.rcp_subscription_message {
  display: none;
}
.dont-miss-out-separator-col {
margin-top: 0;
}
#rcp_auto_renew_wrap label[for="rcp_auto_renew"] {
position: relative;
    top: 10px;
    border-bottom: 5px solid #f78617;
    left: 20px;
    display: inline-block;
}
.rcp_subscription_level .rcp_subscription_level_name {
  display: block;
  font-size: 20px;
  font-weight: bold;
}
.rcp_subscription_level .rcp_separator {
  display: none;
}
.rcp_subscription_level .rcp_price {
  display: block;
}
p#rcp_auto_renew_wrap {
  margin-bottom: 30px;
  margin-top: 10px;
}
.pay-with-crypto-buttons-wrapper {
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}
p.rcp_error.empty_password {
    width: 100%;
    max-width: 450px;
    margin: 25px auto 0;
}
ul#rcp_subscription_levels .rcp_subscription_level {
    padding-top: 25px;
}
li.rcp_subscription_level.rcp_subscription_level_2 {
    position: relative;
    margin-top: 25px;
}
li.rcp_subscription_level.rcp_subscription_level_2::before {
    background: url(https://krbecrypto.com/wp-content/uploads/2018/03/best-value-15-off.png);
    height: 75px;
    width: 100%;
    content: "";
    position: absolute;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    top: -20px;
}
.best-value-crypto-img {
  display: block;width: 100%;
}
td[data-th="Total Today"] {
    color: green;
    font-weight: bold;
}
@media (min-width: 768px) {
  .rcp_subscription_level {
    width: 50%;
    display: inline-block;
    float: left;
  }
  .dont-miss-out-separator-col {
    margin-top: 50px;
  }
  li.rcp_subscription_level.rcp_subscription_level_2 {
      margin-top: 0;
  }
  li.rcp_subscription_level.rcp_subscription_level_2::before {
      height: 50px;
  }
  .best-value-crypto-img {
    margin-top: -20px;
  }
}
</style>
<div class="container">

  <div class="row">
    <div class="register-form-col register-cc-form-col col-xs-12 col-md-6" >
      <div class="register-wrapper clearfix">
        <h3 class="register-wrapper-title"><i class="fa fa-money" style="margin-right: 15px;"></i> Pay with Credit Card</h3>
        <ol style="font-size: 20px; font-weight: bold; margin-top: 15px;">
          <li>Choose Your Membership Subscription</li>
          <li>Pay With Credit Card</li>
        </ol>
      </div>
      <?php echo do_shortcode('[register_form]'); ?>
    </div>

    <div class="register-form-col register-crypto-form-col col-xs-12 col-md-6">
      <div class="register-wrapper clearfix">
        <h3 class="register-wrapper-title"><i class="fa fa-bitcoin" style="margin-right: 15px;"></i> Pay with Crypto</h3>
        <ol style="font-size: 20px; font-weight: bold; margin-top: 15px;">
          <li>Choose Your Membership Subscription</li>
          <li>Pay With Cryptocurrency</li>
        </ol>
      </div>
      <div class="pay-with-crypto-buttons-wrapper clearfix" style="background: #fff; padding: 0 15px;">

        <div class="row row-eq-height">
          <div class="pay-with-crypto-wrapper col-xs-12 col-md-6 ">
              <div class="pay-with-crypto-inner-wrap">
                <h3 style="font-weight: bold; margin-top: 0;" >Monthly Subscription</h3>
                <p><b>$99.00</b></p>
                <p><b>1 Month</b></p>
                <p>1 Month Access exclusive KRBE Crypto Digital Assets Group content for one month.</p>
                <?php echo do_shortcode('[product id="212"]'); ?>
              </div>
          </div>
          <div class="pay-with-crypto-wrapper col-xs-12 col-md-6 ">
              <img src="https://krbecrypto.com/wp-content/uploads/2018/03/best-value-15-off.png" class="best-value-crypto-img" style="">
              <div class="pay-with-crypto-inner-wrap" style="margin-top: 0;">
                <h3 style="font-weight: bold; margin-top: 0;" >Annual Subscription</h3>
                <p><b>$999.00</b></p>
                <p><b>1 Year</b></p>
                <p>1 Year Access exclusive KRBE Crypto Digital Assets Group content for one year.</p>
                <?php echo do_shortcode('[product id="213"]'); ?>
              </div>
          </div>
        </div>

      </div>
    </div>
  </div>

    <!-- Nav tabs -->
    <!-- <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
        <a href="#money" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-money" style="margin-right: 15px;"></i>Pay with Credit Card</a>
      </li>
      <li role="presentation">
        <a href="#crypto" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-bitcoin" style="margin-right: 15px;"></i>Pay with Crypto</a>
      </li>
    </ul> -->

    <!-- Tab panes -->
    <!-- <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="money"> -->

</div>
<script>
jQuery(document).ready(function() {
  determineWhichSubLevelIsActive();
  jQuery('.rcp_form input#rcp_submit').attr('value', 'GET ACCESS NOW');
});

jQuery('#rcp_subscription_levels').on('click', function() {
  determineWhichSubLevelIsActive();
});

function determineWhichSubLevelIsActive() {
    jQuery('#rcp_subscription_levels li').removeClass('selected');
    jQuery('#rcp_subscription_levels input[type="radio"]').each( function() {
      if ( jQuery(this).is(':checked') ) {
        // console.log( jQuery(this).attr('value') );
        jQuery(this).parent().addClass('selected');
      }

    });
  }
  </script>
