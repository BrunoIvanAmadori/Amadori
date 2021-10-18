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
	<section class="hero container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Control de personal de
						seguridad en un solo lugar
					</h1>
					<p class="gray fw-light mb-3  anime-fadein">
						Los guardias de seguridad contratados, en el lugar
						asignado. Control de rondas, asistencia por aplicación
						o llamada y supervisión de tus trabajadores.
					</p>

					<p class="gray fw-light mb-3  anime-fadein">
						Ahorra, gestiona y decide con GeoVictoria.
					</p>

					<button class="button--bigblue w-100 anime-fadein">
						<span class="white fw-bold">Solicita tu demo gratis</span>
					</button>

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/seguridad/header-seguridad.webp'>
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
				<img class="clients__logo securitas" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/securitas-logobnw.webp'>
				<img class="clients__logo prosegur" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/prosegur-logobnw.webp'>
				<img class="clients__logo alianzaseguridad" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/alianzaseguridad-logobnw.webp'>
				<img class="clients__logo rhseguridad" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/rhseguridad-logobnw.webp'>
			</div>

		</section>
	</div>

	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">La <span class="fw-bold">gestión del personal de seguridad</span> para tus clientes <span class="fw-bold">como nunca antes lo viste</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-1.webp'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Administra, decide, ahorra</h3>
				<p>¿Tienes problemas con el manejo de tu personal de seguridad?,
					<b>¿No llegan al lugar asignado?, ¿Sabes si tu cliente está recibiendo el servicio?</b>
				</p>
				<p>
					Con GeoVictoria gestiona, asigna rondas y haz seguimiento de tu personal
					de seguridad externo en un sólo clic. Entregamos información certera
					sobre los guardias de seguridad en las zonas asignadas.</p>

				<p>Asegura los contratos con tus clientes y evita multas por
					incumplimiento. Podrás tomar las decisiones al instante.</p>

				<p><b>¡Verifica que las instalaciones de tus clientes estén protegidas!</b></p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Simple, rápido y amigable</h3>
				<p>Optimiza eficazmente los datos. Con GeoVictoria utiliza la información
					de la asistencia del personal de seguridad externo <b>para ahorrar tiempo y dinero.</b></p>
				<p>Visualiza el cumplimiento de jornada laboral. Controla horas extras
					efectuadas. Programa alertas por atrasos o ausencias.<b>Realiza y planifica turnos según la demanda.</b></p>
				<p>GeoVictoria te ayuda a potenciar y simplificar tus tareas.
				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-2.webp'>
			</div>
		</div>
	</section>



	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="d-flex flex-column container justify-content-between features">
			<div class="row">
				<h2 class="text-center fw-bold gray section-title anime-fadein">Ahorra, actualiza, simplifica<br><span class="fw-light">Bienvenido a un mundo de gestión</span><br> </h2>
			</div>

			<div class="row justify-content-center anime-fadein-childs">
				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-three-circled.svg" />
					<h6 class="fw-bold">Administra personal
					</h6>
					<p>Construye perfiles y grupos
						de personal externo adaptados
						a los diferentes puntos de
						trabajo y jornadas asignadas.</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/map-geo.svg" />
					<h6 class="fw-bold">Cumplimiento de cobertura</h6>
					<p>Seguimiento de rondas y tareas de los
						guardias en terreno. Visualiza las zonas donde
						el personal de seguridad está trabajando.
					</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-check.svg" />
					<h6 class="fw-bold">Decisión en tiempo real</h6>
					<p>Toma decisiones al instante.
						Programa alertas y notificaciones.
						Evita multas por incumplimiento
						de contrato con tus clientes.</p>
				</div>
			</div>
		</section>
	</div>


	<section class="d-flex flex-column container justify-content-between">
		<div class="row gx-5 anime-fadein">
			<div class="col-lg-8 pe-lg-5 mb-5">
				<div class="testimonal__video text-center">
					<video width="100%" poster="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/seguridad/caso-iseg-thumb.webp" controls>
						<source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/seguridad/caso-iseg.mp4" type="video/mp4">
					</video>
				</div>
			</div>

			<div class="col-lg-4">
				<h2 class="fw-bold">Caso de éxito: ISEG</h2>
				<p>
					<!-- <img class="arrow-quote--left" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
					<i>"GeoVictoria nos permitió dejar los cuadernos de
						registro para hacer una marcación automatizada.
						Hoy en día sabemos antes que nuestros clientes
						si el guardia ha llegado o no ha llegado" </i>
					<!-- <img class="arrow-quote--right" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
				</p>

				<div class="row">
					<div class="col-3">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/iseg-logobnw.webp" />
					</div>
					<div class="col-9 d-flex flex-column justify-content-center">
						<span>
							<span class="fw-bold">Gabriel Lerner</span></br>
							Gerente General ISEG
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein">
				<h2 class="white fw-bold mb-3">
					Bienvenidos a la nueva
					forma de administrar el
					personal de seguridad
				</h2>

				<p>
					Controla todas tus operaciones diarias y
					verifica que el personal planificado esté allí.
					<span class="fw-bold">Haz que tus clientes estén tranquilos.</span>
				</p>

				<button class="fw-bold button--bigwhite mt-3">
					Cotiza con nosotros
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-fadein">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.webp" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>