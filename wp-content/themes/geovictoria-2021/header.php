<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geovictoria_2021
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page container-fluid" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'geovictoria-2021' ); ?></a>

	<header id="tophead" class="container d-flex justify-content-between">
		<div class='d-flex'>
			<div class="contact-phone pe-3">
				<i class="far fa-phone-alt blue"></i>
				<small>+54 9 11 5454 9090 </small>
			</div>

			<div class="contact-email">
			<i class="far fa-envelope blue"></i>
			<small> ventas@geovictoria.com </small>
			</div>
		</div>

		<div class="language-selector">lenguajes</div>
	</header> 

	<header id="masthead" class="site-header">
		<div class="container d-flex justify-content-between">
				
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation w-auto">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'geovictoria-2021' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
