<?php

//Llamar a la conexion con mysql
include("conexion.php");

//recibir via GET el codigo o id
$codigo_calzado=$_GET['id_calzado'];

$consulta="DELETE FROM calzado WHERE id_calzado='$codigo_calzado'";

if (mysqli_query($conn, $consulta)) {

  //regresar a la pagina principal
  header("location:principal.php");

  
  } else {
    echo "Error al eliminar el calzado: " . mysqli_error($conn);
  }
  
  mysqli_close($conn); 


?> 