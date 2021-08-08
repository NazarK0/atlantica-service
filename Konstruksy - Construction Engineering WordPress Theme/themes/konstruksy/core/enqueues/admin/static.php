<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * enqueue static files: javascript and css for backend
 */




wp_enqueue_style( 'konstruksy-admin',  KONSTRUKSY_CSS . '/xs-admin.css', null,  KONSTRUKSY_VERSION );
if ( defined( 'FW' ) ) {
    wp_enqueue_script('konstruksy-customize', KONSTRUKSY_JS . '/konstruksy-customize.js', array('jquery'), KONSTRUKSY_VERSION, true);
}

wp_localize_script( 'konstruksy-customize', 'admin_url_object',array( 'admin_url' => admin_url( 'post.php?action=elementor&post=' ) ) );
