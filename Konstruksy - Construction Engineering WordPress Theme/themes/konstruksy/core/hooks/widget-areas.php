<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * register widget area
 */

function konstruksy_widget_init()
{
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => esc_html__('Blog Widgets', 'konstruksy'),
                'id' => 'sidebar-1',
                'description' => esc_html__('Appears on posts.', 'konstruksy'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
    }
}

add_action('widgets_init', 'konstruksy_widget_init');


function footer_left_widgets_init(){
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
      'name' => 'Footer Left Widgets',
      'id' => 'footer-left',
      'before_widget' => '<div class="footer-left-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
}
add_action( 'widgets_init', 'footer_left_widgets_init' );

function footer_center_widgets_init(){
   if ( function_exists('register_sidebar') )
   register_sidebar(array(
     'name' => 'Footer Center Widgets',
     'id' => 'footer-center',
     'before_widget' => '<div class="footer-widget footer-center-widget">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>',
   )
 );
}
add_action( 'widgets_init', 'footer_center_widgets_init' );

function footer_right_widgets_init(){
   if ( function_exists('register_sidebar') )
   register_sidebar(array(
     'name' => 'Footer Right Widgets',
     'id' => 'footer-right',
     'before_widget' => '<div class="footer-widget footer-right-widget">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="widget-title">',
     'after_title' => '</h3>',
   )
 );
}
add_action( 'widgets_init', 'footer_right_widgets_init' );

function menu_widgets_init(){
    if ( function_exists('register_sidebar') )
        register_sidebar(array(
                'name' => 'Fixed Nav Menu Widgets',
                'id' => 'fixed_nav_widgets',
                'before_widget' => '<div class="fixed-sidebar-nav">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
}
add_action( 'widgets_init', 'menu_widgets_init' );

function social_widgets_init(){
    if ( function_exists('register_sidebar') )
        register_sidebar(array(
                'name' => 'Fixed Nav Social Widgets',
                'id' => 'fixed-nav-social-widgets',
                'before_widget' => '<div class="fixed-sidebar-social-menu">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
}
add_action( 'widgets_init', 'social_widgets_init' );

function woo_widgets(){
    if ( function_exists('register_sidebar') )
        register_sidebar(
            array(
                'name'			 => esc_html__( 'WooCommerce Widgets', 'konstruksy' ),
                'id'			 => 'sidebar-woo',
                'description'	 => esc_html__( 'Appears on posts and pages.', 'konstruksy' ),
                'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
                'after_widget'	 => '</div> <!-- end widget -->',
                'before_title'	 => '<h3 class="widget-title">',
                'after_title'	 => '</h3><span class="animate-border border-offwhite tw-mt-20"></span>',
            ) );
}
add_action( 'widgets_init', 'woo_widgets' );