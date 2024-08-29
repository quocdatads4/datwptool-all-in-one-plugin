<?php
if ( ! class_exists( 'DATWPTool_Contact_Button' ) ) {
    class DATWPTool_Contact_Button {
        public function __construct() {
            add_action( 'wp_footer', array( $this, 'render_contact_button' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
        }

        public function enqueue_styles() {
            wp_enqueue_style( 'datcontact-styles', DATWPTOOL_PLUGIN_URL . 'assets/css/datcontact-styles.css' );
        }

        public function render_contact_button() {
            $plugin_url = DATWPTOOL_PLUGIN_URL . 'assets/css/images/icon-contact/';
            $link_order = esc_url( get_option('datwptool_link_order') );
            $link_zalo = esc_url( get_option('datwptool_link_zalo') );
            $link_phone = esc_url( get_option('datwptool_link_phone') );
            $link_messenger = esc_url( get_option('datwptool_link_messenger') );
            $link_sms = esc_url( get_option('datwptool_link_sms') );

            ob_start();
            include DATWPTOOL_PLUGIN_DIR . 'views/contact-button-template.php';
            echo ob_get_clean();
        }
    }
}