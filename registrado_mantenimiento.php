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
body,td,th {
	color: #9900FF;
}
.Estilo1 {
	font-size: xx-large;
	font-weight: bold;
}
-->
</style>
<link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head><body>

<form id="form1" name="form1" method="post" action="">
<p align="center" class="alert-danger Estilo1">Registro de mantenimiento del equipo de computo.

<p>
<p>
<p align="center"><strong>fecha de mantenimiento
  <input name="fecha_mantenimiento" type="text" class="btn-info" />
</strong></p>
<p align="center"><strong>Nombre del encargado
    <input name="nombre_del_encargado" type="text" class="btn-info" />
</strong></p>
 </strong></p>
 <p align="center"><strong>Tipo de mantenimiento
  <select name="tipo_mantenimiento" size="1" class="bg-info">
    <option>correctivo</option>
  <option>preventivo</option>
    
     
   
   
    </select>
 </strong></p>
 <div align="center"><strong>Observaciones
   </strong>
   <input name="observaciones" type="text" class="btn-info" />
 </div><br>
   <table width="50%" align="center">
  <tr>
    <td align="center"><input type="submit" name="Submit" value="Guardar" /></td>
  </tr>
</table>
     
   
   </label>
 </form>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
</body>
</html>
