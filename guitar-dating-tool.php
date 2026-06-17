<?php
/**
 * Plugin Name: Guitar Dating Tool
 * Plugin URI: https://guitarchopshop.com/guitar-dating-tool
 * Description: Premium Guitar Dating Tool - Find the year of your Gibson, Fender, Gretsch, Lowden, Martin, Rickenbacker & Taylor
 * Version: 1.0.0
 * Author: Guitar Chop Shop
 * Author URI: https://guitarchopshop.com
 * License: GPL v2 or later
 * Text Domain: guitar-dating-tool
 * Domain Path: /languages
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'GDT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'GDT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'GDT_PLUGIN_VERSION', '1.0.0' );

// Include required files
require_once GDT_PLUGIN_DIR . 'includes/class-gdt-core.php';
require_once GDT_PLUGIN_DIR . 'includes/class-gdt-dating.php';

// Initialize plugin
add_action( 'plugins_loaded', function() {
    new GDT_Core();
} );

// Activation hook
register_activation_hook( __FILE__, function() {
    update_option( 'gdt_plugin_activated', true );
} );

// Deactivation hook
register_deactivation_hook( __FILE__, function() {
    delete_option( 'gdt_plugin_activated' );
} );
