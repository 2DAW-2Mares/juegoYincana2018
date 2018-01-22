<?php
    include_once 'Equipo.php';
    include_once 'conexion.php';
    
    $conexion = openDB();
    $equipo = new Equipo();
    if(isset($_POST["nombre"]) && htmlspecialchars($_POST["nombre"]) !=''){
        $equipo->setNombre(htmlspecialchars($_POST["nombre"]));
        $equipo->setCategoria(htmlspecialchars($_POST["categoria"]));
        insertaEquipo($conexion, $equipo);
    }
?>
<!DOCTYPE html>
<html lang="es">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    table,
    th,
    td {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 5px;
    }

    .titulo {
        width: 400px;
    }

    .puntuacion {
        width: 50px;
    }

    .boton {
        width: 70px;
    }

    table tr:nth-child(odd) {
        background-color: #f1f1f1;
    }

    table tr:nth-child(even) {
        background-color: #ffffff;
    }
</style>

<body>
    <h1> Gestión de equipos</h1>
    <form action="" method="post">
        Nombre
        <input type="text" id="nombre" name="nombre" />
        Categoría
        <select name="categoria" id="categoria" >
            <option name="pequenyos" value="<?php echo Equipo::PEQUENYOS ?>">Peque&ntilde;os</option>
            <option name="grandes" value="<?php echo Equipo::GRANDES ?>">Grandes</option>
        </select>
        <button id="insertar" onclick="submit()">Añadir</button>

    </form>
    <br>
    <br>
    <hr>
    <br>
    <table>
        <tr>
            <td class="titulo">
                Nombre
            </td>
            <td class="puntuacion">
                Categor&iacute;a
            </td>
            <td class="boton">

            </td>
        </tr>
<?php
$equipos = getEquipos($conexion);
foreach ($equipos as $equipo) :
?>
        <tr>
            <td class="titulo">
                <?php echo $equipo["nombre"] ?>
            </td>
            <td class="puntuacion">
                <?php echo $equipo["categoria"] ?>
            </td>
            <td class="boton">
                <a href="borrar.php?id=<?php echo $equipo["id"] ?>">Borrar</a>
            </td>
        </tr>
<?php endforeach; ?>
        <span id="lista">
        </span>
    </table>

</body>

</html>