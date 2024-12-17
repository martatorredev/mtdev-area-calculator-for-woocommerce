<?php
/**
 * Plugin Name: Area Calculator for WooCommerce
 * Plugin URI: https://github.com/martatorredev/mtdev-area-calculator-for-woocommerce
 * Description: A plugin to calculate area based on user input for WooCommerce.
 * Version: 1.0
 * Author: Marta Torre
 * Author URI: https://martatorre.dev
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mtdev-area-calculator
 * Domain Path: /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-area-calculator.php';

function mtdev_acp_init() {
    $area_calculator = new AreaCalculator();
    $area_calculator->renderShortcode();
}
add_action( 'init', 'mtdev_acp_init' );

function mtdev_acp_enqueue_assets() {
    wp_enqueue_style( 'mtdev-acp-style', plugins_url( 'assets/css/style.css', __FILE__ ), array(), filemtime( plugin_dir_path( __FILE__ ) . 'assets/css/style.css' ) );
    wp_enqueue_script( 'mtdev-acp-script', plugins_url( 'assets/js/script.js', __FILE__ ), array( 'jquery' ), filemtime( plugin_dir_path( __FILE__ ) . 'assets/js/script.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'mtdev_acp_enqueue_assets' );

?>