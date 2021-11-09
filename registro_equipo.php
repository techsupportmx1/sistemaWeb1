<?php 
session_start();
include_once "conexion.php";


$num_equipo=$_POST['num_equipo'];
$procesador=$_POST['procesador'];
$sistema_operativo=$_POST['sistema_operativo'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$serial_teclado=$_POST['serial_teclado'];
$marca_mouse=$_POST['marca_mouse'];
$cantidad_ram=$_POST['cantidad_ram'];
$num_serie_monitor=$_POST['num_serie_monitor'];
$estado=$_POST['estado'];

$sql="INSERT INTO equipo_de_computo(sistema_operativo, marca, modelo, num_equipo, procesador, serial_teclado, marca_mouse, cantidad_ram, num_serie_monitor, estado) 
VALUES('$sistema_operativo','$marca','$modelo','$num_equipo','$procesador','$serial_teclado','$marca_mouse','$cantidad_ram','$num_serie_monitor','$estado')";

$registros=mysql_query($sql);
if(!$registros){
echo"error";

}
echo "<script language='JavaScript' tyoe='text/JavaScript'>
alert('equipo de computo registrado') 
window.location='listado_computadoras.php' </script>";

?>