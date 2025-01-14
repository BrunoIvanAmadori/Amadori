<?php

/**
 * Geovictoria 2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Geovictoria_2021
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('geovictoria_2021_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function geovictoria_2021_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Geovictoria 2021, use a find and replace
		 * to change 'geovictoria-2021' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('geovictoria-2021', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'geovictoria-2021'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'geovictoria_2021_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'geovictoria_2021_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function geovictoria_2021_content_width()
{
	$GLOBALS['content_width'] = apply_filters('geovictoria_2021_content_width', 640);
}
add_action('after_setup_theme', 'geovictoria_2021_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function geovictoria_2021_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 1', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 2', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 3', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 4', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(array(
		'name'          => esc_html__('Single Post Sidebar', 'geovictoria-2021'),
		'id'            => 'single-post-sidebar',
		'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'geovictoria_2021_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function geovictoria_2021_scripts()
{
	wp_enqueue_style('geovictoria-2021-custom-fonts', get_template_directory_uri() . '/dist/fonts/fonts.css', array(), _S_VERSION, false);
	wp_enqueue_style('geovictoria-2021-font-awesome', get_template_directory_uri() . '/dist/fonts/font-awesome.css', [], _S_VERSION, false);
	wp_enqueue_style('geovictoria-2021-style', get_stylesheet_uri());
	wp_enqueue_style('geovictoria-2021-shared-styles', get_template_directory_uri() . '/dist/css/sharedStyles.css', array(), _S_VERSION, false);
	wp_style_add_data('geovictoria-2021-style', 'rtl', 'replace');

	wp_enqueue_script('geovictoria-2021-navigation', get_template_directory_uri() . '/dist/js/navigation.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('geovictoria-2021-modernizr', get_template_directory_uri() . '/dist/js/modernizr-webp.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('geovictoria-2021-anime-js', get_template_directory_uri() . '/dist/js/anime.min.js');
	wp_enqueue_script('geovictoria-2021-bootstrap-bundle-js', get_template_directory_uri() . '/dist/js/bootstrap.bundle.min.js', [], _S_VERSION, true);

	global $template;

	switch (basename($template)) {
		case 'control-de-asistencia.php':
		case 'controle-de-ponto.php':
		case 'attendance-control.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-asistencia-mobile', get_template_directory_uri() . '/dist/js/pages/page-asistencia-mobile.js', array(), '', true);
				wp_enqueue_style('page-asistencia-mobile-css', get_template_directory_uri() . '/dist/css/asistenciaMobile.css', [], '', false);
			} else {
				wp_enqueue_script('page-asistencia', get_template_directory_uri() . '/dist/js/pages/page-asistencia.js', [], '', true);
				wp_enqueue_style('page-asistencia-css', get_template_directory_uri() . '/dist/css/asistencia.css', [], '', false);
			}
			break;

		case 'control-de-acceso.php':
		case 'controle-de-acesso.php':
		case 'access-control.php':

			if (wp_is_mobile()) {
				wp_enqueue_script('page-acceso-mobile', get_template_directory_uri() . '/dist/js/pages/page-acceso-mobile.js', array(), '', true);
				wp_enqueue_style('page-acceso-mobile-css', get_template_directory_uri() . '/dist/css/accesoMobile.css', [], '', false);
			} else {

				wp_enqueue_script('page-acceso', get_template_directory_uri() . '/dist/js/pages/page-acceso.js', [], '', true);
				wp_enqueue_style('page-acceso-css', get_template_directory_uri() . '/dist/css/acceso.css', [], '', false);
			}
			break;

		case 'gestion-de-comedor.php':
		case 'refeitorio.php':
		case 'canteen-management.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-comedor-mobile', get_template_directory_uri() . '/dist/js/pages/page-comedor-mobile.js', array(), '', true);
				wp_enqueue_style('page-comedor-mobile-css', get_template_directory_uri() . '/dist/css/comedorMobile.css', [], '', false);
			} else {
				wp_enqueue_script('page-comedor', get_template_directory_uri() . '/dist/js/pages/page-comedor.js', [], '', true);
				wp_enqueue_style('page-comedor-css', get_template_directory_uri() . '/dist/css/comedor.css', [], '', false);
			}
			break;

		case 'business-intelligence.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-business-intelligence-mobile', get_template_directory_uri() . '/dist/js/pages/page-business-intelligence-mobile.js', array(), '', true);
				wp_enqueue_style('page-business-intelligence-mobile-css', get_template_directory_uri() . '/dist/css/businessIntelligenceMobile.css', [], '', false);
			} else {
				wp_enqueue_script('page-business-intelligence', get_template_directory_uri() . '/dist/js/pages/page-business-intelligence.js', [], '', true);
				wp_enqueue_style('page-business-intelligence-css', get_template_directory_uri() . '/dist/css/businessIntelligence.css', [], '', false);
			}
			break;

		case 'front-page.php':
		case 'home.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('front-page-mobile', get_template_directory_uri() . '/dist/js/pages/front-page-mobile.js', array(), '', true);
				wp_enqueue_style('front-page-css', get_template_directory_uri() . '/dist/css/frontpage.css', [], '', false);
			} else {
				wp_enqueue_script('front-page', get_template_directory_uri() . '/dist/js/pages/front-page.js', array(), '', true);
				wp_enqueue_style('front-page-css', get_template_directory_uri() . '/dist/css/frontpage.css', [], '', false);
			}
			break;

		case 'quienes-somos.php':
		case 'quem-somos.php':
		case 'who-we-are.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-nosotros-mobile', get_template_directory_uri() . '/dist/js/pages/page-quienes-somos-mobile.js', array(), '', true);
				wp_enqueue_style('page-nosotros-css', get_template_directory_uri() . '/dist/css/quienesSomos.css', [], '', false);
			} else {
				wp_enqueue_script('page-nosotros', get_template_directory_uri() . '/dist/js/pages/page-quienes-somos.js', array(), '', true);
				wp_enqueue_style('page-nosotros-css', get_template_directory_uri() . '/dist/css/quienesSomos.css', [], '', false);
			}
			break;

		case 'single.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('default-mobile', get_template_directory_uri() . '/dist/js/pages/page-single-mobile.js', array(), '', true);
			} else {
				wp_enqueue_script('page-single', get_template_directory_uri() . '/dist/js/pages/page-single.js', array(), '', true);
			}
			break;

		default:
			if (wp_is_mobile()) {
				wp_enqueue_script('default-mobile', get_template_directory_uri() . '/dist/js/pages/_shared-mobile.js', array(), '', true);
			} else {
				wp_enqueue_script('default', get_template_directory_uri() . '/dist/js/pages/_shared.js', array(), '', true);
			}
	};


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'geovictoria_2021_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// CUSTOM FUNCTIONS



/**
 * This fix is for the multisite installation. Somehow, URLs of SVGS, CSS and JS weren't working because of the "/{country-code}/" subdirectory.
 * This may be because our server is delivering via nGinx static assets so, it can't take the htaccess rewrite instructions.
 * With this function I manage to check if I'm in a subdirectory url, and strip it away.
 */

