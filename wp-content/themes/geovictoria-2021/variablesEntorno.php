<?php 

// PHP FILE para corregir algunos hardcodes y organizar el codigo
// Lavilla Alejandro ACONCAGUA SF


// Start Parseo de URL para Locacion
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$location = explode("/", $actual_link);

$location = $location[3];
// End Parseo de URL para Locacion

// Start Texto de Legislación Dinamico (USA PARSEO LOCACION)

$locationFileName = "legtext".$location.".txt";


$legislacionText = file_get_contents($locationFileName, true);
// Fin Texto de Legislación Dinamico

//Start condición de IVA (USA PARSEO LOCACION)

if ($location != "ar" && $location != "mx" && $location != "en-int" && $location != "pt-br" )
$iva_check = "+ iva";

if ($location == "pe"){
$iva_check = "+ igv";
}
else {
$iva_check = "";
}


//End condición de IVA
