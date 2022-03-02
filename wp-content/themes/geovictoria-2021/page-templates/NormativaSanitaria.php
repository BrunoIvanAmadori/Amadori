<?php
/*
Template Name: NormativaSanitaria PlanPasoAPaso
*/
get_header();
?>
<section id="main-forma1" class="normativaSanitaria">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 titulo-form">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img_main wow bounceInLeft" src="<?php echo get_template_directory_uri(); ?>/images/mujer-medidasproteccion.png">
                        </div>
                        <div class="col-lg-4 col-md-6 titulo">
                            <h1>Actualizate con la Nueva normativa sanitaria</h1>
                            <p> GeoVictoria te ayuda a cumplir las nuevas normativas planteadas por el gobierno</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/plan-paso-a-paso.png" alt="" class="pasoapaso">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/flecha-04.png" class="flecha">
                            <!--<ul>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Distintos métodos de registros</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 100% online</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Integrable con su ERP</li>
                            </ul>-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="formulario asistencia">
                                <?php include_once( 'formularioZoho.php' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="normativaSection1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-azul">¿Sabias qué?</h2>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="text-azul">60%</h2>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-amarillo">de empresas</h5>
                        <p>Se encuentran trabajando con el 30% de su capacidad?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="text-azul">53%</h2>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-amarillo">de empresas</h5>
                        <p>Se encuentran cerradas por no poder continuar con su normal funcionamiento</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="text-azul">49%</h2>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-amarillo">de empresas</h5>
                        <p>Ha reducido su personal por la contingencia del covid-19</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2 class="text-azul">60<span>UTM</span></h2>
                        </div>
                        <div class="col-lg-7">
                            <p>Podrian arriesgar las empresas que no cumplan con las medidas  sanitarias dispuestas por el gobierno</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="text-azul">2X2<span>M²</span></h2>
                    </div>
                    <div class="col-lg-7">
                        <p>El aforo máximo teórico por ejemplo de una superficie de 350m² sería 350/4 = 87 personas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="text-azul">+5</h2>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-amarillo">Grandes empresas</h5>
                        <p>Fueron clausuradas por la falta de medidas sanitarias, a lo largo del país</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="normativaSection2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-azul">¿Cómo GeoVictoria te ayuda a cumplir estas nuevas normativas?</h2>
            </div>
            <div class="col-lg-5">
                <h3 class="text-azul">1. Aforo máximo permitido</h3>
                <p>
                    GeoVictoria cuenta con una solución que permite el control de acceso a sus instalaciones, con equipamientos de la más alta tecnología, 
                    la cual permite tanto gestionar como controlar al personal interno como externo, 
                    por medio de una reportería en línea sobre los usuarios por zona (control por zona) que permitirá que su empresa cumpla con la normativa de aforo máximo.
                </p>
                <a href="<?php echo home_url(); ?>control-de-acceso/"><button>Saber más</button></a>
            </div>
            <div class="col-lg-7">
                <h4 class="text-amarillo">Control de acceso</h4>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/07/huella.png" alt="">
                        <h5 class="text-amarillo">Huella Digital</h5>
                    </div>
                    <div class="col-lg-3 col-sm-6 text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/07/reconocimiento-facial.png" alt="">
                        <h5 class="text-amarillo">Reconocimiento Facial</h5>
                    </div>
                    <div class="col-lg-3 col-sm-6 text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/07/tarjeta.png" alt="">
                        <h5 class="text-amarillo">Tarjeta Identificación</h5>
                    </div>
                    <div class="col-lg-3 col-sm-6 text-center">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/07/carnet.png" alt="">
                        <h5 class="text-amarillo">Cédula de identidad</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="normativaSection3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-amarillo">GeoVictoria acceso comedores</h3>
                <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/f-comedor_.png" alt="">
            </div>
            <div class="col-lg-6">
                <h4 class="text-azul">2. Aglomeraciones en espacios reducidos</h4>
                <p>Mediante la plataforma de GeoVictoria comedor, podrás tanto gestionar como controlar los horarios de servicio del casino de tu empresa, 
                    evitando de esta manera aglomeraciones tanto en los ingresos como dentro de tu comedor</p>
                <a href="<?php echo home_url(); ?>comedor/"><button>Saber más</button></a>
            </div>
        </div>
    </div>
</section>
<section id="normativaSection4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>3. Uso obligatorio de mascarilla y control de temperatura</h3>
                <p>Geovictoria cuenta con dispositivos biométricos tanto para control de acceso como control de asistencia que permiten el reconocimiento facial con mascarilla, además la tecnología de SpeedFace te permite tomar la temperatura del usuario generando un reporte sanitario en linea, 
                    alarmando en caso de que algún usuario no cuente con su mascarilla o una temperatura dentro del umbral determinado a la hora de ingresar al espacio de trabajo</p>
                <a href="<?php echo home_url(); ?>control-de-acceso/"><button>Saber más</button></a>
            </div>
            <div class="col-lg-3 text-center">
                <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/iconos-speedface.png" alt="">
            </div>
            <div class="col-lg-4">
                <ul>
                    <li>
                        <p>Detección de rostros con mascarillas</p>
                    </li>
                    <li>
                        <p>Medición de distancia y temperatura corporal</p>
                    </li>
                    <li>
                        <p>Mayor higiene con verificación biométrica sin contacto, rostro y palma</p>
                    </li>
                    <li>
                        <p>Algoritmo facial anti falsificación ultra rápido (Detecta rostros falsos en fotos, videos y máscaras)</p>
                    </li>
                    <li>
                        <p>Verificación Multi Biométrica: Rostro / Palma / Huella  / Contraseña</p>
                    </li>
                </ul>
            </div>
        </div>                                
    </div>
</section>
<section id="normativaSection3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-azul">4. Evita el contacto con los dispositivos</h4>
                <p>
                    GeoVictoria ofrece multiples modalidades sin contacto para evitar propagación del virus entre los usuarios, 
                    con estos buscamos reducir el mínimo contacto con dispositivos de marcaje al momento de hacer acceso al recinto
                </p>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 text-center">
                            <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/mano.png" alt="">
                            <h5 class="text-amarillo">Reconocimiento de palma</h5>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center">
                            <img src="https://www.geovictoria.com/wp-content/uploads/2020/07/reconocimiento-facial.png" alt="">
                            <h5 class="text-amarillo">Reconocimiento facial</h5>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center">
                            <img src="https://www.geovictoria.com/wp-content/uploads/2020/07/carnet.png" alt="">
                            <h5 class="text-amarillo">Carnet de identidad</h5>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6 text-center">
                            <img src="https://www.geovictoria.com/wp-content/uploads/2020/07/tarjeta.png" alt="">
                            <h5 class="text-amarillo">Tarjeta de identificación</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="text-azul">5. Control de gestión y externos</h4>
                <div class="row">
                    <div class="col-lg-7">
                        <p>
                            GeoVictoria te ofrece la solución para el control y gestión de los externos, gracias a una plataforma online que te permite realizar las gestiones necesarias de tu personal externo, 
                            incluyendo diferentes tipos de documentos requeridos, entre ellos la declaración jurada que el gobierno exige dentro de sus normativas
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/reportearia-linea.png" alt="">
                    </div>
                </div>
                <a href="<?php echo home_url(); ?>control-de-externos/"><button>Saber más</button></a>
            </div>
        </div>
    </div>
</section>
<section id="normativaSection5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3 class="text-azul">6. Implementación de teletrabajo</h3>
                <h4 class="text-amarillo">Marcaje de asistencia remota</h4>
                <p>Tu equipo de trabajo podrá fichar en remoto hogar mediante su ordenador o el dispositivo 
                    que prefiera desde nuestras modalidades APP o web dependiendo de las necesidades de cada usuario</p>
                <a href="<?php echo home_url(); ?>soluciones-iniciativas-covid/"><button>Saber más</button></a>
            </div>
            <div class="col-lg-7 text-center">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/icono-web_.png" alt="">
                        <h5 class="text-amarillo">Marcaje web</h5>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/icono-app.png" alt="">
                        <h5 class="text-amarillo">GeoVictoria App</h5>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/icono-call.png" alt="">
                        <h5 class="text-amarillo">GeoVictoria Call</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 text-center">
                <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/iicono-contadorpersonas.png" alt="">
            </div>
            <div class="col-lg-4">
                <h3 class="text-azul">7. Control de público</h3>
                <p>Mantén contabilizado el aforo de todas tus instalaciones ya sea una tienda, oficina, plantas, etc, 
                    logrando la trazabilidad deseada de tus trabajadores personas eterno y público en general que se encuentren en estos lugares.</p>
            </div>
            <div class="col-lg-2 text-center">
                <img src="https://www.geovictoria.com/wp-content/uploads/2020/08/icono-notificacion.png" alt="">
            </div>
            <div class="col-lg-4">
                <h3 class="text-azul">8. Notificación de turnos</h3>
                <p>¿Necesitas modificar los turnos constantemente? Mantén informado a tu personal de estos cambios en la planificación vía email y de manera automática.</p>
            </div>    
        </div>
    </div>
</section>
<section id="forma1-section6">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Algunos de nuestros clientes.</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/empresas-01.png" alt="">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>