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
		<div class="container d-flex flex-column flex-md-row justify-content-between h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Optimiza la gestión humana ahorrando tiempo, recursos y dinero
					</h1>
					<h3 class="gray fw-light mb-3">
						Mas de 10 años innovando para nuestros clientes.
					</h3>
					<button class="button--bigblue bounce">
						<span class="white">Solicita tu demo gratis</span>
					</button>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5">
				<div class="animation-home text-start anime">
					<img class="animation-home animation-home__screen" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/animation-home/screen.png'>
					<img class="animation-home animation-home__arrow" src='<?php  echo esc_url( get_template_directory_uri() ); ?>/img/animation-home/arrow.svg'>
					<img class="animation-home animation-home__entry-type" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/animation-home/entry-type.png'>
					<img class="animation-home animation-home__user" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/animation-home/user.png'>
				</div>
			</div>
		</div>
	</section>

	<section class="container col-12 trusting-companies">
		<h2 class="text-center gray section-title fw-bold">Empresas que confian en nosotros</h2>
		<div class="d-flex justify-content-around">
			<div>
				<img class="trusting-companies__logo" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/securitas-logo.png'>
			</div>
			<div>
				<img class="trusting-companies__logo" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/starbucks-logo.png'>
			</div>
			<div>
				<img class="trusting-companies__logo" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/adecco-logo.png'>
			</div>
			<div>
				<img class="trusting-companies__logo" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/scotiabank-logo.png'>
			</div>
			<div>
				<img class="trusting-companies__logo" src='<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/coca-logo.png'>
			</div>
		</div>
	</section>
	
	<section class='container products'>

		<h2 class="text-center gray section-title"><span class="fw-light">Te acompañamos durante toda</span><br> <b>tu experiencia Geovictoria</b></h2>
		
		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
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
			<div class="col d-flex flex-column flex-md-row justify-content-between">
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

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title"><b>Ahorra, actualiza, simplifica</b><br><span class="fw-light">Bienvenido a un mundo de gestión</span><br> </h2>
		</div>

		<div class="row">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
				<h5 class="fw-bold">Reportes personalizados</h5>
				<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
				<h5 class="fw-bold">Reportes personalizados</h5>
				<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
				<h5 class="fw-bold">Reportes personalizados</h5>
				<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
				<h5 class="fw-bold">Reportes personalizados</h5>
				<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
				<h5 class="fw-bold">Reportes personalizados</h5>
				<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
				<h5 class="fw-bold">Reportes personalizados</h5>
				<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
			</div>
		</div>
</section>

	<section class='container'>
	<h2 class="text-center gray mb-3"><span class="fw-light">Te acompañamos durante toda</span><br> tu experiencia Geovictoria</h2>
	<!-- Para mobile -->

	<div class="progressMobile__section d-flex flex-column d-md-none text-center">
		<div class="step-1 mb-4">
			<div class="progressMobile__bg step-1 mb-4 ">
				<div class="progressMobile__circle">
					<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-1.svg"/>
					<div class="progressMobile__text--left">
						<h3 class="fw-bold">Contacto</h3>
					</div>
				</div>
			</div>

				<p class="fw-light">Te contactaremos con un ejecutivo comercial especializado para tu rubro</p>

		</div>

		<div class="step-2 mb-4">
			<div class="progressMobile__bg step-2 mb-4">
				<div class="progressMobile__circle">
					<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-2.svg"/>
					<div class="progressMobile__text--left">
						<h3 class="fw-bold">Kickoff</h3>
					</div>
				</div>
			</div>		
			<p class="fw-light">Nuestro equipo está listo para instalar los equipos y métodos de marcaje solicitados</p>
		</div>

		<div class="step-3 mb-4">
			<div class="progressMobile__bg step-3 mb-4">
			
				<div class="progressMobile__circle">
					<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-3.svg"/>
					<div class="progressMobile__text--left">
						<h3 class="fw-bold">Implementación</h3>
					</div>
				</div>
			</div>
			<p class="fw-light">Nuestro equipo está listo para instalar los equipos y métodos de marcaje solicitados</p>
		</div>

		<div class="step-4 mb-4">
			<div class="progressMobile__bg step-4 mb-4">
				<div class="progressMobile__circle">
					<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-4.svg"/>
					<div class="progressMobile__text--left">
						<h3 class="fw-bold">Setup</h3>
					</div>
				</div>			
			</div>
			<p class="fw-light">Te ayudamos a configurar tu sistema de marcaje para que quede activo</p>
		</div>

		<div class="step-5 mb-4">
			<div class="progressMobile__bg step-5 mb-4">
			
				<div class="progressMobile__circle">
					<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/process-logo-step-5.svg"/>
					<div class="progressMobile__text--left">
						<h3 class="fw-bold">Soporte</h3>
					</div>
				</div>
			</div>
			<p class="fw-light">Contarás con un equipo de soporte que te apoyará en cada momento</p>
		</div>
	</div>

	<!-- Para desktop -->
		<div class="progress__section d-none justify-content-between d-md-flex">
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

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3">
					¿Por qué elegirnos?
				</h1>
				<div class="row">
					<div class="col-3">
						<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
					</div>
					<div class="col py-2">
						<h6>Solución hecha a tu medida:</h6>
						<small class="fw-light">En GeoVictoria nos adaptamos a tu negocio. Haremos lo que necesites.</small>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
					</div>
					<div class="col py-2">
						<h6>Soporte en todo momento:</h6>
						<small class="fw-light">Estaremos 24/7 para resolver todas tus dudas y guiarte en el uso de nuestra plataforma</small>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
					</div>
					<div class="col py-2">
						<h6>Tecnología biométrica:</h6>
						<small class="fw-light">Contamos con la mejor tecnología biométrica: registro de huella, lectura de palma, reconocimiento facial. Marcajes 100% verificados.</small>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/product-business.svg"/>
					</div>
					<div class="col py-2">
						<h6>Paga por lo que usas:</h6>
						<small class="fw-light">Sea diez, cien o mil usuarios. Solo pagarás por la cantidad de trabajadores que deban marcar. ¡Sin costos extras!</small>
					</div>
				</div>
				
				<button class="fw-bold button--bigwhite mt-3">
					Contáctanos ahora
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/soporte-personalizado.png"/>
			</div>
		</section>
	</div>

	<section class="d-flex justify-content-center container call-to-action">
		<div class="col-12 col-lg-6 text-center my-3">
			<img class="call-to-action__arrow" src='<?php  echo esc_url( get_template_directory_uri() ); ?>/img/call-to-action/arrow.svg'>
			<img class="call-to-action__arrow--left" src='<?php  echo esc_url( get_template_directory_uri() ); ?>/img/call-to-action/arrow.svg'>
			<h2 class="fw-bold mb-4">
					¿Listo para ser <br>parte del cambio?
			</h2>
			<button class="button--bigblue bounce">
				<span class="white">Solicita tu demo gratis</span>
			</button>
		</div>
		
	</section>
</main><!-- #main -->
<?php
get_footer();
?>
