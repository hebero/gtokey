<?php
		$host="mysql.hostinger.es";
		$usuario="u142759110_admin";
		$contraseña="123456";
		$nombre="u142759110_datos";
		$conexion = @mysql_connect($host, $usuario, $contraseña) or die(mysql_error());
		$db = @mysql_select_db($nombre, $conexion) or die("Error al conectar a la base de datos.". mysql_error());
?>