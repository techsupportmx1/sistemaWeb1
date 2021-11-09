<?php 
session_start();
include_once "conexion.php";
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
body {
	background-color: #CC33FF;
}
-->
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
h1 {
	font-size: 2.5px;
}
h2 {
	font-size: 2px;
}
h3 {
	font-size: 1.75px;
}
h4 {
	font-size: 1.5px;
}
h5 {
	font-size: 1.25px;
}
h6 {
	font-size: 1px;
}
.Estilo1 {font-size: xx-large}
-->
</style>
<link href="no/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo2 {color: #9900CC}
-->
</style>
</head>

<body>

  <p align="center" class="alert-danger Estilo1">
  <strong>Listado del equipo de mantenimientos. </strong>
  </p>
  <table width="96%" border="1" align="center" bordercolor="#FFFFFF">
    <tr class="btn-success">
      <td width="20" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>id</strong></div></td>
      <td width="128" align="center" bordercolor="#0000CC" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>num de equipo</strong></div></td>
      <td width="174" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>fecha mantenimiento</strong></div></td>
      <td width="195" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>nombre del responsable</strong></div></td>
	  <td width="213" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>tipo mantenimiento</strong></div></td>
	  <td width="167" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>observaciones</strong></div></td>
	  <td width="141">Imprimir reporte </td>
    </tr>
	<?php 
$sql = mysql_query("SELECT * FROM mantenimiento");
while($resultado = mysql_fetch_array($sql)) {
?> 
<tr>
<td bordercolor="#9900FF"><div align="center" class="Estilo2"><?php echo $resultado['id']; ?></div></td>
    <td bordercolor="#9900FF"><div align="center" class="Estilo2"><?php echo $resultado['num_equipo']; ?></div></td>
    <td bordercolor="#9900FF"><div align="center" class="Estilo2"><?php echo $resultado['fecha_mantenimiento']; ?></div></td>
	<td bordercolor="#9900FF"><div align="center" class="Estilo2"><?php echo $resultado['nombre_del_responsable']; ?></div></td>
	<td bordercolor="#9900FF"><div align="center" class="Estilo2"><?php echo $resultado['tipo_mantenimiento']; ?></div></td>
    <td bordercolor="#9900FF"><div align="center" class="Estilo2"><?php echo $resultado['observaciones']; ?></div></td>
	<td bordercolor="#9900FF"><div align="center" class="Estilo2"> <a href="reporte.php?id=<?php echo $resultado['id']; ?>" class="btn  card-danger">Imprimir</a>
        </button>
      
        </div></td>
<?php 
}
?></tr>
</table>
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  
</body>
</html>
