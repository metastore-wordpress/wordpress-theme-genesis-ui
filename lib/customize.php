<?php
/**
 * Genesis UI.
 *
 * This file adds the Customizer additions to the Genesis UI Theme.
 *
 * @package Genesis UI
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://www.studiopress.com/
 */

add_action( 'customize_register', 'genesis_ui_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function genesis_ui_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'genesis_ui_link_color',
		array(
			'default'           => genesis_ui_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genesis_ui_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', 'genesis-ui' ),
				'label'       => __( 'Link Color', 'genesis-ui' ),
				'section'     => 'colors',
				'settings'    => 'genesis_ui_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'genesis_ui_accent_color',
		array(
			'default'           => genesis_ui_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genesis_ui_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', 'genesis-ui' ),
				'label'       => __( 'Accent Color', 'genesis-ui' ),
				'section'     => 'colors',
				'settings'    => 'genesis_ui_accent_color',
			)
		)
	);

	$wp_customize->add_setting(
		'genesis_ui_logo_width',
		array(
			'default'           => 350,
			'sanitize_callback' => 'absint',
		)
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'genesis_ui_logo_width',
		array(
			'label'       => __( 'Logo Width', 'genesis-ui' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'genesis-ui' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'genesis_ui_logo_width',
			'type'        => 'number',
			'input_attrs' => array(
				'min' => 100,
			),

		)
	);

}
