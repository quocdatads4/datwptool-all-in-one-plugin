<?php
if ( ! class_exists( 'DATWPTool_Settings' ) ) {
    class DATWPTool_Settings {
        public function __construct() {
            add_action( 'admin_init', array( $this, 'register_settings' ) );
        }

        public function register_settings() {
            register_setting( 'datcontact-settings-group', 'datwptool_link_order' );
            register_setting( 'datcontact-settings-group', 'datwptool_link_zalo' );
            register_setting( 'datcontact-settings-group', 'datwptool_link_phone' );
            register_setting( 'datcontact-settings-group', 'datwptool_link_messenger' );
            register_setting( 'datcontact-settings-group', 'datwptool_link_sms' );
        }
    }
}