<?php
/**
 * Plugin Name:       Ammonite Remove Local Pickup For Subscriptions
 * Description:       Remove local pickup option on subscription orders with JavaScript
 * Version:           1.0.0
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 */

/*
  Basic Security
*/
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
  Plugin Base Class
*/
if ( !class_exists( 'Ammonite_Remove_Local_Pickup_For_Subscriptions' ) ) {
  class Ammonite_Remove_Local_Pickup_For_Subscriptions {
    // Add class methods here
    public static function register_styles_and_scripts() {
      add_action( 'wp_enqueue_scripts', function() {
        // Remove jQuery dependency if unnecessary
        wp_register_script( 'ammonite-remove-local-pickup-for-subscriptions-script', plugins_url('assets/js/ammonite-remove-local-pickup-for-subscriptions.js', __FILE__ ), array('jquery'), '1.0.0', true );
      } );
    }

    public static function enqueue_styles_and_scripts() {
      add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_script( 'ammonite-remove-local-pickup-for-subscriptions-script' );
      } );
    }
  }

  // Call methods on load here
  Ammonite_Remove_Local_Pickup_For_Subscriptions::register_styles_and_scripts();
  Ammonite_Remove_Local_Pickup_For_Subscriptions::enqueue_styles_and_scripts();
}
