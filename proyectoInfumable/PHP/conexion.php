<?php

function connection(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="proyecto";

    $conn = new mysqli($servername,$username,$password);

    mysqli_select_db($conn,$dbname);

    return $conn;

};

?>