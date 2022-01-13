<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Geovictoria_2021
 */

get_header();

?>

<body>
	<main id="primary" class="site-main">
		<div class="bg-header" style="position: absolute; top:-150px; z-index:0;">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
		</div>

		<section class="hero container">
			<div class="row w-100 d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
				<div class="col-12 col-md-6 mb-5">
					<div class="align-self-center pe-md-3">
						<h1 class="gray mb-3 fw-bold">
							No podemos encontrar esta página
						</h1>
						<h4 class="fw-light mb-4 anime-fadein">
							Parece que no existe. Vuelve a la página de inicio.
						</h4>
						<a class="button btn-primary" href="<?php echo get_home_url() ?>">Volver al inicio</a>
					</div>
				</div>
				<div class="hero__graphics col-12 col-md-6">
					<img class="anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/error-500.svg">
				</div>
			</div>
		</section>

	</main><!-- #main -->
</body>