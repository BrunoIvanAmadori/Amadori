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
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg-header.svg"/>
</div>
<main id="primary" class="site-main">
<div class="container-fluid position-relative animation-asistencia-container"> 
	<section class="hero container-fluid px-4 step-1 animation-asistencia">
			<div class="container d-flex flex-column flex-md-row justify-content-between h-100 px-4 text-center text-md-start">
				<div class="col-12 col-md-6 mb-5 step-1 animation-asistencia__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs">
						<h1 class="gray mb-3 fw-bold">
						Control de asistencia en tiempo real para tu empresa
						</h1>
						<h3 class="gray fw-light mb-3">
						Somos el sistema más simple, amigable y eficiente para gestionar tu personal. 
						</h3>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-1 animation-asistencia__graphics">
					<div class="text-start anime">
						<img class="animation-asistencia animation-asistencia__screen" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/animation-asistencia/step-1/screen.png'>
						<img class="animation-asistencia animation-asistencia__arrow" src='<?php  echo esc_url( get_template_directory_uri() ); ?>/img/animation-asistencia/step-1/arrow.svg'>
						<img class="animation-asistencia animation-asistencia__entry-type" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/animation-asistencia/step-1/entry-type.png'>
						<img class="animation-asistencia animation-asistencia__user" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/animation-asistencia/step-1/user.png'>
					</div>
				</div>
			</div>
	</section>
	<section class="hero container-fluid px-4 step-2 animation-asistencia ">
			<div class="container d-flex flex-column flex-md-row justify-content-between h-100 px-4 text-center text-md-start">
				<div class="col-12 col-md-6 mb-5 step-2 animation-asistencia__text">
					<div class="align-self-center pe-md-3">
						<h1 class="gray mb-3 fw-bold">
						Control de asistencia en tiempo real para tu empresa
						</h1>
						<h3 class="gray fw-light mb-3">
						Somos el sistema más simple, amigable y eficiente para gestionar tu personal. 
						</h3>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-2 animation-asistencia__graphics">
					<div class="text-start anime">
						<img class="animation-asistencia animation-asistencia__app-screen" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/animation-asistencia/step-2/app-screen.png'>
						<img class="animation-asistencia animation-asistencia__entry-type" src='<?php  echo esc_url( get_template_directory_uri() ); ?>/img/animation-asistencia/step-2/entry-type.png'>
					</div>
				</div>
			</div>
	</section>

	</div>
	<section class="animation-space">
	</section>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center gray section-title anime-fadein"><span class="fw-light">¿Por qué elegir nuestro control de asistencia?</b></h2>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
							<div class="benefits__flip-icon"><i class="fal fa-redo"></i> </div>
							<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-asistencia.svg"/>
							<h5>Pagar correctamente los salarios</h5>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">Conoce los datos reales de la asistencia de tus colaboradores para el pago preciso de sus horas trabajadas.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
							
							<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-acceso.svg"/>
							<h5>Ahorra tiempo y dinero</h5>
							<div class="benefits__flip-icon"> </div>
							<div class="benefits__arrow"><i class="fal fa-chevron-up"></i></div>
							
						</div>

						<div class="benefits__flip-card-back flex-column align-items-center px-4">
							<p class="fs-5 fw-light">¡No gastes de más en recursos y personal para la gestión de asistencia! GeoVictoria lo hace por ti.</p>
						</div>
					</div>
				</div>
				<div class="benefits__flippable-card-container d-flex flex-column justify-content-center">
					<div class="benefits__flip-card">
						<div class="benefits__flip-card-front flex-column align-items-center">
							<div class="benefits__flip-icon"><i class="fal fa-redo"></i> </div>
							<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-comedor.svg"/>
							<h5>Toma decisiones al instante</h5>

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
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/reportes-personalizados.svg"/>
				<h5 class="fw-bold">Plataforma en la nube</h5>
				<p>Fácil acceso desde cualquier dispositivo con internet. Con Geovictoria no perderás información valiosa.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/formularios-en-linea.svg"/>
				<h5 class="fw-bold">Acompañamiento</h5>
				<p>Estámos contigo en todo el proceso, desde el primer contacto, hasta concretar la implementación. En lo que necesites, cuenta con nosotros.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/optimizador-de-turnos.svg"/>
				<h5 class="fw-bold">Adaptabilidad</h5>
				<p>Cada industria funciona demanera muy diferente. Nos adaptamos a cada una de ellas.</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg-head-blue.svg"/>
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-start align-self-center pe-3">
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
				<img class="why-us__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/soporte-personalizado.png"/>
			</div>
		</section>
</main><!-- #main -->
<?php
get_footer();
?>
