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

	<section class="hero container justify-content-center">
		<div class="row w-100 d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
			<div class="col-12 col-md-6">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold text-center text-lg-start">
						Queremos conocerte
					</h1>
					<h4 class="fw-light mb-4 anime-fadein text-center text-lg-start">
						Completa el formulario debajo para que podamos atender tu consulta.
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
					<div class="contact__form">
						<h2>Contáctanos</h2>
						<p>
							Nuestros expertos te guiarán y
							ofrecerán la mejor alternativa para ti
						</p>

						<?php
						echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_class="potenciales-clientes no-gdpr" origen_zoho="' . getURLWithoutQuery() . '"]');
						?>
					</div>
				</div>

				<?php
				$contacto_ventas_1 = get_theme_mod('geovictoria-2021_info_contacto_ventas_1');
				$contacto_ventas_1_sanitized = preg_replace('/\D/', '', $contacto_ventas_1);

				$contacto_email_ventas = get_theme_mod('geovictoria-2021_info_contacto_email_ventas');
				$contacto_email_ventas_sanitized = esc_html($contacto_email_ventas);

				$contacto_soporte_1 = get_theme_mod('geovictoria-2021_info_contacto_soporte_1');
				$contacto_soporte_1_sanitized = preg_replace('/\D/', '', $contacto_soporte_1);

				$contacto_soporte_2 = get_theme_mod('geovictoria-2021_info_contacto_soporte_2');
				$contacto_soporte_2_sanitized = preg_replace('/\D/', '', $contacto_soporte_2);

				$contacto_email_soporte = get_theme_mod('geovictoria-2021_info_contacto_email_soporte');
				$contacto_email_soporte_sanitized = preg_replace('/\D/', '', $contacto_email_soporte);
				?>


				<div class="col-12 col-md-4">
					<div class="contact__info">
						<h4 class="mb-4">Vías de comunicación</h4>

						<div class="contact__soporte mb-4">

							<h5>Soporte</h5>
							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_soporte_1')) : ?>
									<a class="underline" href="tel:<?php echo $contacto_soporte_1_sanitized; ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo $contacto_soporte_1; ?></span>
									</a><br>
								<?php endif; ?>

								<?php if (get_theme_mod('geovictoria-2021_info_contacto_soporte_2')) : ?>
									<a class="underline" href="tel:<?php echo $contacto_soporte_2_sanitized; ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo $contacto_soporte_2; ?></span>
									</a>
								<?php endif; ?>
							</div>

							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_email_soporte')) : ?>
									<a class="underline" href="mailto:<?php echo $contacto_email_soporte; ?>">
										<i class="far fa-envelope"></i>
										<span><?php echo $contacto_email_soporte; ?></span>
									</a>
								<?php endif; ?>
							</div>
						</div>


						<div class="contact__ventas mb-4">
							<h5>Ventas</h5>
							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_ventas_1')) : ?>
									<a class="underline" href="tel:<?php echo $contacto_ventas_1_sanitized; ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo $contacto_ventas_1; ?></span>
									</a><br>
								<?php endif; ?>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_ventas_2')) : ?>
									<a class="underline" href="tel:<?php echo $contacto_ventas_2_sanitized;; ?>">
										<i class="fas fa-phone-alt"></i>
										<span><?php echo $contacto_ventas_2; ?></span>
									</a><br>
								<?php endif; ?>
							</div>

							<div>
								<?php if (get_theme_mod('geovictoria-2021_info_contacto_email_ventas')) : ?>
									<a class="underline" href="mailto:<?php echo $contacto_email_ventas; ?>">
										<i class="far fa-envelope"></i>
										<span><?php echo $contacto_email_ventas_sanitized; ?></span>
									</a>
								<?php endif; ?>
							</div>
						</div>


						<div>
							<?php if (get_theme_mod('geovictoria-2021_info_contacto_direccion')) : ?>
								<h5>Ubicación</h5>
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