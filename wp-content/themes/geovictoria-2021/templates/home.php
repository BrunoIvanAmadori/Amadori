<?php

/*
Template Name: Home
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>

<div class="container d-flex d-md-none align-items-center mt-3 justify-content-center">
	<span class="me-3">Contacto comercial:</span>
	<?php
	$contacto_ventas_1 = get_theme_mod('geovictoria-2021_info_contacto_ventas_1');
	$contacto_ventas_1_sanitized = preg_replace('/\D/', '', $contacto_ventas_1);

	$contacto_email_ventas = get_theme_mod('geovictoria-2021_info_contacto_email_ventas');
	$contacto_email_ventas_sanitized = esc_html($contacto_email_ventas);
	?>
	<a href="tel:<?php echo $contacto_ventas_1_sanitized ?>">
		<div class="contact-icon d-flex justify-content-center align-items-center"><i class="fas fa-phone"></i></div>
	</a>

	<a href="mailto:<?php echo $contacto_email_ventas_sanitized ?>">
		<div class="contact-icon d-flex justify-content-center align-items-center"><i class="fas fa-envelope"></i></div>
	</a>
</div>

<main id="primary" class="site-main">
	<section class="container pt-3 pt-md-5 d-flex flex-column flex-md-row justify-content-around text-center text-md-start">
		<div class="row gx-5 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-7 mb-5">
				<div class="animation-home text-start anime resizer-reference mt-3">
					<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri());
												?>/dist/img/gv-home.png'>
					<!-- <div class="resizer">
						<div class="animation-home__screen-group"> -->
					<!-- <img class="animation-home animation-home__arrow" src='<?php // echo esc_url(get_template_directory_uri());
																				?>/dist/img/animation-home/arrow.svg'>
							 <img class="animation-home animation-home__entry-type" src='<?php // echo esc_url(get_template_directory_uri());
																							?>/dist/img/animation-home/entry-type.png'>
							<img class="animation-home animation-home__user" src='<?php // echo esc_url(get_template_directory_uri());
																					?>/dist/img/animation-home/user.png'>
							<img class="animation-home animation-home__screen-desk" src='<?php // echo esc_url(get_template_directory_uri());
																							?>/dist/img/animation-home/screen-desk.png'>
						</div>
						 <img class="animation-home animation-home__screen" src='<?php // echo esc_url(get_template_directory_uri());
																					?>/dist/img/animation-home/screen.png'> -->

					<!-- <img class="animation-home animation-home__screen-mobile" src='<?php //  echo esc_url(get_template_directory_uri()); -->
																						?>/dist/img/animation-home/screen-mobile.png'>
						<img class="animation-home animation-home__screen-tablet" src='<?php // echo esc_url(get_template_directory_uri());
																						?>/dist/img/animation-home/screen-tablet.png'>
						<img class="animation-home animation-home__box" src='<?php // echo esc_url(get_template_directory_uri());
																				?>/dist/img/animation-home/box.png'>
						<img class="animation-home animation-home__usb" src='<?php //  echo esc_url(get_template_directory_uri());
																				?>/dist/img/animation-home/usb.png'>
					</div> -->

					<h3 class="gray mb-3 fw-bold text-center mt-5">
						El software de control de asistencia y turnos por excelencia
					</h3>
					<p class="gray fw-light mb-3 text-center">
						Solución integral 100% en la nube. Gestiona, elabora reportes, obtén métricas y ahorra dinero. Todo en un solo lugar.
					</p>
				</div>
			</div>


			<div class="col-12 col-md-5 mb-5">
				<div class="modal-content">
					<div class="modal-header">
						<h5>Cotiza con nosotros y simplifica tu gestión.</h5>
					</div>
					<div class="modal-body">
						<!-- <p>Cotiza con nosotros y simplifica tu gestión</p> -->
						<?php echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_class="potenciales-clientes no-gdpr home" origen_zoho="' . getURLWithoutQuery() . '"]'); ?>
					</div>
				</div>
			</div>
		</div>

	</section>
	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container col-12 trusting-companies mb-3">
			<h2 class="text-center gray section-title fw-light">Nuestros clientes ya<br><span class="fw-bold">optimizan su personal con nosotros</span></h2>
			<div class="d-flex flex-wrap justify-content-around">

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/securitas-logo.png'>
					</div>
				</div>

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small> “Es una herramienta que eleva la gestión de los gerentes de tienda”</small></i>
					</div>
				</div>


				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/adecco-logo.png'>
					</div>
				</div>


				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo--scotiabank" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/scotiabank-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small>“Con GeoVictoria marcamos de forma segura desde nuestras casas y lugares de trabajo”</small></i>
					</div>
				</div>

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center" type="button">
						<img class="trusting-companies__logo--cocacola" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/coca-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small>“Gracias a este sistema, el trabajador conoce siempre la duración de su jornada”</small></i>
					</div>
				</div>

			</div>
		</section>
	</div>

	<section class='container products mb-5'>

		<h2 class="text-center gray section-title anime-fadein"><span class="fw-light">¡Conoce todas</span><br> <b>nuestras soluciones!</b></h2>

		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between anime-fadein">
				<a class="product--box anime-fadein" href="servicios/control-de-asistencia">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-asistencia.svg" />
						<h4 class="fw-bold">Control de<br>asistencia</h4>
						Ver más
					</div>
				</a>
				<a class="product--box anime-fadein" href="servicios/control-de-acceso">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-acceso.svg" />
						<h4 class="fw-bold">Control<br>de acceso</h4>
						Ver más
					</div>
				</a>
				<a class="product--box anime-fadein" href="servicios/gestion-de-comedor">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-comedor.svg" />
						<h4 class="fw-bold">Gestión de<br>comedor</h4>
						Ver más
					</div>
				</a>
			</div>
		</div>

		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<a class="product--card anime-fadein" href="servicios/business-intelligence">
					<div class="d-flex flex-column align-items-center">
						<div class='row'>
							<div class="col justify-content-center text-end">
								<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-business.svg" />
							</div>
							<div class="col d-flex flex-column justify-content-center text-start">
								<h4 class="fw-bold">Business Intelligence</h4>
								Ver más
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>


	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein"><b>Ahorra, actualiza, simplifica</b><br><span class="fw-light">Bienvenido a un mundo de gestión</span><br> </h2>
		</div>

		<div class="row <?php if (!wp_is_mobile()) echo "anime-fadein-childs" ?>">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo 'anime-fadein' ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/report.svg" />
				<h5 class="fw-bold">Reportes personalizados</h5>
				<p>Horas extras, atrasos, turnos por hacer. Todos los reportes que requieras en un solo lugar.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h5 class="fw-bold">Formularios en linea</h5>
				<p>Crea formularios a tu medida. Recopila la opinión de tus trabajadores o trazabilidad de casos por Covid-19. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h5 class="fw-bold">Optimizador de turnos</h5>
				<p>¡Ya no pierdas más dinero! Calcula los turnos más optimos según las variables de tu negocio.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/integration.svg" />
				<h5 class="fw-bold">Integración de sistemas</h5>
				<p>Operamos con todos los software de recursos humanos.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud.svg" />
				<h5 class="fw-bold">Respaldo en la nube</h5>
				<p>Información segura y al instante. Así es nuestra nube de almacenamiento.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/geo.svg" />
				<h5 class="fw-bold">Dotación inteligente</h5>
				<p>La persona que necesitas en el lugar y la hora indicada.</p>
			</div>
		</div>
	</section>


	<section class='container'>
		<h2 class="text-center gray mb-3 anime-fadein"><span class="fw-light">Te acompañamos durante toda</span><br> tu experiencia Geovictoria</h2>
		<!-- Para mobile -->

		<div class="progressMobile__section d-flex flex-column d-lg-none text-center">
			<div class="step-1 mb-4">
				<div class="progressMobile__bg step-1 mb-4 ">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-1.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Contacto</h3>
						</div>
					</div>
				</div>

				<h6 class="fw-light">Atenderemos tus dudas,
					evaluaremos tus necesidades
					y despejaremos el
					camino para comenzar
					nuestra alianza.</h6>

			</div>

			<div class="step-2 mb-4">
				<div class="progressMobile__bg step-2 mb-4">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-2.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold small-title-on-mobile">Planificación</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Nos reuniremos para
					definir el alcance de lo
					contratado, conocerás el
					equipo de trabajo y las
					etapas de implementación.</h6>
			</div>

			<div class="step-3 mb-4">
				<div class="progressMobile__bg step-3 mb-4">

					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-3.gif" />
						<div class="progressMobile__text--left">
							<h4 class="fw-bold small-title-on-mobile">Implementación</h4>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Cuando sea la fecha y el
					lugar, nuestro equipo
					estará listo para instalar
					los equipos y métodos de
					marcaje solicitados.</h6>
			</div>

			<div class="step-4 mb-4">
				<div class="progressMobile__bg step-4 mb-4">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-4.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Setup</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Te ayudamos a configurar
					tu sistema de marcaje para
					que quede activo
					lo antes posible. </h6>
			</div>

			<div class="step-5 mb-4">
				<div class="progressMobile__bg step-5 mb-4">

					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-5.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Soporte</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Contarás con un sólido
					equipo de soporte que te
					apoyará en cada momento. </h6>
			</div>
		</div>

		<!-- Para desktop -->
		<div class="progress__section d-none justify-content-between d-lg-flex">
			<div class="progress__bg step-1">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-1.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Contacto</h6>
						<p class="fw-light text-resize">Atenderemos tus dudas,
							evaluaremos tus necesidades
							y despejaremos el
							camino para comenzar
							nuestra alianza.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-2 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-2.gif" />
					<div class="progress__text--down">
						<h6 class="fw-bold">Planificación</h6>
						<p class="fw-light text-resize">Nos reuniremos para
							definir el alcance de lo
							contratado, conocerás el
							equipo de trabajo y las
							etapas de implementación.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-3">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-3.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold title-resize">Implementación</h6>
						<p class="fw-light text-resize">Cuando sea la fecha y el
							lugar, nuestro equipo
							estará listo para instalar
							los equipos y métodos de
							marcaje solicitados. </p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-4 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-4.gif" />
					<div class="progress__text--down">
						<h6 class="fw-bold">Set-Up</h6>
						<p class="fw-light text-resize">Te ayudamos a configurar
							tu sistema de marcaje para
							que quede activo
							lo antes posible.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-5">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-5.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Soporte</h6>
						<p class="fw-light text-resize">Contarás con un sólido
							equipo de soporte que te
							apoyará en cada momento.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="d-flex flex-column container justify-content-between">
		<div class="row gx-5 anime-fadein">
			<h2 class="text-center mb-5">El mejor respaldo, <b>son nuestros clientes</b></h2>
			<div class="pe-lg-5">
				<div class="testimonial__video text-center">
					<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/GMb2_8oK1l8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-start align-self-center pe-3 <?php if (!wp_is_mobile()) echo "anime-fadein-childs" ?>">
				<h1 class="white fw-bold mb-3 <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
					¿Por qué elegirnos?
				</h1>
				<div class="row mb-3 <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/ruler.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Solución hecha a tu medida:</h6>
						<small class="fw-light">En GeoVictoria nos adaptamos a tu negocio. Haremos lo que necesites.</small>
					</div>
				</div>

				<div class="row mb-3 <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/integration.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Soporte en todo momento:</h6>
						<small class="fw-light">Estaremos 24/7 para resolver todas tus dudas y guiarte en el uso de nuestra plataforma</small>
					</div>
				</div>

				<div class="row mb-3 <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/portal.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Tecnología biométrica:</h6>
						<small class="fw-light">Contamos con la mejor tecnología biométrica: registro de huella, lectura de palma, reconocimiento facial. Marcajes 100% verificados.</small>
					</div>
				</div>

				<div class="row mb-3 mb-lg-1 <?php if (wp_is_mobile()) echo "anime-fadein" ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/dollar.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Paga por lo que usas:</h6>
						<small class="fw-light">Sea diez, cien o mil usuarios. Solo pagarás por la cantidad de trabajadores que deban marcar. ¡Sin costos extras!</small>
					</div>
				</div>

				<button class="fw-bold button--bigwhite mt-3 <?php if (wp_is_mobile()) echo "anime-fadein" ?> w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Contáctanos ahora
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
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
			<button class="button--bigblue bounce" data-bs-toggle="modal" data-bs-target="#contactModal">
				<span class="white fw-bold w-100">¡Probar gratis!</span>
			</button>
		</div>
	</section>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>