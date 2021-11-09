<?php 
	session_start();
	include_once "conexion.php";
?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
a {
	font-family: Courier New, Courier, monospace;
}
a:visited {
	color: #FFFF00;
}
-->
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #9900FF;
	font-size: xx-large;
}
-->
</style>
<link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo3 {font-size: xx-large}
-->
</style>
<p align="center"><img src="itsz.PNG" width="1114" height="163" /></p>
<p>&nbsp;</p>
<form name="form1" method="post" action="" >
  <div align="center">
    <h1 class="alert-danger Estilo3"><strong>INSTITUTO TECNOLOGICO SUPERIOR DE ZONGOLICA CAMPUS &quot;TEZONAPA&quot;  </strong></h1>
    <h1 class="Estilo1 Estilo1">&nbsp;</h1>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>
      
      <span class="alert-success">
      <?php 
	  	if(!empty($_POST['usuario']) and !empty($_POST['password'])){ 
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];
			
			$sql=mysql_query("SELECT * FROM usuario WHERE usuario='$usuario' and password='$password'");				
			if($row=mysql_fetch_array($sql)){
				
					echo '<meta http-equiv="refresh" content="2;url=pagina_principal.php">';
						}
		}else{
			echo '	<input type="text" name="usuario"  placeholder="Usuario"  required><br/><br/>
	
					<input type="password" name="password" placeholder="Contrase&ntilde;a" required><br/><br/>
				<div align="center"><button type="submit"><strong>Entrar</strong></button></div>';		
		}
	  ?>
      </span></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</form>
