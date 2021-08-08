<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class konstruksy_Shortcode{

	/**
     * Holds the class object.
     *
     * @since 1.0
     *
     */
    public static $_instance;


    /**
     * Localize data array
     *
     * @var array
     */
    public $localize_data = array();

	/**
     * Load Construct
     *
     * @since 1.0
     */

	public function __construct(){
        add_action('elementskit/loaded', [$this, 'init']);
    }

	public function init(){

		add_action('elementor/init', array($this, 'konstruksy_widget_category'));
        add_action('elementor/widgets/widgets_registered', array($this, 'konstruksy_shortcode_elements'));
        add_action('elementor/editor/after_enqueue_styles', array($this, 'editor_enqueue_styles'));
        add_action('elementor/frontend/before_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('elementor/preview/enqueue_styles', array($this, 'preview_enqueue_scripts'));
	}


    /**
     * Enqueue Scripts
     *
     * @return void
     */

     public function enqueue_scripts() {
       wp_enqueue_script( 'konstruksy-main-elementor', KONSTRUKSY_JS  . '/elementor.js',array( 'jquery', 'elementor-frontend' ), KONSTRUKSY_VERSION, true );
    }

    /**
     * Enqueue editor styles
     *
     * @return void
     */

    public function editor_enqueue_styles() {
//        wp_enqueue_style( 'konstruksy-panel', KONSTRUKSY_CSS.'/panel.css',null, KONSTRUKSY_VERSION );
//        wp_enqueue_style( 'konstruksy-icon-elementor', KONSTRUKSY_CSS.'/icofonts.css',null, KONSTRUKSY_VERSION );

    }

    /**
     * Preview Enqueue Scripts
     *
     * @return void
     */

    public function preview_enqueue_scripts() {}

    /**
     * Extend Icon pack core controls.
     *
     * @param  object $controls_manager Controls manager instance.
     * @return void
     */

    public function konstruksy_icon_pack( $controls_manager ) {

        require_once KONSTRUKSY_EDITOR_ELEMENTOR. '/controls/icon.php';

        $controls = array(
            $controls_manager::ICON => 'KONSTRUKSY_Icon_Controler',
        );

        foreach ( $controls as $control_id => $class_name ) {
            $controls_manager->unregister_control( $control_id );
            $controls_manager->register_control( $control_id, new $class_name() );
        }

    }
    
    public function konstruksy_widget_category($widgets_manager){
        \Elementor\Plugin::$instance->elements_manager->add_category(
            'konstruksy-elements',
            [
                'title' =>esc_html__( 'Konstruksy Elements', 'konstruksy' ),
                'icon' => 'fa fa-plug',
            ],
            1
        );
    }    

    public function konstruksy_shortcode_elements($widgets_manager){

        require_once KONSTRUKSY_EDITOR_ELEMENTOR.'/widgets/konstruksy-team.php';
        $widgets_manager->register_widget_type(new Elementor\Konstruksy_Team_Widget());

        if(class_exists('\Elementor\Elementskit_Widget_hotspot')){
            $widgets_manager->register_widget_type(new Elementor\Elementskit_Widget_hotspot());
        }
        if(class_exists('\Elementor\Elementskit_Widget_Chart')){
            $widgets_manager->register_widget_type(new Elementor\Elementskit_Widget_Chart());
        }
    }

	public static function konstruksy_get_instance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new konstruksy_Shortcode();
        }
        return self::$_instance;
    }
}

konstruksy_Shortcode::konstruksy_get_instance();

if(!defined('ELEMENTOR_PRO_VERSION')){
    add_action( 'elementor/editor/after_enqueue_styles', function() {
        wp_enqueue_style( 'xs-elementor-editor-panel',  KONSTRUKSY_CSS . '/elementor-editor-panel.css', null,  KONSTRUKSY_VERSION );
    });
}