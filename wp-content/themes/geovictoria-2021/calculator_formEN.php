<form id="cotizacion-form" onsubmit="return false;">
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

    <?php
    if ($_GET['utm_campaign'])
      echo '<input style="visibility:hidden;position:absolute;" value="' . $_GET['utm_campaign'] . '" type="text" class="form-control"  name="utm_campaign" aria-describedby="inputGroupPrepend2" required>';

    if ($_GET['utm_medium'])
      echo '<input style="visibility:hidden;position:absolute;" value="' . $_GET['utm_medium'] . '" type="text" class="form-control"  name="utm_medium" aria-describedby="inputGroupPrepend2" required>';

    if ($_GET['utm_source'])
      echo '<input style="visibility:hidden;position:absolute;" value="' . $_GET['utm_source'] . '" type="text" class="form-control"  name="utm_source" aria-describedby="inputGroupPrepend2" required>';

    ?>
  </div>
  <button onclick="cotizacionStep1()" class="gv-btn-medium gv-primary gv-text-color-white width-only-content" style="margin:10px 0px 0px 0px;width:100%!important;height:auto;" class="btn btn-primary">Download</button>
</form>