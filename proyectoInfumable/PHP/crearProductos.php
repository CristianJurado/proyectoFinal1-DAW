<?php
    include('conexion.php');
    $con = connection();

    $id=null;
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO productos VALUES ('$id','$nombre','$marca','$precio')";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: indexAdmin.php");
    }
?>

