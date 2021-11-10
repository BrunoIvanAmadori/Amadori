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
		<div class="icon-scroll"><small class="tip">SCROLLEA ABAJO</small></div>
	<?php endif; ?>

	<section class="d-flex container hero flex-column align-items-center justify-content-start">
		<div class="hero__graphics mb-5 col-12 resizer-reference">
			<div class="resizer">

				<div class="hero__container">
					<img class="hero__img" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-bi/platform.png'>

					<div class="hero__meters">
						<div class="hero__meter-container atrasos">
							<div class="hero__meter-title">
								<h6>Atrasos</h6>
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
								<small>Presentes</small>
							</div>
							<div class="hero__meter-right-data-container">
								<span class="hero__meter-right-data">
								</span>
								<small>Planificados</small>
							</div>
						</div>

						<div class="hero__meter-container asistencia-total">
							<div class="hero__meter-title">
								<h6>Asistencia total</h6>
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
								<small>Atrasos</small>
							</div>
							<div class="hero__meter-right-data-container">
								<span class="hero__meter-right-data">
								</span>
								<small>Presentes</small>
							</div>
						</div>

						<div class="hero__meter-container ausentismo-total">
							<div class="hero__meter-title">
								<h6>Ausentismo total</h6>
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
					¡Bienvenidos al mundo del Business Intelligence!
				</h1>

				<p class="gray fw-light mb-3 fs-6 fs-md-3">
					Toma decisiones inteligentes para <b>llevar el desempeño de tu fuerza laboral al máximo nivel.</b>
					Visualiza indicadores de forma simple y amigable.
					<b>Aumenta la productividad de tu empresa aquí y ahora.</b>
				</p>

				<button class="button--bigblue" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white">Prueba la experiencia BI</span>
				</button>
			</div>
		</div>

	</section> <!-- .hero -->

	<section class="d-flex flex-column container justify-content-between features">

		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Gestiona, analiza y toma decisiones </h2>
		</div>

		<div class="row anime-fadein-childs justify-content-around">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/dashboard.png" />
				<h5 class="fw-bold">KPI's personalizados</h5>
				<p>
					Plataforma ajustable a tus necesidades.
					Conoce el desempeño de tus operaciones
					según el grupo de personal. ¡Tú eliges!
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/dash-graphic.png" />
				<h5 class="fw-bold">Gestión simplificada</h5>
				<p>
					Encuentra información valiosa de forma
					simple para visualizar tendencias
					preocupantes y tomar decisiones acertadas.
				</p>
			</div>
		</div>

		<div class="row anime-fadein-childs justify-content-around">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/magnifier.png" />
				<h5 class="fw-bold">Identifica causas</h5>
				<p>
					Todos los reportes a un clic de
					distancia. Análisis de rendimiento,
					productividad y rentabilidad de tu
					empresa en nuestra plataforma.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/metrics.png" />
				<h5 class="fw-bold">Mejora tus resultados</h5>
				<p>
					Indicadores de desempeño a la mano.
					Resuelve problemas operativos de tu
					empresa en tiempo real.
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
					¿Listo para ser parte del mundo Business Intelligence?
				</h1>

				<p class="white fw-light mb-3 anime-fadein">
					Únete a las más de 5000 empresas que toman decisiones acertadas gracias a nuestra solución. Mejora el desempeño en tu empresa gracias a información valiosa y centralizada.
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					Prueba ahora
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