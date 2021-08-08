<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: Header
 */

$header_settings = konstruksy_option('theme_header_default_settings');
$header_id = '';
$header_builder_enable = konstruksy_option('header_builder_enable');
if($header_builder_enable=='yes' && !empty($header_settings)){
    $header_id =   $header_settings['yes']['konstruksy_header_builder_select'];
}

$options =[
    'header_settings' => [
        'title'		 => esc_html__( 'Header settings', 'konstruksy' ),

        'options'	 => [
            'header_builder_enable' => [
                'type'			   => 'switch',
                'label'			   => esc_html__( 'Header builder Enable', 'konstruksy' ),
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

            'theme_header_default_settings' => array(
                'type' => 'multi-picker',
                'picker' => 'header_builder_enable',

                'choices' => array(
                    'yes' => array(
                        'konstruksy_header_builder_select' =>array(
                            'type'  => 'select',

                            'attr'  => array( 'class' => 'konstruksy_header_builder_select', 'data-foo' => 'konstruksy_header_builder_select' ),
                            'label' => __('Header style', 'konstruksy'),

                            'choices' => konstruksy_ekit_headers(),

                            'no-validate' => false,
                        ),
                        'edit_header' => array(
                            'type'  => 'html',
                            'value' => '',

                            'label' => __('edit', 'konstruksy'),
                            'html'  => '<h2 class="header_builder_edit"><a class="konstruksy_header_builder_edit_link" style="text-transform: uppercase; color:green" target="_blank" href='. admin_url( 'post.php?action=elementor&post='.$header_id ). '>'. esc_html('Edit header content here.'). '</a><h2>' ,
                        ),
                    ),
                    'no' => array(

                    )
                )
            ),
             'header_nav_sticky' => [
               'type'			   => 'switch',
               'label'			   => esc_html__( 'Sticky header', 'konstruksy' ),
               'desc'			   => esc_html__('Do you want to enable sticky nav?', 'konstruksy' ),
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



             'header_top_info_show' => [
               'type'			    => 'switch',
               'label'			 => esc_html__( 'Show Topbar', 'konstruksy' ),
               'desc'			    => esc_html__( 'Do you want to show topbar?', 'konstruksy' ),
               'value'          => 'no',
               'left-choice'	 => [
                   'value'	 => 'yes',
                   'label'	 => esc_html__('Yes', 'konstruksy'),
               ],

               'right-choice'	 => [
                   'value'	 => 'no',
                   'label'	 => esc_html__('No', 'konstruksy'),
                  ],
               ],

               'header_contact_mail' => [
                  'type'			    => 'text',
                  'label'			    => esc_html__( 'Contact mail', 'konstruksy' ),
                  'desc'			    => esc_html__( 'Give mail.', 'konstruksy' ),
                  'value'            => esc_html__('mail@company.com','konstruksy'),
               ],

               'header_contact_address' => [
                  'type'			    => 'text',
                  'label'		    	 => esc_html__( 'Contact address title', 'konstruksy' ),
                  'desc'			    => esc_html__( 'Give office address.', 'konstruksy' ),
                  'value'            => esc_html__('107 Baker Street, NY','konstruksy'),
               ],

               'header_Contact_number' => [
                  'type'			    => 'text',
                  'label'		    	 => esc_html__( 'Contact number title', 'konstruksy' ),
                  'desc'			    => esc_html__( 'Give Contact Number for header  style 3.', 'konstruksy' ),
                  'value'            => esc_html__('+1 517-224-3344','konstruksy'),
               ],
               'header_nav_search_section' => [
                  'type'			 => 'switch',
                  'label'		    => esc_html__( 'Search button show', 'konstruksy' ),
                  'desc'			 => esc_html__( 'Do you want to show search button in header ?', 'konstruksy' ),
                  'value'         => 'no',
                  'left-choice'	 => [
                     'value'     => 'yes',
                     'label'	   => esc_html__( 'Yes', 'konstruksy' ),
                  ],
                  'right-choice'	 => [
                     'value'	 => 'no',
                     'label'	 => esc_html__( 'No', 'konstruksy' ),
                  ],
                ],


                'header_quota_button' => array(
                  'type'         => 'multi-picker',
                  'label'        => false,
                  'desc'         => false,
                  'picker'       => array(
                      'style' => array(
                          'type'			 => 'switch',
                          'label'		 => esc_html__( 'Show CTA button ', 'konstruksy' ),
                          'value'       => 'no',
                          'left-choice'	 => [
                             'value'   	     => 'yes',
                             'label'	        => esc_html__( 'Yes', 'konstruksy' ),
                          ],
                          'right-choice'	 => [
                             'value'	 => 'no',
                             'label'	 => esc_html__( 'No', 'konstruksy' ),
                          ],

                      )
                  ),
                  'choices'      => array(
                       'yes' => array(
                        'header_quota_text' => [
                           'type'			    => 'text',
                           'label'			    => esc_html__( 'Quote text', 'konstruksy' ),
                           'desc'			    => esc_html__( 'Navigation quote text.', 'konstruksy' ),
                           'value'            => esc_html__('Get a quote','konstruksy'),
                        ],
                       'header_quota_url' => [
                           'type'			    => 'text',
                           'label'			    => esc_html__( 'Quote link', 'konstruksy' ),
                           'desc'			    => esc_html__( 'Navigation quote link.', 'konstruksy' ),
                           'value'            => esc_html__('#','konstruksy'),
                        ],
                       ),



                  ),
                  'show_borders' => false,
              ),




        ], //Options end
    ]
];