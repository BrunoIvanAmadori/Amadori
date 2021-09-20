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
	<div class="icon-scroll"><small class="tip">SCROLLEA ABAJO</small></div>
<?php endif; ?>

<section class="hero container d-flex flex-column flex-md-row justify-content-around text-center text-md-start">

				<div class="hero__text col-12 col-md-6 mb-3">
					<div class="align-self-center pe-md-3 anime-fadein-childs">
						<h1 class="gray mb-3 fw-bold">
						¡No más visitas inesperadas! Garantiza la seguridad de tu empresa
						</h1>
						<h3 class="gray fw-light mb-3 fs-5 fs-md-3">
						Control de Acceso para visitas, externos y vehículos. Variados sistemas de marcajes, reportería personalizada y planificación. 
						</h3>
					</div>
				</div>
				<div class="hero__graphics col-12 col-md-6">
						<img class="header-acceso" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/header-acceso.webp'>
				</div>
	</section>

	<?php if (wp_is_mobile()): ?>
		
			<section class="d-flex container step-1 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
			<div class="step-1__bg-curve">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-head-gray.svg"/>
			<div class="bg-tail-gray"></div>
		</div>	
			<div class="col-12 col-md-6 mb-1 step-1 step-1__graphics resizer-reference">
					<div class="resizer">
						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-device">
							<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/devices.webp'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__entry-method">
							<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-method.webp'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__speedface-container">
							<img class="step-1__speedface-screen" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-screen.webp'>
							<img class="step-1__speedface-face" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-face.webp'>
							<img class="step-1__speedface" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface.webp'>
							<img class="step-1__speedface-notification" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-notification.webp'>
							<img class="step-1__biometry" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/biometry.webp'>
							<img class="step-1__biometry-line" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/biometry-line.webp'>
						</div>

						<img class="step-1__speedface-blocked" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-locked.webp'>
						<img class="step-1__speedface-open" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-open.webp'>
						

						<img class="step-1__entry-id" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-1.webp'>
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

			<section class="d-flex container step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
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

				<div class="col-12 col-md-6 mb-2 step-2 step-2__graphics resizer-reference">
					<div class="resizer">
						<img class="step-2__entry-id--size-1" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-1.webp'>
						<!-- <img class="step-2__entry-id--size-1-b" src='<?php //echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id.webp'> -->
						<img class="step-2__entry-id--size-2" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-2.webp'>
						<img class="step-2__entry-id--size-3" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-3.webp'>
						<img class="step-2__entry-id--size-4" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-4.webp'>
						<img class="step-2__cloud" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/cloud.svg'>
						<img class="step-2__cloud-aura" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/cloud.svg'>
						
						<img class="step-2__loading" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/loading.svg'>
						<img class="step-2__arrow-up" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/arrow-up.svg'>
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
						<img class="step-3__platform" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/platform.webp'>
						<img class="step-3__report-action" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/report-action.webp'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/graphic.webp'>
							<img class="step-3__bar-group" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/graphic-bars.webp'></img>
						</div>
						
						<div class="step-3__users-container">
							<img class="step-3__users" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/users.webp">
							<div class="step-3__data-1">40</div>
						</div>

						<div class="step-3__users-detail-container d-flex flex-column">
							<img class="step-3__users-detail" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/users-detail.webp'>
							<div class="step-3__data-1">23</div>
							<div class="step-3__data-2">23</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__date-container d-flex flex-column">
							<img class="step-3__date" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/date.webp'>
							<div class="step-3__hour">17:23</div>
							<div class="step-3__day">Miércoles, 1 de septiembre de 2021</div>
						</div>

						<img class="step-3__monitoring" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/monitoring.webp'>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 mt-5 step-3 step-3__text">
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
			<section class="d-flex step-1 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
			<div class="step-1__bg-curve">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-head-gray.svg"/>
			<div class="bg-tail-gray"></div>
		</div>	
			<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference">
					<div class="resizer">
						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-device">
							<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/devices.webp'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__entry-method">
							<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-method.webp'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__speedface-container">
							<img class="step-1__speedface-screen" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-screen.webp'>
							<img class="step-1__speedface-face" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-face.webp'>
							<img class="step-1__speedface" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface.webp'>
							<img class="step-1__speedface-notification" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-notification.webp'>
							<img class="step-1__biometry" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/biometry.webp'>
							<img class="step-1__biometry-line" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/biometry-line.webp'>
						</div>

						<img class="step-1__speedface-blocked" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-locked.webp'>
						<img class="step-1__speedface-open" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/speedface-open.webp'>
						

						<img class="step-1__entry-id" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-1.webp'>
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

			<section class="d-flex step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
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
						<img class="step-2__entry-id--size-1" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-1.webp'>
						<img class="step-2__entry-id--size-2" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-2.webp'>
						<img class="step-2__entry-id--size-3" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-3.webp'>
						<img class="step-2__entry-id--size-4" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/entry-id-4.webp'>
						<img class="step-2__cloud" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/cloud.svg'>
						<img class="step-2__cloud-aura" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/cloud.svg'>
						
						<img class="step-2__loading" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/loading.svg'>
						<img class="step-2__arrow-up" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/arrow-up.svg'>
						<div class="step-2__bubble"></div>
						<div class="step-2__check">
							<i class="fas fa-check"></i>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/platform.webp'>
						<img class="step-3__report-action" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/report-action.webp'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/graphic.webp'>
							<img class="step-3__bar-group" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/graphic-bars.webp'>
						</div>
						
						<div class="step-3__users-container">
							<img class="step-3__users" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/users.webp">
							<div class="step-3__data-1">40</div>
						</div>

						<div class="step-3__users-detail-container d-flex flex-column">
							<img class="step-3__users-detail" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/users-detail.webp'>
							<div class="step-3__data-1">23</div>
							<div class="step-3__data-2">23</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__date-container d-flex flex-column">
							<img class="step-3__date" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/date.webp'>
							<div class="step-3__hour">17:23</div>
							<div class="step-3__day">Miércoles, 1 de septiembre de 2021</div>
						</div>

						<img class="step-3__monitoring" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-acceso/monitoring.webp'>
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

							<img class="product__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/clock-dollar.svg"/>
							
							<h5>Disminuye costos y tiempos</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">La persona solo llega y valida con el método escogido por ti. ¡Sin complicaciones!</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
							
							<img class="product__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/pc-check.svg"/>
							
							<h5>Digitaliza tus procesos</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">No pierdas tiempo anotando cada uno de los ingresos de forma manual.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
						
							
							<img class="product__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/shield-check.svg"/>
							<h5>Seguridad para tu empresa</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">Sea en la entrada, la bodega o en las oficinas. Todas las áreas de tu empresa estarán protegidas.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-center">
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">

							<img class="product__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/process-gear.svg"/>
							
							<h5>Aumenta tu productividad</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">Fácil acceso desde cualquier dispositivo con internet. No pierdas información valiosa.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
							
							<img class="product__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/ruler.svg"/>
							
							<h5>Reportes a medida</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">Informes de ingresos y salidas, por lugares o fechas. Todo siempre a tu disposición. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Un control de acceso único</h2>
		</div>

		<div class="row anime-fadein">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/person.svg"/>
				<h5 class="fw-bold">Perfiles de personal</h5>
				<p>Autoriza el acceso de personas de acuerdo a sus funciones dentro de tu empresa. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/gear.svg"/>
				<h5 class="fw-bold">Integrable con asistencia</h5>
				<p>Encuentra la información de acceso y asistencia en un mismo lugar. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/paper.svg"/>
				<h5 class="fw-bold">Planificación de accesos</h5>
				<p>Determina los ingresos por días, semanas o meses. ¡Todo con la debida antelación.</p>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos mucho más que un control de acceso</h2>
		</div>

		<div class="row anime-fadein">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/person-circled.svg"/>
				<h5 class="fw-bold">Control de visitas</h5>
				<p>Agenda, autoriza y verifica. Con GeoVictoria puedes gestionar y visualizar el listado de visitas que ingresaron a tu empresa.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/arrow-out.svg"/>
				<h5 class="fw-bold">Control de externos</h5>
				<p>Contratistas, proovedores o personal de outsourcing. Tendrás el control de acceso de todo trabajador externo a tus instalaciones.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/construction-check.svg"/>
				<h5 class="fw-bold">Acceso vehicular</h5>
				<p>Gestiona el ingreso y salida de los vehículos que acceden a tu empresa. Podrás saber en tiempo real el espacio disponible en tu estacionamiento.</p>
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
					Sabemos que toda transformación es un desafío. Más de 5000 empresas ya gestionan su acceso con nosotros.
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
