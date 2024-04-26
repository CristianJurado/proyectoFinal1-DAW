<?php

//Conexion a la base de datos
$servername="localhost";
$username="root";
$password="";
$dbname="usuarios";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error en la conexion de la base de datos" .$conn->connect_error);
}

//Recibimos los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

//Encriptamos la contraseña utilizando la funcion password_hash de php
$hased_password = password_hash($password, PASSWORD_DEFAULT);

//Insertamos los datos

$sql="INSERT INTO usuarios (nombre,email,password) VALUES ('$nombre','$email', '$hased_password')";

if($conn->query($sql)===true){
    echo "Registro correcto";
} else {
    echo "Error al registrar el usuario: " .$conn->error;
}
//Cerramos la conexion
$conn->close();
?>