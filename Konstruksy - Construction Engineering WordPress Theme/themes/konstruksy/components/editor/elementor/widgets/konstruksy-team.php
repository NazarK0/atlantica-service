<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Konstruksy_Team_Widget extends Widget_Base {

    public function get_name() {
        return 'konstruksy-team';
    }

    public function get_title() {
        return esc_html__( 'KONSTRUKSY Team', 'konstruksy' );
    }

    public function get_icon() {
        return 'icon icon-team';
    }

    public function get_categories() {
        return ['konstruksy-elements'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'konstruksy_team_content',
            [
                'label' => __( 'Content', 'konstruksy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'label_block' => true,
            ]
        );

        $this->add_control(
			'team_member_image',
			[
				'label' => __( 'Team Image', 'konstruksy' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
        );

        $this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
                'label' => __( 'Image Size', 'konstruksy' ),
                'name' => 'team_image_size',
				'default' => 'large',
			]
		);

        $this->add_control(
			'team_memeber_name',
			[
				'label' => __( 'Name', 'konstruksy' ),
				'type' => Controls_Manager::TEXT,
                'default' => __( 'LaJohn Doe', 'konstruksy' ),
                'label_block' => true,
			]
        );
        $this->add_control(
			'team_memeber_position',
			[
				'label' => __( 'Position', 'konstruksy' ),
				'type' => Controls_Manager::TEXT,
                'default' => __( 'Manager', 'konstruksy' ),
                'label_block' => true,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'konstruksy_team_social',
            [
                'label' => __( 'Social', 'konstruksy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'label_block' => true,
            ]
        );

        $konstruksy_social_repeater = new Repeater();

        $konstruksy_social_repeater->add_control(
            'konstruksy_social_icon',
            [
                'label' => esc_html__( 'Icon', 'konstruksy' ),
                'label_block' => true,
                'type' => Controls_Manager::ICON,
                'default' => 'icon icon-facebook',
            ]
        );

        $konstruksy_social_repeater->add_control(
			'konstruksy_social_linbk',
			[
				'label' => __( 'Link', 'konstruksy' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( '#', 'konstruksy' ),
				'show_external' => true,
				'default' => [
                    'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
        );



        $konstruksy_social_repeater->start_controls_tabs(
            'konstruksy_social_hover_tab_parent'
        );

        $konstruksy_social_repeater->start_controls_tab(
            'konstruksy_social_normal_tab',
            [
                'label' => __( 'Normal', 'konstruksy' ),
            ]
        );

        $konstruksy_social_repeater->add_control(
            'konstruksy_social_icon_color',
            [
                'label' => __( 'Icon Color', 'konstruksy' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}}  {{CURRENT_ITEM}} a i' => 'color: {{VALUE}}'
				],
            ]
        );
        $konstruksy_social_repeater->add_control(
            'konstruksy_social_icon_background',
            [
                'label' => __( 'Background Color', 'konstruksy' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a i' => 'background: {{VALUE}}'
				],
            ]
        );
        $konstruksy_social_repeater->end_controls_tab();
        $konstruksy_social_repeater->start_controls_tab(
            'konstruksy_social_hover_tab',
            [
                'label' => __( 'Hover', 'konstruksy' ),
            ]
        );

        $konstruksy_social_repeater->add_control(
            'konstruksy_social_icon_hover_color',
            [
                'label' => __( 'Icon Color', 'konstruksy' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}}  {{CURRENT_ITEM}} a i:hover' => 'color: {{VALUE}}'
				],

            ]
        );
        $konstruksy_social_repeater->add_control(
            'konstruksy_social_icon_hover_background',
            [
                'label' => __( 'Background Color', 'konstruksy' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} a i:hover' => 'background: {{VALUE}}'
				],
            ]
        );

        $konstruksy_social_repeater->end_controls_tab();
        $konstruksy_social_repeater->end_controls_tabs();

        $this->add_control(
			'konstruksy_soclis_icon_list',
			[
				'label' => __( 'Social Icon List', 'konstruksy' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $konstruksy_social_repeater->get_controls(),
				'default' => [
					[
						'konstruksy_social_icon' =>  'fa fa-facebook',
					],
					[
						'konstruksy_social_icon' =>  'fa fa-twitter',
					],
					[
						'konstruksy_social_icon' =>  'fa fa-google-plus',
                    ],
                    [
						'konstruksy_social_icon' =>  'fa fa-instagram',
					],

				],
				'title_field' => '<i class="{{ konstruksy_social_icon }}"></i> {{{ konstruksy_social_icon.replace( \'fa fa-\', \'\' ).replace( \'-\', \' \' ).replace( /\b\w/g, function( letter ){ return letter.toUpperCase() } ) }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'konstruksy_team_style', [
                'label'	 => esc_html__( 'Name', 'konstruksy' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'team_title_color',
            [
                'label' => __( 'Name Color', 'konstruksy' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .single-team-member .inner-content h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team_title_typography',
                'label' => __( 'Typography', 'konstruksy' ),
                'selector' => '{{WRAPPER}} .single-team-member .inner-content h4',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'konstruksy_team_style2', [
                'label'	 => esc_html__( 'Nationality', 'konstruksy' ),
                'tab'	 => Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_control(
            'team_position_color',
            [
                'label' => __( 'Nationality Color', 'konstruksy' ),
                'type' => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .single-team-member .inner-content h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'position_typography',
                'label' => __( 'Typography', 'konstruksy' ),
                'selector' => '{{WRAPPER}} .single-team-member .inner-content h6',
            ]
        );
        $this->end_controls_section();




    }

    protected function render( ) {
        $settings = $this->get_settings_for_display();



        ?>
        <div class="single-team-member text-center">
                    <div class="team-thumbnail">
                        <?php echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'team_image_size', 'team_member_image' );?>
                    </div><!-- wend team thumbnail -->
                    <div class="inner-content">
                        <div class="top-info">
                        <?php if($settings['team_memeber_name']):?>
                            <h4>
                                <?php echo esc_html($settings['team_memeber_name']);?>
                            </h4>
                        <?php endif;?>
                            <?php if($settings['team_memeber_position']):?>
                            <h6>
                                <?php echo esc_html($settings['team_memeber_position']);?>
                            </h6>
                        <?php endif;?>
                        </div><!-- end  top info -->
                        <ul class="footer-social2 ekit-wid-con">
                        <?php

                        if ( $settings['konstruksy_soclis_icon_list'] ){
                        foreach (  $settings['konstruksy_soclis_icon_list'] as $item ){

                        $target = $item['konstruksy_social_linbk']['is_external'] ? ' target=_blank' : '';
                        ?>

                        <li class="elementor-repeater-item-<?php echo esc_attr( $item[ '_id' ] ); ?>"><a href="<?php echo esc_url($item['konstruksy_social_linbk']['url']);?>" <?php echo esc_attr($target);?> nofollow="<?php echo esc_attr($item['konstruksy_social_linbk']['nofollow'] ? "nofollow": "");?>"><i class="<?php echo esc_attr( $item['konstruksy_social_icon'] );?>"></i></a></li>
                        <?php
                        }
                         }

                    ?>

                        </ul>
                    </div><!-- end inner content -->
        </div><!-- end single team member -->
        <?php

    }

    protected function _content_template() { }
}