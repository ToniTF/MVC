<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlazar Actor con Película</title>
</head>

<body>
    <h3>Enlazar Actor con Película</h3>
    <form action="" method="post">
        <select name="actor_id">
            <?php foreach ($actores as $actor): ?>
                <option value="<?php echo $actor['id']; ?>"><?php echo $actor['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="film_id">
            <?php foreach ($films as $film): ?>
                <option value="<?php echo $film['id']; ?>"><?php echo $film['titulo']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Enlazar">
    </form>
</body>

</html>