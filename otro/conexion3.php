<?php
	function Conectarse(){
		if (!($link=mysql_connect("mysql.hostinger.es","u142759110_heber","123456"))) {
		echo ("Error conectando a la base de datos");
		exit();
	}
	if (!mysql_select_db("u142759110_prueb",$link)){ 
		echo ("Error al conectar a la base de datos");
		exit();
	}
	return $link;
	}
		$link = Conectarse();
		mysql_close($link); 
?>