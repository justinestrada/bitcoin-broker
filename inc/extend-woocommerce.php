<?php

add_theme_support('woocommerce');

function bitcoin_broker_woo_custom_cart_button_text() {
        return __( 'Get Access Now', 'woocommerce' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'bitcoin_broker_woo_custom_cart_button_text' ); // 2.1 +
add_filter( 'woocommerce_product_add_to_cart_text', 'bitcoin_broker_woo_custom_cart_button_text' );

/**
 * Changes the redirect URL for the Return To Shop button in the cart.
 *
 * @return string
 */
function bitcoin_broker_wc_empty_cart_redirect_url() {
	return get_site_url() . '/join/';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'bitcoin_broker_wc_empty_cart_redirect_url' );

/*
* Unset Checkout Fields
* * */
function bitcoinbroker_custom_override_checkout_fields( $fields ) {

	// unset($fields['billing']['billing_first_name']);
	// unset($fields['billing']['billing_last_name']);
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_state']);
	// unset($fields['billing']['billing_phone']);
	// unset($fields['order']['order_comments']);
	// unset($fields['billing']['billing_email']);
	// unset($fields['account']['account_username']);
	// unset($fields['account']['account_password']);
	// unset($fields['account']['account_password-2']);


    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'bitcoinbroker_custom_override_checkout_fields' );

/**
 * Auto Complete all WooCommerce orders.
 */
function bitcoinbroker_custom_woocommerce_auto_complete_order( $order_id ) {
    if ( ! $order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
}
add_action( 'woocommerce_thankyou', 'bitcoinbroker_custom_woocommerce_auto_complete_order' );
