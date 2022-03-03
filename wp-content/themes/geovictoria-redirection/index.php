<!doctype html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="robots" content="noindex">
    <?php wp_head(); ?>
</head>

</div>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="container">
        <div class="row flex-column text-center align-items-center">
            <div class="col mb-5">
                <img class="logo anime-fadein" src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/logo.png'); ?>">
            </div>
            <div class="col">
                <h1>Te estamos redireccionando...</h1>
            </div>


        </div>

        <div class="row text-center align-items-center mb-4">
            <div class="col">
                <h6>Si no te redirige automáticamente y eres cliente, ingresa a la plataforma</h6>
                <li style="width: 300px; height: 50px" type="button" class="btn py-5 my-4 featured--white login d-flex justify-content-center align-items-center mx-0 mx-auto"><a href="https://clients.geovictoria.com">Acceso clientes</a></li>

                <h6>Si no eres cliente, elige aquí tu región:</h6>
            </div>
        </div>

        <div class="row text-center align-items-center flex-column mb-5">
            <div class="col-12 d-flex justify-content-around align-items-start region__container flex-wrap">
                <a href="cl">
                    <div class="region__flag-container ">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/cl.png">
                        <small>Chile</small>
                    </div>
                </a>
                <a href="mx">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/mx.png">
                        <small>México</small>
                    </div>
                </a>
                <a href="pe">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pe.png">
                        <small>Perú</small>
                    </div>
                </a>
                <a href="co">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/co.png">
                        <small>Colombia</small>
                    </div>
                </a>
                <a href="pt-br">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pt-br.png">
                        <small>Brasil</small>
                    </div>
                </a>
                <a href="es">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/es.png">
                        <small>España</small>
                    </div>
                </a>
                <a href="ar">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ar.png">
                        <small>Argentina</small>
                    </div>
                </a>
                <a href="es-int">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/es-int.png">
                        <small>Español (Internacional)</small>
                    </div>
                </a>
                <a href="en-int">
                    <div class="region__flag-container">
                        <img class="region__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/en-int.png">
                        <small>Inglés (Internacional)</small>
                    </div>
                </a>
            </div>
        </div>

        <div class="row text-center align-items-center mb-4">
            <div class="col">
                <small>GeoVictoria ® 2021</small>
            </div>
        </div>

    </div>
</body>