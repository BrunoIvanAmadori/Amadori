<?php

/*
Template Name: Reloj Control
*/

get_header();
?>
<div class="bg-header">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
    <section class="container">
        <div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
            <div class="col-12 col-md-6 mb-5">
                <div class="align-self-center pe-md-3 text-lg-end text-center">
                    <div class="hero__graphics col-12 justify-content-lg-end justify-content-center">
                        <img class="hero__img--small anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/relojescontrol.png'>
                    </div>
                    <h1 class="gray mb-3 fw-bold">
                        Reloj <b>Checador de Asistencia</b>
                    </h1>
                    <p class="fw-light mb-4 anime-fadein">
                        El mejor sistema para el control y gestion de asistencia en México y latinoamérica. Gracias al sofisticado reloj checador por GeoVictoria,
                        contarás con datos fidedignos y en tiempo real de la presencia de los empleados de las empresas mexicanas.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-5 mb-5">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Cotiza con nosotros y simplifica tu gestión.</h5>
                    </div>
                    <div id="formulario" class="modal-body">
                        <!-- <p>Cotiza con nosotros y simplifica tu gestión</p> -->
                        <?php echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_class="potenciales-clientes no-gdpr home" origen_zoho="' . getURLWithoutQuery() . '"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='container'>

        <div class="row mb-5 justify-content-center">
            <h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">¿Cómo funciona
                el <b>reloj checador</b>?</span></h2>
        </div>

        <div class="row gx-5 gy-4 mb-5">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/acceso_como-funciona.png'>
            </div>
            <div class="col-12 col-md-6 anime-fadein">
                <p>El reloj checador biométrico es el sistema de control y gestión de personas más eficiente del mercado para México</p>
                <p>El aparato proporcionado por GeoVictoria permite el registro e identificación de empleados para el registro de su presencia en su trabajo.
                    El reloj checador biométrico almacena la información del ingreso y egresos de trabajadores en tiempo real</p>
                <p>Bajo el soporte de GeoVictoria, cuenta con poderosas herramientas de reportería, como gestión de asistencia, remuneraciones, faltas, ausencias, retardos,
                    tiempos extras, generación de alertas, permisos entre otros. Integrado a todos los softwares RR.HH. y ERP del mercado
                </p>
            </div>
        </div>
    </section>

    <section class='container products mb-5'>

        <h2 class="text-center gray section-title anime-fadein"><span class="fw-light">¿Con qué métodos opera el <b>control de acceso</b>?</h2>

        <div class="row d-flex justify-content-center">
            <div class="col d-flex flex-column flex-md-row justify-content-between anime-fadein">
                <a class="product--box anime-fadein" href="reloj-control/huella">
                    <div class=' d-flex flex-column align-content-center'>
                        <img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/huella-azul.png" />
                        <h4 class="fw-bold">Huella Digital</h4>
                        <!-- Ver más -->
                    </div>
                </a>
                <a class="product--box anime-fadein" href="reloj-control/rostro">
                    <div class=' d-flex flex-column align-content-center'>
                        <img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/rostroazul.png" />
                        <h4 class="fw-bold">Rostro</h4>
                        <!-- Ver más -->
                    </div>
                </a>
                <a class="product--box anime-fadein" href="reloj-control/tarjeta">
                    <div class=' d-flex flex-column align-content-center'>
                        <img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/tarjeta.png" />
                        <h4 class="fw-bold">Tarjeta</h4>
                        <!-- Ver más -->
                    </div>
                </a>
                <a class="product--box anime-fadein" href="">
                    <div class=' d-flex flex-column align-content-center'>
                        <img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/cedula.png" />
                        <h4 class="fw-bold">Cédula de Identidad</h4>
                        <!-- Ver más -->
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="d-flex flex-column container justify-content-between features">
        <div class="row">
            <h2 class="text-center fw-bold gray section-title anime-fadein"><span class="fw-light">Tipos de <b>reloj checador biométricos para la asistencia</b></span></h2>
        </div>

        <div class="row justify-content-center anime-fadein-childs">
            <div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
                <img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/huella-azul.png" />
                <h6 class="fw-bold">Reconocimiento huella dactilar</h6>
                <p>Registrar la asistencia de tu personal es más fácil cuando solo necesitan su huella dactilar.
                    Aplicable a reloj checador con huelleros USB y reloj checador box.</p>
            </div>

            <div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
                <img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/rostroazul.png" />
                <h6 class="fw-bold">Reconocimiento facial</h6>
                <p>El reloj checador box de asistencia lee rasgos faciales. El equipo es capaz de diferenciar una fotografía y un rostro real.
                    Puede almacenar hasta 100 mil caras. Especial para empresas que buscan innovadores métodos de marcaje.</p>
            </div>
            <div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
                <img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/tarjeta.png" />
                <h6 class="fw-bold">Lector de tarjeta:</h6>
                <p>Para quienes prefieren la clásica tarjeta de registro para la entrada y salida de colaboradores de sus puntos de trabajo, GeoVictoria tiene un reloj control de asistencia que utiliza tarjetas enroladas a tus trabajadores. E incluso, ¡son reutilizables! Olvídate de comprar nuevas tarjetas.</p>
            </div>

        </div>
    </section>

    <section class='container'>
        <div class="row gx-5 gy-4 mb-5 text-center">
            <div class="col-12">
                <h2><span class="fw-light">Características del <b>reloj checador de asistencia</b></span></h2>
            </div>
            <div class="d-flex col-12 px-4 mt-4 flex-wrap">
                <div class="col-12 col-md-6 mt-5">
                    <img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/arrow-out.svg" />
                    <h6 class="fw-bold">Conexión LAN o 3G</h6>
                    <p>El reloj checador de asistencia se adapta tanto a las conexiones locales de la empresas, como a las inalámbricas por datos móviles.</p>
                </div>

                <div class="col-12 col-md-6 mt-5">
                    <img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud-paper.svg" />
                    <h6 class="fw-bold">Diversas versiones para diferentes
                        escenarios (con gabinete o impresora)</h6>
                    <p>Sea en un gabinete o en una impresora, el reloj checador de asistencia de GeoVictoria, puede ser instalado en el lugar donde la empresa determine.
                        Y si el administrador lo necesita, el reloj checador de asistencia imprimirá un ticket que comprueba su asistencia. </p>
                </div>

                <div class="col-12 col-md-6 mt-5">
                    <img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
                    <h6 class="fw-bold">Con o sin UPS (Uninterruptible Power Supply)</h6>
                    <p>Según tu necesidad, puedes elegir tu reloj checador de asistencia con un sistema de alimentación ininterrumpida.</p>
                </div>

                <div class="col-12 col-md-6 mt-5">
                    <img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person.svg" />
                    <h6 class="fw-bold">Alto almacenamiento de usuarios enrolados</h6>
                    <p>Todos los equipos de reloj checador de asistencia pueden guardar hasta 10 mil usuarios en cualquiera de sus formatos (huella dactilar, palma, PIN de seguridad, tarjeta, entre otros).</p>
                </div>
            </div>
        </div>
    </section>

    <div>
        <img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
    </div>

    <div class="container-fluid bg-blue-2">
        <section class="d-flex justify-content-between container why-us">
            <div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein-childs">
                <h2 class="white fw-bold mb-3">
                    ¿Cómo el reloj checador de GeoVictoria facilita tu gestión?
                </h2>
                <p>El reloj checador de asistencia de GeoVictoria facilita el registro de la entrada y salida del personal por medio de un reloj checador adaptado a tu empresa y planilla.</p>
                <p>Los usuarios generan marcas gracias a registros biométricos por huella dactilar, rostro o tarjeta. Esta información,
                    es subida a una nube de almacenamiento donde, gracias al sofisticado software de reportes hechos por GeoVictoria, sabrás en tiempo real las checadas de los empleados.
                </p>
                <p>Puedes leer facilmente esta información gracias a nuestro amigable dashboard.</p>
                <a href="#formulario">
                    <button class="fw-bold button--bigwhite mt-3 w-100">
                        Quiero hacer más simple mi gestión
                    </button>
                </a>
            </div>
            <div class="col-5 h-100 justify-content-center d-none d-md-flex">
                <img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
            </div>
        </section>
    </div>

    <section class='container'>
        <div class="row gx-5 gy-4 mb-5 text-center">
            <h2><span class="fw-light">Propiedades del <b>reloj checador de asistencia de GeoVictoria</b></span></h2>
            <div class="col-12 d-flex flex-column justify-content-center">
                <img class="hero__img--small anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/in04-png.png'>
            </div>
            <div class="d-flex col-12 col-md-6 px-4 mt-4 flex-column">
                <h6 class="fw-bold">Plataforma en la nube</h6>
                <p>Bajo el soporte de uno de los servicios en la nube más seguros en el mundo como Azure de Microsoft.</p>
            </div>
            <div class="d-flex col-12 col-md-6 px-4 mt-4 flex-column">
                <h6 class="fw-bold">Paga solo por lo que usas</h6>
                <p>No importa si tienes 10, 100 o 1000 trabajadores. ¡Pagas solo por usuario activo en el sistema!.</p>
            </div>
            <div class="d-flex col-12 col-md-6 px-4 mt-4 flex-column">
                <h6 class="fw-bold">Poderosa reportería</h6>
                <p>El software de GeoVictoria está hecho para que sepas que tantas horas extras generas, el promedio de atraso de los usuarios, permisos otorgados, remuneraciones en relación a HH/HH, entre otros.</p>
            </div>

            <div class="d-flex col-12 col-md-6 px-4 mt-4 flex-column">
                <h6 class="fw-bold">Asignador de turnos</h6>
                <p>Asignación de horarios fijos o rotativos, diurnos o nocturnos de hasta 24 horas continuas de trabajo.</p>
            </div>
            <div class="d-flex col-12 col-md-6 px-4 mt-4 flex-column">
                <h6 class="fw-bold">Integrable a sus sistemas de RR.HH. Y ERP</h6>
                <p>El reloj checador de GeoVictoria opera con los softwares de Recursos Humanos y ERP más importantes del mercado. Así, puedes saber cuanta remuneración pagar a partir de los datos de asistencia de los usuarios.</p>
            </div>
            <div class="d-flex col-12 col-md-6 px-4 mt-4 flex-column">
                <h6 class="fw-bold">Soporte permanente</h6>
                <p>Una vez instalado el equipo reloj checador de asistencia y software de gestión de personas de GeoVictoria, accede a un equipo de soporte al cliente, que te apoyará en toda duda o problema.</p>
            </div>
            <a href="#formulario">
                <button class="button--bigblue anime-fadein">
                    <span class="white fw-bold">Quiero hacer más simple mi gestión</span>
                </button>
            </a>
        </div>
    </section>

    <div class="position-relative">
        <div class="bg-curve--top-100-up">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
            <div class="bg-tail-gray"></div>
        </div>
        <section class='container'>
            <div class="row mb-5 justify-content-center">
                <h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">Beneficios del <b>reloj checador de asistencia</b> </h2>
            </div>

            <div class="row gx-5 gy-4 mb-5">

                <div class="col-12 col-md-6 anime-fadein d-flex flex-column justify-content-center">
                    <h3 class="fw-bold mb-4">Equipos con respaldo ZKTeco</h3>
                    <p>La última generación de aparatos biométricos de reloj checador de asistencia en el mundo ahora en México.</p>
                </div>
                <div class="col-12 col-md-6 anime-fadein d-flex flex-column justify-content-center">
                    <h3 class="fw-bold mb-4">No perderás tiempo en hacer papeleo</h3>
                    <p>La información de las checadas es más fácil de obtener al verlas con el software de control de asistencia de GeoVictoria. ¡Ahorrate en pasar información al Excel!
                    </p>
                </div>
            </div>


            <div class="row gx-5 gy-4 mb-5">

                <div class="col-12 col-md-6 anime-fadein d-flex flex-column justify-content-center">
                    <h3 class="fw-bold mb-4">Confiablidad en la biometría</h3>
                    <p>La biometría contempla todos los atributos identificables únicos de las personas.
                        En GeoVictoria, el reloj checador de asistencia usa algunos de estos rasgos para validar su identidad. Así, el registro de asistencia es más seguro, oportuno e infalible ante fraudes.</p>
                </div>
                <div class="col-12 col-md-6 anime-fadein d-flex flex-column justify-content-center">
                    <h3 class="fw-bold mb-4">Fácil administración</h3>
                    <p>El administrador puede configurar de forma sencilla el aparato reloj checador de asistencia ante cualquier percance.
                    </p>
                </div>
            </div>

        </section>

    </div>

    <div class="position-relative">
        <div class="bg-curve--top-100-up">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
            <div class="bg-tail-gray"></div>
        </div>
        <section class="d-flex flex-column container justify-content-between text-center">
            <div class="row gx-5 anime-fadein mb-5">
                <h2 class="text-center mb-5">Conoce la opinion de nuestro reloj checador de asistencia</h2>
                <div class="col-lg-8 pe-lg-5 align-self-center">
                    <div class="testimonial__video--small text-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Je6-Ka-1Fjo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
                    <h3 class="fw-bold">Caso de éxito: Starbucks</h3>
                    <img class="testimonial__logo--small" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logobnw.png" />
                    <p>
                        <!-- <img class="arrow-quote--left" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
                        <i>"Es una herramienta fácil de operar que eleva tu gestión y te entrega autonomía en la operatividad"</i>
                        <!-- <img class="arrow-quote--right" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
                    </p>
                    <div class="row justify-content-center justify-content-lg-start">
                        <span>
                            <span class="fw-bold">María José Ugalde</span></br>
                            <small>Sub-gerenta de Recursos Humanos</small>
                        </span>
                    </div>
                </div>
                <div class="row gy-5 gx-5 anime-fadein-childs ">
                    <div class="col-lg-4 text-center">
                        <img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ecrgroup-logobnw.png" />
                        <p>
                            “Anteriormente era todo manual
                            con el libro de asistencia donde
                            detectamos vulneración,
                            manipulación o extravío del libro.
                            GeoVictoria es la herramienta que
                            otorga un control más certero”.
                        </p>
                        <p>
                            <span class="fw-bold">
                                ECR Group
                            </span>
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ugs-logobnw.png" />
                        <p>
                            “Con una dotación incompleta se nos
                            podría aplicar algún tipo de multa por
                            incumplimiento de contrato. Esta
                            aplicación entrega la información en
                            tiempo real. Nos permite reaccionar con
                            el equipo de Recursos Humanos
                            y del área de operaciones”.
                        </p>
                        <p>
                            <span class="fw-bold">
                                UGS
                            </span>
                        </p>
                    </div>

                    <div class="col-lg-4 text-center">
                        <img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/grupoexpro-logobnw.png" />
                        <p>
                            “Tenemos procesos de facturación
                            mucho más claros con nuestros clientes
                            gracias al dato de asistencia. Es un
                            sistema eficaz, confiable y oportuno”
                        </p>
                        <p>
                            <span class="fw-bold">
                                GrupoExpro
                            </span>
                        </p>
                    </div>
                </div>
                <a href="#formulario">
                    <button class="button--bigblue anime-fadein mt-5">
                        <span class="white fw-bold">Sumate a este nivel de gestión</span>
                    </button>
                </a>
        </section>
    </div>
    <section class='container'>
        <div class="row gx-5 gy-4 mb-5 text-center">
            <h1>Clientes que han contratado reloj checador de asistencia</h1>
            <img class="mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/reloj-control/logos-empresas-mexico.png" />
        </div>
    </section>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>