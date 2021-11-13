<?php

/*
Template Name: Control de asistencia
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>

<main id="primary" class="site-main">

	<?php if (!wp_is_mobile()) : ?>
		<div class="icon-scroll"><small class="tip">SCROLL DOWN</small></div>
	<?php endif; ?>


	<section class="hero container d-flex flex-column flex-md-row justify-content-around text-center text-md-start">

		<div class="hero__text col-12 col-md-6 mb-3">
			<div class="align-self-center pe-md-3">
				<h1 class="gray mb-3 fw-bold">
					Real-time attendance control for your company
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					We are the simplest, friendliest and most efficient system to manage your staff.
				</p>
			</div>
			<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
				<span class="white fw-bold">I want to update!</span>
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
					<h1 class="gray mb-3 fw-bold">
						Record your attendance
					</h1>
					<p class="gray fw-light mb-3">
						Depending on the method you choose, your workers will be able to record attendance and it will be verified thanks to our biometric technology.
					</p>
				</div>
			</div>

		</section>

		<section class="d-flex container step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Always in the cloud!
					</h1>
					<p class="gray fw-light mb-3">
						Attendance data will be protected in the cloud. The information will be hosted in real time. Available when you need it!
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
							<h6>Arrears</h6>
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
							<small>Present</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">
							</span>
							<small>Planned</small>
						</div>
					</div>

					<div class="step-3__meter-container asistencia-total">
						<div class="step-3__meter-title">
							<h6>Total attendance</h6>
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
							<small>Arrears</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">
							</span>
							<small>Present</small>
						</div>
					</div>

					<div class="step-3__meter-container ausentismo-total">
						<div class="step-3__meter-title">
							<h6>Total absent</h6>
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
					<h1 class="gray mb-3 fw-bold">
						Instant reports
					</h1>
					<p class="gray fw-light mb-3">
						You will get all kinds of reports and you can export them in the format you require. Overtime, consolidated shifts, schedules and permits. All in one place!
					</p>
				</div>
			</div>
		</section>
	<?php else : ?>

		<div class="animation-container container">
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
							<h1 class="gray mb-3 fw-bold anime-fadein">
								Record your attendance
							</h1>
							<p class="gray fw-light mb-3 anime-fadein">
								Depending on the method you choose, your workers will be able to record attendance and it will be verified thanks to our biometric technology.
							</p>
						</div>
					</div>
				</section>

				<section class="d-flex step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
					<div class="col-12 col-md-6 step-2 step-2__text">
						<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
							<h1 class="gray mb-3 fw-bold">
								Always in the cloud!
							</h1>
							<p class="gray fw-light mb-3">
								Your data will be protected in the cloud and always available. Find your information in real time.
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
									<h6>Late</h6>
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
									<small>Present</small>
								</div>
								<div class="step-3__meter-right-data-container">
									<span class="step-3__meter-right-data">
									</span>
									<small>Planned</small>
								</div>
							</div>

							<div class="step-3__meter-container asistencia-total">
								<div class="step-3__meter-title">
									<h6>Total Attendance</h6>
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
									<small>Late</small>
								</div>
								<div class="step-3__meter-right-data-container">
									<span class="step-3__meter-right-data">
									</span>
									<small>Present</small>
								</div>
							</div>

							<div class="step-3__meter-container ausentismo-total">
								<div class="step-3__meter-title">
									<h6>Total absent</h6>
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
							<h1 class="gray mb-3 fw-bold">
								Instant reports
							</h1>
							<p class="gray fw-light mb-3">
								You will get all kinds of reports and you can export them in the format you require. Overtime, consolidated shifts, schedules and permits. All in one place!
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
			Why choose our attendance control?
		</h2>

		<div class="row d-flex justify-content-center">

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/hand-coin.svg" />
						<h5>Pay wages correctly</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Know the real attendance data of your collaborators so you can pay worked hours precisely.</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/clock-folder.svg" />
						<h5>Save time and money</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Don't overspend on resources and staff for attendance management! GeoVictoria does it for you.</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/bullseye.svg" />
						<h5>Make decisions instantly</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">In case of absences and unpredictable events, you will be able to make correct decisions in real time. </p>
					</div>
				</div>
			</div>

		</div> <!-- row -->
	</section> <!-- benefits -->

	<section class="container-fluid bg-blue-2 logging-types ">
		<div class="container">
			<div class="row mb-5">
				<h2>You can choose between different logging systems</h2>
			</div>
			<div class="row justify-content-between <?php if (!wp_is_mobile()) echo 'anime-fadein-childs' ?>">

				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start<?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-web.png" />
					<h6>Web</h6>
					<small>Directly from the web platform.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-usb.png" />
					<h6>Fingerprint Reader </h6>
					<small>Log with an USB fingerprint reader.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-app.png" />
					<h6>Mobile App</h6>
					<small>With georeferencing and face recognition.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>Box</h6>
					<small>LAN control clock, 3G o WiFi.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-call.png" />
					<h6>GeoVictoria Call</h6>
					<small>With a classic phone call.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-face.png" />
					<h6>GeoVictoria Face</h6>
					<small>With face recognition devices.
					</small>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">
				We are more than an attendance control tool</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/report.svg" />
				<h5 class="fw-bold">
					Cloud platform</h5>
				<p>Easy access from any device with internet. With Geovictoria you will not lose valuable information.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h5 class="fw-bold">Support</h5>
				<p>We are with you throughout the process, from the first contact, until the implementation is finalized. You can count on us.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h5 class="fw-bold">Adaptability</h5>
				<p>Each industry works very differently. We adapt to each one of them.</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3 anime-fadein">
					Ready to transform your business?
				</h1>

				<p class="white fw-light mb-3 anime-fadein">
					We know that every transformation is a challenge. More than 5000 companies already manage their attendance with us.
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					I want to update!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
</main><!-- #main -->
<?php
get_footer();
?>

<?php get_template_part('template-parts/modal', 'contacto') ?>;