<?php

/*
Template Name: Quienes somos
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Hello! We are GeoVictoria
					</h1>
					<h4 class="gray fw-light mb-3  anime-fadein">
						We want to be the largest human capital management software in the world.
					</h4>
					<!-- <button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#postulacionesModal">
						<span class="white fw-bold">Trabaja con nosotros</span>
					</button> -->

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/header-nosotros.png'>
			</div>
		</div>
	</section>

	<div class="container-fluid nuestra-historia__container">
		<section class='container'>
			<div class="nuestra-historia__headline col-12 d-flex flex-column align-items-center mb-5 text-center">
				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">Our history</h1>
				</div>
				<div class="col-12 col-lg-9 anime-fadein ">
					<p class="fw-light">Who would think that a university project between professor and student would become a top Microsoft partner technology company with a worldwide presence? That and much more was achieved by Sergio Astudillo and Rodrigo Lewit by founding our company, GeoVictoria.</p>
				</div>
			</div>

			<!-- Para mobile -->

			<div class="progressMobile__section d-flex flex-column d-lg-none text-center">
				<!-- <div class="step-1 mb-4">
					<div class="progressMobile__bg step-1 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-1.svg" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2006</p>
							<h6>Primer método de marcaje</h6>
						</div>
					</div>

					<p class="fw-light">Nace el marcaje por llamada teléfonica para ATCOM, especialista en servicios de outsourcing</p>

				</div> -->

				<div class="step-2 mb-4">
					<div class="progressMobile__bg step-2 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-2.png" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2007</p>
							<h6>Victoria is born!</h6>
						</div>
					</div>
					<p class="fw-light">
						With the arrival of our first major customer, Victoria was born: Attendance Registration Solution.</p>
				</div>

				<div class="step-3 mb-4">
					<div class="progressMobile__bg step-3 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-3.png" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2011</p>
							<h6>Victoria SA</h6>
						</div>
					</div>
					<p class="fw-light">
						Already with more than 100 clients, we became independent and Victoria S.A. was born. New marking methods appear: Huellero, Box and APP.</p>
				</div>

				<div class="step-4 mb-4">
					<div class="progressMobile__bg step-4 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-4.png" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2017</p>
							<h6>GeoVictoria</h6>
						</div>
					</div>
					<p class="fw-light">We change the name to GeoVictoria. Here begins our international expansion with more than 1000 clients</p>
				</div>

				<div class="step-5 mb-4">
					<div class="progressMobile__bg step-5 mb-4 d-flex align-self-center">

						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-5.png" />
						</div>
						<div class="progressMobile__text--left mt-3">
							<h3 class="fw-bold">2021</h3>
						</div>
					</div>
					<p class="fw-light">
						The pandemic reinvented us.
						We include facial recognition marking and temperature measurement.
						We have more than 5000 clients in 20 countries around the world.
					</p>
				</div>
			</div>

			<!-- Para desktop -->
			<div class="progress__section d-none justify-content-between d-lg-flex mb-5">
				<!-- <div class="progress__bg step-1">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-1.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2006<br> Primer método de marcaje </h6>
							<small class="fw-light">Nace el marcaje por llamada teléfonica para ATCOM, especialista en servicios de outsourcing</small>
						</div>
					</div>
				</div> -->
				<!-- <div class="align-self-center">
					<img class="progress__arrow step-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div> -->
				<div class="progress__bg step-2 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-2.png" />
						<div class="progress__text--down">
							<h6 class="fw-bold">2007 <br>Victoria is born!</h6>
							<small class="fw-light">With the arrival of our first major customer, Victoria was born: Attendance Registration Solution.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-3">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-3.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2011<br>Victoria SA</h6>
							<small class="fw-light">Already with more than 100 clients, we became independent and Victoria S.A. was born. New marking methods appear: Huellero, Box and APP.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-4 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-4.png" />
						<div class="progress__text--down">
							<h6 class="fw-bold">2017<br>GeoVictoria</h6>
							<small class="fw-light">We change the name to GeoVictoria. Here begins our international expansion with more than 1000 clients</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-5">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-5.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2021</h6>
							<small class="fw-light">
								The pandemic reinvented us.
								We include facial recognition marking and temperature measurement.
								We have more than 5000 clients in 20 countries around the world.
							</small>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="container-fluid nuestra-presencia__container">
		<div class="container">

			<h2 class="text-center gray mb-5 fw-bold">Our presence in the world</h2>
			<div class="nuestra-presencia__grid anime-fadein">
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/cl.png">
					<span>Chile</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/es.png">
					<span>Spain</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/gt.png">
					<span>Guatemala</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/mx.png">
					<span>México</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pt-br.png">
					<span>Brazil</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/co.png">
					<span>Colombia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/hn.png">
					<span>Honduras</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/bo.png">
					<span>Bolivia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ec.png">
					<span>Ecuador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/en.png">
					<span>USA</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ar.png">
					<span>Argentina</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/sv.png">
					<span>El Salvador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/py.png">
					<span>Paraguay</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/cr.png">
					<span>Costa Rica</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pe.png">
					<span>Perú</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/do.png">
					<span>Dominican Republic</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/uy.png">
					<span>Uruguay</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ni.png">
					<span>Nicaragua</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pa.png">
					<span>Panamá</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/de.png">
					<span>Germany</span>
				</div>
			</div>
		</div>
	</section>

	<section class="nuestro-proposito container-fluid">
		<div class="container d-flex flex-column flex-lg-row text-center text-lg-start">
			<div class="row gy-5">
				<div class="col-12 col-lg-6 align-self-center anime-pop">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/purpose.png">
				</div>
				<div class="col-12 col-lg-6">
					<h1 class="gray mb-3 fw-bold">
						Our purpose
					</h1>
					<div class="anime-fadein">
						<p class="gray mb-3">
							<i>
								"Our goal is to be the <b>leading technology company</b> in solving personnel management with tools for human capital analysis."</i><br>
						</p>
						<p class="gray mb-3">
							We want to make a <b>simple, intuitive and efficient </b> management of all the data that will be decisive for the operation of the companies.<br>
						</p>
						<p class="gray mb-3">
							We develop <b> technological innovations using artificial intelligence </b> applied to biometrics, oriented to the labor market.<br>
						</p>
						<p class="gray mb-3">
							<b>We listen, understand and adapt to our clients!</b>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid nuestros-valores__container">

		<section class="container ">
			<div class="d-flex align-items-center justify-content-center">
				<div class="nuestros-valores__title col-12 col-lg-6 mb-5 text-center">
					<h1 class="gray mb-3"><span class="fw-bold">Our values</h1>
					<div class="anime-fadein">
						<h2 class="gray mb-3"><span class="fw-lighter">The 4H</h2>
						<p>It is what defines us. We apply each of our values ​​in everything we do. We strive every day to make our customers happy!</p>
					</div>

				</div>
			</div>

			<div class="nuestros-valores__content d-flex flex-column flex-md-row justify-content-between flex-wrap">

				<div class="row anime-fadein-childs">
					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column flex-wrap text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-1.png" />
						<h4 class="fw-bold">Happy</h4>
						<p>We are happy with what we do!<b> The GeoVictoria team is characterized by passion in their work.</b></p>
					</div>


					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-2.png" />
						<h4 class="fw-bold">Honest</h4>
						<p>We are sincere in every project we face. <b> Honesty in our work helps us build trust in our clients.</b></p>
					</div>

					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-3.png" />
						<h4 class="fw-bold">Humble</h4>
						<p>We are aware of our strengths and weaknesses. <b> We learn every day to do our best!</b></p>
					</div>

					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-4.png" />
						<h4 class="fw-bold">Hungry</h4>
						<p>We will conquer the world to be the platform for human capital par excellence
							<b> We're hungry for Victoria!</b>
						</p>
					</div>
				</div>
		</section>
	</div>

	<section class="container team">
		<div class="team__title">
			<h2 class="text-center gray mb-3"><span class="fw-bold">Meet the GeoVictoria team!</h2>
			<p class="text-center gray mb-3 anime-fadein">
				More than 500 collaborators around the world</p>
		</div>

		<div class="team__content anime-fadein">
			<div class="splide">
				<div class="splide__arrows">
					<button class="splide__arrow splide__arrow--prev">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/arrow-white.png" />
					</button>
					<button class="splide__arrow splide__arrow--next">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/arrow-white.png" />
					</button>
				</div>
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-1.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-1.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-2.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-2.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-3.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-3.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-4.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-4.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-5.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-5.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-6.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-6.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-7.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-7.jpg" /></a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="container awards d-flex flex-column align-items-center">

		<div class="awards__title">
			<h2 class="text-center gray mb-5"><span class="fw-bold">
					Our recognitions endorse us</h2>
		</div>

		<div class="awards__content d-flex flex-column flex-md-row justify-content-around">

			<div class="row gy-3 justify-content-center anime-fadein-childs">

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-1.png'>
						<div class="card-body">
							<h5 class="card-title">
								Endeavor
							</h5>
							<p class="card-text">
								We are part of the leading community of High Impact entrepreneurs around the world.
							</p>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-2.png'>
						<div class="card-body">
							<h5 class="card-title">
								Microsoft - Gold partner
							</h5>
							<p class="card-text">
								Validate our technical expertise through rigorous, industry-recognized and tested examinations.
							</p>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-3.png'>
						<div class="card-body">
							<h5 class="card-title">
								Latam Microsoft - Partner of the Year
							</h5>
							<p class="card-text">
								Learn how we became the 2019 Partner of the Year for Microsoft.
							</p>
							<a href="https://www.geovictoria.com/cl/geovictoria-partner-ano-chile-2019/" type="button" class="button--blue w-100 text-center">See more</a>
						</div>
					</div>
				</div>

			</div> <!-- row -->
		</div>
	</section>
</main><!-- #main -->
<?php
get_footer();
?>