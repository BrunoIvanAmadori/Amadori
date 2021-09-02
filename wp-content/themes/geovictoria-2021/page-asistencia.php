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
					<div class="align-self-center pe-md-3">
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
</main><!-- #main -->
<?php
get_footer();
?>
