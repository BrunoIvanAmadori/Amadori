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
					Registra y controla la ración de alimentos para el comedor de tu empresa
				</h1>
				<h3 class="gray fw-light mb-3 fs-5 fs-md-3">
					Evita mermas, desperdicios o incumplimientos en la entrega de alimentos en tu comedor. Planifica todo en una plataforma 100% online.
				</h3>
			</div>
		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header-comedor" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/header-comedor.webp'>
		</div>
	</section>

	<?php if (wp_is_mobile()): ?>
		<section class="d-flex container step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-2 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ticket">
						<img src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-1.webp'>
					</div>
					

					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-type">
						<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/entry-type.webp'>
						<div class="step-1__entry-selector"></div>
					</div>

					<div class="step-1__box-container">
						<img class="step-1__box" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/box.webp'>
						<img class="step-1__box-options" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/box-options.webp'>
						<img class="step-1__box-pass" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/box-pass.webp'>
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
						Gestiona las raciones
					</h1>
					<p class="gray fw-light mb-3">
						Según el método que elijas, tus trabajadores podrán registrar su entrada al comedor y recibir la ración de alimento asignada para el día.
					</p>
				</div>
			</div>
		</section>

		<section class="d-flex container step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						¡Siempre en la nube!
					</h1>
					<p class="gray fw-light mb-3">
						Los datos de las raciones entregadas estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-2 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__ticket--size-1" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-1.webp'>
					<img class="step-2__ticket--size-2" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-2.webp'>
					<img class="step-2__ticket--size-3" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-3.webp'>
					<img class="step-2__ticket--size-4" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-4.webp'>
					<img class="step-2__cloud" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/cloud.svg'>
					<img class="step-2__cloud-aura" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/cloud.svg'>
					
					<img class="step-2__loading" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/loading.svg'>
					<img class="step-2__arrow-up" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/arrow-up.svg'>
					<div class="step-2__bubble"></div>
					<div class="step-2__check">
					<i class="fas fa-check"></i>
				</div>
			</div>
		</section>

		<section class="d-flex container step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/platform.webp'>
					<img class="step-3__report-action" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/report-action.webp'>
					<div class="step-3__ripple"></div>

					<div class="step-3__graphic-container">
						<img class="step-3__graphic" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/graphic.webp'>
						<img class="step-3__bar-group" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
					</div>

					<div class="step-3__report-container d-flex flex-column">
						<img class="step-3__report" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/report-individual.webp'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
						<div class="step-3__data-3">0</div>
					</div>

					<div class="step-3__rations-container d-flex flex-column">
						<img class="step-3__rations" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/rations.webp'>
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
						Reportes al instante
					</h1>
					<p class="gray fw-light mb-3">
						Obtén reportes de las personas habilitadas para recibir alimento, la información del lugar y la hora en que validaron su ración asignada.
					</p>
				</div>
			</div>
	</section>

		<?php else : ?>	
			
		<div class="animation-container container">
			<section class="d-flex step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="step-1__bg-curve">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-head-gray.svg"/>
			<div class="bg-tail-gray"></div>
		</div>	
			<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference">
					<div class="resizer">
					<div class="step-1__ticket">
						<img src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-1.webp'>
					</div>

						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-type">
							<img src='<?php  echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/entry-type.webp'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__box-container">
							<img class="step-1__box" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/box.webp'>
							<img class="step-1__box-options" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/box-options.webp'>
							<img class="step-1__box-pass" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/box-pass.webp'>
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
							Gestiona las raciones
						</h1>
						<p class="gray fw-light mb-3">
							Según el método que elijas, tus trabajadores podrán registrar su entrada al comedor y recibir la ración de alimento asignada para el día.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							¡Siempre en la nube!
						</h1>
						<p class="gray fw-light mb-3">
							Los datos de las raciones entregadas estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
						</p>
					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-2 step-2__graphics resizer-reference">
					<div class="resizer">
						<img class="step-2__ticket--size-1" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-1.webp'>
						<img class="step-2__ticket--size-2" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-2.webp'>
						<img class="step-2__ticket--size-3" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-3.webp'>
						<img class="step-2__ticket--size-4" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/ticket-4.webp'>
						<img class="step-2__cloud" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/cloud.svg'>
						<img class="step-2__cloud-aura" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/cloud.svg'>
						
						<img class="step-2__loading" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/loading.svg'>
						<img class="step-2__arrow-up" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/arrow-up.svg'>
						<div class="step-2__bubble"></div>
						<div class="step-2__check">
							<i class="fas fa-check"></i>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/platform.webp'>
						<img class="step-3__report-action" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/report-action.webp'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/graphic.webp'>
							<img class="step-3__bar-group" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
						</div>

						<div class="step-3__report-container d-flex flex-column">
							<img class="step-3__report" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/report-individual.webp'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__rations-container d-flex flex-column">
							<img class="step-3__rations" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-comedor/rations.webp'>
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
							Reportes al instante
						</h1>
						<p class="gray fw-light mb-3">
							Obtén reportes de las personas habilitadas para recibir alimento, la información del lugar y la hora en que validaron su ración asignada.
						</p>
					</div>
				</div>
			</section>
		</div>
		


			<section class="animation-space">
			</section>

		<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center gray section-title anime-fadein"><span class="fw-light">¿Por qué elegir nuestra gestión de comedor?</b></h2>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">

							<img class="benefits__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/meal.svg"/>
							
							<h5>Asigna raciones según perfiles</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fw-light">Asigna y distribuye las raciones a las personas habilitadas. Podrás fijar el tipo de alimento según hora y lugar autorizado.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
							
							<img class="benefits__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/cloud-paper.svg"/>
							
							<h5>Encuentra datos en tiempo real</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fw-light">Conoce los datos de fecha, hora y lugar de las comidas asignadas. ¡No malgastes raciones por falta de información!</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
						
							
							<img class="benefits__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/jigsaw.svg"/>
								<h5>Integrable con acceso y asistencia</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fw-light">Aprovecha tus módulos de asistencia y acceso con el control de comedor. Así tendrás información consolidada y a un solo clic.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">

							<img class="benefits__icon mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/print.svg"/>
							
							<h5>Aumenta tu productividad</h5>
							<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fw-light">Otorga tickets individuales para el correcto control de las raciones entregadas. ¡Es el respaldo para tu comedor!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos más que un control de comedor</h2>
		</div>

		<div class="row anime-fadein">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/meal.svg"/>
				<h5 class="fw-bold">Tipos de raciones</h5>
				<p>No importa si es desayuno, almuerzo o cena. Con nuestra solución puedes crear hasta seis tipos de raciones. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/papers.svg"/>
				<h5 class="fw-bold">Respaldo permanente</h5>
				<p>Sea gestionado por ti o por un externo, siente la tranquilidad de que tus colaboradores obtendrán su ración asignada. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/notebook-check.svg"/>
				<h5 class="fw-bold">Planeación inteligente</h5>
				<p>Genera una planificación precisa de la ración. Evita mermas, desperdicios o incumplimiento en la entrega.</p>
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
					Más de 5000 empresas gestionan su comedor desde nuestra plataforma. Tú puedes ser el próximo.
				</h5>

				<button class="fw-bold button--bigwhite mt-3 anime-fadein">
					Cotiza con nosotros
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/footer-sales.webp"/>
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>
