<?php

/*
Template Name: Retail
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Gestiona tu personal
						de retail en todos los
						puntos de venta
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Garantiza el funcionamiento operacional
						de tus tiendas visualizando el personal en
						tiempo real. Toma decisiones al instante
						según las necesidades del día a día.
					</p>
					<p class="fw-light mb-4 anime-fadein">
						<span class="fw-bold">Ahorra, gestiona y decide con GeoVictoria.</span>
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">¡Quiero actualizarme!</span>
					</button>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/header-retail.png'>
			</div>
		</div>
	</section>
	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container clients col-12 mb-3">
			<h2 class="text-center gray section-title fw-light anime-fadein">Nuestros clientes ya<br><span class="fw-bold">gestionan su personal con nosotros</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo cencosud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/cencosud-logobnw.png'>
				<img class="clients__logo oxxo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/oxxo-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/luxottica-logobnw.png'>
				<img class="clients__logo kfc" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/kfc-logobnw.png'>
				<img class="clients__logo starbucks" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logobnw.png'>
			</div>
		</section>
	</div>



	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">La <span class="fw-bold">gestión del personal externo</span> para tus clientes <span class="fw-bold">como nunca antes lo viste</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/graphic-1.png'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Decide, optimiza, ahorra</h3>
				<p>¿Sabes cómo ver tu personal en cada sucursal?, ¿Puedes
					controlar el total de tus operaciones?
				</p>
				<p>
					Con GeoVictoria administra y optimiza el personal en
					cada punto de venta. No importa la ubicación. ¡Visualiza
					en el mapa los trabajadores de todas tus sucursales!</p>

				<p>Podrás tomar las decisiones al instante. <b>¡Anticipate a las
						necesidades de personal aquí y ahora!</b></p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Simple, rápido y amigable</h3>
				<p>GeoVictoria te permite administrar, gestionar y obtener
					informes de la asistencia de tu capital humano.</p>
				<p>Gracias a nuestra plataforma identificarás el personal ausente
					en tus sucursales. Simplifica el calculo de las remuneraciones.
					Gracias a los datos de asistencia, sabrás las horas extras por
					pagar. Centraliza permisos, licencias o vacaciones.</p>
				<p><b>¡Automatiza el trabajo de recursos humanos!</b>

				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/graphic-2.png'>
			</div>
		</div>
	</section>




	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">¿Por qué elegir GeoVictoria?</h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear-person.svg" />
				<h6 class="fw-bold">Optimiza personal
				</h6>
				<p>Gracias a nuestra alianza con <b>Shift</b>, planifica
					el personal que necesita tu sucursal según
					una malla de turnos optimizada.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/map-geo.svg" />
				<h6 class="fw-bold">Cumplimiento de cobertura</h6>
				<p>No importa si tu sucursal está en el norte o sur
					del país. Visualizarás en un solo lugar tu
					personal en todos los puntos de venta.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-check.svg" />
				<h6 class="fw-bold">Decisión en tiempo real</h6>
				<p>Toma decisiones al instante. Programa alertas
					y notificaciones. Verifica el cumplimiento de
					turnos y jornadas según lo planeado. </p>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="d-flex flex-column container justify-content-between">
			<div class="row mb-5">
				<div class="col-12">
					<div class="testimonal__video text-center">
						<h1 class="fw-bold anime-fadein mb-5">Caso de éxito: Starbucks</h1>
						<video class="anime-fadein" width="100%" poster="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/caso-starbucks-thumb.png" controls>
							<source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/caso-starbucks.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<div class="row gy-5 gx-5 anime-fadein-childs">
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/luxottica-logobnw.png" />
					<p>
						“Nos sirve para el tema operativo. Para
						tener a fin de mes el control de caja.
						Verificamos con la asistencia la tienda
						que ha cerrado y la que no. GeoVictoria
						nos disminuyó los costos. Ahorramos
						hasta un 60% anual en el pago de horas
						extras y en bonos compensatorios.”
					</p>
					<p>
						<span class="fw-bold">
							Luxottica
						</span>
					</p>
				</div>

				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mt-4 mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/kfc-logobnw.png" />
					<p>
						“Redujimos un 90% de incidentes con
						el software y ahorramos con la
						planificación del tiempo de trabajo”.
					</p>
					<p>
						<span class="fw-bold">
							KFC
						</span>
					</p>
				</div>


				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logobnw.png" />
					<p>
						“Ha sido una tremenda herramienta que
						hemos podido entregar a nuestros
						gerentes de tienda. No solamente por
						lo práctica que es, lo fácil de operar que
						es, sino que además es una
						herramienta que eleva su gestión”
					</p>
					<p>
						<span class="fw-bold">
							Starbucks
						</span>
					</p>
				</div>

		</section>
	</div>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein">
				<h2 class="white fw-bold mb-3">
					Bienvenidos a la nueva forma
					de gestionar personal en tus
					puntos de venta
				</h2>

				<p>
					Controla todas tus operaciones diarias.
					Verifica que el personal planificado esté en
					la sucursal asignada. ¡Optimiza y ahorra!
				</p>

				<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Cotiza ahora
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-fadein">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'contacto') ?>;