function multisiteUrlFix($string)
{
	if (get_current_blog_id() != 1) { //checking that I'm not in the root URL folder, which is the main site
		//Modify the string here
		$array = explode("/", $string);
		array_splice($array, 3, 1);
		$array = implode("/", $array);
		return $array;
	} else {
		return $string;
	}
}

add_filter('template_directory_uri', 'multisiteUrlFix', 10, 2);


/**
 * Force all network uploads to reside in "wp-content/uploads", and by-pass
 * "files" URL rewrite for site-specific directories.
 * 
 * @link    http://wordpress.stackexchange.com/q/147750/1685
 * 
 * @param   array   $dirs
 * @return  array
 */
function wpse_147750_upload_dir($dirs)
{
	$dirs['baseurl'] = network_site_url('/wp-content/uploads');
	$dirs['basedir'] = ABSPATH . 'wp-content/uploads';
	$dirs['path'] = $dirs['basedir'] . $dirs['subdir'];
	$dirs['url'] = $dirs['baseurl'] . $dirs['subdir'];

	return $dirs;
}

add_filter('upload_dir', 'wpse_147750_upload_dir');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


// Code for adding shortcode attributes to Contact Form 7

add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
	$my_attr = 'origen_zoho';

	if (isset($atts[$my_attr])) {
		$out[$my_attr] = $atts[$my_attr];
	}

	return $out;
}


/**
 * Program to display URL of current page.
 * @return string URL without query string
 */

