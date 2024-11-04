<?php
    include('conexion.php');
    $con = connection();

    $id=$_GET['id'];

    $sql = "SELECT * FROM productos WHERE id='$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Productos</title>
    <meta name="author" content="Cristian Jurado López" />
    <link rel="icon" type="image/x-icon" href="../IMG/favicon.png">
    <link rel="stylesheet" href="../CSS/estilosIndexAdmin.css">
</head>
<body>
    <div class="arribaformulario">
        <a href="../HTML/index.html" target="_top"> <img src="../IMG/logo.png" alt="Logo"> </a>
    </div>
    <div class="container">
        <form action="editarProducto.php" method="POST">
            <h2>Editar Producto</h2>
            
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <div class="form-group">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
            </div>
            <div class="form-group">
                <input type="text" name="marca" placeholder="Marca" value="<?= $row['marca']?>">
            </div>
            <div class="form-group">
                <input type="number" name="precio" placeholder="precio" value="<?= $row['precio']?>">
            </div>

            <button type="submit">Actualizar Producto</button>

        </form>
    </div>
</body>
</html>