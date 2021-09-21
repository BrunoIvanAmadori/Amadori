<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Geovictoria_2021
 */

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-header.svg"/>
</div>
<main id="primary" class="site-main">

<?php if (!wp_is_mobile()): ?>
	<div class="icon-scroll"><small class="tip">GIRA LA RUEDA</small></div>
<?php endif; ?>

<section class="hero container d-flex flex-column flex-md-row justify-content-around text-center text-md-start">

				<div class="hero__text col-12 col-md-6 mb-3">
					<div class="align-self-center pe-md-3 anime-fadein-childs">
						<h1 class="gray mb-3 fw-bold">
						Control de asistencia en tiempo real para tu empresa
						</h1>
						<h3 class="gray fw-light mb-3 fs-5 fs-md-3">
						Somos el sistema más simple, amigable y eficiente para gestionar tu personal. 
						</h3>
					</div>
				</div>
				<div class="hero__graphics col-12 col-md-6">
						<img class="header-assist" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/header-asistencia.webp'>
				</div>
	</section>

	<?php if (wp_is_mobile()): ?>

		<section class="d-flex container step-1 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
			
		<div class="col-12 col-md-6 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-type">
						<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-type.webp'>
						<div class="step-1__entry-selector">
						</div>
					</div>

					<div class="step-1__app-screen">
						<img class="screen" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/app-screen.webp'>
						<img class="step-1__phone-camera" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/phone-camera.webp'>
						<img class="step-1__biometry" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/biometry.webp'>
						<img class="step-1__biometry-line" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/biometry-line.webp'>
					</div>

					<img class="step-1__entry-id" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id.webp'>
					
				</div>
			</div>
				
			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Marca tu asistencia
					</h1>
					<p class="gray fw-light mb-3">
						Según el método que elijas, tus trabajadores podrán marcar asistencia y será verificada gracias a nuestra tecnología biométrica.
					</p>
				</div>
			</div>
	
		</section>

		<section class="d-flex container step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						¡Siempre en la nube!
					</h1>
					<p class="gray fw-light mb-3">
						Los datos de asistencia estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__entry-id--size-1" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id.webp'>
					<img class="step-2__entry-id--size-2" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id-2.webp'>
					<img class="step-2__entry-id--size-3" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id-3.webp'>
					<img class="step-2__entry-id--size-4" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id-4.webp'>
					<img class="step-2__cloud" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/cloud.svg'>
					<img class="step-2__cloud-aura" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/cloud.svg'>
					
					<img class="step-2__loading" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/loading.svg'>
					<img class="step-2__arrow-up" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/arrow-up.svg'>
					<div class="step-2__bubble"></div>
					<div class="step-2__check">
						<i class="fas fa-check"></i>
					</div>
				</div>
			</div>
		</section>

		<section class="d-flex container step-3 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/platform.webp'>
					<img class="step-3__report-action" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/report-action.webp'>
					<div class="step-3__ripple">
					</div>

					<div class="step-3__meter-container atrasos">
						<div class="step-3__meter-title"><h6>Atrasos</h6></div>
						<div class="step-3__meter--orange">
							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>
							<img class="step-3__meter-mask" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/meter-bg.webp'>		
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>
						<div class="step-3__meter-left-data-container">
							<span class="step-3__meter-left-data--orange">	
							</span>
							<small>Presentes</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">	
							</span>
							<small>Planificados</small>
						</div>
					</div>
					
					<div class="step-3__meter-container asistencia-total">
						<div class="step-3__meter-title"><h6>Asistencia total</h6></div>

						<div class="step-3__meter--blue">
							
							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>

							<img class="step-3__meter-mask" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/meter-bg.webp'>		
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>

						<div class="step-3__meter-left-data-container">
							<span class="step-3__meter-left-data--blue">	
							</span>
							<small>Atrasos</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">	
							</span>
							<small>Presentes</small>
						</div>
					</div>

					<div class="step-3__meter-container ausentismo-total">
						<div class="step-3__meter-title"><h6>Ausentismo total</h6></div>

						<div class="step-3__meter--orange">
							
							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>

							<img class="step-3__meter-mask" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/meter-bg.webp'>		
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>
					</div>

					<div class="step-3__assist-bars">
						<img class="step-3__graph" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/graph-assist-global.webp'>
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
						<img class="step-3__graph" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/graph-assist-line.webp'>
						<img class="step-3__line" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/bars-assist-line.svg'>
					</div>

					<div class="step-3__plan-bars">
						<img class="step-3__graph" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/graph-plan-bars.webp'>
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
						Reportes al instante
					</h1>
					<p class="gray fw-light mb-3">
						Obtendrás todo tipo de reportes y podrás exportarlos en el formato que requieras. Horas extras, turnos consolidados, planificaciones y permisos. ¡Todo en un sólo lugar!
					</p>
				</div>
			</div>
		</section>
		<?php else : ?>	
			
		<div class="animation-container container">
			<section class="d-flex step-1 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
			<div class="step-1__bg-curve">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-head-gray.svg"/>
			<div class="bg-tail-gray"></div>
		</div>	
			<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference">
					<div class="resizer">
						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-type">
							<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-type.webp'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__app-screen">
							<img class="screen" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/app-screen.webp'>
							<img class="step-1__phone-camera" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/phone-camera.webp'>
							<img class="step-1__biometry" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/biometry.webp'>
							<img class="step-1__biometry-line" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/biometry-line.webp'>
						</div>

						<img class="step-1__entry-id" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id.webp'>
					</div>
				</div>
					
				<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Marca tu asistencia
						</h1>
						<p class="gray fw-light mb-3">
							Según el método que elijas, tus trabajadores podrán marcar asistencia y será verificada gracias a nuestra tecnología biométrica.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							¡Siempre en la nube!
						</h1>
						<p class="gray fw-light mb-3">
							Los datos de asistencia estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
						</p>
					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-2 step-2__graphics resizer-reference">
					<div class="resizer">
						<img class="step-2__entry-id--size-1" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id.webp'>
						<!-- <img class="step-2__entry-id--size-1-b" src='<?php //echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id.webp'> -->
						<img class="step-2__entry-id--size-2" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id-2.webp'>
						<img class="step-2__entry-id--size-3" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id-3.webp'>
						<img class="step-2__entry-id--size-4" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/entry-id-4.webp'>
						<img class="step-2__cloud" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/cloud.svg'>
						<img class="step-2__cloud-aura" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/cloud.svg'>
						
						<img class="step-2__loading" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/loading.svg'>
						<img class="step-2__arrow-up" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/arrow-up.svg'>
						<div class="step-2__bubble"></div>
						<div class="step-2__check">
							<i class="fas fa-check"></i>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/platform.webp'>
						<img class="step-3__report-action" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/report-action.webp'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__meter-container atrasos">
							<div class="step-3__meter-title"><h6>Atrasos</h6></div>
							<div class="step-3__meter--orange">
								<span class="step-3__meter-num-progress"></span>
								<span class="step-3__meter-start-value">0%</span>
								<span class="step-3__meter-end-value">100%</span>
								<img class="step-3__meter-mask" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/meter-bg.webp'>		
								<div class="step-3__meter-fill-mask">
									<div class="step-3__meter-bg"></div>
									<div class="step-3__meter-fill--left"></div>
									<div class="step-3__meter-fill--right"></div>
								</div>
							</div>
							<div class="step-3__meter-left-data-container">
								<span class="step-3__meter-left-data--orange">	
								</span>
								<small>Presentes</small>
							</div>
							<div class="step-3__meter-right-data-container">
								<span class="step-3__meter-right-data">	
								</span>
								<small>Planificados</small>
							</div>
						</div>
						
						<div class="step-3__meter-container asistencia-total">
							<div class="step-3__meter-title"><h6>Asistencia total</h6></div>

							<div class="step-3__meter--blue">
								
								<span class="step-3__meter-num-progress"></span>
								<span class="step-3__meter-start-value">0%</span>
								<span class="step-3__meter-end-value">100%</span>

								<img class="step-3__meter-mask" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/meter-bg.webp'>		
								<div class="step-3__meter-fill-mask">
									<div class="step-3__meter-bg"></div>
									<div class="step-3__meter-fill--left"></div>
									<div class="step-3__meter-fill--right"></div>
								</div>
							</div>

							<div class="step-3__meter-left-data-container">
								<span class="step-3__meter-left-data--blue">	
								</span>
								<small>Atrasos</small>
							</div>
							<div class="step-3__meter-right-data-container">
								<span class="step-3__meter-right-data">	
								</span>
								<small>Presentes</small>
							</div>
						</div>

						<div class="step-3__meter-container ausentismo-total">
							<div class="step-3__meter-title"><h6>Ausentismo total</h6></div>

							<div class="step-3__meter--orange">
								
								<span class="step-3__meter-num-progress"></span>
								<span class="step-3__meter-start-value">0%</span>
								<span class="step-3__meter-end-value">100%</span>

								<img class="step-3__meter-mask" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/meter-bg.webp'>		
								<div class="step-3__meter-fill-mask">
									<div class="step-3__meter-bg"></div>
									<div class="step-3__meter-fill--left"></div>
									<div class="step-3__meter-fill--right"></div>
								</div>
							</div>
						</div>

						<div class="step-3__assist-bars">
							<img class="step-3__graph" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/graph-assist-global.webp'>
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
							<img class="step-3__graph" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/graph-assist-line.webp'>
							<img class="step-3__line" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/bars-assist-line.svg'>
						</div>

						<div class="step-3__plan-bars">
							<img class="step-3__graph" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-asistencia/graph-plan-bars.webp'>
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
							Reportes al instante
						</h1>
						<p class="gray fw-light mb-3">
							Obtendrás todo tipo de reportes y podrás exportarlos en el formato que requieras. Horas extras, turnos consolidados, planificaciones y permisos. ¡Todo en un sólo lugar!
						</p>
					</div>
				</div>
			</section>
		</div>
		


			<section class="animation-space">
			</section>

		<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center gray section-title anime-fadein"><span class="fw-light">¿Por qué elegir nuestro control de asistencia?</b></h2>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">

							<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/product-asistencia.svg"/>
							
							<h5>Paga correctamente los salarios</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">Conoce los datos reales de la asistencia de tus colaboradores para el pago preciso de sus horas trabajadas.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
							
							<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/product-acceso.svg"/>
							
							<h5>Ahorra tiempo y dinero</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">¡No gastes de más en recursos y personal para la gestión de asistencia! GeoVictoria lo hace por ti.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
						
							
							<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/product-comedor.svg"/>
							<h5>Toma decisiones al instante</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">En caso de ausencias e imprevistos, podrás tomar decisiones acertadas y en tiempo real. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos más que un control de asistencia </h2>
		</div>

		<div class="row anime-fadein">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/report.svg"/>
				<h5 class="fw-bold">Plataforma en la nube</h5>
				<p>Fácil acceso desde cualquier dispositivo con internet. Con Geovictoria no perderás información valiosa.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/form.svg"/>
				<h5 class="fw-bold">Acompañamiento</h5>
				<p>Estámos contigo en todo el proceso, desde el primer contacto, hasta concretar la implementación. En lo que necesites, cuenta con nosotros.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/optimizer.svg"/>
				<h5 class="fw-bold">Adaptabilidad</h5>
				<p>Cada industria funciona demanera muy diferente. Nos adaptamos a cada una de ellas.</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-head-blue.svg"/>
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3 anime-fadein">
					¿Listo para ser parte del cambio?
				</h1>
				
				<h5 class="white fw-light mb-3 anime-fadein">
				Sabemos que toda transformación es un desafío. Más de 5000 empresas ya gestionan su asistencia con nosotros.
				</h5>

				
				<button class="fw-bold button--bigwhite mt-3 anime-fadein">
					Cotiza con nosotros
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/soporte-personalizado.webp"/>
			</div>
		</section>
</main><!-- #main -->
<?php
get_footer();
?>
