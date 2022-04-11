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
	<script>
		history.scrollRestoration = "manual";
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-MMHNZB6');
	</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>


</head>

</div>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMHNZB6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php if (!wp_is_mobile()) : ?>
		<div id="scroll-content" data-scrollbar>
		<?php endif; ?>
		<div id="sticky-menu">
			<div id="sticky-menu-offset">
				<header id="tophead" class="container-fluid d-none d-lg-block">
					<div class="container d-flex justify-content-between align-items-center">
						<div class='d-flex'>

							<?php
							$isContactInfo = 0;
							$contacto_ventas_1 = get_theme_mod('geovictoria-2021_info_contacto_ventas_1');
							$contacto_ventas_1_sanitized = preg_replace('/\D/', '', $contacto_ventas_1);

							$contacto_email_ventas = get_theme_mod('geovictoria-2021_info_contacto_email_ventas');
							$contacto_email_ventas_sanitized = esc_html($contacto_email_ventas);

							if (get_theme_mod('geovictoria-2021_info_contacto_ventas_1')) :
								$isContactInfo += 1;
							?>

								<div class="contact-phone pe-3">
									<i class="far fa-phone-alt blue"></i>
									<a class="underline" href="tel:<?php echo $contacto_ventas_1_sanitized; ?>"><small><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_ventas_1')); ?></small></a>
								</div>

							<?php
							endif;
							?>

							<?php
							if (get_theme_mod('geovictoria-2021_info_contacto_email_ventas')) :
								$isContactInfo += 1;
							?>

								<div class="contact-email">
									<i class="far fa-envelope blue"></i>
									<a class="underline" href="mailto:<?php echo $contacto_email_ventas_sanitized; ?>"><small><?php echo $contacto_email_ventas_sanitized; ?></small></a>
								</div>

							<?php
							endif;
							?>

							<?php


							$hasLegalMenu = wp_nav_menu(
								array(
									'menu'           => 'Menu legal',
									'echo' => 0,  // true or 0
									'theme_location' => '__fake', // fake value, to prevent display of 1st real menu
									'fallback_cb' => false  // prevent display of 1st real menu
								)
							);

							if ($isContactInfo > 0 && $hasLegalMenu) :
							?>
								<span class="menu-legal-separator"> | </span>
							<?php
							endif;

							if ($hasLegalMenu) {

								wp_nav_menu(
									array(
										'menu'           => 'Menu legal',
										'menu_id'        => 'legal-menu',
										'container_class' => 'menu-menu-legal-header-container'
									)
								);
							}


							?>

						</div>
						<?php get_template_part('template-parts/region-selector'); ?>
					</div>
				</header>

				<header id="masthead" class="site-header">
					<div class="container">
						<nav class="navbar navbar-expand-lg navbar-light justify-content-md-between">
							<div class="d-md-block d-lg-none">
								<?php get_template_part('template-parts/region-selector'); ?>
							</div>
							<div class="site-branding navbar-brand">
								<?php
								the_custom_logo();
								?>

							</div><!-- .site-branding -->
							<a href="<?php echo site_url(); ?>">
								<div class="small-logo">

									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/favicon.png">

								</div>
							</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'depth'             => 3,
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
		</div>
		<div id="page container-fluid" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'geovictoria-2021'); ?></a>