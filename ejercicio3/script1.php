<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 3 - Script 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>LISTADO DE EQUIPOS</h1>
    <?php
    // Cambiar variables en tu entorno local
    $host = 'HOST';
    $user = 'DB_USER';
    $password = 'DB_PASSWORD';
    $database = 'siteeu_test';

    $connection = mysqli_connect($host, $user, $password, $database);
    $query = 'SELECT equipos.nombre, imagenes.imagen FROM equipos LEFT JOIN imagenes ON equipos.Id = imagenes.id_equipo;';

    $result = mysqli_query($connection, $query);

    foreach ($result as $value) {
        $teamName = $value['nombre'];
        $teamImage = $value['imagen'];
    ?>
    <h2><?php print $teamName; ?></h2>
    <?php 
        if(!is_null($teamImage)) {
    ?>
        <img src="<?php print $teamImage; ?>"/>
    <?php
        } else {
            print "Este equipo no tiene imagen";
        }
    }

    ?>
</body>
</html>