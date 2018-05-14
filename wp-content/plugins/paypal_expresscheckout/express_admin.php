<?php
// 管理画面の設定
function paypalexpresscheckout_admin_menu() {
    echo <<<EOD
    <h2>PayPal Express Checkoutの設定画面</h2>
        <form action="paypal_expresscheckout/express.php" method="">
            color:
            <input type="radio" name="color" value="gold" checked> gold
            <input type="radio" name="color" value="blue"> blue
            <input type="radio" name="color" value="silver"> silver
            <input type="radio" name="color" value="black"> black
            <input type="submit" value="保存">
            <input type="hidden" id="btncolor" value="">
        <form>
EOD;
}

// クリックしたPayPalボタンの色の属性値を読み込む
function btncolor_scripts() {
	wp_enqueue_script( 'btncolor-script', plugin_dir_url( __FILE__ ) . '/js/btncheckout.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'btncolor_scripts' );
