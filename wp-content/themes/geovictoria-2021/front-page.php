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
				<div class="align-self-center">
					<h1>
						Optimiza la gestión humana ahorrando tiempo, recursos y dinero
					</h1>
					<h2>
						Mas de 10 años innovando para nuestros clientes.
					</h2>
					<button>
						Solicita tu demo gratis
					</button>
				</div>
			</div>
			<div class="col-6 bg-primary h-100%">
			</div>
		</div>
	</section>

	<section class='container trusting-companies'>
		<h1 class="text-center">Empresas que confian en nosotros</h1>
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

	<section class='container products'>
		<h1 class="text-center">Te acompañamos durante toda tu experiencia Geovictoria</h1>
		<div class="d-flex justify-content-between">
			<div>Portal asistencia</div>
			<div>Portal acceso</div>
			<div>Portal comedor</div>
		</div>
		<div class="w-100% text-center">Business Inteligence</div>
	</section>

	<section class='container'>
		<h1 class="text-center">Te acompañamos durante toda tu experiencia Geovictoria</h1>
		<div class="d-flex justify-content-between">
			<div>Contacto</div>
			<div>Kickoff</div>
			<div>Implementación</div>
			<div>Set-up</div>
			<div>Soporte</div>
		</div>
	</section>

	<section class="cta container-fluid">
		<div class="container d-flex justify-content-between">
			<div class="col-6">
				<h1>
					Soporte y atención personalizada
				</h1>
				<h2>
				Siempre contarás con un equipo humano que te apoyará en cada momento
				</h2>
				<p>
				GeoVictoria cuenta con una mesa de soporte multicanal a través de chat en linea, telefono, correo electrónico, que estará disponible 24/7 para resolver todas tus dudas guiarte en el uso de nuestra plataforma
				</p>
				<button>
				Contáctanos ahora
				</button>
			</div>
			<div class="col-6 bg-primary h-100%">

			</div>
		</div>
	</section>

	

	
		
	</main><!-- #main -->

<?php
get_footer();