function getURLWithoutQuery()
{
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
		$link = "https";
	else
		$link = "http";

	// Here append the common URL characters.
	$link .= "://";

	// Append the host(domain name, ip) to the URL.
	$link .= $_SERVER['HTTP_HOST'];

	// Append the requested resource location to the URL, but extracting the string before "?"
	$link .= strtok($_SERVER["REQUEST_URI"], '?');

	return $link;
}

/**
 * Function to create custom post type for Success Stories
 */

function register_caso_de_exito_cpt()
{
	$labels = array(
		'name'                  => _x('Casos de éxito', 'Post type general name', 'caso_de_exito'),
		'singular_name'         => _x('Caso de éxito', 'Post type singular name', 'caso_de_exito'),
		'menu_name'             => _x('Casos de éxito', 'Admin Menu text', 'caso_de_exito'),
		'name_admin_bar'        => _x('Caso de éxito', 'Add New on Toolbar', 'caso_de_exito'),
		'add_new'               => __('Agregar Nuevo', 'caso_de_exito'),
		'add_new_item'          => __('Agregar Nuevo caso de éxito', 'caso_de_exito'),
		'new_item'              => __('Agregar caso de éxito', 'caso_de_exito'),
		'edit_item'             => __('Editar caso de éxito', 'caso_de_exito'),
		'view_item'             => __('Ver caso de éxito', 'caso_de_exito'),
		'all_items'             => __('Todos los casos de éxito', 'caso_de_exito'),
		'search_items'          => __('Buscar casos de éxito', 'caso_de_exito'),
		'not_found'             => __('No se han encontrado casos de éxito.', 'caso_de_exito'),
		'archives'              => _x('Archivo de casos de éxito', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'caso_de_exito'),
		'insert_into_item'      => _x('Insertar en caso de éxito', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'caso_de_exito'),
		'uploaded_to_this_item' => _x('Subido a este caso de éxito', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'caso_de_exito'),
		'filter_items_list'     => _x('Filtrar lista de casos de éxito', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'caso_de_exito'),
		'items_list_navigation' => _x('Navegación por lista de casos de éxito', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'caso_de_exito'),
		'items_list'            => _x('Lista de casos de éxito', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'caso_de_exito'),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => 'Custom post type para casos de éxito.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'caso_de_exito'),
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => [''],
		'taxonomies'         => array('industria'),
		'show_in_rest'       => false,
		'register_meta_box_cb' => 'add_url_metaboxes',
	);

	register_post_type(sanitize_key('caso_de_exito'), $args);
}

add_action('init', 'register_caso_de_exito_cpt');


function add_url_metaboxes()
{
	add_meta_box('youtube_video_url', 'YouTube Video URL', 'youtube_video_url', 'caso_de_exito');
}

function youtube_video_url()
{
	global $post;

	// Añadimos un 'noncename' que necesitaremos para verificar los datos y de dónde vienen.
	echo '<input type="hidden" name="youtube_video_noncename" id="youtube_video_noncename" value="' .
		wp_create_nonce(plugin_basename(__FILE__)) . '" />';

	// Recuperar los datos existentes, si es que hay datos existentes.
	$youtube_video_url = get_post_meta($post->ID, 'youtube_video_url', true);

	// El input que aparecerá en administración donde introducir/mostrar los datos
	echo '<input type="text" name="youtube_video" value="' . $youtube_video_url  . '" />';
}

/**
 * Function to create Industries custom taxonomy
 */

//hook into the init action and call create_book_taxonomies when it fires

add_action('init', 'register_industries_taxonomy', 0);

//create a custom taxonomy name it subjects for your posts

function register_industries_taxonomy()
{

	// Add new taxonomy, make it hierarchical like categories
	//first do the translations part for GUI

	$labels = array(
		'name' => _x('Industrias', 'taxonomy general name'),
		'singular_name' => _x('Industria', 'taxonomy singular name'),
		'search_items' =>  __('Buscar Industrias'),
		'all_items' => __('Todas las Industrias'),
		'parent_item' => __('Industria Padre'),
		'parent_item_colon' => __('Industria Padre:'),
		'edit_item' => __('Editar Industria'),
		'update_item' => __('Actualizar Industria'),
		'add_new_item' => __('Agregar Nueva Industria'),
		'new_item_name' => __('Agregar nuevo nombre de Industria'),
		'menu_name' => __('Industrias'),
	);

	// Now register the taxonomy
	register_taxonomy('industria', array('caso_de_exito'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => false,
	));
}

add_filter('wp_lazy_loading_enabled', '__return_false');
