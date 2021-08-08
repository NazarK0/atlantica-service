<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$footer_settings = konstruksy_option('theme_footer_default_settings');
$footer_id = '';
$back_to_top = konstruksy_option('back_to_top');
$footer_builder_enable = konstruksy_option('footer_builder_enable');
if($footer_builder_enable=='yes' && !empty($footer_settings)){
    $footer_id =   $footer_settings['yes']['konstruksy_footer_builder_select'];
}

$options =[
    'footer_settings' => [
        'title'		 => esc_html__( 'Footer settings', 'konstruksy' ),

        'options'	 => [			
            'footer_builder_enable' => [
                'type'			   => 'switch',
                'label'			   => esc_html__( 'Footer builder Enable', 'konstruksy' ),
                'desc'			   => '' ,
                'value'           => 'no',
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__('Yes', 'konstruksy'),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__('No', 'konstruksy'),
                ],
            ],		

            'theme_footer_default_settings' => array(
                'type' => 'multi-picker',
                'picker' => 'footer_builder_enable',

                'choices' => array(
                    'yes' => array(
                        'konstruksy_footer_builder_select' =>array(
                            'type'  => 'select',

                            'attr'  => array( 'class' => 'konstruksy_header_builder_select', 'data-foo' => 'konstruksy_header_builder_select' ),
                            'label' => __('Footer style', 'konstruksy'),

                            'choices' => konstruksy_ekit_footers(),

                            'no-validate' => false,
                        ),
                        'edit_footer' => array(
                            'type'  => 'html',
                            'value' => '',

                            'label' => __('edit', 'konstruksy'),
                            'html'  => '<h2 class="header_builder_edit"><a class="konstruksy_header_builder_edit_link" style="text-transform: uppercase; color:green" target="_blank" href='. admin_url( 'post.php?action=elementor&post='.$footer_id ). '>'. esc_html('Edit content here.'). '</a><h2>' ,
                        ),
                    ),



                    'no' => array(

                    )
                )
            ),
            'xs_footer_bg_color' => [
                'label'	 => esc_html__( 'Background color', 'konstruksy'),
                'type'	 => 'color-picker',
                'value'  => '#00183e',
                'desc'	 => esc_html__( 'You can change the  background color with rgba color or solid color', 'konstruksy'),
            ],
            'xs_footer_text_color' => [
                'label'	 => esc_html__( 'Text color', 'konstruksy'),
                'type'	 => 'color-picker',
                'value'  => '#ffffff',
                'desc'	 => esc_html__( 'You can change the text color with rgba color or solid color', 'konstruksy'),
            ],
            'xs_footer_link_color' => [
                'label'	 => esc_html__( 'Link color', 'konstruksy'),
                'type'	 => 'color-picker',
                'value'  => '#ff6c00',
                'desc'	 => esc_html__( 'You can change the text color with rgba color or solid color', 'konstruksy'),
            ],
            'xs_footer_widget_title_color' => [
                'label'	 => esc_html__( 'Widget Title color', 'konstruksy'),
                'type'	 => 'color-picker',
                'value'  => '#ffffff',
                'desc'	 => esc_html__( 'You can change the text color with rgba color or solid color', 'konstruksy'),
            ],
            'footer_bg_color' => [
                'label'	 => esc_html__( 'Copyright Background color', 'konstruksy'),
                'type'	 => 'color-picker',
                'value'  => '#001435',
                'desc'	 => esc_html__( 'You can change the copyright background color with rgba color or solid color', 'konstruksy'),
            ],
            'footer_copyright_color' => [
                'label'	 => esc_html__( 'Footer Copyright color', 'konstruksy'),
                'type'	 => 'color-picker',
				'value'  => '#ffffff',
                'desc'	 => esc_html__( 'You can change the footer\'s background color with rgba color or solid color', 'konstruksy'),
            ],
            'footer_social_links' => [
                'type'  => 'addable-popup',
                'template' => '{{- title }}',
                'popup-title' => null,
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
                'value' => [

                ],
            ],
            'footer_copyright'	 => [
                'type'	 => 'textarea',
                'value'  =>  esc_html__('Copyright &copy; Konstruksy 2021. All rights reserved.','konstruksy'),
                'label'	 => esc_html__( 'Copyright text', 'konstruksy' ),
                'desc'	 => esc_html__( 'This text will be shown at the footer of all pages.', 'konstruksy' ),
            ],

            'footer_padding_top' => [
                'label'	        => esc_html__( 'Footer Padding Top', 'konstruksy' ),
                'desc'	        => esc_html__( 'Use Footer Padding Top', 'konstruksy' ),
                'type'	        => 'text',
                'value'         => '150px',
             ],
            'footer_padding_bottom' => [
                'label'	        => esc_html__( 'Footer Padding Bottom', 'konstruksy' ),
                'desc'	        => esc_html__( 'Use Footer Padding Bottom', 'konstruksy' ),
                'type'	        => 'text',
                'value'         => '150px',
             ],
             'back_to_top'		=> [
                'type'			 => 'switch',
                'value'			 => 'no',
                'label'			 => esc_html__( 'Back to top', 'konstruksy'),
				'desc'	         => esc_html__( 'If you enabling Footer builder or custom build footer from ElementsKit Header Footer for any your page, then this Back to top functions is not working. This Back to top function just working if you using standart customize footer theme mode.', 'konstruksy' ),
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'konstruksy'),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'konstruksy'),
                ],
            ],
        ],

        ]
    ];