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

	<?php if (!wp_is_mobile()) : ?>
		<div class="icon-scroll"><small class="tip">GIRA LA RUEDA</small></div>
	<?php endif; ?>

	<section class="hero container d-flex flex-column flex-md-row justify-content-around text-center text-md-start">

		<div class="hero__text col-12 col-md-6 mb-3">
			<div class="align-self-center pe-md-3">
				<h1 class="gray mb-3 fw-bold">
					¡No más visitas inesperadas! Gestiona el control de acceso en tu empresa
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Garantiza la seguridad en tus instalaciones.
					Variados sistemas de marcajes, reportería
					personalizada y planificación.
				</p>
				<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white fw-bold">¡Quiero actualizarme!</span>
				</button>
			</div>
		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header-acceso anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/header-acceso.png'>
		</div>
	</section>

	<?php if (wp_is_mobile()) : ?>

		<section class="d-flex container step-1 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
			<div class="step-1__bg-curve">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
				<div class="bg-tail-gray"></div>
			</div>
			<div class="col-12 col-md-6 mb-1 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-device">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/devices.png'>
						<div class="step-1__entry-selector">
						</div>
					</div>

					<div class="step-1__entry-method">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-method.png'>
						<div class="step-1__entry-selector">
						</div>
					</div>

					<div class="step-1__speedface-container">
						<img class="step-1__speedface-screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-screen.png'>
						<img class="step-1__speedface-face" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-face.png'>
						<img class="step-1__speedface" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface.png'>
						<img class="step-1__speedface-notification" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-notification.png'>
						<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry.png'>
						<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry-line.png'>
					</div>

					<img class="step-1__speedface-blocked" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-locked.png'>
					<img class="step-1__speedface-open" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-open.png'>


					<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-1.png'>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Permite el acceso
					</h1>
					<p class="gray fw-light mb-3">
						Sin importar el dispositivo o el lugar de acceso, valida el ingreso de personas gracias a nuestra tecnología.
					</p>
				</div>
			</div>
		</section>

		<section class="d-flex container step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						¡Siempre en la nube!
					</h1>
					<p class="gray fw-light mb-3">
						Los datos de acceso estarán protegidos en la nube. Encuentra la información en tiempo real. ¡Disponible cuando la necesites!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-2 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__entry-id--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-1.png'>
					<!-- <img class="step-2__entry-id--size-1-b" src='<?php //echo esc_url( get_template_directory_uri() ); 
																		?>/dist/img/animation-acceso/entry-id.png'> -->
					<img class="step-2__entry-id--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-2.png'>
					<img class="step-2__entry-id--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-3.png'>
					<img class="step-2__entry-id--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-4.png'>
					<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/cloud.svg'>
					<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/cloud.svg'>

					<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/loading.svg'>
					<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/arrow-up.svg'>
					<div class="step-2__bubble"></div>
					<div class="step-2__check">
						<i class="fas fa-check"></i>
					</div>
				</div>
			</div>
		</section>

		<section class="d-flex container step-3 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-3 step-3 step-3__graphics resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/platform.png'>
					<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/report-action.png'>
					<div class="step-3__ripple">
					</div>

					<div class="step-3__graphic-container">
						<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic.png'>
						<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic-bars.png'></img>
					</div>

					<div class="step-3__users-container">
						<img class="step-3__users" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users.png">
						<div class="step-3__data-1">40</div>
					</div>

					<div class="step-3__users-detail-container d-flex flex-column">
						<img class="step-3__users-detail" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users-detail.png'>
						<div class="step-3__data-1">23</div>
						<div class="step-3__data-2">23</div>
						<div class="step-3__data-3">0</div>
					</div>

					<div class="step-3__date-container d-flex flex-column">
						<img class="step-3__date" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/date.png'>
						<div class="step-3__hour">17:23</div>
						<div class="step-3__day">Miércoles, 1 de septiembre de 2021</div>
					</div>

					<img class="step-3__monitoring" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/monitoring.png'>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 mt-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Reportes al instante
					</h1>
					<p class="gray fw-light mb-3">
						Obtén distintos reportes de ingresos. Creación de perfiles. Planificación por días, semanas y meses. ¡Todo en un solo lugar!
					</p>
				</div>
			</div>
		</section>
	<?php else : ?>

		<div class="animation-container container">
			<section class="d-flex step-1 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
				<div class="step-1__bg-curve">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
					<div class="bg-tail-gray"></div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference mb-5">
					<div class="resizer">
						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-device">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/devices.png'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__entry-method">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-method.png'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__speedface-container">
							<img class="step-1__speedface-screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-screen.png'>
							<img class="step-1__speedface-face" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-face.png'>
							<img class="step-1__speedface" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface.png'>
							<img class="step-1__speedface-notification" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-notification.png'>
							<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry.png'>
							<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry-line.png'>
						</div>

						<img class="step-1__speedface-blocked" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-locked.png'>
						<img class="step-1__speedface-open" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-open.png'>


						<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-1.png'>
					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Marca tu acceso
						</h1>
						<p class="gray fw-light mb-3">
							Según el método que elijas, tus trabajadores podrán marcar asistencia y será verificada gracias a nuestra tecnología biométrica.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							¡Siempre en la nube!
						</h1>
						<p class="gray fw-light mb-3">
							Los datos de asistencia estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
						</p>
					</div>
				</div>

				<div class="col-12 col-md-6 step-2 step-2__graphics resizer-reference mb-5">
					<div class="scale-fix">
						<div class="resizer">
							<img class="step-2__entry-id--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>
							<!-- <img class="step-2__entry-id--size-1-b" src='<?php //echo esc_url( get_template_directory_uri() ); 
																				?>/dist/img/animation-asistencia/entry-id.png'> -->
							<img class="step-2__entry-id--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id-2.png'>
							<img class="step-2__entry-id--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id-3.png'>
							<img class="step-2__entry-id--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id-4.png'>
							<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/cloud.svg'>
							<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/cloud.svg'>

							<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/loading.svg'>
							<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/arrow-up.svg'>
							<div class="step-2__bubble"></div>
							<div class="step-2__check">
								<i class="fas fa-check"></i>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference mb-5">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/platform.png'>
						<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/report-action.png'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic.png'>
							<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic-bars.png'>
						</div>

						<div class="step-3__users-container">
							<img class="step-3__users" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users.png">
							<div class="step-3__data-1">40</div>
						</div>

						<div class="step-3__users-detail-container d-flex flex-column">
							<img class="step-3__users-detail" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users-detail.png'>
							<div class="step-3__data-1">23</div>
							<div class="step-3__data-2">23</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__date-container d-flex flex-column">
							<img class="step-3__date" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/date.png'>
							<div class="step-3__hour">17:23</div>
							<div class="step-3__day">Miércoles, 1 de septiembre de 2021</div>
						</div>

						<img class="step-3__monitoring" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/monitoring.png'>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Reportes al instante
						</h1>
						<p class="gray fw-light mb-3">
							Obtendrás todo tipo de reportes y podrás exportarlos en el formato que requieras. Horas extras, turnos consolidados, planificaciones y permisos. ¡Todo en un sólo lugar!
						</p>
					</div>
				</div>
			</section>
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center fw-bold gray section-title anime-fadein">¿Por qué elegir nuestro control de asistencia?</h2>
		<div class="row d-flex justify-content-center">

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/clock-dollar.svg" />

						<h5>Disminuye costos y tiempos</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">
							Ahorra tiempo y dinero,
							optimizando los
							procesos de acceso.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/pc-check.svg" />

						<h5>Digitaliza tus procesos</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">No pierdas tiempo anotando cada uno de los ingresos de forma manual.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">


						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/shield-check.svg" />
						<h5>Seguridad para tu empresa</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Sea en la entrada, la bodega o en las oficinas. Todas las áreas de tu empresa estarán protegidas.</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row d-flex justify-content-center">



			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/process-gear.svg" />

						<h5>Trazabilidad de tu personal</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">
							Haz el seguimiento de
							tus colaboradores y
							externos en las
							diferentes zonas u
							oficinas de tu empresa.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/ruler.svg" />

						<h5>Reportes a medida</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Obten Informes de
							ingresos y salidas, por
							lugares o fechas. Todo
							siempre a tu
							disposición.
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Un control de acceso único</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person.svg" />
				<h5 class="fw-bold">Perfiles de personal</h5>
				<p>
					Autoriza el acceso de personas de
					acuerdo a sus funciones en la empresa.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear.svg" />
				<h5 class="fw-bold">Integrable con asistencia</h5>
				<p>
					Encuentra la información de acceso y
					asistencia en un mismo lugar.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/paper.svg" />
				<h5 class="fw-bold">Planificación de accesos</h5>
				<p>
					Determina los ingresos por días, semanas o
					meses. ¡Todo con la debida antelación!
				</p>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos mucho más que un control de acceso</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-circled.svg" />
				<h5 class="fw-bold">Control de visitas</h5>
				<p>
					Agenda, autoriza y verifica.
					Con GeoVictoria puedes gestionar
					y visualizar el listado de visitas
					que ingresan a tu empresa.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/arrow-out.svg" />
				<h5 class="fw-bold">Control de externos</h5>
				<p>
					Contratistas, proovedores o personal de
					outsourcing. Tendrás el control de acceso
					de todo el personal externo.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/construction-check.svg" />
				<h5 class="fw-bold">Acceso vehicular</h5>
				<p>
					Gestiona el ingreso y salida de los
					vehículos que acceden a tu empresa.
					Sabrás en tiempo real los espacios
					disponibles en tu estacionamiento.
				</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein-childs">
				<h1 class="white fw-bold mb-3">
					¿Listo para ser parte del cambio?
				</h1>

				<p class="white fw-light mb-3">
					Sabemos que toda transformación es un desafío. Más de 5000 empresas ya gestionan su acceso con nosotros.
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3" data-bs-toggle="modal" data-bs-target="#contactModal">
					¡Quiero actualizarme!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-pop">
				<img class="why-us__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'contacto') ?>;