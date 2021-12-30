<form id="cotizacion-form" class="calculadora gdpr" onsubmit="return(cotizacionStep1(event));">
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefaultUsername">Full name</label>
      <div class="input-group">
        <input placeholder="Name" name="name" id="name" type="text" class="form-control">
        <input placeholder="Surname" name="lastname" id="lastname" type="text" class="form-control">
      </div>
    </div>
    <div class="col-12 mb-3">
      <label for="validationDefaultUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input name="email" onkeyup="validateEmail()" type="text" class="form-control" id="email" placeholder="Email" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>


  </div>
  <div class="form-row">
    <div class="col-12 mb-3">
      <label for="validationDefault03">Company</label>
      <input name="company" type="text" class="form-control" id="enterprise" placeholder="Company Name" required>
    </div>

    <div class="col-12 mb-3">
      <label for="validationDefaultUsername">Telephone</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><img style="width:15px;height:auto;" src="https://www.clipartmax.com/png/middle/294-2948593_phone-icon-png-telephone-icon-clip-art.png"></span>
        </div>
        <input name="phone" type="text" class="form-control" id="phone" placeholder="Number" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>

    <input style="visibility:hidden;position:absolute;" value="0" id="country" type="text" class="form-control" name="codigo_pais_pricer" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="currency" type="text" class="form-control" name="tipo_de_moneda" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="usersCount" type="text" class="form-control" name="no_empleados_total" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="totalCuest" type="text" class="form-control" name="monto_total____" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="URLPDF" type="text" class="form-control" name="enlace_pdf_cotizacion" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="contracType" type="text" class="form-control" name="periodo_cotizado" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="industry" type="text" class="form-control" name="industry" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="totalEmpAs" type="text" class="form-control" name="no_usuarios_asistencia_y_turnos" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="totalEmpGes" type="text" class="form-control" name="no_usuarios_gestion_de_acceso" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="totalEmpCom" type="text" class="form-control" name="no_usuarios_portal_comedor_y_casino" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="totalEmpExt" type="text" class="form-control" name="no_usuarios_portal_externos" aria-describedby="inputGroupPrepend2" required>

    <input style="visibility:hidden;position:absolute;" value="0" id="booleanFormapp" type="text" class="form-control" name="formulario_app" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="booleanIntegraerp" type="text" class="form-control" name="integracion_con_otros_sistemas" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="booleanReporte" type="text" class="form-control" name="reportes_personalizados" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="booleanPowerbi" type="text" class="form-control" name="dashboard_bi" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="booleanSoporte" type="text" class="form-control" name="soporte_24_7" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="0" id="booleanOptimizador" type="text" class="form-control" name="optimizador_de_turnos" aria-describedby="inputGroupPrepend2" required>
    <input style="visibility:hidden;position:absolute;" value="" id="servicios_cotizados" type="text" class="form-control" name="servicios_cotizados">
    <input style="visibility:hidden;position:absolute;" value="<?php echo getURLWithoutQuery(); ?>" id="origen_zoho" type="text" class="form-control" name="origen_zoho">

    <?php
    if ($_GET['utm_campaign'])
      echo '<input style="visibility:hidden;position:absolute;" value="' . $_GET['utm_campaign'] . '" type="text" class="form-control"  name="utm_campaign" aria-describedby="inputGroupPrepend2" required>';

    if ($_GET['utm_medium'])
      echo '<input style="visibility:hidden;position:absolute;" value="' . $_GET['utm_medium'] . '" type="text" class="form-control"  name="utm_medium" aria-describedby="inputGroupPrepend2" required>';

    if ($_GET['utm_source'])
      echo '<input style="visibility:hidden;position:absolute;" value="' . $_GET['utm_source'] . '" type="text" class="form-control"  name="utm_source" aria-describedby="inputGroupPrepend2" required>';

    ?>
  </div>
  <div class="col-12 mb-3">
    <label class="mt-3" for="privacy-policy">
      <input name="privacy-policy" type="checkbox" id="privacy-policy" autocomplete="off" onchange="document.getElementById('submit-descarga-pdf').disabled = !this.checked;" required>
      <span class="small acceptance-checkbox"> He leído y acepto la política de <a href="/es/politica-de-privacidad">protección de datos</a> y <a href="/es/aviso-legal">aviso legal</a>. Dicha aceptación es necesaria para que GEOVICTORIA, S.L pueda gestionar los servicios ofrecidos.* </span>
    </label>
    <label class="mt-3" for="marketing-consent">
      <input name="marketing-consent" type="checkbox" id="marketing-consent" autocomplete="off">
      <span class="small acceptance-checkbox">
        Acepto recibir información comercial sobre las ofertas y promociones de la
        empresa, así como la newsletter de la empresa GEOVICTORIA, S.L orientada temáticamente a los recursos humanos, la innovación tecnológica, entre otros temas.
      </span>
    </label>
  </div>
  <input id="submit-descarga-pdf" type="submit" value="Descargar mi cotización" class="wpcf7-form-control wpcf7-submit" style="margin:10px 0px 0px 0px;width:100%!important;height:auto;" disabled></input>
  <p class="mt-3"> * significa campo obligatorio. </p>
  <p class="accordion-header mt-3">
  <p class="extra-small">
    <b>Los datos tratados en el presente formulario, serán tratados por la empresa GEOVICTORIA, S.L domiciliada en C/ López de Hoyos, nº 35, 3º - 28002, Madrid, como Responsable del Tratamiento de los datos.</b>
  </p>
  <p class="extra-small">
    <b>Finalidad:</b> Le queremos informar que la finalidad de los datos recogidos es la<br />
    gestión de usuarios de la página web, así como la gestión de comunicación<br />
    electrónica.
  </p>
  <p class="extra-small">
    <b>Legitimación:</b> consentimiento otorgado marcando la correspondiente casilla de verificación. Sus datos personales serán tratados en base a nuestra <a href="/es/politica-de-privacidad">política de privacidad</a>
  </p>
  <p class="extra-small">
    <b>Negativa otorgar el consentimiento:</b> El hecho de que no introduzca los datos que aparecen marcados como obligatorios en el formulario tendrá como consecuencia la no atención de su solicitud.
  </p>
  <p class="extra-small">
    <b>Destinatarios:</b> Sus datos no serán cedidos a ninguna empresa, salvo obligación legal y en ciertos casos a terceros países de empresas que forman parte del grupo GEOVICTORIA, en especial VICTORIA S.A sociedad chilena, pero sujeto a la misma finalidad descrita para la prestación del servicio y únicamente para es este fin. En todo caso garantizamos un adecuado nivel de protección y garantías para que pueda hacer uso de sus derechos. Más detalles se encuentran en la política de privacidad de nuestro sitio web.
  </p>
  <p class="extra-small">
    <b>Derechos:</b> Puede acceder, rectificar y suprimir sus datos, solicitar la portabilidad de estos, así como su limitación u oposición a su tratamiento, tiene derecho a no ser objeto de decisiones automatizadas, así como a obtener información clara y transparente sobre el tratamiento de sus datos, tal como se explica en la información adicional.
  </p>
  <p class="extra-small">
    <b>Derecho a presentar una reclamación ante la Autoridad Nacional de Protección de datos.:</b> Desde GEOVICTORIA, S.L . ponemos el máximo empeño para cumplir con la normativa de protección de datos dado que es el activo más valioso para nosotros. No obstante, le informamos que en caso de que usted entienda que sus derechos se han visto menoscabados, puede presentar una reclamación ante nuestro Delegado de Protección de Datos Cristian Calderón Bessi, correo electrónico ccalderon@geovictoria.com o ante la Autoridad Nacional de Protección de datos
  </p>
</form>