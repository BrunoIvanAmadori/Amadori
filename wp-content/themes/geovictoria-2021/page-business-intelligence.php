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

	<?php if (!wp_is_mobile()): ?>
		<div class="icon-scroll"><small class="tip">SCROLLEA ABAJO</small></div>
	<?php endif; ?>

	<section class="hero container d-flex flex-column justify-content-around text-center text-md-start">

		<div class="hero__graphics mb-3 col-12 col-md-9 ">
			<img class="hero__img" src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/animation-bi/platform.webp'>
		</div>

		<div class="hero__text col-12 col-md-9 mb-3">
			<div class="align-self-center pe-md-3 text-center anime-fadein-childs">
				<h1 class="gray fs-2 mb-3 fw-bold">
					¡Bienvenidos al mundo del Business Intelligence!
				</h1>
				<p class="gray fw-light mb-3 fs-5 fs-md-3">
					Toma decisiones inteligentes para llevar el desempeño de tu fuerza laboral al máximo nivel. Visualiza indicadores de forma simple y amigable. Aumenta la productividad de tu empresa aquí y ahora.
	</p>
				<button class="button--bigblue bounce">
					<span class="white">Prueba la experiencia BI</span>
				</button>
			</div>
		</div>

	</section>

	<section class="d-flex flex-column container justify-content-between features">

		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Gestiona, analiza y toma decisiones </h2>
		</div>

		<div class="row anime-fadein justify-content-center">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/report.svg"/>
				<h5 class="fw-bold">KPI's personalizados</h5>
				<p>Plataforma ajustable a tus necesidades. Conoce el desempeño de tus operaciones según el grupo de personal. ¡Tú eliges! </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/form.svg"/>
				<h5 class="fw-bold">Gestión simplificada</h5>
				<p>Encuentra información valiosa de forma gráfica para visualizar tendencias preocupantes y tomar decisiones acertadas. </p>
			</div>
		</div>

		<div class="row anime-fadein justify-content-center">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/optimizer.svg"/>
				<h5 class="fw-bold">Identifica causas</h5>
				<p>Todos los reportes a un clic de distancia. Análisis de rendimiento, productividad y rentabilidad de tu empresa en nuestra plataforma</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column anime-fadein text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/icons/optimizer.svg"/>
				<h5 class="fw-bold">Mejora tus resultados</h5>
				<p>Indicadores de desempeño a la mano. Resuelve problemas operativos de tu empresa en tiempo real.</p>
			</div>
		</div>


	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/bg-head-blue.svg"/>
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3 anime-fadein">
					¿Listo para ser parte del mundo Business Intelligence?
				</h1>
				
				<h5 class="white fw-light mb-3 anime-fadein">
					Únete a las más de 5000 empresas que toman decisiones acertadas gracias a nuestra solución. Mejora el desempeño en tu empresa gracias a información valiosa y centralizada.
				</h5>

				
				<button class="fw-bold button--bigwhite mt-3 anime-fadein">
					Prueba ahora
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/footer-sales.webp"/>
			</div>
		</section>
</main><!-- #main -->
<?php
get_footer();
?>
