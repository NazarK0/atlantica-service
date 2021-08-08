<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */
if(!class_exists( 'WooCommerce' )) return;

$options = [
    'konstruksy_woocommerce_setting' => [
        'title' => esc_html__('WooCommerce', 'konstruksy'),

        'options' => [
            'konstruksy_shop_banner_setting' => [
                'type'        => 'popup',
                'label'       => esc_html__('Shop Page Banner settings', 'konstruksy'),
                'popup-title' => esc_html__('Shop Page Banner settings', 'konstruksy'),
                'button'      => esc_html__('Edit Shop Page Banner', 'konstruksy'),
                'size'        => 'medium', // small, medium, large
                'popup-options' => [
                    'konstruksy_shop_page_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'konstruksy' ),
                        'desc'          => esc_html__('Show or hide the banner', 'konstruksy'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'konstruksy' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'konstruksy' ),
                        ],
                    ],

                    'konstruksy_shop_banner_image'	 =>array(
                        'label'			 => esc_html__( 'Banner image', 'konstruksy' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),

                    ),
                    'konstruksy_shop_shop_banner_overlay_styl' => [
                        'type'  => 'rgba-color-picker',
                        'value' => '#edeff0',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        // palette colors array
                        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label' => __('Banner Overlay Color', 'konstruksy'),
                    ],

                ],
            ],

            'konstruksy_single_product_blog_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Single Product Banner settings', 'konstruksy'),
                'popup-title'  => esc_html__('Single Product Banner settings', 'konstruksy'),
                'button'       => esc_html__('Edit Single Product Banner', 'konstruksy'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'konstruksy_single_product_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'konstruksy' ),
                        'desc'          => esc_html__('Show or hide the banner', 'konstruksy'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'konstruksy' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'konstruksy' ),
                        ],
                    ],
                    
                    'konstruksy_single_product_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'konstruksy' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'konstruksy'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'konstruksy' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'konstruksy' ),
                        ],
                    ],

                    'konstruksy_single_product_banner_blog_image'	 =>[
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'konstruksy'),
                        'desc'  => esc_html__('Banner blog image', 'konstruksy'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
                     ],
                    'konstruksy_single_product_banner_overlay_styl' => [
                        'type'  => 'rgba-color-picker',
                        'value' => '#edeff0',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        // palette colors array
                        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label' => __('Banner Overlay Color', 'konstruksy'),
                    ],

                ],
            ],

            'konstruksy_woo_shop_page_setting' => [
                'type'         => 'radio',
                'value' => 'fluid',
                'label' => __('Shop Page Layout', '{konstruksy}'),
                'desc'  => __('Select shop page layout style', '{konstruksy}'),
                'choices' => [ // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
                    'fluid' => __('Fluid', '{domain}'),
                    'lidebar' => __('Left Sidebar', '{konstruksy}'),
                    'rsidbar' => __('Right Sidebar', '{konstruksy}'),
                ],
                // Display choices inline instead of list
                'inline' => true,
            ],
        ],
    ],
];