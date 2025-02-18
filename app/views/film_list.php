<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de películas</title>
</head>
<body>
<h1>Lista de Películas
</h1>
<?php
    foreach($data as $film){
        echo "<p>".$film->title."</p>";
    }
    ?>
</body>

</html>