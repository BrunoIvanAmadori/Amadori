<?php
/**
 * Geovictoria 2021 Theme Customizer
 *
 * @package Geovictoria_2021
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function geovictoria_2021_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'geovictoria_2021_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'geovictoria_2021_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_section( 'geovictoria-2021_info_contacto',
		array(
		'title' => __( 'Información de contacto (ventas)' ),
		'priority' => '50'
		)
	);

	// Creo opcion para asignar telefono
	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_telefono', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);
	
	$wp_customize->add_control( 'geovictoria-2021_info_contacto_telefono',
		array(
			'label' => __( 'Teléfono de contacto' ),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);

	// Creo opcion para asignar email
	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_email', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);
	
	$wp_customize->add_control( 'geovictoria-2021_info_contacto_email',
		array(
			'label' => __( 'Email de contacto' ),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);	
}
add_action( 'customize_register', 'geovictoria_2021_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function geovictoria_2021_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function geovictoria_2021_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function geovictoria_2021_customize_preview_js() {
	wp_enqueue_script( 'geovictoria-2021-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'geovictoria_2021_customize_preview_js' );


