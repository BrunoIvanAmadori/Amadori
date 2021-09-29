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
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3 anime-fadein-childs">
					<h1 class="gray mb-3 fw-bold">
						La gestión de fuerza laboral por excelencia
					</h1>
					<h5 class="gray fw-light mb-3">
						Solución integral 100% en la nube.<br>Gestiona, elabora reportes, obtén métricas<br>y ahorra dinero. Todo en un solo lugar
					</h5>
					<button class="button--bigblue bounce">
						<span class="white">Solicita tu demo gratis</span>
					</button>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5">
				<div class="animation-home text-start anime">
					<img class="animation-home animation-home__screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/screen.webp'>
					<img class="animation-home animation-home__arrow" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/arrow.svg'>
					<img class="animation-home animation-home__entry-type" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/entry-type.webp'>
					<img class="animation-home animation-home__user" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-home/user.webp'>
				</div>
			</div>
		</div>
	</section>

	<section class="container col-12 trusting-companies mb-3">
		<h2 class="text-center gray section-title fw-light anime-fadein">Nuestros clientes ya<br><span class="fw-bold">optimizan su personal con nosotros</span></h2>
		<div class="d-flex justify-content-around anime-fadein">

			<div class="position-relative d-flex flex-column text-center w-100">
				<div class="trusting-companies__container d-flex flex-column w-100 align-items-center">
					<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/securitas-logo.webp'>
					<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
				</div>
				<div class="trusting-companies__description">
					<small>Lorem ipsum dolor sit amet, sanguche de bondiola con dulce de leche granizado</small>
				</div>
			</div>

			<div class="position-relative d-flex flex-column text-center w-100">
				<div class="trusting-companies__container d-flex flex-column w-100 align-items-center">
					<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logo.webp'>
					<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
				</div>
				<div class="trusting-companies__description">
					<small>Lorem ipsum dolor sit amet, sanguche de bondiola con dulce de leche granizado</small>
				</div>
			</div>


			<div class="position-relative d-flex flex-column text-center w-100">
				<div class="trusting-companies__container d-flex flex-column w-100 align-items-center">
					<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/adecco-logo.webp'>
					<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
				</div>
				<div class="trusting-companies__description">
					<small>Lorem ipsum dolor sit amet, sanguche de bondiola con dulce de leche granizado</small>
				</div>
			</div>


			<div class="position-relative d-flex flex-column text-center w-100">
				<div class="trusting-companies__container d-flex flex-column w-100 align-items-center">
					<img class="trusting-companies__logo--scotiabank" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/scotiabank-logo.webp'>
					<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
				</div>
				<div class="trusting-companies__description">
					<small>Lorem ipsum dolor sit amet, sanguche de bondiola con dulce de leche granizado</small>
				</div>
			</div>

			<div class="position-relative d-flex flex-column text-center w-100">
				<div class="trusting-companies__container d-flex flex-column w-100 align-items-center" type="button">
					<img class="trusting-companies__logo--cocacola" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/coca-logo.webp'>
					<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
				</div>
				<div class="trusting-companies__description">
					<small>Lorem ipsum dolor sit amet, sanguche de bondiola con dulce de leche granizado</small>
				</div>
			</div>

		</div>
	</section>

	<section class='container products'>

		<h2 class="text-center gray section-title anime-fadein"><span class="fw-light">¡Conoce todas</span><br> <b>nuestras soluciones!</b></h2>

		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<div class='product--box d-flex flex-column align-content-center anime-fadein'>
					<a href="/asistencia">
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-asistencia.svg" />
						<h4 class="fw-bold">Gestión<br>asistencia</h4>
						<a href="#">Ver más</a>
					</a>
				</div>
				<div class='product--box d-flex flex-column align-content-center anime-fadein'>
					<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-acceso.svg" />
					<h4 class="fw-bold">Control<br>de acceso</h4>
					<a href="#">Ver más</a>
				</div>
				<div class='product--box d-flex flex-column align-content-center anime-fadein'>
					<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-comedor.svg" />
					<h4 class="fw-bold">Gestión de<br>comedor</h4>
					<a href="#">Ver más</a>
				</div>
			</div>
		</div>

		<div class="row d-flex justify-content-center anime-fadein">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<div class="product--card d-flex flex-column align-items-center anime-fadein">
					<div class='row'>
						<div class="col justify-content-center text-end">
							<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-business.svg" />
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
	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>

		<section class="d-flex flex-column container justify-content-between features">
			<div class="row">
				<h2 class="text-center gray section-title anime-fadein"><b>Ahorra, actualiza, simplifica</b><br><span class="fw-light">Bienvenido a un mundo de gestión</span><br> </h2>
			</div>

			<div class="row anime-fadein">
				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/report.webp" />
					<h5 class="fw-bold">Reportes personalizados</h5>
					<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.webp" />
					<h5 class="fw-bold">Formularios en linea</h5>
					<p>Crea formularios a tu medida. La opinión de tus trabajadores, trazabilidad Covid...</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.webp" />
					<h5 class="fw-bold">Optimizador de turnos</h5>
					<p>¡Ya no pierdas más dinero! Calcula los turnos más optimos según las variables de tu negocio</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/integration.webp" />
					<h5 class="fw-bold">Integración de sistemas</h5>
					<p>Operamos con todos los software de recursos humanos.</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud.webp" />
					<h5 class="fw-bold">Respaldo en la nube</h5>
					<p>Información segura y al instante. Así es nuestra nube de almacenamiento</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/geo.webp" />
					<h5 class="fw-bold">Dotación inteligente</h5>
					<p>La persona que necesitas en el lugar y la hora indicada</p>
				</div>
			</div>
		</section>
	</div>

	<section class='container'>
		<h2 class="text-center gray mb-3 anime-fadein"><span class="fw-light">Te acompañamos durante toda</span><br> tu experiencia Geovictoria</h2>
		<!-- Para mobile -->

		<div class="progressMobile__section d-flex flex-column d-md-none text-center">
			<div class="step-1 mb-4">
				<div class="progressMobile__bg step-1 mb-4 ">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-1.svg" />
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
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-2.svg" />
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
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-3.svg" />
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
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-4.svg" />
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
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-5.svg" />
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
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-1.svg" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Contacto</h6>
						<small class="fw-light">Te contactaremos con un ejecutivo comercial especializado para tu rubro</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-2 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-2.svg" />
					<div class="progress__text--down">
						<h6 class="fw-bold">KickOff</h6>
						<small class="fw-light">Nuestro equipo está listo para instalar los equipos y métodos de marcaje solicitados</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-3">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-3.svg" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Implementación</h6>
						<small class="fw-light">Nuestro equipo está listo para instalar los equipos y métodos de marcaje solicitados</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-4 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-4.svg" />
					<div class="progress__text--down">
						<h6 class="fw-bold">Set-Up</h6>
						<small class="fw-light">Te ayudamos a configurar tu sistema de marcaje para que quede activo</small>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-5">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-5.svg" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Soporte</h6>
						<small class="fw-light">Contarás con un equipo de soporte que te apoyará en cada momento</small>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3 anime-fadein">
					¿Por qué elegirnos?
				</h1>
				<div class="row mb-3 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/ruler.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Solución hecha a tu medida:</h6>
						<small class="fw-light">En GeoVictoria nos adaptamos a tu negocio. Haremos lo que necesites.</small>
					</div>
				</div>

				<div class="row mb-3 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/integration.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Soporte en todo momento:</h6>
						<small class="fw-light">Estaremos 24/7 para resolver todas tus dudas y guiarte en el uso de nuestra plataforma</small>
					</div>
				</div>

				<div class="row mb-3 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/portal.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Tecnología biométrica:</h6>
						<small class="fw-light">Contamos con la mejor tecnología biométrica: registro de huella, lectura de palma, reconocimiento facial. Marcajes 100% verificados.</small>
					</div>
				</div>

				<div class="row mb-3 mb-lg-1 anime-fadein">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/dollar.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Paga por lo que usas:</h6>
						<small class="fw-light">Sea diez, cien o mil usuarios. Solo pagarás por la cantidad de trabajadores que deban marcar. ¡Sin costos extras!</small>
					</div>
				</div>

				<button class="fw-bold button--bigwhite mt-3 anime-fadein">
					Contáctanos ahora
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.webp" />
			</div>
		</section>
	</div>

	<section class="d-flex justify-content-center container call-to-action anime-fadein">
		<div class="col-12 col-lg-6 text-center my-3">
			<img class="call-to-action__arrow" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg'>
			<img class="call-to-action__arrow--left" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg'>
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