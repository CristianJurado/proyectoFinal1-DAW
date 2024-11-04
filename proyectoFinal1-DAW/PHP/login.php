
<?php

//Conexion a la base de datos
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error en la conexion de la base de datos" .$conn->connect_error);
}

//Recibimos los datos del formulario
$nombre = $_POST['nombre'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
$sql2 = "SELECT * FROM usuarios WHERE nombre='$nombre' AND rol='administrador'";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if($result2->num_rows > 0){
    $row = $result2->fetch_assoc();
    if (password_verify($password, $row['password'])){
        //Contraseña correcta
        header("Location: ../PHP/indexAdmin.php");
        exit();
    }else {
        //contraseña incorrecta
        echo"Contraseña incorrecta";
    }
}

if($result->num_rows >0){
    //Usuario encontrado
    $row = $result->fetch_assoc();
    //Verificamos si la contraseña coincide con la que tenemos en nuestra base de datos
    if (password_verify($password, $row['password'])){
        //Contraseña correcta
        header("Location: ../HTML/index.html");
        exit();
    }else {
        //contraseña incorrecta
        echo"Contraseña incorrecta";
    }
}else{
    //Usuario no encontrado
    echo "Usuario no encontrado";
}
//Cerramos la conexion
$conn->close();
?>