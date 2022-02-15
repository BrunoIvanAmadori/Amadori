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
						Manage construction personnel in all your projects
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Manage internal and external personnel in different works. View and distribute the workers according to your needs. Join a new world of management.
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">Try for free!</span>
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
			<h2 class="text-center gray section-title fw-light anime-fadein">Our clients already<br><span class="fw-bold">manage their staff with us</span></h2>
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
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein mb-5">Personnel control on your construction site,
				<span class="fw-bold"> like you've never seen it before</span>
			</h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-1.png'>
			</div>

			<div class="col-12 col-md-6 anime-fadein">
				<h4 class="fw-bold mb-4">Optimize, decide, save</h4>

				<p>

					Would you like to manage your staff in each project?
					Control all your operations?
				</p>

				<p>

					With GeoVictoria you will be able to <b>manage and view the personnel for your construction sites</b>. It doesn't matter where your workers are.
					You will see everything on one platform!</p>

				<p>
					With various logging methods, we deliver accurate information about the attendance of your workers and the access of external personnel in real time.
				</p>

				<p>
					You will be able to make decisions instantly, anticipating your project needs.
				</p>

			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h4 class="fw-bold mb-4">Simple, fast and friendly</h4>
				<p>
					GeoVictoria allows you to administer, manage and obtain reports of the attendance of your human capital.</p>
				<p>
					Thanks to our platform you will know the attendances, delays and absences. You will manage the overtime of workers for each project. Centralized access to permits, licenses or vacations.</p>
				<p><b>
						Automate personnel management in all your construction sites!</b>
				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-2.png'>
			</div>
		</div>
	</section>





	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">Why choose GeoVictoria?</h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-three-circled.svg" />
				<h6 class="fw-bold">Optimize staff
				</h6>
				<p>Thanks to our alliance with Foco en Obra,
					plan the staff that
					is needed in the project according to
					the established deadlines.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/map-geo.svg" />
				<h6 class="fw-bold">Various logging methods</h6>
				<p>
					We have various devices according to your needs. Workers or external personnel will dial by mobile application or biometric clocks.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-check.svg" />
				<h6 class="fw-bold">Real-time decision</h6>
				<p>
					From the app or on the web, supervisors will see in real time the presence of workers in the different projects by users or crews. </p>
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
						<h1 class="fw-bold anime-fadein mb-5">
							Success story: Ictino</h1>
						<video class="anime-fadein" width="100%" poster="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/caso-ictino-thumb.png" controls>
							<source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/caso-ictino.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<div class="row gy-5 gx-5 anime-fadein-childs">
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/desarrolladora-logobnw.png" />
					<p>
						“With GeoVictoria, collaborators can log from the application and it saves us efforts on devices in each of the projects. We can see the reports of hours, absences and delays quickly. "
					</p>
					<p>
						<span class="fw-bold">
							Desarrolladora del Pacífico
						</span>
					</p>
				</div>

				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ictino-logobnw.png" />
					<p>
						“It is a very friendly system. We are certain that the attendance record is correct. The platform and the reporting is in real time. You can see the personnel report by work. It helps us make decisions every day. "
					</p>
					<p>
						<span class="fw-bold">
							Ictino
						</span>
					</p>
				</div>


				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/eurocorp-logobnw.png" />
					<p>
						“The fact of being able to enter to see the attendance data in a browser is something so simple that it facilitates the management. It becomes more efficient, faster. This is one of the main factors that made us choose GeoVictoria. "
					</p>
					<p>
						<span class="fw-bold">
							Eurocorp
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
					Welcome to the new way of managing staff on your construction sites
				</h2>

				<p>
					Control all your daily operations.
					Verify that the planned personnel are on the assigned project. Optimize and save!
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3" data-bs-toggle="modal" data-bs-target="#contactModal">
					Try for free!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex ">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>