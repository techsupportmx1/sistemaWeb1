<?php 
session_start();
include_once "conexion.php";
$id=$_GET['id'];
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Estilo1 {color: #9900CC}
.Estilo2 {
	font-size: xx-large;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 
$sql = mysql_query("SELECT * FROM equipo_de_computo WHERE id='$id'");
while($resultado = mysql_fetch_array($sql)) {
?> 
<p align="center" class="alert-danger Estilo2 ">Modificar equipo de computo</p>
<form name="frm1" method="post" action="modificar_compu.php">
  <p>
    <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
  </p>
  <p>&nbsp;</p>
  <p align="center" class="Estilo1"><strong>Numero de computadora
      <input name="num_equipo2" type="text" class="list-group-item-info" value="<?php echo $resultado['num_equipo']; ?>" />
  </strong></p>
  <p align="center" class="Estilo1"><strong>Procesador
    <input name="sistema_operativo" type="text" class="list-group-item-info" value="<?php echo $resultado['sistema_operativo']; ?>" >
  </strong></p>
  <p align="center" class="Estilo1"><strong> Sistema operativo
      <input name="marca" type="text" class="list-group-item-info" value="<?php echo $resultado['marca']; ?>" />
  </strong></p>
  <p align="center" class="Estilo1"><strong>Modelo
      <input name="modelo" type="text" class="list-group-item-info" value="<?php echo $resultado['modelo']; ?>">
  </strong></p>
	<p align="center" class="Estilo1"><strong>Marca
        <input name="marca_monitor" type="text" class="list-group-item-info" value="<?php echo $resultado['marca_monitor']; ?>" />
	</strong></p>
	<p align="center" class="Estilo1"><strong>
	Serial teclado
        <input name="serial_teclado" type="text" class="list-group-item-info" value="<?php echo $resultado['serial_teclado']; ?>" />
	</strong></p>
	<p align="center" class="Estilo1"><strong>Marca mouse
        <input name="marca_mouse" type="text" class="list-group-item-info" value="<?php echo $resultado['marca_mouse']; ?>" />
	</strong></p>
	<p align="center" class="Estilo1"><strong>
	Cantidad ram
        <input name="cantidad_ram" type="text" class="list-group-item-info" value="<?php echo $resultado['cantidad_ram']; ?>">
	</strong></p>
	<p align="center"><span class="Estilo1"><strong>Numero de serie monitor</strong></span><strong>
    <input name="num_serie_monitor" type="text" class="alert-info" value="<?php echo $resultado['num_serie_monitor']; ?>" />
    </strong></p>
	<p align="center"><strong><span class="Estilo1">Estado</span>
        <input name="estado" type="text" class="alert-info" value="<?php echo $resultado['estado']; ?>" />
	</strong></p>
	<p align="center">&nbsp;</p>
	<p align="center"><strong>
	  
    <input name="Enviar" type="submit" class="btn-danger" value="modificar" />
      </strong>
</form>
<?php 
}
?>

</body>
</html>
