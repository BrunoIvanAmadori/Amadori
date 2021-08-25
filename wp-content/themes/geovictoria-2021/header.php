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
	<header id="tophead" class="container-fluid">
		<div class="container d-flex justify-content-between">
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

			<div class="language-selector">
			<ul>
				<?php 
				if (get_sites()) {
					print_r(get_sites());
					foreach (get_sites() as $site) {
						if (get_current_blog_id() == $site->blog_id) {
							continue;
						}
						$site_url_sanitized = str_replace('/', '', $site->path);
						?>
							<li>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/<?php echo $site_url_sanitized; ?>.png">

							</li>
						<?php
					}
				};
				?>
				</ul>
				
			</div>
		</div>
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
