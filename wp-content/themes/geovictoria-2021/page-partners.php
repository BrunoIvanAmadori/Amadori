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

	<section class="hero container-fluid">

		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						¡Trabajamos con los mejores!
					</h1>
					<h5 class="gray fw-light mb-3">
						Nos juntamos con grandes empresas para
						hacer tu trabajo mucho más eficiente.
						Conoce nuestros aliados en todo el mundo.
					</h5>

				</div>
			</div>

			<div class="hero__graphics col-12 col-md-6">
				<img class="header" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/header-partners.webp'>
			</div>

		</div>

	</section> <!-- hero -->

	<section class="container-fluid partners-estrategicos__container">

		<div class='container'>

			<div class="partners-estrategicos__headline col-12 d-flex flex-column align-items-center mb-5 text-center">
				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">Partners estratégicos</h1>
				</div>
				<div class="col-12 col-lg-9 anime-fadein">
					<p class="fw-light">
						Desde la infraestructura donde operamos, las regulaciones que cumplimos y la expansión
						de nuestros servicios. Los siguientes aliados nos ayudan a cumplir nuestro propósito de
						ser la mejor solución para la gestión de capital humano.
					</p>
				</div>
			</div>

			<div class="partners-estrategicos__content d-flex">

				<div class="row gy-3 anime-fadein-childs">

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/microsoft.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Microsoft
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/direccion-del-trabajo.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Dirección del trabajo
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/red-rrhh.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Red de recursos humanos
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/endeavor.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Endeavor
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

				</div> <!-- row -->

			</div> <!-- partners-estrategicos-content -->
		</div> <!-- container -->
	</section>

	<section class="container-fluid partners-estrategicos__container">
		<div class="container">

			<div class="partners-estrategicos__headline col-12 d-flex flex-column align-items-center mb-5 text-center">

				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">ERP'S RRHH</h1>
				</div>

				<div class="col-12 col-lg-9 anime-fadein">
					<p class="fw-light">
						Trabajamos con las soluciones para recursos humanos con más experiencia
						en el mercado. Toda la información del cálculo de remuneraciones apoyado
						con nuestro control de acceso y asistencia. ¡Nos adaptamos para ti!
					</p>
				</div>

			</div>

			<div class="partners-estrategicos__content d-flex flex-column">

				<div class="row gy-3 mb-3 anime-fadein-childs">

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/visma.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Visma
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/siigo.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Siigo
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/rex+.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Rex+
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/kame-erp.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Kame ERP
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

				</div> <!-- row -->

				<div class="row gy-3 mb-3 anime-fadein-childs">

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/softland.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Softland
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/dbnet.webp'>
							<div class="card-body">
								<h5 class="card-title">
									DBNet
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/rankmi.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Rankmi
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/hcmfront.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Hcmfront
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

				</div> <!-- row -->

				<div class="row gy-3 justify-content-center anime-fadein-childs">

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/turecibo.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Turecibo
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/sinergy-lowells.webp'>
							<div class="card-body">
								<h5 class="card-title">
									Sinergy & Lowells
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
								<a href="#" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

				</div> <!-- row -->

			</div> <!-- partners estrategicos -->
		</div> <!-- container -->
	</section>

	<section class="container-fluid partners-estrategicos__container">
		<div class="container">

			<div class="partners-estrategicos__headline col-12 d-flex flex-column align-items-center mb-5 text-center">

				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">Gestión operativa</h1>
				</div>

				<div class="col-12 col-lg-9 anime-fadein">
					<p class="fw-light">
						Llevamos la gestión de tus tareas operativa a un nuevo nivel. Gracias a nuestra integración
						con los siguientes aliados, tendrás KPI’s de alto valor para la toma de decisiones.
					</p>
				</div>

			</div>

			<div class="row gy-3 justify-content-center anime-fadein-childs">

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/foco-en-obra.webp'>
						<div class="card-body">
							<h5 class="card-title">
								Foco en obra
							</h5>
							<p class="card-text">
								Una empresa dedicada a hacer cosas varias.
							</p>
							<a href="#" type="button" class="button--blue">Ver más</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/shift.webp'>
						<div class="card-body">
							<h5 class="card-title">
								Shift
							</h5>
							<p class="card-text">
								Una empresa dedicada a hacer cosas varias.
							</p>
							<a href="#" type="button" class="button--blue">Ver más</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/ipsum.webp'>
						<div class="card-body">
							<h5 class="card-title">
								Ipsum
							</h5>
							<p class="card-text">
								Una empresa dedicada a hacer cosas varias.
							</p>
							<a href="#" type="button" class="button--blue">Ver más</a>
						</div>
					</div>
				</div>

			</div> <!-- row -->

		</div> <!-- container -->
	</section> <!-- partners-estrategicos-container -->

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<section class="container-fluid bg-blue-2 why-us">
		<div class="container">

			<div class="row">

				<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">

					<h2 class="white fw-bold mb-3">
						¿Quieres ser parte de nuestra red de partners?
					</h2>

					<p class="anime-fadein">
						¡Juntos podemos mejorar la experiencia de
						nuestros clientes! Te invitamos a ser parte
						de un mundo de gestión y analítica con
						GeoVictoria. ¡Hablemos!
					</p>

				</div>

				<div class="col-12 col-md-6 align-self-center">

					<div class="contact__form anime-fadein-childs">
						<?php echo do_shortcode('[contact-form-7 id="82" title="Contacto (principal)"]') ?>
					</div>

				</div>

			</div> <!-- row -->

		</div> <!-- container -->
	</section>

</main><!-- #main -->
<?php
get_footer();
?>