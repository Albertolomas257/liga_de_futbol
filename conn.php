<?php
$servername = "fdb33.atspace.me";
$username = "4094868_unidad3";
$password =  "N6Bp!HG75^kr!+Mj";
$database = "4094868_unidad3";
$port = "3306";

//Crear la conexion por MYSQLi Procedural
$conn = mysqli_connect($servername,$username,$password,$database,$port);

if(!$conn){
    echo("Conexion Fallida".mysqli_connect_error());
}
?>
