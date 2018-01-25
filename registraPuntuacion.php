<?php
header("Access-Control-Allow-Origin: *");
?>
<?php
include_once 'Equipo.php';
include_once 'conexion.php';

$conexion = openDB();
actualizaPuntuacion($conexion, $_GET['id'], $_GET['puntuacion']);
$equipos = getEquipos($conexion, $conPuntuacion=true);

header('Content-Type: application/json');
echo json_encode($equipos);
