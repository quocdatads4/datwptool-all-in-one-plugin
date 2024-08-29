<?php

class DATWPTool_Google_Tag_Manager {

    public function __construct() {
        add_action( 'admin_init', array( $this, 'register_settings' ) );
        add_action( 'wp_head', array( $this, 'insert_gtm_head' ) );
        add_action( 'wp_body_open', array( $this, 'insert_gtm_body' ) );
    }

    public function register_settings() {
        register_setting( 'dat4gmt-settings-group', 'dat4gmt_gtm_id' );
    }

    public function insert_gtm_head() {
        $gtm_id = get_option( 'dat4gmt_gtm_id' );
        if ( ! empty( $gtm_id ) ) {
            echo "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','" . esc_js( $gtm_id ) . "');</script>
<!-- End Google Tag Manager -->";
        }
    }

    public function insert_gtm_body() {
        $gtm_id = get_option( 'dat4gmt_gtm_id' );
        if ( ! empty( $gtm_id ) ) {
            echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=" . esc_attr( $gtm_id ) . "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->";
        }
    }
}
