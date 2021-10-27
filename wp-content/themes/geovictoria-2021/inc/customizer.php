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
function geovictoria_2021_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
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

	// Section: Informacion de contacto del sitio



	$wp_customize->add_section(
		'geovictoria-2021_info_contacto',
		array(
			'title' => __('Información de contacto del sitio'),
			'description' => __('Importante: Estas opciones aplican sólo a ' . site_url()),
			'priority' => '50'
		)
	);

	// Field: Telefono de ventas - 1

	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_ventas_1', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_ventas_1',
		array(
			'label' => __('Teléfono de contacto para ventas (primario)'),
			'section' => 'geovictoria-2021_info_contacto',
			'description' => __('Este dato se muestra en el encabezado, en el pie de página y en la página de contacto.'),
			'type' => 'text',
		)
	);

	// Field: Telefono de ventas - 2

	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_ventas_2', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_ventas_2',
		array(
			'label' => __('Teléfono de contacto para ventas (secundario)'),
			'description' => __('Este dato se muestra en la página de contacto.'),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);

	// Field: Telefono de ventas 3 (Whatsapp)

	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_ventas_3', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_ventas_3',
		array(
			'label' => __('Teléfono de contacto para ventas (whatsapp)'),
			'description' => __('Este dato se utiliza para los links que llevan al Whatsapp.'),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);

	// Field: email de ventas
	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_email_ventas', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_email_ventas',
		array(
			'label' => __('Email de contacto de ventas'),
			'description' => __('Este dato se muestra en el encabezado, en el pie de página y en la página de contacto.'),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);

	// Field: Telefono de soporte - 1
	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_soporte_1', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_soporte_1',
		array(
			'label' => __('Teléfono de contacto para soporte (primario)'),
			'section' => 'geovictoria-2021_info_contacto',
			'description' => __('Este dato se muestra en la página de contacto.'),
			'type' => 'text',
		)
	);

	// Field: Telefono de soporte - 2
	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_soporte_2', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_soporte_2',
		array(
			'label' => __('Teléfono de contacto para soporte (secundario)'),
			'description' => __('Este dato se muestra en la página de contacto.'),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);

	// Field: email de soporte
	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_email_soporte', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_email_soporte',
		array(
			'label' => __('Email de contacto de soporte'),
			'description' => __('Este dato se muestra en la página de contacto.'),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);

	// Field: dirección de la oficina
	$wp_customize->add_setting(
		'geovictoria-2021_info_contacto_direccion', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_info_contacto_direccion',
		array(
			'label' => __('Dirección de la oficina'),
			'description' => __('Este dato se muestra en la página de contacto.'),
			'section' => 'geovictoria-2021_info_contacto',
			'type' => 'text',
		)
	);

	// Section: Redes sociales del sitio

	$wp_customize->add_section(
		'geovictoria-2021_redes_sociales',
		array(
			'title' => __('Redes sociales del sitio'),
			'description' => __('Especifica aquí las direcciones respectivas a cada red social de GeoVictoria. Aplica para: ' . site_url() . '.'),
			'priority' => '50'
		)
	);

	// Field: URL Facebook
	$wp_customize->add_setting(
		'geovictoria-2021_redes_sociales_facebook', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_redes_sociales_facebook',
		array(
			'label' => __('Dirección de Facebook'),
			'section' => 'geovictoria-2021_redes_sociales',
			'type' => 'text',
		)
	);

	// Field: URL Instagram
	$wp_customize->add_setting(
		'geovictoria-2021_redes_sociales_instagram', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_redes_sociales_instagram',
		array(
			'label' => __('Dirección de Instagram'),
			'section' => 'geovictoria-2021_redes_sociales',
			'type' => 'text',
		)
	);

	// Field: URL Linkedin
	$wp_customize->add_setting(
		'geovictoria-2021_redes_sociales_linkedin', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_redes_sociales_linkedin',
		array(
			'label' => __('Dirección de Linkedin'),
			'section' => 'geovictoria-2021_redes_sociales',
			'type' => 'text',
		)
	);

	// Field: URL Twitter
	$wp_customize->add_setting(
		'geovictoria-2021_redes_sociales_twitter', //give it an ID
		array(
			'default' => '', // Give it a default
		)
	);

	$wp_customize->add_control(
		'geovictoria-2021_redes_sociales_twitter',
		array(
			'label' => __('Dirección de Twitter'),
			'section' => 'geovictoria-2021_redes_sociales',
			'type' => 'text',
		)
	);
}
add_action('customize_register', 'geovictoria_2021_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function geovictoria_2021_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function geovictoria_2021_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function geovictoria_2021_customize_preview_js()
{
	wp_enqueue_script('geovictoria-2021-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'geovictoria_2021_customize_preview_js');
