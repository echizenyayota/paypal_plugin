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

// paypalobjectsをヘッドタグ内に挿入
function hook_paypalexpress() {
	$output = '<script src="https://www.paypalobjects.com/api/checkout.js"></script>';
	echo $output;
}
add_action( 'wp_head', 'hook_paypalexpress' );

// expresscheckout.jsの読み込み
function paypal_scripts() {
	wp_enqueue_script( 'paypal_scripts', plugins_url('/js/expresscheckout.js'));
}
add_action( 'wp_enqueue_scripts', 'paypal_scripts' );

// [paypaldiv]
function paypaldiv_func(){
  $paypaldiv = '<div id="paypal-button-container"></div>';
  return $paypaldiv;
}
add_shortcode( 'paypaldiv', 'paypaldiv_func' );

// [paypalbutton]
// function paypalbutton_func(){
//   paypal_scripts();
// }
// add_shortcode( 'paypalbutton', 'paypalbutton_func' );
