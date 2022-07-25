<?php
define("CUSTOMIZER_CONFIG_ID", "customizer_settings");
define("CUSTOMIZER_PANEL_ID", "customizer_panel");

if (class_exists('Kirki')) {
	Kirki::add_config(CUSTOMIZER_CONFIG_ID, array(
		'capability' => 'edit_theme_options',
		'option_type' => 'theme_mod',
	));
	Kirki::add_panel(CUSTOMIZER_PANEL_ID, array(
		'priority' => 10,
		'title' => esc_html__('urban Options', 'urban'),
		'description' => esc_html__('urban Settings', 'urban'),
	));


	// start Header Settings

	Kirki::add_section('airport_header_setting', array(
		'title' => esc_html__('Header settings', 'urban'),
		'panel' => CUSTOMIZER_PANEL_ID,
		'priority' => 160,
	));

	// start header top 

	Kirki::add_field(CUSTOMIZER_CONFIG_ID, [
		'type' => 'switch',
		'settings' => 'airport_header_logo_display',
		'label' => esc_html__('Header Top info Hide/Show', 'urban'),
		'section' => 'airport_header_setting',
		'default' => '1',
		'priority' => 10,
		'choices' => [
			'on' => esc_html__('Enable', 'urban'),
			'off' => esc_html__('Disable', 'urban'),
		],
	]);

	Kirki::add_field(CUSTOMIZER_CONFIG_ID, [
		'type' => 'image',
		'settings' => 'airport_header_normal_logo',
		'label' => esc_html__('Normal logo', 'urban'),
		'section' => 'airport_header_setting',
		'priority' => 10,
		'active_callback' => [
			[
				'setting' => 'airport_header_logo_display',
				'operator' => '==',
				'value' => true,
			]
		]
	]);
}
