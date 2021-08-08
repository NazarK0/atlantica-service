<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * register required plugins
 */

function konstruksy_register_required_plugins() {
	$plugins	 = array(
		array(
			'name'		 => esc_html__( 'Unyson', 'konstruksy' ),
			'slug'		 => 'unyson',
			'required'	 => true,
		),
		array(
			'name'		 => esc_html__( 'Elementor', 'konstruksy' ),
			'slug'		 => 'elementor',
			'required'	 => true,
			'version'	 => '3.1.0',
		),
        array(
            'name'		 => esc_html__( 'Elementskit Lite', 'konstruksy' ),
            'slug'		 => 'elementskit-lite',
            'required'	 => true,
        ),
		array(
			'name'		 => esc_html__( 'Metform', 'konstruksy' ),
			'slug'		 => 'metform',
			'required'	 => true,
		),
        array(
            'name'		 => esc_html__( 'WooCommerce', 'konstruksy' ),
            'slug'		 => 'woocommerce',
			'required'	 => true,
        ),
        array(
            'name'		 => esc_html__( 'Slider Revolution', 'konstruksy' ),
            'slug'		 => 'revslider',
			'required'	 => true,
			'version'	 => '6.4.11',
            'source'	 =>  esc_url(KONSTRUKSY_REMOTE_CONTENT . '/zlib-plugins/revslider.zip')
        ),
        array(
            'name'		 => esc_html__( 'Konstruksy Essential', 'konstruksy' ),
            'slug'		 => 'konstruksy-essential',
			'required'	 => true,
			'version'	 => '1.1',
            'source'	 =>  esc_url(KONSTRUKSY_REMOTE_CONTENT . '/zlib-plugins/konstruksy-essential.zip')
        ),
	);


	$config = array(
		'id'			 => 'konstruksy', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'konstruksy-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => false, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'konstruksy_register_required_plugins' );