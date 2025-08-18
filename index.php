<?php
header('Content-Type: application/json');

// URL de WeatherLink
$url = "https://www.weatherlink.com/embeddablePage/summaryData/2bc9e7ae099849478a8ce1e4c5128e6d";

// Obtener datos
$datos = file_get_contents($url);

// Devolver JSON tal cual
echo $datos;
?>
