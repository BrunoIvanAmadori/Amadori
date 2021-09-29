<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Geovictoria_2021
 */

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<section class="container-fluid">
		<div class="container">
			<div class="row ">
				<div class="col-12 col-md-8 d-flex flex-column justify-content-center col-12 col-md-6">
					<h1 class="gray mb-3 fw-bold">
						Queremos conocerte.
					</h1>

					<h5 class="gray fw-light">
						Llena el formulario debajo para que nuestros expertos puedan tomar tu consulta
					</h5>
				</div>

				<div class="contact__img col-12 col-md-4 d-flex justify-content-center">
					<img class="header" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/contacto/footer-sales.webp">
				</div>
			</div>
		</div>
	</section>


	<section class="contact container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					<div class="contact__form">
						<h2>Contáctanos</h2>
						<p>
							Nuestros expertos te guiarán y
							ofrecerán la mejor alternativa para ti
						</p>
						<?php echo do_shortcode('[contact-form-7 id="82" title="Contacto (principal)"]') ?>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="contact__info">
						<h4 class="mb-4">Vías de comunicación</h4>

						<div class="contact__soporte mb-4">

							<h5>Soporte</h5>
							<div>
								<i class="fas fa-phone-alt"></i>
								<span>+56 228976512</span><br>
								<i class="fas fa-phone-alt"></i>
								<span>+56 228976517</span>
							</div>

							<div>
								<i class="far fa-envelope"></i>
								<span>ventas@geovictoria.com</span>
							</div>
						</div>


						<div class="contact__ventas mb-4">
							<h5>Ventas</h5>
							<div>
								<i class="fas fa-phone-alt"></i>
								<span>+56 228976517</span><br>
								<i class="fas fa-phone-alt"></i>
								<span>+56 228976512</span>
							</div>

							<div>
								<i class="far fa-envelope"></i>
								<span>ventas@geovictoria.com</span><br>
							</div>
						</div>


						<div>
							<h5>Ubicación</h5>
							<span>Av. Los Leones 2061, Providencia</span><br>
						</div>

					</div>
				</div> <!-- col contact__info -->
			</div>
		</div>
	</section>

</main><!-- #main -->
<?php
get_footer();
?>