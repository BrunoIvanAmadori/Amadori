<?php

/*
Template Name: Control de acceso
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
					No more unexpected visits! Manage access control in your company
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Guarantee security in your facilities.
					Use different logging systems, custom reportings and planning.
				</p>
				<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white fw-bold">
						I want to update!</span>
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
						Allow access
					</h1>
					<p class="gray fw-light mb-3">
						Regardless of the device or the place of access, validate the entry of people thanks to our technology.
					</p>
				</div>
			</div>
		</section>

		<section class="d-flex container step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Always in the cloud!
					</h1>
					<p class="gray fw-light mb-3">
						Your data will be protected in the cloud and always available. Find your information in real time.
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
						<div class="step-3__day">Wednesday, september 1, 2021</div>
					</div>

					<img class="step-3__monitoring" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/monitoring.png'>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 mt-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Instant reports
					</h1>
					<p class="gray fw-light mb-3">
						Get different entry reports. Profiling. Planning for days, weeks and months. All in one place!
					</p>
				</div>
			</div>
		</section>
	<?php else : ?>

		<div class="animation-container invisible container">
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
							Allow access
						</h1>
						<p class="gray fw-light mb-3">
							Regardless of the device or the place of access, validate the entry of people thanks to our technology.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
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
							<div class="step-3__day">Wednseday, september 1, 2021</div>
						</div>

						<img class="step-3__monitoring" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/monitoring.png'>
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
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center fw-bold gray section-title anime-fadein">Why choose our attendance control?</h2>
		<div class="row d-flex justify-content-center">

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/clock-dollar.svg" />

						<h5>Reduce costs and times</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">
							Save time and money,
							optimizing the
							access processes.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/pc-check.svg" />

						<h5>Digitalize your processes</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Don't waste time writing down each entry manually.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">


						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/shield-check.svg" />
						<h5>Safety for your company</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Be it at the entrance, the cellar or in the offices. All areas of your company will be protected.</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row d-flex justify-content-center">



			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/process-gear.svg" />

						<h5>Traceability of your staff</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">
							Track
							your collaborators and
							external in
							different zones u
							offices of your company.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/ruler.svg" />

						<h5>Custom reports</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">
							Get Reports from
							entries and exits, by
							places or dates. Everything
							always at your disposal.
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="container-fluid bg-blue-2 logging-types ">
		<div class="container">
			<div class="row mb-5">
				<h2>You can choose between different logging systems</h2>
			</div>
			<div class="row justify-content-between <?php if (!wp_is_mobile()) echo 'anime-fadein-childs' ?>">

				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-usb.png" />
					<h6>Fingerprint reader</h6>
					<small>Low cost and easy implementation. Log with an USB fingerprint reader.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>GeoVictoria Box</h6>
					<small>The logging method par excellence via control clock through LAN, 3G or Wi-Fi connections. </small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-face.png" />
					<h6>GeoVictoria Face</h6>
					<small>Temperature detection, mask-proof and without contact.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-palm.png" />
					<h6>Palm recognition</h6>
					<small>Accurate and contactless biometric logging method.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-card.png" />
					<h6>RFID Card</h6>
					<small>
						Enter the facilities with associated cards through a smart chip.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-id.png" />
					<h6>
						Identity card</h6>
					<small>Verified and individualized access thanks to the identity card.
					</small>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">A one-of-a-kind access control</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person.svg" />
				<h5 class="fw-bold">Personnel profiles</h5>
				<p>
					Authorizes the access of people from
					according to their functions in the company.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear.svg" />
				<h5 class="fw-bold">Integrable with attendance module</h5>
				<p>
					Find the access and
					attendance information in one place.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/paper.svg" />
				<h5 class="fw-bold">Access planning</h5>
				<p>
					Determine entries by days, weeks, or
					months. All in advance!
				</p>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">We are much more than an access control</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-circled.svg" />
				<h5 class="fw-bold">Visits control</h5>
				<p>
					Schedule, authorize and verify.
					With GeoVictoria you can manage
					and view the list of visits
					that enter your company.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/arrow-out.svg" />
				<h5 class="fw-bold">Third party control</h5>
				<p>
					Contractors, suppliers or personnel of
					outsourcing. You will have access control
					of all external personnel.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/construction-check.svg" />
				<h5 class="fw-bold">Vehicle access</h5>
				<p>
					Manages the entry and exit of
					vehicles that access your company.
					You will know what spaces are available
					in your parking lot in real time.
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
					Ready to transform your business?
				</h1>

				<p class="white fw-light mb-3">
					We know that every transformation is a challenge. More than 5000 companies already manage their access with us.
				</p>
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3" data-bs-toggle="modal" data-bs-target="#contactModal">
					I want to update!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-pop">
				<img class="why-us__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>