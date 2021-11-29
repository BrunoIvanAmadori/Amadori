<?php

/*
Template Name: Construccion
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<section class="hero container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Controla el personal de
						construcción en todos
						tus proyectos
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Administra el personal interno y externo en diferentes
						obras. Visualiza y distribuye los trabajadores según tus
						necesidades. Súmate a un nuevo mundo de gestión.
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">¡Quiero actualizarme!</span>
					</button>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/header-construccion.png'>
			</div>
		</div>
	</section>
	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>

		<section class="container clients col-12 mb-3">
			<h2 class="text-center gray section-title fw-light anime-fadein">Nuestros clientes ya<br><span class="fw-bold">gestionan su personal con nosotros</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo--5em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/aconcagua-logobnw.png'>
				<img class="clients__logo--6em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/desarrolladora-logobnw.png'>
				<img class="clients__logo--5em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ictino-logobnw.png'>
				<img class="clients__logo--5em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ingevec-logobnw.png'>
				<img class="clients__logo--5em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/armas-logobnw.png'>
				<img class="clients__logo--5em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/siena-logobnw.png'>
				<img class="clients__logo--5em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/eurocorp-logobnw.png'>
			</div>
		</section>
	</div>

	<section class='container'>
		<div class="row justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein mb-5">El control del personal en tu obra,
				<span class="fw-bold">como nunca antes lo viste</span>
			</h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-1.png'>
			</div>

			<div class="col-12 col-md-6 anime-fadein">
				<h4 class="fw-bold mb-4">Optimiza, decide, ahorra</h4>

				<p>
					¿Te gustaría gestionar tu personal en cada proyecto?, ¿Quisieras
					controlar el total de tus operaciones?
				</p>

				<p>
					Con GeoVictoria <b>administra y visualiza el personal para tus obras
						de construcción</b>. No importa donde tus trabajadores se encuentren
					¡Verás todo en una sola plataforma!</p>

				<p>
					A partir de variados sistemas de marcajes, entregamos información
					certera sobre las asistencia de tus trabajadores y el acceso del
					personal externo en tiempo real.
				</p>

				<p>
					Podrás tomar las decisiones al instante. Anticípate a las necesidades
					de personal según el proyecto que debes gestionar. <b>¡Aquí y ahora!</b>
				</p>

			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h4 class="fw-bold mb-4">Simple, rápido y amigable</h4>
				<p>GeoVictoria te permite administrar, gestionar y obtener
					informes de la asistencia de tu capital humano.</p>
				<p>Gracias a nuestra plataforma conocerás las asistencias, retrasos o
					ausencias. Gestionarás las horas extras de trabajadores por cada
					proyecto. Acceso centralizado a permisos, licencias o vacaciones.</p>
				<p><b>¡Automatiza la gestión de personal en todas tus obras de construcción!</b>
				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-2.png'>
			</div>
		</div>
	</section>





	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">¿Por qué elegir GeoVictoria?</h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-three-circled.svg" />
				<h6 class="fw-bold">Optimiza personal
				</h6>
				<p>Gracias a nuestra alianza con <b>Foco en Obra</b>,
					planifica el personal que
					se necesita en el proyecto según
					los plazos establecidos.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/map-geo.svg" />
				<h6 class="fw-bold">Variados sistemas de marcaje</h6>
				<p>Tenemos diversos dispositivos según
					tus necesidades. Los trabajadores
					o personal externo marcarán por
					aplicación móvil o relojes biométricos.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-check.svg" />
				<h6 class="fw-bold">Decisión en tiempo real</h6>
				<p>Desde la aplicación o en web, los
					supervisores verán en tiempo
					real, la presencia de trabajadores
					en los diferentes proyectos por
					usuarios o cuadrillas. </p>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="d-flex flex-column container justify-content-between">
			<div class="row gx-5 anime-fadein mb-5">
				<h2 class="text-center mb-5">El mejor respaldo, <b>son nuestros clientes</b></h2>
				<div class="col-lg-8 pe-lg-5 mb-5">
					<div class="testimonal__video text-center">
						<video controlsList="nodownload" width="100%" poster="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/caso-construccion-desarrolladora-thumb.jpg" controls>
							<source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/caso-construccion-desarrolladora.mp4" type="video/mp4">
						</video>
					</div>
				</div>

				<div class="col-lg-4 text-center text-lg-start">
					<h4 class="fw-bold">Caso de éxito: Desarrolladora del Pacífico</h4>
					<img class="testimonial__logo--small" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/desarrolladora-logobnw.png" />
					<p>
						<!-- <img class="arrow-quote--left" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
						<i>“Con GeoVictoria los colaboradores pueden marcar desde la aplicación y nos ahorra esfuerzos en dispositivos en cada uno de los proyectos.” </i>
						<!-- <img class="arrow-quote--right" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
					</p>
					<div class="row justify-content-center justify-content-lg-start">
						<span>
							<span class="fw-bold">Vanessa Ortecho</span></br>
							<small>Jefe Corporativo de Gestión Humana</small>
						</span>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein">
				<h2 class="white fw-bold mb-3">
					Bienvenidos a la nueva forma
					de gestionar el personal en
					tus obras de construcción
				</h2>

				<p>
					Controla todas tus operaciones diarias.
					Verifica que el personal planificado esté en
					el proyecto asignado. ¡Optimiza y ahorra!
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3" data-bs-toggle="modal" data-bs-target="#contactModal">
					¡Quiero actualizarme!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex ">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'contacto') ?>;