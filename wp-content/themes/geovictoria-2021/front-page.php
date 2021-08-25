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
	<section class="hero container-fluid">
		<div class="container d-flex justify-content-between h-100">
			<div class="col-6 d-flex">
				<div class="align-self-center pe-3">
					<h1 class="gray mb-3 fw-bold">
						Optimiza la gestión humana ahorrando tiempo, recursos y dinero
					</h1>
					<h3 class="gray fw-light mb-3">
						Mas de 10 años innovando para nuestros clientes.
					</h3>
					<button class="button--bigblue">
						<span class="white">Solicita tu demo gratis</span>
					</button>
				</div>
			</div>
			<div class="col-6 h-100">
				<img src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/monitor.png' class='img-fluid'>
			</div>
		</div>
	</section>
	<section class='container trusting-companies'>
		<h2 class="text-center gray mb-3 fw-bold">Empresas que confian en nosotros</h2>
		<div class="d-flex justify-content-between">
			<div>thyssenkrup</div>
			<div>securitas</div>
			<div>GrandVision</div>
			<div>Addecco</div>
			<div>Scotiabank</div>
			<div>Coca-cola</div>
			<div>Logitech</div>
			<div>Starbucks</div>
		</div>
	</section>
	<div class="container-fluid position-relative">
	<section class='container products'>
		<h2 class="text-center gray mb-3"><span class="fw-light">Te acompañamos durante toda</span><br> <b>tu experiencia Geovictoria</b></h2>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex justify-content-between">
				<div class='product--box d-flex flex-column align-content-center'>
					<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-asistencia.svg"/>
					<h4 class="fw-bold">Portal <br>asistencia</h4>	
					<a href="#">Ver más</a>
				</div>
				<div class='product--box d-flex flex-column align-content-center'>
					<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-acceso.svg"/>
					<h4 class="fw-bold">Portal <br>acceso</h4>
					<a href="#">Ver más</a>
				</div>
				<div class='product--box d-flex flex-column align-content-center'>
					<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-comedor.svg"/>
					<h4 class="fw-bold">Portal <br>comedor</h4>
					<a href="#">Ver más</a>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex justify-content-between">
				<div class="product--card d-flex flex-column align-items-center">
					<div class='row'>
						<div class="col justify-content-center text-end">
							<img class="product__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
						</div>
						<div class="col d-flex flex-column justify-content-center text-start">
							<h4 class="fw-bold">Business Intelligence</h4>
							<a href="#">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="bg-curve">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg-head-gray.svg"/>
		<div class="bg-tail-gray"></div>
	</div>
	<section class='container'>
	<h2 class="text-center gray mb-3"><span class="fw-light">Te acompañamos durante toda</span><br> tu experiencia Geovictoria</h2>
		<div class="progress__section d-flex justify-content-between">
			<div class="progress__bg step-1">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-1.svg"/>
					<div class="progress__text--up">
						<h6 class="fw-bold">Contacto</h6>
						<small class="fw-light">Te contactaremos con un ejecutivo comercial especializado para tu rubro</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-arrow.svg"/>
			</div>
			<div class="progress__bg step-2 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-2.svg"/>
					<div class="progress__text--down">
						<h6 class="fw-bold">KickOff</h6>
						<small class="fw-light">Nuestro equipo está listo para instalar los equipos y métodos de marcaje solicitados</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-arrow.svg"/>
			</div>
			<div class="progress__bg step-3">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-3.svg"/>
					<div class="progress__text--up">
						<h6 class="fw-bold">Implementación</h6>
						<small class="fw-light">Nuestro equipo está listo para instalar los equipos y métodos de marcaje solicitados</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-arrow.svg"/>
			</div>
			<div class="progress__bg step-4 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-4.svg"/>
					<div class="progress__text--down">
						<h6 class="fw-bold">Set-Up</h6>
						<small class="fw-light">Te ayudamos a configurar tu sistema de marcaje para que quede activo</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-arrow.svg"/>
			</div>
			<div class="progress__bg step-5">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-5.svg"/>
					<div class="progress__text--up">
						<h6 class="fw-bold">Soporte</h6>
						<small class="fw-light">Contarás con un equipo de soporte que te apoyará en cada momento</small>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div>
		<img class="bg-head-blue" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg-head-blue.svg"/>
	</div>
	<section class="support container-fluid bg-blue-2">
		<div class="container d-flex justify-content-between">
			<div class="align-self-center pe-3">
				<h1 class="white fw-bold mb-3">
					Soporte y atención personalizada
				</h1>
				<h3 class="white mb-3">
					Siempre contarás con un equipo humano que te apoyará en cada momento
				</h3>
				<p class="fw-light white fs-5 mb-4">
					GeoVictoria cuenta con una mesa de soporte multicanal a través de chat en linea, telefono, correo electrónico, que estará disponible 24/7 para resolver todas tus dudas guiarte en el uso de nuestra plataforma
				</p>
				<button class="fw-bold button--bigwhite">
					Contáctanos ahora
				</button>
			</div>
			<div class="col-5 h-100 d-flex justify-content-center">
				<img class="support__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/soporte-personalizado.png"/>
			</div>
		</div>
	</section>
</main><!-- #main -->
<?php
get_footer();
?>
