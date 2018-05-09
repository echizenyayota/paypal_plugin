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
			'style' => '',　//gold, blue, silver, black
	) );
}
add_action( 'wp_enqueue_scripts', 'paypal_scripts' );

// [paypaldiv]のショートコード （投稿記事画面に貼るとPayPalボタンが表示されるt）
function paypaldiv_func(){
  $paypaldiv = '<div id="paypal-button-container"></div>';
  return $paypaldiv;
}
add_shortcode( 'paypaldiv', 'paypaldiv_func' );

// 管理画面の表示
function paypalexpresscheckout_add_admin_menu(){
    add_submenu_page('plugins.php','PayPal Express Checkoutの設定','PayPal Express Checkoutの設定', 'administrator', __FILE__, 'paypalexpresscheckout_admin_menu');
}
add_action('admin_menu', 'paypalexpresscheckout_add_admin_menu');

// 管理画面の設定
function paypalexpresscheckout_admin_menu() {
	echo <<<EOD
	<h2>PayPal Express Checkoutの設定画面</h2>
		<form action="" method="">
			style_color:
			<input type="radio" name="color" value="red" checked> gold
      <input type="radio" name="color" value="blue"> blue
			<input type="radio" name="color" value="blue"> silver
			<input type="radio" name="color" value="blue"> black
		<form>
EOD;
}
