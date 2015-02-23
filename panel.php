<?php
 
session_start();
 
?>
<!DOCTYPE html><html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel ="STYLESHEET" type = "text/css" href = "estiloinicio.css">
<head>
	<title>Panel Inicio de Sesion</title>
	</head>
<body>
	<br>
			
	<div class="grid_1" >
	<h1>Bienvenido <?php echo $_SESSION["nom1"]." ".$_SESSION["ape1"]; ?></h1>
 
					<p><a href="cerrar_sesion.php" >Cerrar Sesión</a></p>
	</div>
	
</body>
<footer class="footer">
	<p class="pp">Derechos Reservados</p>
</footer>
</html>

