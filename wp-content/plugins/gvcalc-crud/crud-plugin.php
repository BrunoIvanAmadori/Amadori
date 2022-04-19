<?php

// header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
/**
 * Plugin Name: GeoVictoria Calculator Manager
 * Plugin URI: https://aconcaguasf.com
 * Description: Control de precios de GeoVictoria Calculator
 * Version: 1.0
 * Author: ACONCAGUA SF 
 * Developer: Lavilla Alejandro - AMSS CLUSTER
 * Author URI: https://aconcaguasf.com
 */


//Este script interactua con save.php en el root.


require_once(ABSPATH . 'wp-config.php');

function gvcalc_scripts()
{
  global $template;

  if (basename($template) == 'calculator-template.php') {
    $theme_vars_to_be_passed = array(
      'theme_uri' => get_template_directory_uri(),
      'site_url' => get_site_url(),
      'plugin_url' => plugin_dir_url(__FILE__)
    );
    wp_enqueue_script('nouislider', get_template_directory_uri() . '/gvcalc/nouislider.js', [], false, true);
    wp_enqueue_script('gvcalc-core', get_template_directory_uri() . '/gvcalc/gvcalc-core.js', [], false, true);


    wp_localize_script('gvcalc-core', 'theme_vars', $theme_vars_to_be_passed);
  }
}


add_action('wp_enqueue_scripts', 'gvcalc_scripts');

if (is_multisite()) {
  function multisite_menu()
  {

    add_menu_page(
      'Calculadora GV',
      'Calculadora GV',
      'manage_options',
      'calculadoraGV',
      'my_plugin_options',
      'dashicons-calculator', // Icon
      100 // Position of the menu item in the menu.
    );
  }
  add_action("network_admin_menu", "multisite_menu");
}





function my_plugin_menu()
{
  add_options_page('GeoVictoria Calculator', 'Calculadora GV', 'manage_options', 'calculadoraGV', 'my_plugin_options');
}


