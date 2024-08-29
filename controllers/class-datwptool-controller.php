<?php

class DATWPTool_Controller {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_pages'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));
    }

    public function add_admin_pages() {
        add_menu_page(
            'DATWPTool',
            'DATWPTool',
            'manage_options',
            'datwptool',
            array($this, 'admin_index'),
            'dashicons-admin-generic'
        );
    }
	/**
     * Enqueue admin styles
     */
    public function enqueue_admin_styles() {
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    }


    public function admin_index() {
        require_once plugin_dir_path(__FILE__) . '../views/admin-view.php';
    }
    public function enqueue_admin_assets() {
        wp_enqueue_style(
            'datwptool-admin-style',
            plugin_dir_url(__FILE__) . '../assets/css/style.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_script(
            'datwptool-admin-script',
            plugin_dir_url(__FILE__) . '../assets/js/main.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
}