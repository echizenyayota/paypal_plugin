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
add_action( 'wp_head', 'hook_paypalexpress' );

function hook_paypalexpress() {
	$output = '<script src="https://www.paypalobjects.com/api/checkout.js"></script>';
	echo $output;
}

// expresscheckout.jsの読み込み
function plugin_paypalexpress_scripts() {
  wp_enqueue_style( 'plugin_paypalexpress_scripts', plugins_url( '/js/expresscheckout.js', __FILE__ ), array(), date('U') );
}

add_action( 'wp_enqueue_scripts', 'plugin_paypalexpress_scripts' );
