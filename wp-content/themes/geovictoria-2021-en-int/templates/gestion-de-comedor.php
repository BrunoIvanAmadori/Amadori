<?php

/*
Template Name: Gestion de comedor
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
					Register and control the food ration for your company canteen
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Avoid losses, waste or non-compliance in the delivery of food from your canteen. Plan everything on a 100% online platform.
				</p>
				<button class="button--bigblue w-100 fw-bold anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white">I want to update!</span>
				</button>
			</div>
		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/header-comedor.png'>
		</div>
	</section>

	<?php if (wp_is_mobile()) : ?>
		<section class="d-flex container step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-2 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ticket">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
					</div>


					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-type">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/entry-type.png'>
						<div class="step-1__entry-selector"></div>
					</div>

					<div class="step-1__box-container">
						<img class="step-1__box" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box.png'>
						<img class="step-1__box-options" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-options.png'>
						<img class="step-1__box-pass" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-pass.png'>
						<div class="step-1__box-code">
							<span>*</span>
							<span>*</span>
							<span>*</span>
							<span>*</span>
							<span>*</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Manage the rations
					</h1>
					<p class="gray fw-light mb-3">
						Depending on the method you choose, your workers will be able to register their entrance to the canteen and receive the food ration assigned for the day.
					</p>
				</div>
			</div>
		</section>

		<section class="d-flex container step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Always in the cloud!
					</h1>
					<p class="gray fw-light mb-3">
						The data of the rations delivered will be protected in the cloud. The information will be hosted in real time and available when you need it!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-2 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__ticket--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
					<img class="step-2__ticket--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-2.png'>
					<img class="step-2__ticket--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-3.png'>
					<img class="step-2__ticket--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-4.png'>
					<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>
					<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>

					<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/loading.svg'>
					<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/arrow-up.svg'>
					<div class="step-2__bubble"></div>
					<div class="step-2__check">
						<i class="fas fa-check"></i>
					</div>
				</div>
		</section>

		<section class="d-flex container step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/platform.png'>
					<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-action.png'>
					<div class="step-3__ripple"></div>

					<div class="step-3__graphic-container">
						<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic.png'>
						<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
					</div>

					<div class="step-3__report-container d-flex flex-column">
						<img class="step-3__report" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-individual.png'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
						<div class="step-3__data-3">0</div>
					</div>

					<div class="step-3__rations-container d-flex flex-column">
						<img class="step-3__rations" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/rations.png'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
						<div class="step-3__data-3">0</div>
						<div class="step-3__data-4">0</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Instant reports
					</h1>
					<p class="gray fw-light mb-3">
						Get reports of the people authorized to receive food, the information of the place and the time at which they validated their assigned ration.
					</p>
				</div>
			</div>
		</section>

	<?php else : ?>

		<div class="animation-container container">
			<section class="d-flex step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
				<div class="step-1__bg-curve">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
					<div class="bg-tail-gray"></div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference">
					<div class="resizer">
						<div class="step-1__ticket">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
						</div>

						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-type">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/entry-type.png'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__box-container">
							<img class="step-1__box" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box.png'>
							<img class="step-1__box-options" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-options.png'>
							<img class="step-1__box-pass" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-pass.png'>
							<div class="step-1__box-code">
								<span>*</span>
								<span>*</span>
								<span>*</span>
								<span>*</span>
								<span>*</span>
							</div>
						</div>




					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Manage the rations
						</h1>
						<p class="gray fw-light mb-3">
							Depending on the method you choose, your workers will be able to register their entrance to the canteen and receive the food ration assigned for the day.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Always in the cloud!
						</h1>
						<p class="gray fw-light mb-3">
							The data of the rations delivered will be protected in the cloud. The information will be hosted in real time. Available when you need it!
						</p>
					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-2 step-2__graphics resizer-reference">
					<div class="scale-fix">
						<div class="resizer">
							<img class="step-2__ticket--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
							<img class="step-2__ticket--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-2.png'>
							<img class="step-2__ticket--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-3.png'>
							<img class="step-2__ticket--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-4.png'>
							<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>
							<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>

							<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/loading.svg'>
							<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/arrow-up.svg'>
							<div class="step-2__bubble"></div>
							<div class="step-2__check">
								<i class="fas fa-check"></i>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/platform.png'>
						<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-action.png'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic.png'>
							<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
						</div>

						<div class="step-3__report-container d-flex flex-column">
							<img class="step-3__report" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-individual.png'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__rations-container d-flex flex-column">
							<img class="step-3__rations" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/rations.png'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
							<div class="step-3__data-3">0</div>
							<div class="step-3__data-4">0</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Instant reports
						</h1>
						<p class="gray fw-light mb-3">
							Get reports of the people authorized to receive food, the information of the place and time they validated their assigned ration.
						</p>
					</div>
				</div>
			</section>
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center fw-bold gray section-title anime-fadein">Why choose our canteen management?</h2>
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 col-lg-3  benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/meal.svg" />

						<h5>Assign rations according to profiles</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">

							Assign and distribute rations to qualified people.
							You can set the type of food according to the authorized time and place.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud-paper.svg" />

						<h5>Find data in real time</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Know the date, time and place of the assigned meals.
							Don't waste rations due to lack of information!
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">


						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/jigsaw.svg" />
						<h5>Integrable with access and assistance</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Take advantage of your assistance and access modules with the canteen management. This way you will have consolidated information and just one click away.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/print.svg" />

						<h5>Automatic ticket delivery</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Grant individual tickets for the correct control of the rations delivered.
							It is the backrest for your canteen!
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
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>GeoVictoria Box</h6>
					<small>The logging method par excellence via control clock through LAN, 3G or Wi-Fi connections.</small>
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
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-password.png" />
					<h6>Password</h6>
					<small>Enable your workers to obtain their rations with a security code.
					</small>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">We are more than a canteen management tool</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/meal.svg" />
				<h5 class="fw-bold">Types of servings</h5>
				<p>It doesn't matter if it's breakfast, lunch or dinner. With our solution you can create up to six types of servings. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/papers.svg" />
				<h5 class="fw-bold">Permanent backup</h5>
				<p>
					Whether managed by you or by an outsider, feel the peace of mind that your collaborators will get their assigned ration. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/notebook-check.svg" />
				<h5 class="fw-bold">Smart planning</h5>
				<p>
					Generates accurate ration planning. Avoid losses, waste or non-compliance in delivery.</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3">
					Ready to transform your business?
				</h1>

				<p class="white fw-light mb-3 anime-fadein">
					Thousands of companies already manage their canteens from our platform.
					You can be the next one.
				</p>

				<button class="fw-bold button--bigwhite w-100 mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					I want to update!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'contacto') ?>;