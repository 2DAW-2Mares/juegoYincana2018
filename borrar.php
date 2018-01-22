<?php
    include_once 'Equipo.php';
    include_once 'conexion.php';
    
    $conexion = openDB();
    borrarEquipo($conexion, $_GET["id"]);
    header('Location: index.php');
