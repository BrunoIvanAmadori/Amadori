<?php

/*
Template Name: Control de Asistencia
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
					Control de asistencia en tiempo real para tu empresa
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Somos el sistema más simple, amigable y eficiente para gestionar tu personal.
				</p>
			</div>
			<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
				<span class="white fw-bold">¡Probar gratis!</span>
			</button>



		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/header-asistencia.png'>
		</div>
	</section>



	<?php if (wp_is_mobile()) : ?>

		<section class="d-flex container step-1 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">

			<div class="col-12 col-md-6 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-type">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-type.png'>
						<div class="step-1__entry-selector">
						</div>
					</div>

					<div class="step-1__app-screen">
						<img class="screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/app-screen.png'>
						<img class="step-1__phone-camera" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/phone-camera.png'>
						<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry.png'>
						<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry-line.png'>
					</div>

					<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>

				</div>
			</div>

			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						Registra tu asistencia
					</h2>
					<p class="gray fw-light mb-3">
						Según el método que elijas, tus trabajadores podrán fichar asistencia y será verificada gracias a nuestra tecnología biométrica.
					</p>
				</div>
			</div>

		</section>

		<section class="d-flex container step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						¡Siempre en la nube!
					</h2>
					<p class="gray fw-light mb-3">
						Los datos de asistencia estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__entry-id--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>
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
		</section>

		<section class="d-flex container step-3 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics d-flex resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/platform.png'>
					<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/report-action.png'>
					<div class="step-3__ripple">
					</div>

					<div class="step-3__meter-container atrasos">
						<div class="step-3__meter-title">
							<h6>Atrasos</h6>
						</div>
						<div class="step-3__meter--orange">
							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>
							<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>
						<div class="step-3__meter-left-data-container">
							<span class="step-3__meter-left-data--orange">
							</span>
							<small>Presentes</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">
							</span>
							<small>Planificados</small>
						</div>
					</div>

					<div class="step-3__meter-container asistencia-total">
						<div class="step-3__meter-title">
							<h6>Asistencia total</h6>
						</div>

						<div class="step-3__meter--blue">

							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>

							<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>

						<div class="step-3__meter-left-data-container">
							<span class="step-3__meter-left-data--blue">
							</span>
							<small>Atrasos</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">
							</span>
							<small>Presentes</small>
						</div>
					</div>

					<div class="step-3__meter-container ausentismo-total">
						<div class="step-3__meter-title">
							<h6>Ausentismo total</h6>
						</div>

						<div class="step-3__meter--orange">

							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>

							<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>
					</div>

					<div class="step-3__assist-bars">
						<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-global.png'>
						<div class="step-3__bar-group">
							<div class="step-3__bar--1">100%</div>
							<div class="step-3__bar--2">100%</div>
							<div class="step-3__bar--3">100%</div>
							<div class="step-3__bar--4">100%</div>
							<div class="step-3__bar--5">100%</div>
							<div class="step-3__bar--6">100%</div>
						</div>
					</div>

					<div class="step-3__assist-line">
						<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-line.png'>
						<img class="step-3__line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/bars-assist-line.svg'>
					</div>

					<div class="step-3__plan-bars">
						<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-plan-bars.png'>
						<div class="step-3__bar-group">
							<div class="step-3__bars--1">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--2">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--3">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--4">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--5">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--6">
								<div class="step-3__bar--gray-small">
								</div>
								<div class="step-3__bar--blue-small">
								</div>
							</div>

							<div class="step-3__bars--7">
								<div class="step-3__bar--gray-small">
								</div>
								<div class="step-3__bar--blue-small">
								</div>
							</div>


						</div>
					</div>


				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						Informes al instante
					</h2>
					<p class="gray fw-light mb-3">
						Obtendrás todo tipo de informes y podrás exportarlos en el formato que requieras. Horas extras, turnos consolidados, planificaciones y permisos. ¡Todo en un sólo lugar!
					</p>
				</div>
			</div>
		</section>
	<?php else : ?>

		<div class="animation-container invisible container">
			<div class="animation-slider">
				<section class="d-flex step-1 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
					<div class="step-1__bg-curve">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
						<div class="bg-tail-gray"></div>
					</div>
					<div class="col-12 col-md-6 step-1 step-1__graphics resizer-reference mb-5">
						<div class="resizer">
							<div class="step-1__ripple">
							</div>

							<div class="step-1__entry-type">
								<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-type.png'>
								<div class="step-1__entry-selector">
								</div>
							</div>

							<div class="step-1__app-screen">
								<img class="screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/app-screen.png'>
								<img class="step-1__phone-camera" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/phone-camera.png'>
								<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry.png'>
								<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry-line.png'>
							</div>

							<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>
						</div>
					</div>

					<div class="col-12 col-md-6 step-1 step-1__text">
						<div class="align-self-center pe-md-3 text-center text-md-start">
							<h2 class="gray mb-3 fw-bold anime-fadein">
								Registra tu asistencia
							</h2>
							<p class="gray fw-light mb-3 anime-fadein">
								Según el método que elijas, tus trabajadores podrán fichar asistencia y será verificada gracias a nuestra tecnología biométrica.
							</p>
						</div>
					</div>
				</section>

				<section class="d-flex step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
					<div class="col-12 col-md-6 step-2 step-2__text">
						<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
							<h2 class="gray mb-3 fw-bold">
								¡Siempre en la nube!
							</h2>
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

				<section class="d-flex step-3 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
					<div class="col-12 col-md-6 step-3 step-3__graphics resizer-reference mb-5 pb-4">
						<div class="resizer">
							<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/platform.png'>
							<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/report-action.png'>
							<div class="step-3__ripple">
							</div>

							<div class="step-3__meter-container atrasos">
								<div class="step-3__meter-title">
									<h6>Atrasos</h6>
								</div>
								<div class="step-3__meter--orange">
									<span class="step-3__meter-num-progress"></span>
									<span class="step-3__meter-start-value">0%</span>
									<span class="step-3__meter-end-value">100%</span>
									<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
									<div class="step-3__meter-fill-mask">
										<div class="step-3__meter-bg"></div>
										<div class="step-3__meter-fill--left"></div>
										<div class="step-3__meter-fill--right"></div>
									</div>
								</div>
								<div class="step-3__meter-left-data-container">
									<span class="step-3__meter-left-data--orange">
									</span>
									<small>Presentes</small>
								</div>
								<div class="step-3__meter-right-data-container">
									<span class="step-3__meter-right-data">
									</span>
									<small>Planificados</small>
								</div>
							</div>

							<div class="step-3__meter-container asistencia-total">
								<div class="step-3__meter-title">
									<h6>Asistencia total</h6>
								</div>

								<div class="step-3__meter--blue">

									<span class="step-3__meter-num-progress"></span>
									<span class="step-3__meter-start-value">0%</span>
									<span class="step-3__meter-end-value">100%</span>

									<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
									<div class="step-3__meter-fill-mask">
										<div class="step-3__meter-bg"></div>
										<div class="step-3__meter-fill--left"></div>
										<div class="step-3__meter-fill--right"></div>
									</div>
								</div>

								<div class="step-3__meter-left-data-container">
									<span class="step-3__meter-left-data--blue">
									</span>
									<small>Atrasos</small>
								</div>
								<div class="step-3__meter-right-data-container">
									<span class="step-3__meter-right-data">
									</span>
									<small>Presentes</small>
								</div>
							</div>

							<div class="step-3__meter-container ausentismo-total">
								<div class="step-3__meter-title">
									<h6>Ausentismo total</h6>
								</div>

								<div class="step-3__meter--orange">

									<span class="step-3__meter-num-progress"></span>
									<span class="step-3__meter-start-value">0%</span>
									<span class="step-3__meter-end-value">100%</span>

									<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
									<div class="step-3__meter-fill-mask">
										<div class="step-3__meter-bg"></div>
										<div class="step-3__meter-fill--left"></div>
										<div class="step-3__meter-fill--right"></div>
									</div>
								</div>
							</div>

							<div class="step-3__assist-bars">
								<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-global.png'>
								<div class="step-3__bar-group">
									<div class="step-3__bar--1">100%</div>
									<div class="step-3__bar--2">100%</div>
									<div class="step-3__bar--3">100%</div>
									<div class="step-3__bar--4">100%</div>
									<div class="step-3__bar--5">100%</div>
									<div class="step-3__bar--6">100%</div>
								</div>
							</div>

							<div class="step-3__assist-line">
								<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-line.png'>
								<img class="step-3__line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/bars-assist-line.svg'>
							</div>

							<div class="step-3__plan-bars">
								<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-plan-bars.png'>
								<div class="step-3__bar-group">
									<div class="step-3__bars--1">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--2">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--3">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--4">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--5">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--6">
										<div class="step-3__bar--gray-small">
										</div>
										<div class="step-3__bar--blue-small">
										</div>
									</div>

									<div class="step-3__bars--7">
										<div class="step-3__bar--gray-small">
										</div>
										<div class="step-3__bar--blue-small">
										</div>
									</div>


								</div>
							</div>


						</div>
					</div>
					<div class="col-12 col-md-6 step-3 step-3__text">
						<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
							<h2 class="gray mb-3 fw-bold">
								Informes al instante
							</h2>
							<p class="gray fw-light mb-3">
								Obtendrás todo tipo de informes y podrás exportarlos en el formato que requieras. Horas extras, turnos consolidados, planificaciones y permisos. ¡Todo en un sólo lugar!
							</p>
						</div>
					</div>
				</section>
			</div>
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">

		<h2 class="text-center gray fw-bold section-title anime-fadein">
			¿Por qué elegir nuestro control de asistencia?
		</h2>

		<div class="row d-flex justify-content-center">

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/hand-coin.svg" />
						<h5>Paga correctamente los salarios</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Conoce los datos reales de la asistencia de tus colaboradores para el pago preciso de sus horas trabajadas.</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/clock-folder.svg" />
						<h5>Ahorra tiempo y dinero</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">¡No gastes de más en recursos y personal para la gestión de asistencia! GeoVictoria lo hace por ti.</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/bullseye.svg" />
						<h5>Toma decisiones al instante</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">En caso de ausencias e imprevistos, podrás tomar decisiones acertadas y en tiempo real. </p>
					</div>
				</div>
			</div>

		</div> <!-- row -->
	</section> <!-- benefits -->

	<section class="container-fluid bg-blue-2 logging-types ">
		<div class="container">
			<div class="row mb-5">
				<h2>Podrás elegir entre diferentes tipos de fichaje</h2>
			</div>
			<div class="row justify-content-between <?php if (!wp_is_mobile()) echo 'anime-fadein-childs' ?>">

				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start<?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-web.png" />
					<h6>Web</h6>
					<small>Marcaje desde cualquier computador con acceso a internet.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-usb.png" />
					<h6>Lector de huella USB</h6>
					<small>Bajo costo y fácil implementación. Así es el fichaje con huellas vía conexión USB.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-app.png" />
					<h6>GeoVictoria App</h6>
					<small>Ideal para trabajadores en terreno. Marcaje por <i>selfie</i> y georreferenciación.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>GeoVictoria Box</h6>
					<small>El método de fichaje por excelencia vía reloj control mediante conexiones LAN, 3G o Wi-Fi.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-call.png" />
					<h6>GeoVictoria Call</h6>
					<small>Un método de fichaje simple y efectivo vía llamada telefónica.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-face.png" />
					<h6>GeoVictoria Face</h6>
					<small>Detección de temperatura, mascarilla y sin contacto. Así es el fichaje con reconocimiento facial.
					</small>
				</div>
			</div>
		</div>

	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos más que un control de asistencia </h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud.svg" />
				<h5 class="fw-bold">Plataforma en la nube</h5>
				<p>Fácil acceso desde cualquier dispositivo con internet. Con Geovictoria no perderás información valiosa.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/handshake.svg" />
				<h5 class="fw-bold">Acompañamiento</h5>
				<p>Estamos contigo en todo el proceso, desde el primer contacto, hasta concretar la implementación. En lo que necesites, cuenta con nosotros.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear.svg" />
				<h5 class="fw-bold">Adaptabilidad</h5>
				<p>Cada industria funciona de manera muy diferente. Nos adaptamos a cada una de ellas.</p>
			</div>
		</div>
	</section>
	<section class="d-flex flex-column container justify-content-between">
		<div class="row gx-5 anime-fadein">
			<h2 class="text-center mb-5">El mejor respaldo, <b>son nuestros clientes</b></h2>
			<div class="pe-lg-5">
				<div class="testimonial__video text-center">
					<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/GMb2_8oK1l8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h2 class="white fw-bold mb-3 anime-fadein">
					¿Listo para ser parte del cambio?
				</h2>

				<p class="white fw-light mb-3 anime-fadein">
					Sabemos que toda transformación es un desafío. Más de 5000 empresas ya gestionan su asistencia con nosotros.
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					¡Probar gratis!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>

	<?php
	$args = [
		'post_type'        => 'post',
		'posts_per_page'   => 6,
		'tag'            => ['control-de-asistencia'],
	];

	$control_de_asistencia_query = new WP_Query($args);

	if ($control_de_asistencia_query->have_posts()) :
	?>
		<section class="d-flex flex-column container justify-content-center related-posts">
			<h2 class="align-self-center gray">Aprende más sobre Control de Asistencia</h2>
			<div class="row mt-3 gy-4">
				<?php
				while ($control_de_asistencia_query->have_posts()) {
					$control_de_asistencia_query->the_post();
					get_template_part('template-parts/blogcard');
				}
				?>
			</div>
		<?php
	endif;

		?>
		</section>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>