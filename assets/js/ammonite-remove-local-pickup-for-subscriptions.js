// Run after DOM content is loaded
jQuery( document ).ready( function() {
  // Check if this is the cart page and if any of the subscription radio buttons are checked
  if ( jQuery( 'body' )[0].classList.contains( 'woocommerce-cart' ) && jQuery( '.subscription-option input:checked' ).length != 0 ) {
    jQuery( '.toggle-default-handling' ).remove();
  }

  // Check if this is the checkout page and if any of the table items contain the class "subscription-details"
  if ( jQuery( 'body' )[0].classList.contains( 'woocommerce-checkout' ) && jQuery( '.subscription-details' ).length != 0 ) {
    // Wait for AJAX shipping method update
    jQuery( document.body ).on( 'updated_checkout', function() {
      jQuery( '.toggle-default-handling' ).remove();
    } );
  }
} );

// Run after cart totals are updated
jQuery( document.body ).on( 'updated_cart_totals', function() {
  // Check if this is the cart page and if any of the subscription radio buttons are checked
  if ( jQuery( 'body' )[0].classList.contains( 'woocommerce-cart' ) && jQuery( '.subscription-option input:checked' ).length != 0 ) {
    jQuery( '.toggle-default-handling' ).remove();
  }
});
