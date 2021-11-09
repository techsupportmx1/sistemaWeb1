<?php 
session_start();
include_once "conexion.php";
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
.Estilo2 {font-size: xx-large}
.Estilo3 {color: #FF0000}
-->
</style>
<link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>

<p align="center" class="alert-danger Estilo2 Estilo3"><strong>Registrar equipo de computo</strong></p>
<form name="frm1" method="post" action="registro_equipo.php">
  <p>
    <input type="hidden" name="id" value="">
  </p>
  <p>&nbsp;</p>
  <p align="center" class="Estilo1"><strong>Numero de computadora
      <input name="num_equipo" type="text" class="list-group-item-info" value="" required placeholder="numero computadora" /> 
  </strong></p>
  <p align="center" class="Estilo1"><strong>Procesador
    <input name="procesador" type="text" class="list-group-item-info" value="" required placeholder="tipo procesador" />
  </strong></p>
  <p align="center" class="Estilo1"><strong> Sistema operativo
      <input name="sistema_operativo" type="text" class="list-group-item-info" value="" required placeholder="tipo sistema operativo" />
  </strong></p>
  <p align="center" class="Estilo1"><strong>Modelo
      <input name="modelo" type="text" class="list-group-item-info" value="" required placeholder="tipo modelo"/>
  </strong></p>
	<p align="center" class="Estilo1"><strong>Marca del Monitor
        <input name="marca" type="text" class="list-group-item-info" value="" required placeholder="marca" />
	</strong></p>
	<p align="center" class="Estilo1"><strong>
	Serial teclado
        <input name="serial_teclado" type="text" class="list-group-item-info" value="" required placeholder="serial teclado" />
	</strong></p>
	<p align="center" class="Estilo1"><strong>Marca mouse
        <input name="marca_mouse" type="text" class="list-group-item-info" value="" required placeholder="marca mouse" />
	</strong></p>
	<p align="center" class="Estilo1"><strong>
	Cantidad ram
        <input name="cantidad_ram" type="text" class="list-group-item-info" value="" required placeholder="cantidad ram"/>
	</strong></p>
	<p align="center"><span class="Estilo1"><strong>Numero de serie monitor</strong></span><strong>
    <input name="num_serie_monitor" type="text" class="alert-info" value="" required placeholder="num serie monitor" />
    </strong></p>
	<p align="center"><strong><span class="Estilo1">Estado</span>
        <input name="estado" type="text" class="alert-info" value="" required placeholder=" estado" />
	</strong></p>
	<p align="center">&nbsp;</p>
	<p align="center"><strong>
	  
    <input name="Enviar" type="submit" class="btn-danger" value="Registrar" />
      </strong>
</form>


</body>
</html>
