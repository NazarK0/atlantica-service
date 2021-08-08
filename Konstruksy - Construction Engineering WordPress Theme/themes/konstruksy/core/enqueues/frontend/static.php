<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * enqueue all theme scripts and styles
 */


// stylesheets
// ----------------------------------------------------------------------------------------
if ( !is_admin() ) {
	// 3rd party css
   wp_enqueue_style( 'konstruksy-fonts', konstruksy_google_fonts_url(['Rubik:300,400,500,700,900&display=swap', 'Merriweather:300,300i,400,700,900&display=swap', 'Poppins:100,200,300,400,500,700,800']), null,  KONSTRUKSY_VERSION );
   wp_enqueue_style( 'bootstrap',  KONSTRUKSY_CSS . '/bootstrap.min.css', null,  KONSTRUKSY_VERSION );
   wp_enqueue_style( 'font-awesome',  KONSTRUKSY_CSS . '/font-awesome.css', null,  KONSTRUKSY_VERSION );
   wp_enqueue_style( 'owl-carousel',  KONSTRUKSY_CSS . '/owl.carousel.min.css', null,  KONSTRUKSY_VERSION );
   wp_enqueue_style( 'OverlayScrollbars',  KONSTRUKSY_CSS . '/OverlayScrollbars.min.css', null,  KONSTRUKSY_VERSION );
   wp_enqueue_style( 'owl-theme-default',  KONSTRUKSY_CSS . '/owl.theme.default.min.css', null,  KONSTRUKSY_VERSION );
   wp_enqueue_style( 'konstruksy-wocommerce-custom',  KONSTRUKSY_CSS . '/woocommerce.css', null,  KONSTRUKSY_VERSION );

   // theme css
	wp_enqueue_style( 'konstruksy-blog',  KONSTRUKSY_CSS . '/blog.css', null,  KONSTRUKSY_VERSION );
	wp_enqueue_style( 'konstruksy-gutenberg-custom',  KONSTRUKSY_CSS . '/gutenberg-custom.css', null,  KONSTRUKSY_VERSION );
 	wp_enqueue_style( 'konstruksy-master',  KONSTRUKSY_CSS . '/master.css', null,  KONSTRUKSY_VERSION );
}

// javascripts
// ----------------------------------------------------------------------------------------
if ( !is_admin() ) {

   // 3rd party scripts
	wp_enqueue_script( 'bootstrap',  KONSTRUKSY_JS . '/bootstrap.min.js', array( 'jquery' ),  KONSTRUKSY_VERSION, true );
    wp_enqueue_script( 'popper',  KONSTRUKSY_JS . '/Popper.js', array( 'jquery' ),  KONSTRUKSY_VERSION, true );

	// theme scripts
	wp_enqueue_script( 'owl-carousel',  KONSTRUKSY_JS . '/owl.carousel.min.js', array( 'jquery' ),  KONSTRUKSY_VERSION, true );

    // theme scripts
	wp_enqueue_script( 'konstruksy-overlayScrollbars',  KONSTRUKSY_JS . '/jquery.overlayScrollbars.min.js', array( 'jquery' ),  KONSTRUKSY_VERSION, true );
	// theme scripts
	wp_enqueue_script( 'konstruksy-script',  KONSTRUKSY_JS . '/script.js', array( 'jquery' ),  KONSTRUKSY_VERSION, true );

	// Load WordPress Comment js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}