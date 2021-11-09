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
</head>

<body>

  <p align="center" class="alert-danger Estilo1"><strong>Listado del equipo de computo. <div align="center"><a href="registrar_equipo.php" class="btn btn-success">Registrar</a></button>
      
    </div></strong></p>
  <table width="83%" border="1" align="center" bordercolor="#FFFFFF">
    <tr class="btn-success">
      <td width="17" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>np</strong></div></td>
      <td width="41" align="center" bordercolor="#0000CC" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>marca</strong></div></td>
      <td width="47" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>modelo</strong></div></td>
      <td width="20" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>so</strong></div></td>
	  <td width="76" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>num_equipo</strong></div></td>
	  <td width="71" align="center" bordercolor="#0000FF" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>procesador</strong></div></td>
	  <td width="85" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>serial_teclado</strong></div></td>
	  <td width="85" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>marca_mouse</strong></div></td>
	  <td width="84" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>cantidad_ram</strong></div></td>
	  <td width="115" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>num_serie_monitor</strong></div></td>
	  <td width="51" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>estado</strong></div></td>
	  <td width="51" align="center" bgcolor="#FFFFFF" class="bg-success"><div align="center"><strong>modificar</strong></div></td>
    </tr>
	<?php 
$sql = mysql_query("SELECT * FROM equipo_de_computo");
while($resultado = mysql_fetch_array($sql)) {
?> 
<tr>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['id']; ?></div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['marca']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['modelo']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['sistema_operativo']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['num_equipo']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['procesador']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['serial_teclado']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['marca_mouse']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['cantidad_ram']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['num_serie_monitor']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><div align="center"><?php echo $resultado['estado']; ?>  </div></td>
<td bordercolor="#FFFFFF" bgcolor="#CC66CC"><button >
    <div align="center">
    <div align="center"><a href="modificar_computadora.php?id=<?php echo $resultado['id']; ?>" class="btn btn-danger">Modificar</a>
        </button>
      
       
<?php 
}
?></tr>
</table>
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  
</body>
</html>

