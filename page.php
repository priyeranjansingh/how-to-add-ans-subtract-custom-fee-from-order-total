/*
* open your themes function.php or child theme function.php and copy pase below code there
* add or subtract custom fee from order total
* to add keep positive amount
* to subtract keep negative amount
*/
function custom_fee() {
 
	global $woocommerce;
  $fee=40;
	$woocommerce->cart->add_fee( __('Custom Fee', 'woocommerce'), $fee ); 
}
add_action( 'woocommerce_cart_calculate_fees', 'custom_fee' );
