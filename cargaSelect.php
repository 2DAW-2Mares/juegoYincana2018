<?php
    $directorioRaiz = dirname($_SERVER['SCRIPT_FILENAME']);
    $directoriosInternos = scandir ( $directorioRaiz , $sorting_order = SCANDIR_SORT_ASCENDING );
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Seleccionar el juego</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Seleccione el juego:</div>
        <form action="cargaJuego.php">
            <select name="juego">
            <?php foreach ($directoriosInternos as $filename) : ?>
                <?php if(is_dir($filename) && $filename[0] !='.') : ?>
                <option value="<?php echo $filename ?>"><?php echo $filename ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
            </select>
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>

