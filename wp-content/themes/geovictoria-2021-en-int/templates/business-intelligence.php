<?php

/*
Template Name: Business Intelligence
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

	<section class="d-flex container hero flex-column align-items-center justify-content-start">
		<div class="hero__graphics mb-5 col-12 resizer-reference">
			<div class="resizer">

				<div class="hero__container">
					<img class="hero__img" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-bi/platform.png'>

					<div class="hero__meters">
						<div class="hero__meter-container atrasos">
							<div class="hero__meter-title">
								<h6>Late</h6>
							</div>
							<div class="hero__meter--orange">
								<span class="hero__meter-num-progress"></span>
								<span class="hero__meter-start-value">0%</span>
								<span class="hero__meter-end-value">100%</span>
								<img class="hero__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
								<div class="hero__meter-fill-mask">
									<div class="hero__meter-bg"></div>
									<div class="hero__meter-fill--left"></div>
									<div class="hero__meter-fill--right"></div>
								</div>
							</div>
							<div class="hero__meter-left-data-container">
								<span class="hero__meter-left-data--orange">
								</span>
								<small>Present</small>
							</div>
							<div class="hero__meter-right-data-container">
								<span class="hero__meter-right-data">
								</span>
								<small>Planned</small>
							</div>
						</div>

						<div class="hero__meter-container asistencia-total">
							<div class="hero__meter-title">
								<h6>Total attendance</h6>
							</div>

							<div class="hero__meter--blue">

								<span class="hero__meter-num-progress"></span>
								<span class="hero__meter-start-value">0%</span>
								<span class="hero__meter-end-value">100%</span>

								<img class="hero__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>

								<div class="hero__meter-fill-mask">
									<div class="hero__meter-bg"></div>
									<div class="hero__meter-fill--left"></div>
									<div class="hero__meter-fill--right"></div>
								</div>
							</div>

							<div class="hero__meter-left-data-container">
								<span class="hero__meter-left-data--blue">
								</span>
								<small>Late</small>
							</div>
							<div class="hero__meter-right-data-container">
								<span class="hero__meter-right-data">
								</span>
								<small>Present</small>
							</div>
						</div>

						<div class="hero__meter-container ausentismo-total">
							<div class="hero__meter-title">
								<h6>Total absent</h6>
							</div>

							<div class="hero__meter--orange">

								<span class="hero__meter-num-progress"></span>
								<span class="hero__meter-start-value">0%</span>
								<span class="hero__meter-end-value">100%</span>

								<img class="hero__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
								<div class="hero__meter-fill-mask">
									<div class="hero__meter-bg"></div>
									<div class="hero__meter-fill--left"></div>
									<div class="hero__meter-fill--right"></div>
								</div>
							</div>
						</div>

						<div class="hero__assist-bars">
							<img class="hero__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-global.png'>
							<div class="hero__bar-group">
								<div class="hero__bar--1">100%</div>
								<div class="hero__bar--2">100%</div>
								<div class="hero__bar--3">100%</div>
								<div class="hero__bar--4">100%</div>
								<div class="hero__bar--5">100%</div>
								<div class="hero__bar--6">100%</div>
							</div>
						</div>

						<div class="hero__assist-line">
							<img class="hero__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-line.png'>
							<img class="hero__line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/bars-assist-line.svg'>
						</div>

						<div class="hero__plan-bars">
							<img class="hero__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-plan-bars.png'>
							<div class="hero__bar-group">
								<div class="hero__bars--1">
									<div class="hero__bar--gray">
									</div>
									<div class="hero__bar--blue">
									</div>
								</div>

								<div class="hero__bars--2">
									<div class="hero__bar--gray">
									</div>
									<div class="hero__bar--blue">
									</div>
								</div>

								<div class="hero__bars--3">
									<div class="hero__bar--gray">
									</div>
									<div class="hero__bar--blue">
									</div>
								</div>

								<div class="hero__bars--4">
									<div class="hero__bar--gray">
									</div>
									<div class="hero__bar--blue">
									</div>
								</div>

								<div class="hero__bars--5">
									<div class="hero__bar--gray">
									</div>
									<div class="hero__bar--blue">
									</div>
								</div>

								<div class="hero__bars--6">
									<div class="hero__bar--gray-small">
									</div>
									<div class="hero__bar--blue-small">
									</div>
								</div>

								<div class="hero__bars--7">
									<div class="hero__bar--gray-small">
									</div>
									<div class="hero__bar--blue-small">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .hero__meters -->
			</div> <!-- .resizer -->

		</div> <!-- .hero__graphics -->

		<div class="hero__text col-12 col-md-9 mb-3">
			<div class="align-self-center pe-md-3 text-center anime-fadein-childs">
				<h1 class="gray fs-2 mb-3 fw-bold">
					Welcome to the world of Business Intelligence!
				</h1>

				<p class="gray fw-light mb-3 fs-6 fs-md-3">
					Make smart decisions to <b> take your workforce performance to the highest level. </b>
					View indicators in a simple and friendly way.
					<b> Increase the productivity of your company here and now. </b>
				</p>

				<button class="button--bigblue" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white">
						Try the BI experience</span>
				</button>
			</div>
		</div>

	</section> <!-- .hero -->

	<section class="d-flex flex-column container justify-content-between features">

		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Manage, analyze and make decisions </h2>
		</div>

		<div class="row anime-fadein-childs justify-content-around">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/dashboard.png" />
				<h5 class="fw-bold">Custom KPIs</h5>
				<p>
					Adjustable platform to your needs.
					Know the performance of your operations
					according to staff group. You choose!
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/dash-graphic.png" />
				<h5 class="fw-bold">
					Simplified management</h5>
				<p>
					Find valuable information in a simple way to visualize worrying trends and make wise decisions.
				</p>
			</div>
		</div>

		<div class="row anime-fadein-childs justify-content-around">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/magnifier.png" />
				<h5 class="fw-bold">Identify causes</h5>
				<p>
					All reports a click away. Analysis of performance, productivity and profitability of your company on our platform.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/metrics.png" />
				<h5 class="fw-bold">
					Improve your results</h5>
				<p>
					Performance indicators at hand.
					Solve operational problems of your company in real time.
				</p>
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

					Ready to be part of the Business Intelligence world?
				</h1>

				<p class="white fw-light mb-3 anime-fadein">
					Join to the group of 5000 companies that make the right decisions thanks to our solution. Improve the performance of your company thanks to valuable and centralized information.
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
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