<?php
/*
Template Name: RelojChecador Biometrico
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
                    <h1><span class="sub-relojcontrol">Reloj Checador</span> Biométrico</h1>
                    <p>El mejor sistema para el control y gestion de asistencia en latinoamérica. 
                        Gracias al sofisticado reloj checador biométrico suministrado por GeoVictoria, 
                        contarás con datos fidedignos y en tiempo real de la presencia de empleados en las empresas mexicanas.
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/flecha-04.png" class="flecha-acceso">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="formulario form-acceso">
                        <?php include_once( 'formularioZoho.php' ); ?>
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
                <h2 class="titulo-azul">¿Cómo funciona</h2>
                <h2 class="titulo-azul">el reloj checador biométrico?</h2>
                <p>El reloj checador de asistencia es el sistema de control y gestión de personas más eficiente del mercado en México</p>
                <p>El aparato proporcionado por GeoVictoria permite el registro e identificación de empleaos para el registro de su presencia en su trabajo. 
                    El reloj checador de asistencia almacena la información del ingreso y egresos de trabajadores en tiempo real.</p>
                <p>Bajo el soporte de GeoVictoria, cuenta con poderosas herramientas de reportería, como gestión de asistencia, 
                    remuneraciones, faltas, ausencias, retardos, tiempos extras,  generación de alertas, permisos entre otros. Integrado a todos los softwares RR.HH. y ERP del mercado.
                </p>
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
                    <h2>Tipos de reloj checador para la asistencia en México</h2>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/relojchecador3.png" alt="" class="rounded">
                    </div>
                    <h3 class="text-center">Reconocimiento huella dactilar:</h3>
                    <p class="text-justify">Registrar la asistencia de tu personal es más fácil cuando solo necesitan su huella dactilar. 
                        Aplicable a reloj checador con huelleros USB y reloj checador box.  </p> 
                        <h4>UA860</h4>
                        <p>Terminal Biométrica de Huella Digital para Asistencia y Funciones de Acceso</p>
                        <ul>
                            <li>Módulo Wi-Fi está integrado.</li>
                            <li>WDMS: Opcional para dispositivos utilizados en todo el mundo.</li>
                            <li>Lector de huella digital BioID.</li>
                            <li>Soporta conexión USB-Host para respaldar la información.</li>
                        </ul>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/relojchecador2.png" alt="">
                    </div>
                    <h3 class="text-center  titulo1">Reconocimiento facial: </h3>
                    <p class="text-justify">El reloj checador box de asistencia lee rasgos faciales uno de los tantos atributos biométricos para el control de asistencia. 
                        El equipo es capaz de diferenciar una fotografía y un rostro real. Puede almacenar hasta 100 mil caras. Especial para empresas que en México buscan innovadores métodos de marcaje. 
                    </p> 
                    <h4>SilkBio-100TC</h4>
                    <p>Terminal multi-biométrica IP para Gestión de Tiempo y Control de Acceso</p>
                    <ul>
                        <li>Verificación de usuarios en menos de 1 segundo.</li>
                        <li>Operación estable bajo fuerte iluminación.</li>
                        <li>Ahorro de energía, reposo automático del infrarrojo cuando no está en uso.</li>
                        <li>Identificación precisa aún en huellas ásperas, secas o húmedas.</li>
                        <li>Múltiples idiomas.</li>
                        <li>Batería de respaldo de 2.000mAh en caso de cortes inesperados de energía.</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/relojchecador1.png" alt="">
                    </div>
                    <h3 class="text-center  titulo1">Lector de tarjeta:</h3>
                    <p class="text-justify">Para quienes prefieren la clásica tarjeta de registro para la entrada y salida de empleados de sus sucursales de trabajo, 
                        GeoVictoria tiene un reloj checador de asistencia que utiliza tarjetas enroladas a tus empleados. E incluso, ¡son reutilizables! Olvídate de comprar nuevas tarjetas. </p>
                    <h4>MB360</h4>
                    <p>Terminal multi-biométrica para Gestión de Asistencia y funciones de Control de Acceso</p>
                    <ul>
                        <li>1.500 rostros, 2.000 huellas, 100.000 eventos y 2.000 tarjetas(Opcional)</li>
                        <li>Múltiples idiomas.</li>
                        <li>Interfaz de comunicación TCP/IP, USB-Host, Wi-Fi(Opcional).</li>
                        <li>Veriﬁcación de usuarios en menos de 1 segundo.</li>
                        <li>Firmware profesional y plataforma más ﬂexible.</li>
                        <li>Interfaz de usuario sencilla e intuitiva con un diseño atractivo.</li>
                    </ul>
                </div>
            </div>
        </div>
</section>
<section id="forma2-section1" class="acceso">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center titulo-relojcontrol">Características del reloj checador biométrico</h2>
            </div>
            <div class="col-lg-8 text-center">
                <img class="torniquete" src="https://www.geovictoria.com/wp-content/uploads/2020/04/in04-png.png" alt="">
            </div>    
            <div class="col-lg-4">
                <h3 class="subtitulo">Conexión LAN o 3G</h3>
                <p>El reloj checador biométrico se adapta tanto a las conexiones locales de la empresas, como a las inalámbricas por datos móviles.</p>
            
                <h3 class="subtitulo">Diversas versiones para diferentes escenarios (con gabinete o impresora):</h3>
                <p>Sea en un gabinete o en una impresora, el reloj checador biométrico de  GeoVictoria, puede ser instalado en el lugar donde la empresa determine. 
                    Y si el administrador lo necesita, el reloj checador biométrico imprimirá un ticket que comprueba su asistencia
                </p>
                <h3 class="subtitulo">Con o sin UPS (Uninterruptible Power Supply):</h3>
                <p>Según tu necesidad, puedes elegir tu reloj checador biométrico de asistencia con un sistema de alimentación ininterrumpida.</p>

                <h3 class="subtitulo">Alto almacenamiento de usuarios enrolados</h3>
                <p>Todos los equipos de reloj checador biométricos pueden guardar hasta 10 mil usuarios en cualquiera de sus formatos 
                    (huella dactilar, PIN de seguridad, tarjeta, entre otros).</p>
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
                <h2>¿Cómo el reloj checador biométrico de GeoVictoria facilita tu gestión?</h2>
                <p>El reloj checador de asistencia de GeoVictoria facilita el registro de la entrada y salida del personal por medio de un reloj checador adaptado a tu empresa y planilla.</p>
                <p>Los usuarios generan marcas gracias a registros biométricos por huella dactilar o rostro. Esta información, 
                    es subida a una nube de almacenamiento donde, gracias al sofisticado software de  reportes hechos por GeoVictoria, sabrás  en tiempo real las checadas de los empleados.  
                </p>
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
                <h2>Propiedades del Reloj Checador biométrico de asistencia de GeoVictoria</h2>
                <ul>
                    <li>
                        <h3>Plataforma en la nube:</h3>
                        <p>Bajo el soporte de uno de los servicios en la nube más seguros en el mundo como Azure de Microsoft</p>
                    </li>
                    <li>
                        <h3>Paga solo por lo que usas:</h3>
                        <p>No importa si tienes 10, 100 o 1000 trabajadores. ¡Pagas solo por usuario activo en el sistema!.</p>
                    </li>
                    <li>
                        <h3>Poderosa reportería:</h3>
                        <p>El software de GeoVictoria está hecho para que sepas que tantas horas extras generas, el promedio de atraso de los usuarios, permisos otorgados, 
                            remuneraciones en relación a HH/HH, entre otros.</p>
                            <ul>
                                <li>
                                    <h4>Reporte de retardos</h4>
                                    <p>Reporta los trabajadores que checaron su entrada posterior al tiempo definido de entrada.</p>
                                </li>
                                <li>
                                    <h4>Reporte pre-nómina resumen</h4>
                                    <p>Reporte principal con el resumen del período que quieras consultar para el pago de nóminas. Puede ver el detalle de checadas por día de cada trabajador.  
                                        El administrador puede ver el ausentismo como vacaciones o días festivos. Su tipo de registro de entrada o salida, registro de asistencia totales por día y por periodo.</p>
                                </li>
                                <li>
                                    <h4>Reporte de checadas de empleados</h4>
                                    <p>Necesario para verificar el personal que está checando asistencia y bajo que equipo electrónico lo está haciendo.</p>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <h3>Integrable a sus sistemas de RR.HH. Y ERP:</h3>
                        <p>El reloj checador de GeoVictoria opera con los softwares de Recursos Humanos y ERP más importantes del mercado.
                             Así, puedes saber cual es la  nómina a pagar gracias a los datos de asistencia del personal.</p>
                    </li>
                    <li>
                        <h3>Asignador de turnos:</h3>
                        <p>Asignación de horarios fijos o rotativos, diurnos o nocturnos de hasta 24 horas continuas de trabajo. </p>
                    </li>
                    <li>
                        <h3>Soporte permanente:</h3>
                        <p>Una vez instalado el equipo reloj checador biométrico de asistencia y software de gestión de personas de GeoVictoria, accede a un equipo de soporte al cliente, que te apoyará en toda duda o problema.</p>
                    </li>
                    <li>
                        <h3>Fácil Instalación:</h3>
                        <p>El reloj checador  biométrico solo necesita un cable de corriente y  conexión LAN de la empresa y ¡listo!, ya puede ser utilizado. Solo conexión 3G en caso de solo requerir una Fuente de Energía.</p>
                    </li>
                </ul>
                <div class="col text-center">
                    <a href="#"><button>Quiero hacer más simple mi gestión</button></a>
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
                    <h2>Beneficios del reloj checador biométrico de asistencia</h2>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="" class="rounded">
                    </div>
                    <h3 class="text-center">Equipos con respaldo ZKTeco</h3>
                    <p class="text-justify">La última generación de aparatos biométricos de reloj checador biométricos en el mundo ahora en México.</p> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="">
                    </div>
                    <h3 class="text-center">No perderás tiempo en hacer papeleo</h3>
                    <p class="text-justify">La información de las checadas es más fácil de obtener al verlas con el software de control de asistencia de GeoVictoria. ¡Ahorrate en pasar información al Excel!</p> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="">
                    </div>
                    <h3 class="text-center">Confiablidad en la biometría</h3>
                    <p class="text-justify">La biometría contempla todos los atributos identificables únicos de las personas. 
                        En GeoVictoria, el reloj checador biométricos usa algunos de estos rasgos para validar su identidad. <br>
                        Así, el registro de asistencia es más seguro, oportuno e infalible ante fraudes. 
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/04/ab7fce46-normativa_00000001n01s003000001.png" alt="">
                    </div>
                    <h3 class="text-center titulo1">Fácil administración</h3>
                    <p class="text-justify">El administrador puede configurar de forma sencilla el aparato reloj checador biométrico ante cualquier percance.</p>
                </div>  
            </div>
        </div>
</section>
<section id="forma1-section6">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Conoce la opinion de nuestro reloj checador de asistencia</h2>
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
                <h2>Clientes que han contratado reloj checador de asistencia</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos-empresas-mexico.png" alt="">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>