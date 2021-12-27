<?php

/*
Template Name: Contacto
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<section class="hero container">
		<div class="row w-100 d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3 text-center text-lg-start">
					<h1 class="gray mb-3 fw-bold">
						Nós queremos conhecer você
					</h1>
					<h4 class="fw-light mb-4 anime-fadein">
						Preencha o formulário abaixo para que possamos responder sua pergunta.
					</h4>

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png'>
			</div>
		</div>
	</section>


	<section class="contact container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					<div class="contact__form mb-5">
						<h2>Contate-Nos</h2>
						<p>
							Nossos especialistas irão guiá-lo e
							eles vão oferecer a melhor alternativa para você
						</p>
						<?php
						echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_class="potenciales-clientes gdpr" origen_zoho="' . getURLWithoutQuery() . '"]');
						?>

					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="contact__info">
						<h4 class="mb-4">Meios de comunicação</h4>

						<div class="contact__soporte mb-4">

							<h5>Médio</h5>
							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_soporte_1')) : ?>
									<a href="tel:<?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_soporte_1')); ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_soporte_1')); ?></span>
									</a><br>
								<?php endif; ?>

								<?php if (get_theme_mod('geovictoria-2021_info_contacto_soporte_2')) : ?>
									<a href="tel:<?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_soporte_2')); ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_soporte_2')); ?></span>
									</a>
								<?php endif; ?>
							</div>

							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_email_soporte')) : ?>
									<a href="mailto:<?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_email_soporte')); ?>">
										<i class="far fa-envelope"></i>
										<span><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_email_soporte')); ?></span>
									</a>
								<?php endif; ?>
							</div>
						</div>


						<div class="contact__ventas mb-4">
							<h5>Vendas</h5>
							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_ventas_1')) : ?>
									<a href="tel:<?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_ventas_1')); ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_ventas_1')); ?></span>
									</a><br>
								<?php endif; ?>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_ventas_2')) : ?>
									<a href="tel:<?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_ventas_2')); ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_ventas_2')); ?></span>
									</a><br>
								<?php endif; ?>
							</div>

							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_email_ventas')) : ?>
									<a href="tel:<?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_email_ventas')); ?>">
										<i class="far fa-envelope"></i>
										<span><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_email_ventas')); ?></span>
									</a>
								<?php endif; ?>
							</div>
						</div>


						<div>
							<?php if (get_theme_mod('geovictoria-2021_info_contacto_direccion')) : ?>
								<h5>Localização</h5>
								<span><?php echo esc_html(get_theme_mod('geovictoria-2021_info_contacto_direccion')); ?></span></a>
							<?php endif; ?>
						</div>

					</div>
				</div> <!-- col contact__info -->
			</div>
		</div>
	</section>

</main><!-- #main -->
<?php
get_footer();
?>