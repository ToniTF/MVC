<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de actores</title>
</head>
<body>
<h1>Lista de Actores</h1>
<?php
    foreach($data as $actor){
        echo "<p>".$actor->first_name." ".$actor->last_name."</p>";
    }
    ?>
</body>

</html>