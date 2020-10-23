add_filter( 'woocommerce_add_to_cart_validation', 'mrc_only_one_in_cart', 99, 2 );
   
function mrc_only_one_in_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}