function my_plugin_options()
{
  // if (!current_user_can('manage_options')) {
  //   wp_die(__('You do not have sufficient permissions to access this page.'));
  // }

  $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  // Probamos la conexion:
  if ($errorMYSQL = mysqli_connect_errno()) {
    // En caso de error
    exit("Couldn't connect to the database: " . $errorMYSQL);
  }

  if ($_GET['pais'])
    $paisSeleccionado = $_GET['pais'];
  else
    $paisSeleccionado = "cl";

  $querySQL = "SELECT * FROM calculadora WHERE pais = '$paisSeleccionado'";

  $dataGV = $db->query($querySQL);
  $valoresPais = $dataGV->fetch_assoc();



  echo '
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  ';


  echo '<div class="wrap">
    
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    
    .input {
     
    width:50px!important;

    }

    </style>

    <div class="container">
      
      <div class="row">
      
        <div>
        <div>  
        

        <form id="priceData" method="POST">
        <label style="display:inline;" ><img style="width:30px;height:auto;" src="https://static.thenounproject.com/png/1711244-200.png"> Pais: </label><select name="paisSeleccionado" id="selectorPais">';

  // Paises y Abreviaciones deben tener la misma cantidad y estar ordenados de forma univoca

  $arrayPaises = array("Chile", "Argentina", "Peru", "Brasil", "Mexico", "Colombia", "USA", "España");
  $arrayAbrev  = array("cl", "ar", "pe", "pt-br", "mx", "co", "en", "es");



  for ($i = 0; $i < count($arrayPaises); $i++) {

    if ($_GET['pais'] == $arrayAbrev[$i])
      echo '<option selected value="' . $arrayAbrev[$i] . '">' . $arrayPaises[$i] . '</option>';

    else
      echo '<option  value="' . $arrayAbrev[$i] . '">' . $arrayPaises[$i] . '</option>';
  }





  echo ' 
</select>';

  echo '<span style="display:inline" ><img style="width:30px;height:auto;vertical-align:middle;" src="https://aux.iconspalace.com/uploads/currency-dollar-icon-256.png">Unidad de Cuenta</span>
<input style="display:inline" name="unidad_cuenta" step="0.01" type="number" value="' . floatval($valoresPais["unidad_cuenta"]) . '">
';

  echo '</div>

          <table class="table">
            <tr>
            <th>Items/Usuarios</th>
              <th>< 4</th>
              <th>5 a 10</th>
              <th>11 a 20</th>
              <th>21 a 50</th>
              <th>51 a 100</th>
              <th>101 a 200</th>
              <th>201 a 500</th>
              <th>501 a 1000</th>
              <th>1001 a 3000</th>
              <th>3001 a 5000</th>
              <th>5001 a 8000</th>
              <th>> 8000</th>


            </tr>
            <tr style="background-color:gray;">
              <td>Asistencia</td>
              <td><input name="Asistencia_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_1a4"]) . '"></td>
              <td><input name="Asistencia_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_5a10"]) . '" id=""></td>
              <td><input name="Asistencia_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_11a20"]) . '" id=""></td>
              <td><input name="Asistencia_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_21a50"]) . '" id=""></td>
              <td><input name="Asistencia_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_51a100"]) . '" id=""></td>
              <td><input name="Asistencia_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_101a200"]) . '" id=""></td>
              <td><input name="Asistencia_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_201a500"]) . '" id=""></td>
              <td><input name="Asistencia_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_501a1000"]) . '" id=""></td>
              <td><input name="Asistencia_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_1001a3000"]) . '" id=""></td>
              <td><input name="Asistencia_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_3001a5000"]) . '" id=""></td>
              <td><input name="Asistencia_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_5001a8000"]) . '" id=""></td>
              <td><input name="Asistencia_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Asistencia_masde8000"]) . '" id=""></td>
              

              </tr>
              <tr style="background-color:gray;">
              <td>Accesos</td>
              <td><input name="Acceso_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_1a4"]) . '" id=""></td>
              <td><input name="Acceso_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_5a10"]) . '" id=""></td>
              <td><input name="Acceso_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_11a20"]) . '" id=""></td>
              <td><input name="Acceso_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_21a50"]) . '" id=""></td>
              <td><input name="Acceso_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_51a100"]) . '" id=""></td>
              <td><input name="Acceso_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_101a200"]) . '" id=""></td>
              <td><input name="Acceso_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_201a500"]) . '" id=""></td>
              <td><input name="Acceso_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_501a1000"]) . '" id=""></td>
              <td><input name="Acceso_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_1001a3000"]) . '" id=""></td>
              <td><input name="Acceso_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_3001a5000"]) . '" id=""></td>
              <td><input name="Acceso_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_5001a8000"]) . '" id=""></td>
              <td><input name="Acceso_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Acceso_masde8000"]) . '" id=""></td>

              </tr>
              <tr style="background-color:gray;">
              <td>Comedor</td>
              <td><input name="Comedor_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_1a4"]) . '" id=""></td>
              <td><input name="Comedor_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_5a10"]) . '" id=""></td>
              <td><input name="Comedor_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_11a20"]) . '" id=""></td>
              <td><input name="Comedor_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_21a50"]) . '" id=""></td>
              <td><input name="Comedor_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_51a100"]) . '" id=""></td>
              <td><input name="Comedor_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_101a200"]) . '" id=""></td>
              <td><input name="Comedor_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_201a500"]) . '" id=""></td>
              <td><input name="Comedor_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_501a1000"]) . '" id=""></td>
              <td><input name="Comedor_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_1001a3000"]) . '" id=""></td>
              <td><input name="Comedor_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_3001a5000"]) . '" id=""></td>
              <td><input name="Comedor_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_5001a8000"]) . '" id=""></td>
              <td><input name="Comedor_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Comedor_masde8000"]) . '" id=""></td>



              </tr>
              <tr style="background-color:gray;">
              <td>Externos</td>
              <td><input name="Externos_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Externos_1a4"]) . '" id=""></td>
              <td><input name="Externos_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Externos_5a10"]) . '" id=""></td>
              <td><input name="Externos_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Externos_11a20"]) . '" id=""></td>
              <td><input name="Externos_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Externos_21a50"]) . '" id=""></td>
              <td><input name="Externos_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Externos_51a100"]) . '" id=""></td>
              <td><input name="Externos_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Externos_101a200"]) . '" id=""></td>
              <td><input name="Externos_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Externos_201a500"]) . '" id=""></td>
              <td><input name="Externos_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Externos_501a1000"]) . '" id=""></td>
              <td><input name="Externos_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Externos_1001a3000"]) . '" id=""></td>
              <td><input name="Externos_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Externos_3001a5000"]) . '" id=""></td>
              <td><input name="Externos_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Externos_5001a8000"]) . '" id=""></td>
              <td><input name="Externos_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Externos_masde8000"]) . '" id=""></td>

              </tr>
              <tr style="background-color:lightgray;">
              <td>PowerBI</td>
              <td>';

  echo '<input name="Powerbi_1a4" step="0.01" type="number" value="' . $valoresPais["Powerbi_1a4"] . '" id="">';

  echo '</td>
              <td><input name="Powerbi_5a10"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_5a10"]) . '" id=""></td>
              <td><input name="Powerbi_11a20"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_11a20"]) . '" id=""></td>
              <td><input name="Powerbi_21a50"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_21a50"]) . '" id=""></td>
              <td><input name="Powerbi_51a100"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_51a100"]) . '" id=""></td>
              <td><input name="Powerbi_101a200"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_101a200"]) . '" id=""></td>
              <td><input name="Powerbi_201a500"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_201a500"]) . '" id=""></td>
              <td><input name="Powerbi_501a1000"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_501a1000"]) . '" id=""></td>
              <td><input name="Powerbi_1001a3000"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_1001a3000"]) . '" id=""></td>
              <td><input name="Powerbi_3001a5000"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_3001a5000"]) . '" id=""></td>
              <td><input name="Powerbi_5001a8000"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_5001a8000"]) . '" id=""></td>
              <td><input name="Powerbi_masde8000"step="0.01" type="number" value="' . floatval($valoresPais["Powerbi_masde8000"]) . '" id=""></td>

              </tr>
              <tr style="background-color:lightgray;">
              <td>Reporte Personalizado</td>
              <td><input name="Reporte_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_1a4"]) . '" id=""></td>
              <td><input name="Reporte_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_5a10"]) . '" id=""></td>
              <td><input name="Reporte_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_11a20"]) . '" id=""></td>
              <td><input name="Reporte_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_21a50"]) . '" id=""></td>
              <td><input name="Reporte_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_51a100"]) . '" id=""></td>
              <td><input name="Reporte_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_101a200"]) . '" id=""></td>
              <td><input name="Reporte_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_201a500"]) . '" id=""></td>
              <td><input name="Reporte_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_501a1000"]) . '" id=""></td>
              <td><input name="Reporte_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_1001a3000"]) . '" id=""></td>
              <td><input name="Reporte_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_3001a5000"]) . '" id=""></td>
              <td><input name="Reporte_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_5001a8000"]) . '" id=""></td>
              <td><input name="Reporte_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Reporte_masde8000"]) . '" id=""></td>

              </tr>
              <tr style="background-color:lightgray;">
              <td>Formulario APP</td>
              <td><input name="Formapp_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_1a4"]) . '" id=""></td>
              <td><input name="Formapp_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_5a10"]) . '" id=""></td>
              <td><input name="Formapp_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_11a20"]) . '" id=""></td>
              <td><input name="Formapp_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_21a50"]) . '" id=""></td>
              <td><input name="Formapp_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_51a100"]) . '" id=""></td>
              <td><input name="Formapp_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_101a200"]) . '" id=""></td>
              <td><input name="Formapp_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_201a500"]) . '" id=""></td>
              <td><input name="Formapp_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_501a1000"]) . '" id=""></td>
              <td><input name="Formapp_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_1001a3000"]) . '" id=""></td>
              <td><input name="Formapp_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_3001a5000"]) . '" id=""></td>
              <td><input name="Formapp_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_5001a8000"]) . '" id=""></td>
              <td><input name="Formapp_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Formapp_masde8000"]) . '" id=""></td>

              </tr>
              <tr style="background-color:lightgray;">
              <td>Optimizador</td>
              <td><input name="Optimizador_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_1a4"]) . '" id=""></td>
              <td><input name="Optimizador_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_5a10"]) . '" id=""></td>
              <td><input name="Optimizador_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_11a20"]) . '" id=""></td>
              <td><input name="Optimizador_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_21a50"]) . '" id=""></td>
              <td><input name="Optimizador_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_51a100"]) . '" id=""></td>
              <td><input name="Optimizador_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_101a200"]) . '" id=""></td>
              <td><input name="Optimizador_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_201a500"]) . '" id=""></td>
              <td><input name="Optimizador_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_501a1000"]) . '" id=""></td>
              <td><input name="Optimizador_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_1001a3000"]) . '" id=""></td>
              <td><input name="Optimizador_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_3001a5000"]) . '" id=""></td>
              <td><input name="Optimizador_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_5001a8000"]) . '" id=""></td>
              <td><input name="Optimizador_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Optimizador_masde8000"]) . '" id=""></td>

              </tr>
              <tr style="background-color:lightgray;">
              <td>Integracion ERP</td>
              <td><input name="Integraerp_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_1a4"]) . '" id=""></td>
              <td><input name="Integraerp_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_5a10"]) . '" id=""></td>
              <td><input name="Integraerp_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_11a20"]) . '" id=""></td>
              <td><input name="Integraerp_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_21a50"]) . '" id=""></td>
              <td><input name="Integraerp_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_51a100"]) . '" id=""></td>
              <td><input name="Integraerp_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_101a200"]) . '" id=""></td>
              <td><input name="Integraerp_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_201a500"]) . '" id=""></td>
              <td><input name="Integraerp_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_501a1000"]) . '" id=""></td>
              <td><input name="Integraerp_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_1001a3000"]) . '" id=""></td>
              <td><input name="Integraerp_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_3001a5000"]) . '" id=""></td>
              <td><input name="Integraerp_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_5001a8000"]) . '" id=""></td>
              <td><input name="Integraerp_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Integraerp_masde8000"]) . '" id=""></td>

              </tr>

              <tr style="background-color:lightgray;">
              <td>Soporte 24/7</td>
              <td><input name="Soporte_1a4" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_1a4"]) . '" id=""></td>
              <td><input name="Soporte_5a10" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_5a10"]) . '" id=""></td>
              <td><input name="Soporte_11a20" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_11a20"]) . '" id=""></td>
              <td><input name="Soporte_21a50" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_21a50"]) . '" id=""></td>
              <td><input name="Soporte_51a100" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_51a100"]) . '" id=""></td>
              <td><input name="Soporte_101a200" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_101a200"]) . '" id=""></td>
              <td><input name="Soporte_201a500" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_201a500"]) . '" id=""></td>
              <td><input name="Soporte_501a1000" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_501a1000"]) . '" id=""></td>
              <td><input name="Soporte_1001a3000" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_1001a3000"]) . '" id=""></td>
              <td><input name="Soporte_3001a5000" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_3001a5000"]) . '" id=""></td>
              <td><input name="Soporte_5001a8000" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_5001a8000"]) . '" id=""></td>
              <td><input name="Soporte_masde8000" step="0.01" type="number" value="' . floatval($valoresPais["Soporte_masde8000"]) . '" id=""></td>

              </tr>
              <hr style="width:150%;border: 2px solid black;" ></hr>
              <tr style="background-color:lightgray;">
              <td> PowerBI Mes </td>   <td><input name="Powerbi_mes" step="0.01" type="number" value="' . $valoresPais["Powerbi_mes"] . '" id=""></td>
              <td> Reporte Mes </td>   <td><input name="Reporte_mes" step="0.01" type="number" value="' . $valoresPais["Reporte_mes"] . '" id=""></td>
              <td> Formapp Mes </td>   <td><input name="Formapp_mes" step="0.01" type="number" value="' . $valoresPais["Formapp_mes"] . '" id=""></td>
              <td> Optimizador Mes </td>    <td><input name="Optimizador_mes" step="0.01" type="number" value="' . $valoresPais["Optimizador_mes"] . '" id=""></td>
              <td> Integra ERP Mes </td>   <td><input name="Integraerp_mes" step="0.01" type="number" value="' . $valoresPais["Integraerp_mes"] . '" id=""></td>
              <td> Soporte 24/7 Mes </td>  <td><input name="Soporte_mes" step="0.01" type="number" value="' . $valoresPais["Soporte_mes"] . '" id=""></td>


              </tr>
          </table>
          </form>
          <button class="btn btn-primary" onclick="sendPrices()">Guardar datos</button> 
          </div>
        

      
      </div>
      
    </div>



    ';



  echo '</div>
    
    
    
  <script type="text/javascript">



  function sendPrices () {

    console.log("Enviando precios modificados.. Alavilla ASF");
    var formElement = document.getElementById("priceData");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/gv_handler.php");
    xhr.send(new FormData(formElement));    
     
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200 && this.responseText != null) {
          console.log(this.responseText);
          swal("Actualización de Precios", "Precios actualizados correctamente", "success");
      }
  };

  }

  let selectorPais = document.getElementById(\'selectorPais\');
  
  selectorPais.addEventListener("input", updateValue);
  
  function updateValue(e) {
    window.location.href = "' . get_bloginfo('wpurl') . '/wp-admin/network/admin.php?page=calculadoraGV&pais=" + selectorPais.value
  }


  </script>
    
    
    ';
}
