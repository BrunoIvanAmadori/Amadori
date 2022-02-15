<form id="cotizacion-form" class="calculadora gdpr" onsubmit="return(cotizacionStep1(event));">
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefaultUsername">Nome completo</label>
      <div class="input-group">
        <input pattern="^\w+( +)?(\w+)?" placeholder="Nome" name="firstname" id="firstname" type="text" class="form-control" required>
        <input pattern="^\w+( +)?(\w+)?" placeholder="Sobrenome" name="lastname" id="lastname" type="text" class="form-control" required>
      </div>
    </div>

    <div class="col-12 mb-3">
      <label for="validationDefaultUsername">Correio</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input name="email" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Endereço de email invalido." class="form-control" id="email" placeholder="Correo" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>

  </div>

  <div class="form-row">
    <div class="col-12 mb-3">
      <label for="validationDefault03">Empresa</label>
      <input name="company" type="text" class="form-control" id="enterprise" placeholder="Empresa" required>
    </div>

    <div class="col-12 mb-3">
      <label for="validationDefaultUsername">Telefone</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><img style="width:15px;height:auto;" src="https://www.clipartmax.com/png/middle/294-2948593_phone-icon-png-telephone-icon-clip-art.png"></span>
        </div>
        <input name="phone" type="text" class="form-control" id="phone" placeholder="Telefono" aria-describedby="inputGroupPrepend2" required>
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
        <span class="small acceptance-checkbox"> Li e aceito a <a href="/pt-br/politica-de-privacidade">política de proteção de dados</a> e os <a href="/pt-br/aviso-legal">termos e condições de uso</a>.* </span>
      </label>
      <label class="mt-3" for="marketing-consent">
        <input name="marketing-consent" type="checkbox" id="marketing-consent" autocomplete="off">
        <span class="small acceptance-checkbox">
          Aceito receber informação comercial sobre as ofertas e promoções da empresa, bem como a newsletter da empresa GEOVICTORIA, S.L. relacionadas a promoções ou notícias de nosso software.
        </span>
      </label>
    </div>
    <input id="submit-descarga-pdf" type="submit" value="Vamos conversar!" class="wpcf7-form-control wpcf7-submit" style="margin:10px 0px 0px 0px;width:100%!important;height:auto;" disabled></input>
    <small> * indica campo obrigatório. </small></p>
    <p class="extra-small">
      <b>Os dados processados ​​neste formulário serão processados ​​pelo empresa GEOVICTORIA, S.L domiciliada em C / López de Hoyos, nº 35, 3º - 28002, Madrid, como Controlador de Dados.</b>
    </p>
    <p class="extra-small">
      <b>Objetivo:</b> Informamos que o objetivo dos dados coletados é o gestão de usuários do site, bem como gestão de comunicação eletrônicos.
    </p>
    <p class="extra-small">
      <b>Legitimação:</b> Consentimento concedido marcando a caixa de seleção correspondente. Seus dados pessoais serão tratados com base em nossa <a href="pt-br/politica-de-privacidade">política de privacidade</a>.
    </p>
    <p class="extra-small">
      <b>Recusa de consentimento:</b> A não introdução dos dados marcados como obrigatórios no formulário resultará na rejeição do seu pedido.
    </p>
    <p class="extra-small">
      <b>Destinatários:</b> Os seus dados não serão transferidos a nenhuma empresa, salvo obrigação legal e em certos casos a terceiros países de empresas que fazem parte do grupo GEOVICTORIA, em especial VICTORIA S.A empresa chilena, mas sujeitas ao mesmo Finalidade descrita para a prestação do serviço e apenas para esse fim. Em qualquer caso, garantimos um nível adequado de protecção e garantias para que possa fazer uso dos seus direitos. Mais detalhes podem ser encontrados na política de privacidade do nosso site.
    </p>
    <p class="extra-small">
      <b>Direitos:</b> Você pode acessar, retificar e excluir seus dados, solicitar sua portabilidade, bem como sua limitação ou oposição ao seu tratamento, você tem o direito de não se sujeitar a decisões automatizadas, bem como de obter informações claras e transparentes sobre os tratamento dos seus dados, conforme explicado nas informações adicionais.
    </p>
    <p class="extra-small">
      <b>Direito de registrar uma reclamação junto à Autoridade Nacional de Proteção de Dados.:</b> De GEOVICTORIA, S.L. Fazemos todos os esforços para cumprir os regulamentos de proteção de dados, uma vez que é o bem mais valioso para nós. No entanto, informamos que, se você entender que seus direitos foram prejudicados, você pode registrar uma reclamação junto ao nosso oficial de proteção de dados Cristian Calderón Bessi, e-mail ccalderon@geovictoria.com ou perante a Autoridade Nacional de Proteção de Dados.
    </p>
  </div>
</form>