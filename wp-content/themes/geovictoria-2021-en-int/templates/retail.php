<?php

/*
Template Name: Retail
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
						Manage your retail staff at all your stores
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Guarantee the operational functioning of your stores by viewing the staff in real time. Make decisions instantly based on day-to-day needs.
					</p>
					<p class="fw-light mb-4 anime-fadein">
						<span class="fw-bold">Save, manage and decide with GeoVictoria.</span>
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">Try for free!</span>
					</button>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/header-retail.png'>
			</div>
		</div>
	</section>
	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container clients col-12 mb-3">
			<h2 class="text-center gray section-title fw-light anime-fadein">Our clients already <br><span class="fw-bold">manage their staff with us</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo cencosud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/cencosud-logobnw.png'>
				<img class="clients__logo oxxo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/oxxo-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/luxottica-logobnw.png'>
				<img class="clients__logo kfc" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/kfc-logobnw.png'>
				<img class="clients__logo starbucks" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logobnw.png'>
			</div>
		</section>
	</div>



	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">
				The <span class="fw-bold">management of external personnel </span>for your clients <span class="fw-bold">as you have never seen it before</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/graphic-1.png'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">
					Decide, optimize, save</h3>
				<p>
					Do you know how to see your staff in each branch? Can you control the total of your operations?
				</p>
				<p>

					With GeoVictoria, manage and optimize the staff at each point of sale. The location doesn't matter. Visualize the workers of all your branches on the map!</p>

				<p>
					You will be able to make decisions instantly. <b> Anticipate staffing needs here and now!</b></p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Simple, fast and friendly</h3>
				<p>GeoVictoria allows you to administer, manage and obtain reports of the attendance of your human capital.</p>
				<p>
					Thanks to our platform you will identify the absent personnel in your branches. Simplify the calculation of remuneration.
					Thanks to the attendance data, you will know the overtime to pay. Centralize permits, licenses or vacations.</p>
				<p><b>Automate HR work!</b>

				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/graphic-2.png'>
			</div>
		</div>
	</section>




	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">Why choose GeoVictoria?</h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear-person.svg" />
				<h6 class="fw-bold">
					Optimize staff
				</h6>
				<p>
					Thanks to our alliance with <b> Shift </b>, plan the staff your branch needs according to an optimized shift mesh.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/map-geo.svg" />
				<h6 class="fw-bold">
					Coverage compliance</h6>
				<p>It does not matter if your branch is in the north or south of the country. You will see your staff at all points of sale in one place.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-check.svg" />
				<h6 class="fw-bold">Real-time decision-making</h6>
				<p>
					Make decisions instantly. Schedule alerts and notifications. Verify the fulfillment of shifts and days as planned. </p>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="d-flex flex-column container justify-content-between">
			<div class="row mb-5">
				<div class="col-12">
					<div class="testimonal__video text-center">
						<h1 class="fw-bold anime-fadein mb-5">Success story: Starbucks</h1>
						<video class="anime-fadein" width="100%" poster="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/caso-starbucks-thumb.png" controls>
							<source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/caso-starbucks.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<div class="row gy-5 gx-5 anime-fadein-childs">
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/luxottica-logobnw.png" />
					<p>
						“It helps us for the operational issue. To have cash control at the end of the month.
						We verify with the system the store that has closed and the one that has not. GeoVictoria reduced our costs. We save up to 60% annually in overtime pay and compensatory bonuses. "
					</p>
					<p>
						<span class="fw-bold">
							Luxottica
						</span>
					</p>
				</div>

				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mt-4 mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/kfc-logobnw.png" />
					<p>
						"We reduced 90% of incidents with the software and saved with the planning of the work time."
					</p>
					<p>
						<span class="fw-bold">
							KFC
						</span>
					</p>
				</div>


				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logobnw.png" />
					<p>
						“It has been a tremendous tool that we have been able to deliver to our store managers. Not only because of how practical it is, how easy it is to operate, but it is also a tool that elevates your management"
					</p>
					<p>
						<span class="fw-bold">
							Starbucks
						</span>
					</p>
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
					Welcome to the new way of managing staff at your sale points
				</h2>

				<p>
					Control all your daily operations.
					Verify that the planned staff are at the assigned branch. Optimize and save!
				</p>

				<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Try for free!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-fadein">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>