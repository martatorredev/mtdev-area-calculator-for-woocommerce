<?php
/**
 * Plugin Name: Area Calculator Plugin
 * Description: A plugin to calculate area based on user input for WooCommerce.
 * Version: 1.0
 * Author: Marta Torre
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include the main class file.
require_once plugin_dir_path( __FILE__ ) . 'includes/class-area-calculator.php';

// Initialize the plugin.
function acp_init() {
    $area_calculator = new AreaCalculator();
    $area_calculator->registerShortcode();
}
add_action( 'init', 'acp_init' );

// Enqueue scripts and styles.
function acp_enqueue_assets() {
    wp_enqueue_style( 'acp-style', plugins_url( 'assets/css/style.css', __FILE__ ) );
    wp_enqueue_script( 'acp-script', plugins_url( 'assets/js/script.js', __FILE__ ), array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'acp_enqueue_assets' );
?>