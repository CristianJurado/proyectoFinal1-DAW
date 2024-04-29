<?php
    include('conexion.php');
    $con = connection();

    $id=$_POST['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];

    $sql = "UPDATE productos SET nombre='$nombre', marca='$marca', precio='$precio' WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: indexAdmin.php");
    }

?>