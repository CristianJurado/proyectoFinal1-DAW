<?php
    include('conexion.php');
    $con = connection();

    $sql = "SELECT * FROM productos";
    $query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Administrador</title>
    <meta name="author" content="Cristian Jurado López" />
    <link rel="icon" type="image/x-icon" href="../IMG/favicon.png">
    <link rel="stylesheet" href="../CSS/estilosIndexAdmin.css">
</head>
<body>
    <div class="arribaformulario">
    <a href="../HTML/index.html" target="_top"> <img src="../IMG/logo.png" alt="Logo"> </a>
    </div>
    <div class="container">
        <form action="crearProductos.php" method="POST">
            <h2>Crear Producto</h2>
            <div class="form-group">
                <input type="text" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" name="marca" placeholder="Marca">
            </div>
            <div class="form-group">
                <input type="number" name="precio" placeholder="Precio">
            </div>

            <button type="submit">Agregar Producto</button>
            <!-- <input type="submit" value="Agregar Producto"> -->

        </form>
    </div>

    <div class="tabla">
        <h2>Productos Registrados</h2>
        <table class="tabla2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['nombre'] ?> </th>
                    <th> <?= $row['marca'] ?> </th>
                    <th> <?= $row['precio'] ?> </th>

                    <th> <a href="editar.php?id=<?= $row['id'] ?>">Editar</a></th>
                    <th> <a href="borrar.php?id=<?= $row['id'] ?>">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>