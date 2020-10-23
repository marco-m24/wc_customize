add_action( 'woocommerce_cart_is_empty', 'mrc_add_content_empty_cart' );
  
function mrc_add_content_empty_cart() {
   echo 'Questo viene mostrato quando la pagina del carrello è vuota<br><br>';
}
