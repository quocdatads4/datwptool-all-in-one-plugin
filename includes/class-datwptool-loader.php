<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


class DATWPTool_Loader {
    protected $plugin_name;
    protected $version;

    public function __construct() {
        $this->plugin_name = 'datwptool-all-in-one-plugin';
        $this->version = '1.0.0';

        $this->load_dependencies();
        $this->define_admin_hooks();
        add_action('admin_menu', array($this, 'add_admin_pages'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('wp_head', array('DATWPTool_Google_Tag_Manager', 'insert_gtm_head'));
        add_action('wp_body_open', array('DATWPTool_Google_Tag_Manager', 'insert_gtm_body'));
    }

    private function load_dependencies() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'controllers/class-datwptool-controller.php';
    }

    private function define_admin_hooks() {
        $plugin_admin = new DATWPTool_Controller();
    }

    public function run() {
        // This method can be used to run additional hooks or setup procedures.
        
    }

    public function add_admin_pages() {
        add_menu_page('DATWPTool Settings', 'DATWPTool', 'manage_options', 'datwptool', array($this, 'admin_index'), 'dashicons-admin-tools', 110);
    }

    public function admin_index() {
        require_once plugin_dir_path(__FILE__) . 'views/google-tag-manager.php';
    }

    public function register_settings() {
        register_setting('dat4gmt-settings-group', 'dat4gmt_gtm_id');
    }
    
}
if (class_exists('DATWPTool_Loader')) {
    $datwptool = new DATWPTool_Loader();
}
