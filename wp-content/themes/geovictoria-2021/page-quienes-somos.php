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
			<div class="col-12 col-md-6">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						¡Hola! Somos GeoVictoria
					</h1>
					<h4 class="gray fw-light mb-3  anime-fadein">
						Queremos ser el software de gestión de capital humano más grande del mundo.
					</h4>
					<!-- <button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#postulacionesModal">
						<span class="white fw-bold">Trabaja con nosotros</span>
					</button> -->

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/header-nosotros.png'>
			</div>
		</div>
	</section>

	<div class="container-fluid nuestra-historia__container">
		<section class='container'>
			<div class="nuestra-historia__headline col-12 d-flex flex-column align-items-center mb-5 text-center">
				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">Nuestra historia</h1>
				</div>
				<div class="col-12 col-lg-9 anime-fadein ">
					<p class="fw-light">¿Quién pensaría que un proyecto universitario entre profesor y alumno se transformaría
						en una empresa tecnológica top partner de Microsoft con presencia mundial? Eso y más
						han logrado Sergio Astudillo y Rodrigo Lewit al fundar nuestra empresa, GeoVictoria.</p>
				</div>
			</div>

			<!-- Para mobile -->

			<div class="progressMobile__section d-flex flex-column d-lg-none text-center">
				<!-- <div class="step-1 mb-4">
					<div class="progressMobile__bg step-1 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-1.svg" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2006</p>
							<h6>Primer método de marcaje</h6>
						</div>
					</div>

					<p class="fw-light">Nace el marcaje por llamada teléfonica para ATCOM, especialista en servicios de outsourcing</p>

				</div> -->

				<div class="step-2 mb-4">
					<div class="progressMobile__bg step-2 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-2.png" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2007</p>
							<h6>¡Nace Victoria!</h6>
						</div>
					</div>
					<p class="fw-light">Con la llegada de nuestro primer gran cliente nace Victoria: solución de registro de asistencia.</p>
				</div>

				<div class="step-3 mb-4">
					<div class="progressMobile__bg step-3 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-3.png" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2011</p>
							<h6>Victoria SA</h6>
						</div>
					</div>
					<p class="fw-light">Ya con más de 100 clientes, nos independizamos y nace Victoria S.A. Aparecen nuevos métodos de marcaje: Huellero, Box y APP.</p>
				</div>

				<div class="step-4 mb-4">
					<div class="progressMobile__bg step-4 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-4.png" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2017</p>
							<h6>GeoVictoria</h6>
						</div>
					</div>
					<p class="fw-light">Cambiamos el nombre a GeoVictoria. Aquí comienza nuestra expansión internacional con más de 1000 clientes</p>
				</div>

				<div class="step-5 mb-4">
					<div class="progressMobile__bg step-5 mb-4 d-flex align-self-center">

						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-5.png" />
						</div>
						<div class="progressMobile__text--left mt-3">
							<h3 class="fw-bold">2021</h3>
						</div>
					</div>
					<p class="fw-light">
						La pandemia nos reinventó.
						Incluímos marcaje por
						reconocimiento facial y
						medición de temperatura.
						Contamos con más de 5000
						clientes en 20 países
						alrededor del mundo.
					</p>
				</div>
			</div>

			<!-- Para desktop -->
			<div class="progress__section d-none justify-content-between d-lg-flex mb-5">
				<!-- <div class="progress__bg step-1">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-1.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2006<br> Primer método de marcaje </h6>
							<small class="fw-light">Nace el marcaje por llamada teléfonica para ATCOM, especialista en servicios de outsourcing</small>
						</div>
					</div>
				</div> -->
				<!-- <div class="align-self-center">
					<img class="progress__arrow step-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div> -->
				<div class="progress__bg step-2 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-2.png" />
						<div class="progress__text--down">
							<h6 class="fw-bold">2007 <br>¡Nace Victoria!</h6>
							<small class="fw-light">Con la llegada de nuestro primer gran cliente nace Victoria: solución de registro de asistencia.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-3">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-3.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2011<br>Victoria SA</h6>
							<small class="fw-light">Ya con más de 100 clientes, nos independizamos y nace Victoria S.A. Aparecen nuevos métodos de marcaje: Huellero, Box y APP.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-4 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-4.png" />
						<div class="progress__text--down">
							<h6 class="fw-bold">2017<br>GeoVictoria</h6>
							<small class="fw-light">Cambiamos el nombre a GeoVictoria. Aquí comienza nuestra expansión internacional con más de 1000 clientes</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-5">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-5.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2021</h6>
							<small class="fw-light">
								La pandemia nos reinventó.
								Incluímos marcaje por
								reconocimiento facial y
								medición de temperatura.
								Contamos con más de 5000
								clientes en 20 países
								alrededor del mundo.
							</small>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="container-fluid nuestra-presencia__container">
		<div class="container">

			<h2 class="text-center gray mb-5 fw-bold">Nuestra presencia en el mundo</h2>
			<div class="nuestra-presencia__grid anime-fadein">
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/cl.png">
					<span>Chile</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/es.png">
					<span>España</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/gt.png">
					<span>Guatemala</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/mx.png">
					<span>México</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pt-br.png">
					<span>Brasil</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/co.png">
					<span>Colombia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/hn.png">
					<span>Honduras</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/bo.png">
					<span>Bolivia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ec.png">
					<span>Ecuador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/en.png">
					<span>USA</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ar.png">
					<span>Argentina</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/sv.png">
					<span>El Salvador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/py.png">
					<span>Paraguay</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/cr.png">
					<span>Costa Rica</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pe.png">
					<span>Perú</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/do.png">
					<span>Rep. Dominicana</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/uy.png">
					<span>Uruguay</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ni.png">
					<span>Nicaragua</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pa.png">
					<span>Panamá</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/de.png">
					<span>Alemania</span>
				</div>
			</div>
		</div>
	</section>

	<section class="nuestro-proposito container-fluid">
		<div class="container d-flex flex-column flex-lg-row text-center text-lg-start">
			<div class="row gy-5">
				<div class="col-12 col-lg-6 align-self-center anime-pop">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/purpose.png')">
				</div>
				<div class="col-12 col-lg-6">
					<h1 class="gray mb-3 fw-bold">
						Nuestro propósito
					</h1>
					<div class="anime-fadein">
						<p class="gray mb-3">
							<i>"Nuestro objetivo es <b>ser la empresa de tecnología líder</b> en solucionar la
								administración de personal con herramientas para el análisis de capital humano."</i><br>
						</p>
						<p class="gray mb-3">
							Queremos <b>hacer una gestión sencilla, intuitiva y eficiente</b> de todos
							los datos que serán determinantes para la operación de las empresas.<br>
						</p>
						<p class="gray mb-3">
							Desarrollamos <b>innovaciones tecnológicas utilizando inteligencia</b>
							artificial aplicadas a la biometría, orientadas al mercado laboral.<br>
						</p>
						<p class="gray mb-3">
							<b>¡Escuchamos, entendemos y nos adaptamos a nuestros clientes!</b>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid nuestros-valores__container">

		<section class="container ">
			<div class="d-flex align-items-center justify-content-center">
				<div class="nuestros-valores__title col-12 col-lg-6 mb-5 text-center">
					<h1 class="gray mb-3"><span class="fw-bold">Nuestros valores</h1>
					<div class="anime-fadein">
						<h2 class="gray mb-3"><span class="fw-lighter">Las 4H</h2>
						<p>Es aquello que nos define. Aplicamos cada uno de nuestros
							valores en todo lo que hacemos. ¡Nos esforzamos cada
							día para que nuestros clientes estén felices!</p>
					</div>

				</div>
			</div>

			<div class="nuestros-valores__content d-flex flex-column flex-md-row justify-content-between flex-wrap">

				<div class="row anime-fadein-childs">
					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column flex-wrap text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-1.png" />
						<h4 class="fw-bold">Happy</h4>
						<p>¡Nos sentimos felices con lo que
							hacemos! El equipo de <b>GeoVictoria se
								caracteriza por la pasión en su trabajo.</b></p>
					</div>


					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-2.png" />
						<h4 class="fw-bold">Honest</h4>
						<p>Somos sinceros en cada proyecto que
							afrontamos. <b>La honestidad en nuestro
								trabajo nos ayuda a generar confianza
								en nuestros clientes.</b></p>
					</div>

					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-3.png" />
						<h4 class="fw-bold">Humble</h4>
						<p>Estamos conscientes de nuestras
							capacidades y debilidades. <b>¡Aprendemos
								día a día para dar lo mejor de nosotros!</b></p>
					</div>

					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-4.png" />
						<h4 class="fw-bold">Hungry</h4>
						<p>Conquistaremos el mundo para ser la
							plataforma de capital humano por excelencia
							<b>¡Tenemos hambre de Victoria!</b>
						</p>
					</div>
				</div>
		</section>
	</div>

	<section class="container team">
		<div class="team__title">
			<h2 class="text-center gray mb-3"><span class="fw-bold">¡Conoce el team GeoVictoria!</h2>
			<p class="text-center gray mb-3 anime-fadein">Más de 500 colaboradores alrededor del mundo</p>
		</div>

		<div class="team__content anime-fadein">
			<div class="splide">
				<div class="splide__arrows">
					<button class="splide__arrow splide__arrow--prev">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/arrow-white.png" />
					</button>
					<button class="splide__arrow splide__arrow--next">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/arrow-white.png" />
					</button>
				</div>
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-1.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-1.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-2.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-2.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-3.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-3.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-4.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-4.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-5.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-5.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-6.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-6.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-7.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-7.jpg" /></a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="container awards d-flex flex-column align-items-center">

		<div class="awards__title">
			<h2 class="text-center gray mb-5"><span class="fw-bold">Nuestros reconocimientos nos avalan</h2>
		</div>

		<div class="awards__content d-flex flex-column flex-md-row justify-content-around">

			<div class="row gy-3 justify-content-center anime-fadein-childs">

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-1.png'>
						<div class="card-body">
							<h5 class="card-title">
								Endeavor
							</h5>
							<p class="card-text">
								Somos parte de la comunidad líder de emprendedores de Alto Impacto en todo el mundo.
							</p>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-2.png'>
						<div class="card-body">
							<h5 class="card-title">
								Microsoft - Gold partner
							</h5>
							<p class="card-text">
								Valida nuestra experiencia técnica a través de exámenes rigurosos, probados y reconocidos por la industria.
							</p>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-3.png'>
						<div class="card-body">
							<h5 class="card-title">
								Latam Microsoft - Partner of the Year
							</h5>
							<p class="card-text">
								Conoce como llegamos a ser el Partner del Año 2019 para Microsoft.
							</p>
							<a href="https://www.geovictoria.com/cl/geovictoria-partner-ano-chile-2019/" type="button" class="button--blue w-100 text-center">Ver más</a>
						</div>
					</div>
				</div>

			</div> <!-- row -->
		</div>
	</section>


	<!-- 
	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3">
					Se parte de nuestro equipo GeoVictoria
				</h1>
				<div class="anime-fadein-childs">
					<p>Te estamos esperando. Si quieres formar parte de
						GeoVictoria no dudes en revisar las siguientes
						ofertas laborales que tenemos para ti. </p>

					<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#postulacionesModal">
						Postulate aquí
					</button>
				</div>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
			</div>
		</section>
	</div> -->
</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'postulaciones') ?>;