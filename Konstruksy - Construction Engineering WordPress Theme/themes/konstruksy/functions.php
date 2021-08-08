<?php

/**
 * theme's main functions and globally usable variables, contants etc
 * added: v1.0 
 * textdomain: konstruksy, class: KONSTRUKSY, var: $konstruksy_, constants: KONSTRUKSY_, function: konstruksy_
 */

// shorthand contants
// ------------------------------------------------------------------------
define('KONSTRUKSY_THEME', 'Konstruksy WordPress Theme');
define('KONSTRUKSY_VERSION', '1.1');
define('KONSTRUKSY_MINWP_VERSION', '4.3');


// shorthand contants for theme assets url
// ------------------------------------------------------------------------
define('KONSTRUKSY_THEME_URI', get_template_directory_uri());
define('KONSTRUKSY_IMG', KONSTRUKSY_THEME_URI . '/assets/images');
define('KONSTRUKSY_CSS', KONSTRUKSY_THEME_URI . '/assets/css');
define('KONSTRUKSY_JS', KONSTRUKSY_THEME_URI . '/assets/js');



// shorthand contants for theme assets directory path
// ----------------------------------------------------------------------------------------
define('KONSTRUKSY_THEME_DIR', get_template_directory());
define('KONSTRUKSY_IMG_DIR', KONSTRUKSY_THEME_DIR . '/assets/images');
define('KONSTRUKSY_CSS_DIR', KONSTRUKSY_THEME_DIR . '/assets/css');
define('KONSTRUKSY_JS_DIR', KONSTRUKSY_THEME_DIR . '/assets/js');

define('KONSTRUKSY_CORE', KONSTRUKSY_THEME_DIR . '/core');
define('KONSTRUKSY_COMPONENTS', KONSTRUKSY_THEME_DIR . '/components');
define('KONSTRUKSY_EDITOR', KONSTRUKSY_COMPONENTS . '/editor');
define('KONSTRUKSY_EDITOR_ELEMENTOR', KONSTRUKSY_EDITOR . '/elementor');
define('KONSTRUKSY_EDITOR_GUTENBERG', KONSTRUKSY_EDITOR . '/gutenberg');
define('KONSTRUKSY_SHORTCODE_DIR_STYLE', KONSTRUKSY_EDITOR_ELEMENTOR . '/widgets/style');
define('KONSTRUKSY_INSTALLATION', KONSTRUKSY_CORE . '/installation-fragments');
define('KONSTRUKSY_REMOTE_CONTENT', esc_url('http://wordpress.altdesain.com/konstruksy'));


// set up the content width value based on the theme's design
// ----------------------------------------------------------------------------------------
if (!isset($content_width)) {
    $content_width = 800;
}

// set up theme default and register various supported features.
// ----------------------------------------------------------------------------------------

function konstruksy_setup() {

    // make the theme available for translation
    $lang_dir = KONSTRUKSY_THEME_DIR . '/languages';
    load_theme_textdomain('konstruksy', $lang_dir);

    // add support for post formats
    add_theme_support('post-formats', [
        'standard', 'image', 'video', 'audio','gallery'
    ]);

    // add support for automatic feed links
    add_theme_support('automatic-feed-links');

    // let WordPress manage the document title
    add_theme_support('title-tag');

    // add support for post thumbnails
    add_theme_support('post-thumbnails');

    // hard crop center center
    set_post_thumbnail_size(750, 465, ['center', 'center']);
    add_image_size( 'konstruksy-small', 350, 250, ['center', 'center'] );
 
    // register navigation menus
    register_nav_menus(
        [
            'primary' => esc_html__('Primary Menu', 'konstruksy'),
            'footermenu' => esc_html__('Footer Menu', 'konstruksy'),
            'submenu' => esc_html__('Sub Header Menu', 'konstruksy'),
        ]
    );

    // HTML5 markup support for search form, comment form, and comments
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    /*
     * Enable support for wide alignment class for Gutenberg blocks.
     */
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );

    add_theme_support('woocommerce');

}
add_action('after_setup_theme', 'konstruksy_setup');


add_action('enqueue_block_editor_assets', 'konstruksy_action_enqueue_block_editor_assets' );
function konstruksy_action_enqueue_block_editor_assets() {
    wp_enqueue_style( 'konstruksy-fonts', konstruksy_google_fonts_url(['Poppins:100,100i,200,200i,300,300i,400,400i,700,700i,900,900i', 'Poppins:100,100i,200,200i,300,300i,400,400i,700,700i,900,900i']), null, KONSTRUKSY_VERSION );
    wp_enqueue_style( 'konstruksy-gutenberg-editor-font-awesome-styles', KONSTRUKSY_CSS . '/font-awesome.css', null, KONSTRUKSY_VERSION );
    wp_enqueue_style( 'konstruksy-gutenberg-editor-customizer-styles', KONSTRUKSY_CSS . '/gutenberg-editor-custom.css', null, KONSTRUKSY_VERSION );
    wp_enqueue_style( 'konstruksy-gutenberg-editor-styles', KONSTRUKSY_CSS . '/gutenberg-custom.css', null, KONSTRUKSY_VERSION );
    wp_enqueue_style( 'konstruksy-gutenberg-blog-styles', KONSTRUKSY_CSS . '/blog.css', null, KONSTRUKSY_VERSION );
}

// hooks for unyson framework
// ----------------------------------------------------------------------------------------
function konstruksy_framework_customizations_path($rel_path) {
    return '/components';
}
add_filter('fw_framework_customizations_dir_rel_path', 'konstruksy_framework_customizations_path');

function konstruksy_remove_fw_settings() {
    remove_submenu_page( 'themes.php', 'fw-settings' );
}
add_action( 'admin_menu', 'konstruksy_remove_fw_settings', 999 );


// include the init.php
// ----------------------------------------------------------------------------------------
require_once( KONSTRUKSY_CORE . '/init.php');
require_once( KONSTRUKSY_COMPONENTS . '/editor/elementor/elementor.php');

