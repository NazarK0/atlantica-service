<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: blog
 */

$options =[
    'blog_settings' => [
        'title'		 => esc_html__( 'Blog settings', 'konstruksy' ),

        'options'	 => [
            'blog_sidebar' =>[
                'type'  => 'select',
                'value' => '3',
                              
                'label' => esc_html__('Sidebar', 'konstruksy'),
                'desc'  => esc_html__('Position', 'konstruksy'),
                'help'  => esc_html__('You can choose sidebar position on the blog area', 'konstruksy'),
                'choices' => array(
                    '1' => esc_html__('No sidebar','konstruksy'),
                    '2' => esc_html__('Left Sidebar', 'konstruksy'),
                    '3' => esc_html__('Right Sidebar', 'konstruksy'),
                 
                 ),
              
                'no-validate' => false,
            ],   

            'blog_author' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Blog author', 'konstruksy' ),
                'desc'			 => esc_html__( 'Do you want to show blog author?', 'konstruksy' ),
                'value'          => 'yes',
                'left-choice' => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'konstruksy' ),
                ],
                'right-choice' => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'konstruksy' ),
                ],
           ],

        ],
            
        ]
    ];