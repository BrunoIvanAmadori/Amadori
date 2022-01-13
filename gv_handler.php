<?php

// header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

error_reporting(0);


$db = new mysqli("localhost", "root", "root", "local");
// Probamos la conexion:
if ($errorMYSQL = mysqli_connect_errno()) {
    // En caso de error
    exit("Couldn't connect to the database: " . $errorMYSQL);
}


if ($paisSeleccionado = $_REQUEST['getValues']) {

    $querySQL = "SELECT * FROM calculadora WHERE pais = '$paisSeleccionado'";

    $dataGV = $db->query($querySQL);
    $valoresPais = $dataGV->fetch_assoc();


    echo json_encode($valoresPais);
}


// Con esta funcion nos ahorramos el error que nos llega a tirar el escape string del $_POST para usarlo en la query 

function post_value($key)
{
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }

    return false;
}


// Creamos este array de keys para no repetir los mismos querys por todo el codigo!

$arrayKeys_1 = array("Asistencia", "Acceso", "Comedor", "Externos", "Powerbi", "Reporte", "Formapp", "Optimizador", "Integraerp", "Soporte", "Powerbi");
$arrayKeys_2 = array("_1a4", "_5a10", "_11a20", "_21a50", "_51a100", "_101a200", "_201a500", "_501a1000", "_1001a3000", "_3001a5000", "_5001a8000", "_masde8000", "_mes");


if ($pais = $_POST['paisSeleccionado']) {

    //recorremos ambas veces ambos array, pasando asi por todos los valores asignados ;)

    foreach ($arrayKeys_1 as $key_1) {
        foreach ($arrayKeys_2 as $key_2) {
            $temp_concat = $key_1 . $key_2;
            $post_handler = post_value($temp_concat);

            $querySQL = " UPDATE calculadora SET 
        $temp_concat = $post_handler
        WHERE pais = '$pais' ";

            $update_handler = $db->query($querySQL);
        }
    }

    // Actualizamos tambien el valor de la UNIDAD en caso de existir


    if ($unidad_cuenta = $_POST['unidad_cuenta']) {
        $querySQL = " UPDATE calculadora SET 
        unidad_cuenta = $unidad_cuenta
        WHERE pais = '$pais' ";

        $update_handler = $db->query($querySQL);
    }
}
