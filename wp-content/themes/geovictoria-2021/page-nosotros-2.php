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
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-header.svg"/>
</div>
<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3 anime-fadein-childs">
					<h1 class="gray mb-3 fw-bold">
					¡Hola! Somos GeoVictoria
					</h1>
					<h5 class="gray fw-light mb-3">
					Queremos ser el software de gestión de capital humano más grande del mundo.
					</h5>

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/header-nosotros.webp'>
			</div>
		</div>
	</section>
	
	<div class="container-fluid nuestra-historia__container">
		<section class='container'>
			<div class="nuestra-historia__headline col-12 d-flex flex-row mb-5">
				<div class="text-start gray mb-3 anime-fadein col-6"><h1 class="fw-bold">Nuestra historia</h1></div>
				<div class="text-start col-6">
					<p class="fw-light">¿Quién pensaría que un proyecto universitario entre profesor y alumno se transformaría
					en una empresa tecnológica top partner de Microsoft con presencia mundial? Eso y más
					han logrado Sergio Astudillo y Rodrigo Lewit al fundar nuestra empresa, GeoVictoria.</p>
				</div>
			</div>
		
		<!-- Para mobile -->
		
		<div class="progressMobile__section d-flex flex-column d-md-none text-center">
			<div class="step-1 mb-4">
				<div class="progressMobile__bg step-1 mb-4 ">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-logo-step-1.svg"/>
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
						<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-logo-step-2.svg"/>
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
						<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-logo-step-3.svg"/>
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
						<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-logo-step-4.svg"/>
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
						<img class="progressMobile__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-logo-step-5.svg"/>
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Soporte</h3>
						</div>
					</div>
				</div>
				<p class="fw-light">Contarás con un equipo de soporte que te apoyará en cada momento</p>
			</div>
		</div>
		
		<!-- Para desktop -->
			<div class="progress__section d-none justify-content-between d-md-flex mb-5">
				<div class="progress__bg step-1">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/story-1.webp"/>
						<div class="progress__text--up">
							<h6 class="fw-bold">2006<br> Primer método de marcaje </h6>
							<small class="fw-light">Nace el marcaje por llamada teléfonica para ATCOM, especialista en servicios de outsourcing</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-arrow.svg"/>
				</div>
				<div class="progress__bg step-2 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/story-2.webp"/>
						<div class="progress__text--down">
							<h6 class="fw-bold">2007 <br>¡Nace Victoria!</h6>
							<small class="fw-light">Con la llegada de nuestro primer gran cliente nace Victoria: solución de registro de asistencia.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-arrow.svg"/>
				</div>
				<div class="progress__bg step-3">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/story-3.webp"/>
						<div class="progress__text--up">
							<h6 class="fw-bold">2011<br>Victoria SA</h6>
							<small class="fw-light">Ya con más de 100 clientes, nos independizamos y nace Victoria S.A. Aparecen nuevos métodos de marcaje: Huellero, Box y APP.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-arrow.svg"/>
				</div>
				<div class="progress__bg step-4 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/story-4.webp"/>
						<div class="progress__text--down">
							<h6 class="fw-bold">2017<br>GeoVictoria</h6>
							<small class="fw-light">Cambiamos el nombre a GeoVictoria. Aquí comienza nuestra expansión internacional con más de 1000 clientes</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/process-arrow.svg"/>
				</div>
				<div class="progress__bg step-5">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/story-5.webp"/>
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
			
			<h2 class="text-center gray mb-5 anime-fadein fw-bold">Nuestra presencia en el mundo</h2>
			<div class="nuestra-presencia__grid">
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/cl.webp">
					<span>Chile</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/es.webp">
					<span>España</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/gt.webp">
					<span>Guatemala</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/mx.webp">
					<span>México</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/pt-br.webp">
					<span>Brasil</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/co.webp">
					<span>Colombia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/hn.webp">
					<span>Honduras</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/bo.webp">
					<span>Bolivia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/ec.webp">
					<span>Ecuador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/en.webp">
					<span>USA</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/ar.webp">
					<span>Argentina</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/sv.webp">
					<span>El Salvador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/py.webp">
					<span>Paraguay</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/cr.webp">
					<span>Costa Rica</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/pe.webp">
					<span>Perú</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/do.webp">
					<span>Rep. Dominicana</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/uy.webp">
					<span>Uruguay</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/ni.webp">
					<span>Nicaragua</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/pa.webp">
					<span>Panamá</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/flags/de.webp">
					<span>Alemania</span>
				</div>
			</div>
		</div>
	</section>

	<section class="nuestro-proposito container-fluid">
			<div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/purpose.webp')" class="col-12 nuestro-proposito__img mb-5 pe-3 justify-content-end parallax">

			</div>
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">

			<div class="d-flex flex-row mb-5">
				<div class="pe-md-3 anime-fadein-childs col-12 col-md-6">
					<h1 class="gray mb-3 fw-bold">
						Nuestro propósito
					</h1>
				</div>
				<div class="col-12 col-md-6">
					<p class="gray fw-light mb-3">
						Nuestro objetivo es <b>ser la empresa de tecnología líder</b> en solucionar la
						administración de personal y herramientas para el análisis de capital humano.<br>
					</p>
					<p class="gray fw-light mb-3">
						Queremos <b>hacer una gestión sencilla, intuitiva y eficiente</b> de todos
						los datos que serán determinantes para la operación de las empresas.<br>
					</p>
					<p class="gray fw-light mb-3">
						Desarrollamos <b>innovaciones tecnológicas utilizando inteligencia</b>
						artificial aplicadas a la biometría, orientadas al mercado laboral.<br>
					</p>
					<p class="gray fw-light mb-3">
						<b>¡Escuchamos, entendemos y nos adaptamos a nuestros clientes!</b>
					</p>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid nuestros-valores__container">
	
		<section class="container ">	
			<div class="d-flex">
				<div class="nuestros-valores__title col-12 col-md-6 mb-5">
					<h1 class="text-start gray mb-3 anime-fadein"><span class="fw-bold">Nuestros valores</h1>
					<h2 class="text-start gray mb-3 anime-fadein"><span class="fw-lighter">Las 4H</h2>
				</div>
				<div class="nuestros-valores__body col-12 col-md-6">
					<p>Es aquello que nos define. Aplicamos cada uno de nuestros
					valores en todo lo que hacemos. ¡Nos esforzamos cada
					día para que nuestros clientes estén felices!</p>
				</div>
			</div>
	
			<div class="nuestros-valores__content d-flex flex-row justify-content-between">
				<div class="d-flex col-12 col-md-6 col-lg-3 pe-5 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/value-1.webp"/>
					<h4 class="fw-bold">Happy</h4>
					<p>¡Nos sentimos felices con lo que
					hacemos! El equipo de <b>GeoVictoria se
					caracteriza por la pasión en su trabajo.</b></p>
				</div>
				
				<div class="d-flex col-12 col-md-6 col-lg-3 pe-5 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/value-2.webp"/>
					<h4 class="fw-bold">Honest</h4>
					<p>Somos sinceros en cada proyecto que
					afrontamos. <b>La honestidad en nuestro
					trabajo nos ayuda a generar confianza
					en nuestros clientes.</b></p>
				</div>
				
				<div class="d-flex col-12 col-md-6 col-lg-3 pe-5 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/value-3.webp"/>
					<h4 class="fw-bold">Humble</h4>
					<p>Estamos conscientes de nuestras
					capacidades y debilidades. <b>¡Aprendemos
					día a día para dar lo mejor de nosotros!</b></p>
				</div>
				
				<div class="d-flex col-12 col-md-6 col-lg-3 pe-5 mt-4 flex-column anime-fadein">
					<img class="features__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/value-4.webp"/>
					<h4 class="fw-bold">Hungry</h4>
					<p>Conquistaremos el mundo para ser la
					plataforma de capital humano por excelencia
					<b>¡Tenemos hambre de Victoria!</b></p>
				</div>
			</div>
		</section>
