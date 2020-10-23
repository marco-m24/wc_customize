add_action( 'wp', 'mrc_add_product_to_cart_on_page_id_load' );
  
function mrc_add_product_to_cart_on_page_id_load() {
          
   // product ID to add to cart
   $product_id = ID_PROD;
 
   // page ID to target         
   if ( is_page( ID_PAGE ) ) {    
      WC()->cart->empty_cart();
      WC()->cart->add_to_cart( $product_id ); 
   }
    
}
