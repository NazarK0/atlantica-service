<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */

$options = array(
	'settings-page' => array(
		'title'		 => esc_html__( 'Page settings', 'konstruksy' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'header_title'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Banner title', 'konstruksy' ),
				'desc'	 => esc_html__( 'Add your Page hero title', 'konstruksy' ),
			),
			'header_image'	 => array(
                'label'	 => esc_html__( 'Banner image', 'konstruksy' ),
				'desc'	 => esc_html__( 'Upload a page header image', 'konstruksy' ),
				'help'	 => esc_html__( "This default header image will be used for all your service.", 'konstruksy' ),
				'type'	 => 'upload'
           ),
            'sub_header_menu'	 => array(
                'type'  => 'switch',
                'value' => 'no',
                'label' => esc_html__('Display sub header menu?', 'konstruksy'),
                'desc'  => esc_html__('Display sub menu', 'konstruksy'),
                'help'  => esc_html__('A menu will be displayed under Banner', 'konstruksy'),
                'left-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'konstruksy'),
                ),
                'right-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'konstruksy'),
                ),
            )


        ),
	),
);
