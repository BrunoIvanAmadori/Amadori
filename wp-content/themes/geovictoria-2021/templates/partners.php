<?php

/*
Template Name: Partners
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
					<h5 class="gray fw-light mb-3 anime-fadein">
						Nos juntamos con grandes empresas para
						hacer tu trabajo mucho más eficiente.
						Conoce nuestros aliados en todo el mundo.
					</h5>



				</div>
			</div>

			<div class="hero__graphics col-12 col-md-6">
				<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/header-partners.png'>
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

				<div class="row gy-3 <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
							<a href="https://www.microsoft.com/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/microsoft.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Microsoft
								</h5>
								<p class="card-text">
									Empresa de TI más grande en el
									mundo. Nuestros servicios operan
									gracias a la nube de Azure.
								</p>
								<a href="https://www.microsoft.com/" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
							<a href="https://www.dt.gob.cl/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/direccion-del-trabajo.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Dirección del trabajo
								</h5>
								<p class="card-text">
									Entidad encargada de velar por
									el cumplimiento de las leyes
									del trabajo.
								</p>
								<a href="https://www.dt.gob.cl/" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
							<a href="https://redderrhh.com/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/red-rrhh.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Red de recursos humanos
								</h5>
								<p class="card-text">
									Una de las comunidades más
									grandes en RR.HH. Fundada en
									2008, hoy en día cuenta con más
									de 4000 integrantes.
								</p>
								<a href="https://redderrhh.com/" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
							<a href="https://endeavor.org/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/endeavor.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Endeavor
								</h5>
								<p class="card-text">
									Comunidad líder de emprendedores
									de alto impacto en el mundo.
								</p>
								<a href="https://endeavor.org/" type="button" class="button--blue">Ver más</a>
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

				<div class="row gy-3 mb-3 <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.visma.com">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/visma.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Visma
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.siigo.com/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/siigo.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Siigo
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://rexmas.com/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/rex+.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Rex+
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.kame.cl/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/kame-erp.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Kame ERP
									</h5>
								</div>
							</div>
						</a>
					</div>

				</div> <!-- row -->

				<div class="row gy-3 mb-3 anime-fadein-childs">

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.softland.cl/descripcion-sistemas-erp/detalle-sistema-control-asistencia">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/softland.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Softland
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.dbnetcorp.com/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/dbnet.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										DBNet
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.rankmi.com/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/rankmi.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Rankmi
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://home.hcmfront.com/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/hcmfront.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Hcmfront
									</h5>
								</div>
							</div>
						</a>
					</div>

				</div> <!-- row -->

				<div class="row gy-3 justify-content-center <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.turecibo.com/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/turecibo.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Turecibo
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<a href="https://www.sinergylowells.com/">
							<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/sinergy-lowells.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Sinergy & Lowells
									</h5>

								</div>
							</div>
						</a>
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

			<div class="row gy-3 justify-content-center <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

				<div class="col-12 col-sm-6 col-lg-3">
					<a href="https://focoenobra.cl/">
						<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/foco-en-obra.png'>
							<div class="card-body text-center">
								<h5 class="card-title">
									Foco en obra
								</h5>

							</div>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<a href="https://www.shift-app.com/">
						<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/shift-logo.png'>
							<div class="card-body text-center">
								<h5 class="card-title">
									Shift
								</h5>

							</div>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<a href="https://www.ipsumapp.co/">
						<div class="partners-estrategicos__partner card <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ipsum-logo.png'>
							<div class="card-body text-center">
								<h5 class="card-title">
									Ipsum
								</h5>

							</div>
						</div>
					</a>
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

					<button class="fw-bold button--bigwhite mt-3 w-100 anime-fadein mb-5" data-bs-toggle="modal" data-bs-target="#partnersModal">
						¡Quiero participar!
					</button>

				</div>



				<div class="col-12 col-md-6 d-none d-lg-flex justify-content-center">
					<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
				</div>

			</div> <!-- row -->

		</div> <!-- container -->
	</section>

</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'partners');
get_footer();
?>