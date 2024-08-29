<?php
/*
Plugin Name: DATWPTool - The best WordPress All-in-One plugin.
Description: The best WordPress All-in-One plugin. ❤ Made in Vietnam by DATMarketing™.
Author: DATMarketing™
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Define plugin paths
define( 'DATWPTOOL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'DATWPTOOL_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include classes
require_once DATWPTOOL_PLUGIN_DIR . 'includes/class-datwptool-google-tag-manager.php';
require_once DATWPTOOL_PLUGIN_DIR . 'includes/class-datwptool-contact-button.php';
require_once DATWPTOOL_PLUGIN_DIR . 'includes/class-datwptool-settings.php';

// Initialize the plugin
function datwptool_init() {
    new DATWPTool_Google_Tag_Manager();
    new DATWPTool_Contact_Button();
    new DATWPTool_Settings();
}
add_action( 'plugins_loaded', 'datwptool_init' );

// Admin menu
function datwptool_admin_menu() {
    add_menu_page(
        'DATWPTool',
        'DATWPTool',
        'manage_options',
        'datwptool-admin',
        'datwptool_admin_page',
        'dashicons-admin-tools',
        6
    );

}
add_action( 'admin_menu', 'datwptool_admin_menu' );

function datwptool_admin_page() {
    // Enqueue CSS styles
    wp_enqueue_style('datwptool-bootstrap-style', DATWPTOOL_PLUGIN_URL . 'assets/css/bootstrap.min.css');
    wp_enqueue_style('datwptool-custom-style', DATWPTOOL_PLUGIN_URL . 'assets/css/style.css');

    // Enqueue JavaScript files
    wp_enqueue_script('datwptool-jquery', DATWPTOOL_PLUGIN_URL . 'assets/js/jquery-3.6.0.min.js', array('jquery'), null, true);
    wp_enqueue_script('datwptool-popper', DATWPTOOL_PLUGIN_URL . 'assets/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('datwptool-bootstrap-script', DATWPTOOL_PLUGIN_URL . 'assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('datwptool-main-script', DATWPTOOL_PLUGIN_URL . 'assets/js/main.js', array('jquery'), null, true);

    // Include the admin view
    include DATWPTOOL_PLUGIN_DIR . 'views/admin-view.php';
}


add_action('admin_menu', 'datwptool_admin_menu');


?>