</div>

	<section class="container team">
		<div class="team__title">
			<h2 class="text-center gray mb-3 anime-fadein"><span class="fw-bold">¡Conoce el team GeoVictoria!</h2>
			<p class="text-center gray mb-3 ">Más de 500 colaboradores alrededor del mundo</p>
		</div>

		<div class="team__content">
			<div class="splide">
			<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/arrow-white.webp"/>
				</button>
				<button class="splide__arrow splide__arrow--next">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/arrow-white.webp"/>
				</button>
			</div>
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/nosotros/team-1.webp"/>
						</li>
						<li class="splide__slide">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/nosotros/team-2.webp"/>
						</li>
						<li class="splide__slide">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/nosotros/team-3.webp"/>
						</li>
						<li class="splide__slide">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/nosotros/team-1.webp"/>
						</li>
						<li class="splide__slide">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/nosotros/team-2.webp"/>
						</li>
						<li class="splide__slide">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/nosotros/team-3.webp"/>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="container awards">

		<div class="awards__title">
			<h2 class="text-center gray mb-5 anime-fadein"><span class="fw-bold">Nuestros reconocimientos nos avalan</h2>
		</div>

		<div class="awards__content d-flex flex-row justify-content-around">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/partner-1.webp"/>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/partner-2.webp"/>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/quienes-somos/partner-3.webp"/>
		</div>
	</section>



	<div>
		<img class="bg-head-blue" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-head-blue.svg"/>
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3 anime-fadein">
					Se parte de nuestro equipo GeoVictoria
				</h1>
				<p>Te estamos esperando. Si quieres formar parte de
				GeoVictoria no dudes en revisar las siguientes
				ofertas laborales que tenemos para ti. </p>
				
				<button class="fw-bold button--bigwhite mt-3 anime-fadein">
					Postulate aquí
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/soporte-personalizado.webp"/>
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>
