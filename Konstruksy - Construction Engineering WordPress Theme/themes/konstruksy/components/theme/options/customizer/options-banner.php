<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */


$options = [
    'banner_setting' => [
        'title' => esc_html__('Banner settings', 'konstruksy'),

        'options' => [
            'sub_page_banner_overlay_style' => [
                'type'  => 'rgba-color-picker',
                'value' => '#edeff0',
                'label' => __('Banner Overlay Color', 'konstruksy'),
            ],
            'page_banner_setting' => [
                'type'        => 'popup',
                'label'       => esc_html__('Page banner settings', 'konstruksy'),
                'popup-title' => esc_html__('Page banner settings', 'konstruksy'),
                'button'      => esc_html__('Edit page Banner', 'konstruksy'),
                'size'        => 'medium', // small, medium, large
                'popup-options' => [
                    'page_show_banner' => [
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

                    'banner_page_image'	 =>array(
                        'label'			 => esc_html__( 'Banner image', 'konstruksy' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),

                        )

                ],
            ],

            'blog_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Blog banner settings', 'konstruksy'),
                'popup-title'  => esc_html__('Blog banner settings', 'konstruksy'),
                'button'       => esc_html__('Edit Blog Banner', 'konstruksy'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'blog_show_banner' => [
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
                    
                    'blog_show_breadcrumb' => [
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

                    'banner_blog_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'konstruksy'),
                        'desc'  => esc_html__('Banner blog image', 'konstruksy'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),


                    )

                ],
            ],

        ],
    ],
];