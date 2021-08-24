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
				<img src='<?php echo get_template_directory_uri(); ?>/img/monitor.png' class='img-fluid'>
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

	<div class="bg-head-gray"></div>


	<section class='container products'>
		<h2 class="text-center gray mb-3"><span class="fw-light">Te acompañamos durante toda</span><br> <b>tu experiencia Geovictoria</b></h2>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex justify-content-between">
				<div class='product--box d-flex flex-column align-content-center'>
					<img class="product__icon" src="<?php echo get_template_directory_uri()?>/img/product-asistencia.svg"/>
					<h4>Portal <br>asistencia</h4>	
					<a href="#">Ver más</a>
				</div>
				<div class='product--box d-flex flex-column align-content-center'>
					<img class="product__icon" src="<?php echo get_template_directory_uri()?>/img/product-acceso.svg"/>
					<h4>Portal <br>acceso</h4>
					<a href="#">Ver más</a>
				</div>
				<div class='product--box d-flex flex-column align-content-center'>
					<img class="product__icon" src="<?php echo get_template_directory_uri()?>/img/product-comedor.svg"/>
					<h4>Portal <br>comedor</h4>
					<a href="#">Ver más</a>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col d-flex justify-content-between">
				<div class="product--card d-flex flex-column align-items-center">
					<div class='row'>
						<div class="col justify-content-center text-end">
							<img class="product__icon" src="<?php echo get_template_directory_uri()?>/img/product-business.svg"/>
						</div>
						<div class="col d-flex flex-column justify-content-center text-start">
							<h4>Business Intelligence</h4>
							<a href="#">Ver más</a>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</section>

	<section class='container'>
	<h2 class="text-center gray mb-3"><span class="fw-light">Te acompañamos durante toda</span><br> tu experiencia Geovictoria</h2>
		<div class="d-flex justify-content-between">
			<div>Contacto</div>
			<div>Kickoff</div>
			<div>Implementación</div>
			<div>Set-up</div>
			<div>Soporte</div>
		</div>
	</section>
	<div class="bg-head-blue container-fluid"></div>
	<section class="hero container-fluid bg-blue-2">
		
		<div class="container d-flex justify-content-between">
			<div class="align-self-center pe-3">
				<h1 class="white">
					Soporte y atención personalizada
				</h1>
				<h3 class="fw-light white">
					Siempre contarás con un equipo humano que te apoyará en cada momento
				</h3>
				<p class="fw-light white">
					GeoVictoria cuenta con una mesa de soporte multicanal a través de chat en linea, telefono, correo electrónico, que estará disponible 24/7 para resolver todas tus dudas guiarte en el uso de nuestra plataforma
				</p>
				<button class="fw-bold button--bigwhite">
					Contáctanos ahora
				</button>
			</div>
			<div class="col-6 h-100 d-flex justify-content-center">
				<img class="hero__img" src="<?php echo get_template_directory_uri()?>/img/soporte-personalizado.png"/>
			</div>
		</div>
	</section>

	

	
		
	</main><!-- #main -->

<?php
get_footer();
