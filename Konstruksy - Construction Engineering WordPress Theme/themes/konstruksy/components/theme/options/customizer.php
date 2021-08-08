<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 * section name format: konstruksy_section_{section name}
 */
$options = [
	'konstruksy_section_theme_settings' => [
		'title'				 => esc_html__( 'Theme Settings', 'konstruksy' ),
		'options'			 => Konstruksy_Theme_Includes::_customizer_options(),
		'wp-customizer-args' => [
			'priority' => 1,
		],
	],
];
