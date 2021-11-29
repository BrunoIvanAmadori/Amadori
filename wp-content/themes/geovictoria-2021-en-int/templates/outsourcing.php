<?php

/*
Template Name: Outsourcing
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Manage your Outsourcing staff in one place
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Operations management, route monitoring, information on field workers. All this and much more from our platform.
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">I want to update!</span>
					</button>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/header-outsourcing.png'>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container clients col-12 mb-3">
			<h2 class="text-center gray section-title fw-light anime-fadein">
				Our clients <br><span class="fw-bold">already manage their staff with us</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ecrgroup-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/grupoexpro-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ugs-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/limchile-logobnw.png'>

			</div>
		</section>
	</div>

	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">La <span class="fw-bold">gestión del personal externo</span> para tus clientes <span class="fw-bold">como nunca antes lo viste</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/graphic-1.png'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">
					Manage, decide, save</h3>
				<p>
					Do you have problems with the management of your outsourcing staff?
					With GeoVictoria, manage, assign schedules and track your staff in a single click</b>.</p>
				<p>

					Our solution <b>provides accurate information about your personnel </b>in different assigned areas. Secure contracts with your clients and avoid non-compliance fines.</p>
				<p>
					You will be able to make decisions instantly.
					<b>Everything from one place!</b>
				</p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">
					Simple, fast and friendly</h3>
				<p>Efficiently optimize data. With GeoVictoria you use the information from the attendance of external personnel to save time and money.</b></p>
				<p>
					Visualize compliance with working hours. Control overtime hours. <b>Schedule alerts for delays or absences.</b></p>
				<p><b>May the most valuable resource be the peace of mind of your customers!</b>
				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/graphic-2.png'>
			</div>
		</div>
	</section>



	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">Why choose GeoVictoria?<br></h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear-person.svg" />
				<h6 class="fw-bold">
					Manage staff</h6>
				<p>
					Build profiles and groups of external personnel adapted to the assigned work point.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h6 class="fw-bold">
					Coverage compliance</h6>
				<p>Track routes and tasks of the personnel in the field. Know instantly the route of your staff in the assigned points.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h6 class="fw-bold">Real-time decisions
				</h6>
				<p>Make decisions instantly.
					Schedule alerts and notifications.
					Avoid fines for breach of contract with your clients.</p>
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
				<h2 class="text-center mb-5">Our clients are <b>our best guarantee</b></h2>
				<div class="col-lg-8 pe-lg-5 align-self-center">
					<div class="testimonial__video--small text-center">
						<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/AY4odzFfqC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
					<h3 class="fw-bold">Success story: LIM Chile</h3>
					<img class="testimonial__logo--small" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/limchile-logobnw.png" />
					<p>
						<!-- <img class="arrow-quote--left" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
						<i>“GeoVictoria changed us 100%. I recommend GeoVictoria, they always have an immediate and correct answer." </i>
						<!-- <img class="arrow-quote--right" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
					</p>
					<div class="row justify-content-center justify-content-lg-start">
						<span>
							<span class="fw-bold">Bastián Garrido</span></br>
							<small>Personnel Management</small>
						</span>

					</div>
				</div>
			</div>
			<div class="row gy-5 gx-5 anime-fadein-childs">
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ecrgroup-logobnw.png" />
					<p>
						"Previously it was all manual
						with the attendance book where
						we detect violation,
						manipulation or loss of the book.
						GeoVictoria is the tool that
						gives a more accurate control ".
					</p>
					<p>
						<span class="fw-bold">
							ECR Group
						</span>
					</p>
				</div>
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ugs-logobnw.png" />
					<p>
						"With an incomplete endowment we
						could apply some type of fine for
						breach of contract. This
						application delivers the information in
						real time. It allows us to react with
						the Human Resources team
						and the area of ​​operations ”.
					</p>
					<p>
						<span class="fw-bold">
							UGS
						</span>
					</p>
				</div>

				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/grupoexpro-logobnw.png" />
					<p>
						"We have
						much clearer billing processes with our clients
						thanks to the attendance data. It's a
						efficient and reliable system."
					</p>
					<p>
						<span class="fw-bold">
							GrupoExpro
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
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein-childs">
				<h2 class="white fw-bold mb-3">
					Keep your customers happy
					Save time and money in managing your Outsourcing!
				</h2>

				<p>

					We know that every transformation is a challenge. Thousands of companies already manage their external personnel with us.
				</p>

				<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
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