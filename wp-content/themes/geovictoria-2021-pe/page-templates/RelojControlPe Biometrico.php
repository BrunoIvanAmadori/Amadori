<?php
/*
Template Name: RelojControlPE Biometrico
*/
get_header();
?>
<section id="main-forma1">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-acceso" src="<?php echo get_template_directory_uri(); ?>/images/relojescontrol.png" width="100%" alt="Reloj Control"> 
                </div>
                <div class="col-lg-4 col-md-6 titulo titulo-acceso">
                    <h1>Reloj Control <span class="sub-relojcontrol">Biométrico</span></h1>
                    <p>El mejor sistema para el control y gestión de asistencia en Perú y Latinoamérica. 
                    Gracias al sofisticado reloj control biométrico proporcionado por GeoVictoria, 
                    contarás con datos fidedignos y en tiempo real sobre la asistencia y prescencia de trabajadores en sus puntos de trabajo.</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/flecha-04.png" class="flecha-acceso">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="formulario form-acceso">
                        <?php include_once( 'formularioZohoPE.php' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="forma1-section2" class="acceso">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- start breadcrumbs -->
                <?php the_breadcrumb(); ?>
                <!-- end breadcrumbs -->
            </div>
            <div class="col-md-4">
                <h2 class="titulo-azul">¿Cómo funciona el reloj control biométrico de GeoVictoria en Perú?</h2>
                <p>El reloj control biométrico es el sistema de control y gestión de personas más eficiente del mercado.</p>
                <p>El aparato proporcionado por GeoVictoria permite el registro e identificación de trabajadores para el registro de su presencia en el punto de trabajo. 
                El reloj control de biométrico almacena la información del ingreso y egresos de trabajadores en tiempo real. </p>
                <p>Bajo el soporte de GeoVictoria, cuenta con poderosas herramientas de reportería, como gestión de asistencia,
                remuneraciones, atrasos, tiempos de refrigerio, ausencias, tiempos extras, generación de alertas, permisos entre otros. 
                100% compatible con la normativa chilena e integrado a todos los softwares RR.HH. y ERP del mercado.</p>
                <div class="col text-center">
                    <a href="<?php echo home_url(); ?>/contacto"><button>Pruebe su funcionamiento</button></a>
                </div>
            </div>
            <div class="col-md-8">
                <img src="<?php echo get_template_directory_uri(); ?>/images/acceso_como-funciona.png" alt="">
            <!--<a href="https://wa.me/56944013873" target="_blank"><i class="fa fa-whatsapp fa-5x" aria-hidden="true"></i></a>-->
            </div>
        </div>
    </div>
</section>
<section id="forma1-section5" class="acceso relojcontrol">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tipos de reloj control biométrico en Perú</h2>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/huella-azul.png" alt="" class="rounded">
                    </div>
                    <h3 class="text-center">Reconocimiento huella dactilar:</h3>
                    <p class="text-justify">
                        Registrar la asistencia de tus trabajadores es más fácil cuando solo necesitan su huella dactilar. 
                        Aplicable a reloj control biométrico con huelleros USB (GeoVictoria USB) y reloj control box (GeoVictoria BOX). 
                    </p> 
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/rostroazul.png" alt="">
                    </div>
                    <h3 class="text-center titulo1">Reconocimiento facial:</h3>
                    <p class="text-justify">
                        Es el reloj control box biométrico que lee rasgos faciales. 
                        El equipo es capaz de diferenciar entre una  fotografía y un rostro real. Puede almacenar hasta 100 mil caras. 
                        Especial para empresas que buscan innovadores métodos de marcaje. Ideal para evitar el contacto entre máquina y humano. 
                    </p> 
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/PALMA.png" alt="">
                    </div>
                    <h3 class="text-center titulo1">Reconocimieno de palma:</h3>
                    <p class="text-justify">
                        Este reloj control de asistencia biométrico puede registrar 600 palmas y 3.000 huellas. 
                        Con una verificación de identidad menor a un segundo, tiene avanzados algoritmos biométricos de reconocimiento de palma y huella digital. 
                        Ideal para empresas que buscar un versátil reloj control de asistencia biométrico. Otro método para evitar el contacto entre máquina y humano.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 offset-lg-2">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ANTIVANDÁLICO.png" alt="">
                    </div>
                    <h3 class="text-center titulo1">Anti-vandálico:</h3>
                    <p class="text-justify">
                        Un reloj control de asistencia biométrico con una protección extrema. El box será protegido por un gabinete metálico a prueba de robos y daños externos.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/MALETÍN.png" alt="">
                    </div>
                    <h3 class="text-center titulo1">Reloj Maletín:</h3>
                    <p class="text-justify">
                        Ideal para faenas mineras o de construcción. Elaborada con un revestimiento de goma de alta protección, está diseñado para ser fácilmente transportable. 
                        En este reloj control de asistencia, los trabajadores pueden registrar por huella. Cuenta con conexión 3G para zonas extremas o de dificil conectividad.
                    </p> 
                </div>
            </div>
        </div>
</section>
<section id="forma2-section1" class="acceso">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center titulo-relojcontrol">Características del reloj control disponible en Perú</h2>
            </div>
            <div class="col-lg-8 text-center">
                <img class="torniquete" src="https://www.geovictoria.com/wp-content/uploads/2020/04/in04-png.png" alt="">
            </div>    
            <div class="col-lg-4">
                <h3 class="subtitulo">Conexión LAN o 3G</h3>
                <p>El reloj control biométrico de asistencia se adapta tanto a las conexiones locales de la empresas (LAN), como a las inalámbricas por datos móviles (3G).</p>
                <h3 class="subtitulo">Diversas versiones para diferentes escenarios (con gabinete o impresora):</h3>
                <p>Según la necesidad del negocio, puedes elegir tu reloj control biométrico con un sistema de alimentación ininterrumpida. 
                Así, la función del reloj control no se detiene.</p>
                <h3 class="subtitulo">Con o sin UPS (Uninterruptible Power Supply):</h3>
                <p>Según la necesidad del negocio, puedes elegir tu reloj control biométrico con un sistema de alimentación ininterrumpida. Así, la función del reloj control no se detiene.</p>
                <h3 class="subtitulo">Alto almacenamiento de usuarios enrolados</h3>
                <p>Todos los equipos de reloj control biométrico pueden guardar hasta 10 mil usuarios en cualquiera de sus formatos sobre todo, por métodos biométricos.</p>
            </div>                
        </div>
    </div>
</section>
<section id="forma1-section4" class="relojcontrol">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!--<img class="img-izquierda wow bounceInLeft" src="<?php echo get_template_directory_uri(); ?>/images/mujer+computador-07.png" alt="">-->
            </div>
            <div class="col-md-6">
                <h2>¿Cómo el reloj control de GeoVictoria facilita tu gestión?</h2>
                <p>El reloj control biométrico de GeoVictoria, facilita el registro del ingreso y egreso del personal, por medio de un reloj control adaptado a tu empresa.</p>
                <p>Los usuarios generan marcas gracias a registros biométricos por huella dactilar, rostro o palma. Esta información, es subida a una nube de almacenamiento donde,
                 gracias al sofisticado software de reportería de GeoVictoria, generas poderosos reportes en tiempo real. </p>
                <p>Puedes leer facilmente esta información gracias a nuestro amigable dashboard.</p>
                <div class="col text-center">
                    <a href="#"><button>Quiero hacer más simple mi gestión</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="forma2-section1" class="acceso2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Características del Reloj Contol de asistencia de GeoVictoria</h2>
                <ul>
                    <li>
                        <h3>Plataforma en la nube:</h3>
                        <p>Bajo el soporte de uno de los servicios en la nube más seguros en el mundo como Azure de Microsoft.</p>
                    </li>
                    <li>
                        <h3>Paga solo por lo que usas:</h3>
                        <p>No importa si tienes 10, 100 o 1000 trabajadores. ¡Pagas solo por usuario activo en el sistema!.</p>
                    </li>
                    <li>
                        <h3>Poderosa reportería:</h3>
                        <p>El software de GeoVictoria está hecho para que sepas que tantas horas extras generas, el promedio de atraso de los usuarios, permisos otorgados, 
                        remuneraciones en relación a HH/HH, entre otros.</p>
                    </li>
                    <li>
                        <h3>Validados por la SUNAFIL:</h3>
                        <p>El reloj control de asistencia de GeoVictoria, opera con las reglas del Decreto Supremo N° 007-2006-TR. 
                        Esta normativa contempla que todo empleador sujeto al régimen laboral en la actividad privada, debe tener un registro permanente de control de asistencia,
                        en el que los trabajadores consignarán de manera personal el tiempo de labores. </p>
                    </li>
                    <li>
                        <h3>Integrable a sus sistemas de RR.HH. Y ERP:</h3>
                        <p>El reloj control de GeoVictoria opera con los softwares de Recursos Humanos y ERP más importantes del mercado. 
                        Así, puedes saber cuanta remuneración mensual o quincenal debes realizar a partir de los datos de asistencia de los usuarios.</p>
                    </li>
                    <li>
                        <h3>Soporte permanente:</h3>
                        <p>Una vez instalado el equipo reloj control de asistencia y software de gestión de personas de GeoVictoria, accede a un equipo
                        de soporte al cliente, que te apoyará en toda duda o problema.</p>
                    </li>
                </ul>
                <div class="col text-center">
                    <a href=""><button>Quiero hacer más simple mi gestión</button></a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="row show-device">
                    <div class="col-sm-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/controldasboard.png" alt="">   
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/reportesconsolidados.png" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/infonline.png" alt="">
                    </div>
                </div>
                <div class="hide-device">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/controldasboard.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/reportesconsolidados.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/infonline.png" alt="">
                </div>
            </div>                  
        </div>
    </div>
</section>
<section id="forma1-section6" class="acceso2">
        <div class="container acceso3">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Beneficios del reloj control biométrico</h2>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="" class="rounded">
                    </div>
                    <h3 class="text-center">Equipos con respaldo ZKTeco</h3>
                    <p class="text-justify">Equipos certificados y validados por la Sunafil. La última generación de aparatos biométricos de reloj control de asistencia en el mundo.</p> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="">
                    </div>
                    <h3 class="text-center titulo1">Fácil instalación</h3>
                    <p class="text-justify">El reloj control biométrico solo necesita un cable de corriente y  conexión LAN de la empresa y ¡listo!, ya puede ser utilizado.
                    Solo conexión 3G en caso de solo requerir una Fuente de Energía.</p> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="">
                    </div>
                    <h3 class="text-center">Confiablidad en la biometría</h3>
                    <p class="text-justify">La biometría contempla todos los atributos identificables únicos de las personas. 
                    En GeoVictoria, el reloj control biométrico usa algunos de estos rasgos para validar su identidad. 
                    Así, el registro de asistencia es más seguro, oportuno e infalible ante fraudes y manipulaciones.</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="">
                    </div>
                    <h3 class="text-center titulo1">Fácil administración</h3>
                    <p class="text-justify">El administrador puede configurar de forma sencilla el aparato reloj control biométrico ante cualquier percance.</p>
                </div>  
            </div>
        </div>
</section>
<section id="forma1-section6">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Conoce la opinion de nuestro reloj control biométrico</h2>
                <p>"Es una herramienta fácil de operar que eleva tu gestión y te entrega autonomía en la operatividad"</p>
                <img src="" alt="">
                <p>María José Ugalde</p>
                <p>Sub Gerenta de Recursos Humanos</p>
                <a href="<?php echo home_url(); ?>/casos-de-exito"><button>Súmate a este nivel de gestión</button></a>
            </div>
            <div class="col-md-8">
                <img src="<?php echo get_template_directory_uri(); ?>/images/casos_de_exito.png" alt="" class="wow zoomInDown">
            </div>
        </div>
    </div>
</section>
<section id="forma1-section6">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Clientes que han contratado reloj control biométrico</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/empresas-01.png" alt="">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>