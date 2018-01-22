<?php

    const DBNAME = 'yincana';
    const DBUSER = 'root';
    const DBPASSWORD = 'alumno';
    const DBHOST = 'localhost';

    function openDB() {
        $dbname = DBNAME;
        $user = DBUSER;
        $password = DBPASSWORD;
        $dbhost = DBHOST;
        try {
            $dsn = "mysql:host=$dbhost;dbname=$dbname";
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        return $dbh;
    }
    
    function insertaEquipo($conexion, $equipo) {
        $stmt = $conexion->prepare("INSERT INTO equipo (nombre, categoria) VALUES (:nombre, :categoria)");
//        $nombre = $equipo->getNombre();
//        $categoria = $equipo->getCategoria();
//        $stmt->bindParam(':nombre', $nombre);
//        $stmt->bindParam(':categoria', $ategoria);
        $miEquipo['nombre'] = $equipo->getNombre();
        $miEquipo['categoria'] = $equipo->getCategoria();
        
        if($stmt->execute($miEquipo)) {
            echo "Se ha creado un nuevo registro!";
        };
    }
    
    function borrarEquipo($conexion, $id) {
        $stmt = $conexion->prepare("DELETE FROM equipo WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function getEquipos($conexion, $puntuacion = false) {
        $sentencia = "SELECT * FROM equipo ORDER BY categoria, ";
        $sentencia .= $puntuacion ? "puntuacion DESC" : "nombre";
        $stmt = $conexion->prepare($sentencia);
// Especificamos el fetch mode antes de llamar a fetch()
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
        $stmt->execute();
// Devolvemos los resultados
        return $stmt->fetchAll();
    }

    function actualizaPuntuacion($conexion, $id, $puntuacion) {
        $sentencia = "UPDATE equipo SET puntuacion = :puntuacion ";
        $sentencia .= "WHERE id = :id";
        $stmt = $conexion->prepare($sentencia);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':puntuacion', $puntuacion);

        if($stmt->execute()) {};
    }

