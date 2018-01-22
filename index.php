<?php
    include_once 'Equipo.php';
    include_once 'conexion.php';
    
    $conexion = openDB();
    $equipo = new Equipo();
    $equipo->setNombre('Mi equipo');
    $equipo->setCategoria(Equipo::PEQUENYOS);
    insertaEquipo($conexion, $equipo);
    
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
<script>
    $(document).ready(function () {
        $(titulo).focus();
        $(insertar).click(function () {
            $("table tr:last").after("<tr><td class='titulo'>" + $(titulo).val() + "</td><td class='puntuacion'>" + $(puntuacion).val() +
                "</td><td class='boton'><button class='eliminar'>Eliminar</button</td></tr>");
            $("td .eliminar").on("click", function(){
                $(this).parent().parent().remove();
            });
            $(titulo).val("");
            $(puntuacion).val("");
            $(titulo).focus();
        });
    })
</script>

<body>
    <h1> Mis pelis favoritas</h1>
    Título
    <input type="text" id="titulo" /> Puntuación
    <input type="text" id="puntuacion" />
    <button id="insertar">Añadir</button>
    <br>
    <br>
    <hr>
    <br>
    <table>
        <tr>
            <td class="titulo">
                Título
            </td>
            <td class="puntuacion">
                Puntuación
            </td>
            <td class="boton">

            </td>
        </tr>
<?php
$stmt = $conexion->prepare("SELECT * FROM equipo ORDER BY categoria, nombre");
// Especificamos el fetch mode antes de llamar a fetch()
$stmt->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$stmt->execute();
// Mostramos los resultados
while ($row = $stmt->fetch()) :
?>
        <tr>
            <td class="titulo">
                <?php echo $row["nombre"] ?>
            </td>
            <td class="puntuacion">
                <?php echo $row["categoria"] ?>
            </td>
            <td class="boton">
                <a href="borrar.php?id=<?php echo $row["id"] ?>">Borrar</a>
            </td>
        </tr>
<?php endwhile; ?>
        <span id="lista">
        </span>
    </table>

</body>

</html>