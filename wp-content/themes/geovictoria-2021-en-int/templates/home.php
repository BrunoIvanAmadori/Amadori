<?php

/*
Template Name: Home
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
						The essential workforce management solution
					</h1>
					<p class="gray fw-light mb-3">
						100% integral solution in the cloud. <br> Manage, prepare reports, obtain metrics <br> and save money. All in one place.
					</p>
					<button class="button--bigblue bounce fw-bold w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white">Try for free!</span>
					</button>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5">

				<div class="animation-home text-start anime resizer-reference">
					<div class="resizer">
						<div class="animation-home__screen-group">
							<!-- <img class="animation-home animation-home__arrow" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/arrow.svg'> -->
							<img class="animation-home animation-home__entry-type" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/entry-type.png'>
							<img class="animation-home animation-home__user" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/user.png'>
							<img class="animation-home animation-home__screen-desk" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/screen-desk.png'>
						</div>
						<!-- <img class="animation-home animation-home__screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/screen.png'> -->

						<img class="animation-home animation-home__screen-mobile" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/screen-mobile.png'>
						<img class="animation-home animation-home__screen-tablet" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/screen-tablet.png'>
						<img class="animation-home animation-home__box" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/box.png'>
						<img class="animation-home animation-home__usb" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/usb.png'>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container col-12 trusting-companies mb-3">
			<h2 class="text-center gray section-title fw-light">Our clients already <br> <span class="fw-bold"> optimize their staff with us</span></h2>
			<div class="d-flex flex-wrap justify-content-around">

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/securitas-logo.png'>

					</div>

				</div>

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small> "It is a tool that upgrades the capacity of our store managers"</small></i>
					</div>
				</div>


				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/adecco-logo.png'>

					</div>

				</div>


				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo--scotiabank" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/scotiabank-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small>"With GeoVictoria we mark safely from our homes and workplaces"</small></i>
					</div>
				</div>

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center" type="button">
						<img class="trusting-companies__logo--cocacola" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/coca-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small>“Thanks to this system, the worker always knows the length of his day”</small></i>
					</div>
				</div>

			</div>
		</section>
	</div>

	<section class='container products mb-5'>

		<h2 class="text-center gray section-title anime-fadein"><span class="fw-light">
				Get to know all </span> <br> <b> our solutions!</b></h2>

		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between anime-fadein">
				<a class="product--box" href="attendance-control">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-asistencia.svg" />
						<h4 class="fw-bold">Attendance <br> control</h4>
						See more
					</div>
				</a>
				<a class="product--box" href="access-control">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-acceso.svg" />
						<h4 class="fw-bold">Access control</h4>
						See more
					</div>
				</a>
				<a class="product--box" href="canteen-management">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-comedor.svg" />
						<h4 class="fw-bold">Canteen management</h4>
						See more
					</div>
				</a>
			</div>
		</div>

		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<a class="product--card" href="business-intelligence">
					<div class="d-flex flex-column align-items-center anime-fadein-childs">
						<div class='row'>
							<div class="col justify-content-center text-end">
								<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-business.svg" />
							</div>
							<div class="col d-flex flex-column justify-content-center text-start">
								<h4 class="fw-bold">Business Intelligence</h4>
								See more
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>


	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein"><b>Save, update, simplify </b> <br> <span class="fw-light"> Welcome to a world of management</span><br> </h2>
		</div>

		<div class="row <?php if (!wp_is_mobile()) echo "anime-fadein-childs" ?>">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/report.svg" />
				<h5 class="fw-bold">Custom reports</h5>
				<p>
					Overtime, arrears, shifts to do. All the reports you require in one place.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h5 class="fw-bold">Online forms</h5>
				<p>Create custom forms. Collect the opinion of your workers or traceability of cases for Covid-19. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h5 class="fw-bold">Shift Optimizer</h5>
				<p>Stop losing money! Calculate the most optimal shifts according to the variables of your business.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/integration.svg" />
				<h5 class="fw-bold">System integration</h5>
				<p>
					We operate with all human resources software.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud.svg" />
				<h5 class="fw-bold">Cloud backup</h5>
				<p>Secure and instant information..</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/geo.svg" />
				<h5 class="fw-bold">Smart endowment</h5>
				<p>The person you need in the place and time indicated.</p>
			</div>
		</div>
	</section>


	<section class='container'>
		<h2 class="text-center gray mb-3 anime-fadein"><span class="fw-light">
				We accompany you throughout the </span> of your Geovictoria experience</h2>
		<!-- Para mobile -->

		<div class="progressMobile__section d-flex flex-column d-lg-none text-center">
			<div class="step-1 mb-4">
				<div class="progressMobile__bg step-1 mb-4 ">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-1.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Contact</h3>
						</div>
					</div>
				</div>

				<h6 class="fw-light">
					We will answer your questions,
					we will evaluate your needs
					and we will clear the
					way to start
					our alliance.</h6>

			</div>

			<div class="step-2 mb-4">
				<div class="progressMobile__bg step-2 mb-4">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-2.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Planning</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">We will meet for
					define the scope of
					hired, you will know the
					work team and
					implementation stages.</h6>
			</div>

			<div class="step-3 mb-4">
				<div class="progressMobile__bg step-3 mb-4">

					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-3.gif" />
						<div class="progressMobile__text--left">
							<h4 class="fw-bold small-title-on-mobile">Implementation</h4>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Our team
					will be ready to install
					the equipments.</h6>
			</div>

			<div class="step-4 mb-4">
				<div class="progressMobile__bg step-4 mb-4">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-4.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Setup</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">
					We will help you configure your system to be active as soon as possible. </h6>
			</div>

			<div class="step-5 mb-4">
				<div class="progressMobile__bg step-5 mb-4">

					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-5.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Support</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">We will provide you support whenever you need it. </h6>
			</div>
		</div>

		<!-- Para desktop -->
		<div class="progress__section d-none justify-content-between d-lg-flex">
			<div class="progress__bg step-1">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-1.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Contact</h6>
						<p class="fw-light text-resize">We will answer your questions,
							we will evaluate your needs
							and we will clear the
							way to start
							our alliance.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-2 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-2.gif" />
					<div class="progress__text--down">
						<h6 class="fw-bold">Planning</h6>
						<p class="fw-light text-resize">We will meet for
							define the scope of
							hired, you will know the
							work team and
							implementation stages.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-3">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-3.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold title-resize">Implementation</h6>
						<p class="fw-light text-resize">Our team
							will be ready to install
							the equipments. </p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-4 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-4.gif" />
					<div class="progress__text--down">
						<h6 class="fw-bold">Set-Up</h6>
						<p class="fw-light text-resize">We will help you configure your system to be active as soon as possible </p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-5">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-5.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Soporte</h6>
						<p class="fw-light text-resize">We will provide you support whenever you need it.</p>
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
			<div class="col-12 col-md-6 text-center text-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3 anime-fadein">
					¿Why us?
				</h1>
				<div class="row mb-3 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/ruler.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Solution tailored to your needs:</h6>
						<small class="fw-light">At GeoVictoria we adapt to your business. We will do what you need.</small>
					</div>
				</div>

				<div class="row mb-3 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/integration.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Support at all times:</h6>
						<small class="fw-light">We will be 24/7 to answer all your questions and guide you in the use of our platform</small>
					</div>
				</div>

				<div class="row mb-3 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/portal.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Biometric technology:</h6>
						<small class="fw-light">We have the best biometric technology: fingerprint registration, palm reading, facial recognition. 100% verified markings.</small>
					</div>
				</div>

				<div class="row mb-3 mb-lg-1 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/dollar.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>
							Pay for what you use:</h6>
						<small class="fw-light">
							Be it ten, one hundred or one thousand users. You will only pay for the number of workers that must be marked. No extra costs!</small>
					</div>
				</div>

				<button class="fw-bold button--bigwhite mt-3 anime-fadein w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Contact us now
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
			</div>
		</section>
	</div>

	<section class="d-flex justify-content-center container call-to-action anime-fadein">
		<div class="col-12 col-lg-6 text-center my-3">
			<img class="call-to-action__arrow" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg'>
			<img class="call-to-action__arrow--left" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg'>
			<h2 class="fw-bold mb-4">
				Ready to be part of the change?
			</h2>
			<button class="button--bigblue bounce" data-bs-toggle="modal" data-bs-target="#contactModal">
				<span class="white fw-bold w-100">Try for free!</span>
			</button>
		</div>

	</section>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto', ['origin' => 'front-page']);
get_footer();
?>