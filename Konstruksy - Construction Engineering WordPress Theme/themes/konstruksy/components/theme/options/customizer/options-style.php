<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$options =[
    'style_settings' => [
            'title'		 => esc_html__( 'Style settings', 'konstruksy' ),
            'options'	 => [
                'style_body_bg' => [
                    'label'	        => esc_html__( 'Body background', 'konstruksy' ),
                    'desc'	           => esc_html__( 'Site\'s main background color.', 'konstruksy' ),
                    'type'	           => 'color-picker',
					'value'  		   => '#ffffff',
                 ],

                'style_primary' => [
                    'label'	        => esc_html__( 'Primary color', 'konstruksy' ),
                    'desc'	           => esc_html__( 'Site\'s main color.', 'konstruksy' ),
                    'type'	           => 'color-picker',
					'value'  		   => '#FF6C00',
                ],

                'secondary_color' => [
                    'label'	        => esc_html__( 'Secondary color', 'konstruksy' ),
                    'desc'	           => esc_html__( 'Secondary color.', 'konstruksy' ),
                    'type'	           => 'color-picker',
					'value'  		   => '#00235A',
                ],
                
                'title_color' => [
					'label'	        => esc_html__( 'Title color', 'konstruksy' ),
					'desc'	        => esc_html__( 'Blog title color.', 'konstruksy' ),
					'type'	        => 'color-picker',
					'value'  		=> '#00235A',
                ],

                'body_font'    => array(
                    'type' => 'typography-v2',
                    'label' => esc_html__('Body Font', 'konstruksy'),
                    'desc'  => esc_html__('Choose the typography for main body', 'konstruksy'),
                    'value' => array(
                        'family' => 'Poppins',
                        'size'  => '16',
                        'font-weight' => '400',
                    ),
                    'components' => array(
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ),
                ),
                
                'heading_font_one'	 => [
                    'type'		 => 'typography-v2',
                    'value'		 => [
                        'family'		 => 'Poppins',
                        'size'  => '38',
                        'font-weight' => '600',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H1 and H2 Fonts', 'konstruksy' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'konstruksy' ),
                ],

                'heading_font_two'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '24',
                        'font-weight' => '600',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H3 Fonts', 'konstruksy' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'konstruksy' ),
                ],

                'heading_font_three'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '18',
                        'font-weight' => '600',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H4 Fonts', 'konstruksy' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'konstruksy' ),
                ],

            
            
            ],
        ],
    ];