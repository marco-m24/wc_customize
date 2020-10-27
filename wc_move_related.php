// Rimuoviamo i prodotti correlati dalla posizione originale
 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
 


// Aggiungiamoli nella nuova tab
 
add_filter( 'woocommerce_product_tabs', 'mrc_woo_new_product_tab' );
 
function mrc_woo_new_product_tab( $tabs ) {
    
	$tabs['related_products'] = array(
	   'title'    => __( 'Guarda qui', 'woocommerce' ),
	   'priority'    => 50,
	   'callback'    => 'woo_new_product_tab_content'
	);
	   return $tabs;
}


 
// Mettiamo i prodotti correlati dentro le tab
 
function woo_new_product_tab_content() {
	woocommerce_output_related_products();
}
