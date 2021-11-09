<?php 
	session_start();
	require_once("dompdf/dompdf_config.inc.php");
	include ('conexion.php');
	$id=$_GET['id'];

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte</title>
<style type="text/css">
<!--

.Firm {font-size: 15px}
.Estilo2 {
color: #FF0000;
font-weight: bold;
}
.Estilo3 {
color: #0000FF;
font-weight: bold;
}
.Estilo4 {
	color: #000000;
	font-weight: bold;
}
.Estilo4_1 {
	color: #000000;
	
}
.Estilo5 {color: #009900; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="center">
  <br>
   ';
   

$sql=mysql_query("SELECT * FROM mantenimiento WHERE id='$id'");
  while($resultado=mysql_fetch_array($sql)){
 
$codigoHTML.='
<div align="center">
<span class="Estilo4">REPORTE DE MANTENIMIENTO AL EQUIPO DE COMPUTO</span>
</div><br>

<div align="left">
<span class="Estilo4">NUM EQUIPO<span class="Estilo3"><u>'.$resultado['num_equipo'].'</u></span></span>
</div>

<div align="left">
<span class="Estilo4">FECHA DE MANTENIMIENTO<span class="Estilo3"><u>'.$resultado['fecha_mantenimiento'].'</u></span></span>
</div>

<div align="left">
<span class="Estilo4">RESPONSABLE<span class="Estilo3"><u>'.$resultado['nombre_del_responsable'].'</u></span></span>
</div><strong></strong>

<div align="left">
<span class="Estilo4">TIPO DE MANTENIMIENTO<span class="Estilo3"><u>'.$resultado['tipo_mantenimiento'].'</u></span></span>
</div><strong></strong>

<div align="left">
<span class="Estilo4">OBERVACIONES<span class="Estilo3"><u>'.$resultado['observaciones'].'</u></span></span>
</div><strong></strong>



  ';
} 
$codigoHTML.='

  
  

  
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_inventario_equipo_computo.pdf");
?>