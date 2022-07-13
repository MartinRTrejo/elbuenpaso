<?php
$servidor = "localhost";
$usuario = "root";
$password = "";

//crear una variable para la conexion
$conn = mysqli_connect($servidor, $usuario, $password);

//probar conexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>