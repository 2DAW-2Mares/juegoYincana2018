<?php
header("Access-Control-Allow-Origin: *");
?>
<?php
include_once 'Equipo.php';
include_once 'conexion.php';

$conexion = openDB();
$equipos = getEquipos($conexion);

header('Content-Type: application/json');
echo json_encode($equipos);
