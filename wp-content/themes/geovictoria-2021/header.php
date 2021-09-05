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

</div>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	
<div id="scroll-content">
	<div id="sticky-menu">
		<header id="tophead" class="container-fluid d-none d-lg-block">
			<div class="container d-flex justify-content-between align-items-center">
				<div class='d-flex'>
					<div class="contact-phone pe-3">
						<i class="far fa-phone-alt blue"></i>
						<small><?php echo esc_html( get_theme_mod( 'geovictoria-2021_info_contacto_telefono' ) ); ?></small>
					</div>

					<div class="contact-email">
					<i class="far fa-envelope blue"></i>
					<small><?php echo esc_html( get_theme_mod( 'geovictoria-2021_info_contacto_email' ) ); ?></small>
					</div>
				</div>
			<?php get_template_part( 'template-parts/language-selector' ); ?>
			</div>
		</header> 

		<header id="masthead" class="site-header">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light justify-content-md-between">
					<div class="d-md-block d-lg-none">
						<?php get_template_part( 'template-parts/language-selector' ); ?>
					</div>
					<div class="site-branding navbar-brand">
						<?php
						the_custom_logo();
						?>
					</div><!-- .site-branding -->

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'navbarSupportedContent',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						)
					);
				?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div>
<div id="page container-fluid" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'geovictoria-2021' ); ?></a>
	
