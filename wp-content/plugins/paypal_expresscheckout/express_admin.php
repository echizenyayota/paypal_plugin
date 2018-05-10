<?php
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
			color:
			<input type="radio" name="color" value="gold" checked> gold
      <input type="radio" name="color" value="blue"> blue
			<input type="radio" name="color" value="silver"> silver
			<input type="radio" name="color" value="black"> black
			<input type="submit" value="保存">
		<form>
EOD;
}
