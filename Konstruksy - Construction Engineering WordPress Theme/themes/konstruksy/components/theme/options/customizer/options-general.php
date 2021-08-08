<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */

$options =[
    'general_settings' => [
            'title'		 => esc_html__( 'Optional settings', 'konstruksy' ),
            'options'	 => [
                'general_main_logo' => [
                    'label'	        => esc_html__( 'logo', 'konstruksy' ),
                    'desc'	           => esc_html__( 'This is default logo. Our most of the menu built with elemnetsKit header builder. Go to header settings->Header builder enable->  and click "edit header content" to change the logo', 'konstruksy' ),
                    'type'	           => 'upload',
                    'image_only'      => true,
                 ],

                'general_social_links' => [
                    'type'          => 'addable-popup',
                    'template'      => '{{- title }}',
                    'popup-title'   => null,
                    'label' => esc_html__( 'Social links', 'konstruksy' ),
                    'desc'  => esc_html__( 'Add social links and it\'s icon class bellow. These are all fontaweseome-4.7 icons.', 'konstruksy' ),
                    'add-button-text' => esc_html__( 'Add new', 'konstruksy' ),

                    'popup-options' => [
                        'title' => [
                            'type' => 'text',
                            'label'=> esc_html__( 'Title', 'konstruksy' ),
                        ],
                        'icon_class' => [
                            'type' => 'new-icon',
                            'label'=> esc_html__( 'Social icon', 'konstruksy' ),
                        ],
                        'url' => [
                            'type' => 'text',
                            'label'=> esc_html__( 'Social link', 'konstruksy' ),

                        ],
                    ],

                ],
            ],
        ],
    ];
