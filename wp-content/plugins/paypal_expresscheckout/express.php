<?php
/**
 * @package express
 */
/*
Plugin Name: PayPal Express Checkout
Plugin URI: https://example.com
Description: PayPal Express Checkout
Version: 0.0.0
Author: echizenya
Author URI: https://e-yota.com
License: GPLv2 or later
Text Domain: paypal_expresscheckout
*/

// wp_enqueue_scripts フックでpaypal_scriptsをエンキューする
function paypal_scripts() {
	wp_enqueue_script( 'paypal-checkout', 'https://www.paypalobjects.com/api/checkout.js' );
	wp_enqueue_script( 'paypal-expresscheckout', plugin_dir_url( __FILE__ ) . '/js/expresscheckout.js', array( 'paypal-checkout' ) );
	wp_localize_script( 'paypal-expresscheckout', 'paypal_expresscheckout_param', array(
			'color' => 'blue', // gold, blue, silver, black
	) );
}
add_action( 'wp_enqueue_scripts', 'paypal_scripts' );

// [paypaldiv]のショートコード （投稿記事画面に貼るとPayPalボタンが表示されるt）
function paypaldiv_func(){
  $paypaldiv = '<div id="paypal-button-container"></div>';
  return $paypaldiv;
}
add_shortcode( 'paypaldiv', 'paypaldiv_func' );

require_once(plugin_dir_url( __FILE__ ) . 'express_admin.php');
