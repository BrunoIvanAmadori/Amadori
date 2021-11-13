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
                        // Program to display URL of current page.

                        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                            $link = "https";
                        else
                            $link = "http";

                        // Here append the common URL characters.
                        $link .= "://";

                        // Append the host(domain name, ip) to the URL.
                        $link .= $_SERVER['HTTP_HOST'];

                        // Append the requested resource location to the URL
                        $link .= $_SERVER['REQUEST_URI'];
                        ?>

                        <?php echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_id="potenciales-clientes" html_class="with-privacy-policy-and-marketing-consent" origen-zoho="' . $link . '"]'); ?>

                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="contact__info">
                        <h4 class="mb-4">Vías de comunicación</h4>

                        <div class="contact__soporte mb-4">

                            <h5>Soporte</h5>
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
                            <h5>Ventas</h5>
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