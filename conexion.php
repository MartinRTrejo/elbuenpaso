<?php
$servidor = "localhost";
$bd_usuario = "root";
$bd_password = "";
$base="bs_integradora";

//crear una variable para la conexion
$conn = mysqli_connect($servidor, $bd_usuario, $bd_password, $base);

//probar conexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Conexion realizada correctamente";

?>