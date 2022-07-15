<?php

echo "<h2>Recibiendo informacion del formulario de registro</h2>";
$codigo_calzado=$_GET['codigo_calzado'];
echo "El codigo del producto es: ".$codigo_calzado."<br>";
$descripcion_calzado=$_GET['descripcion_calzado'];
echo "La descripcion es: ".$descripcion_calzado."<br>";
$talla_calzado=$_GET['talla_calzado'];
echo  "La talla es :".$talla_calzado."<br>";
$tipo_calzado=$_GET['tipo_calzado'];
echo  "El tipo de calzado es :".$tipo_calzado."<br>";
$precio_calzado=$_GET['precio_calzado'];
echo "El precio es: ".$precio_calzado."<br>";

include("conexion.php");

$sql="INSERT INTO calzado VALUES ('$codigo_calzado','$descripcion_calzado','$talla_calzado','$tipo_calzado','$precio_calzado')";

//evaluar si se registro correctamente el calzado
if(mysqli_query($conn,$sql))
{
    echo "Calzado registrado correctamente";
}
else{
    echo "Error: ".$sql. "<br>".mysqli_error($conn);
}


?>