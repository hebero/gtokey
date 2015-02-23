<?php
include "conexion.php"; 
$link=Conectarse();
if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
	$a = true;
} 
else 
{
	$a = false; 
}

	if ($a == true)
	{ 
		$oks = 1; 
		$okss = 0; 
		$oksf = 0; 
 
		$sql = sprintf("SELECT usu FROM usuario WHERE usuario.bd_oks = '%s'" , $oks);
		$result=mysql_query($sql,$link);
 
		if(mysql_num_rows($result)){
 
			$sql = "INSERT INTO usuario (nom, ape, corre, usu, contra, contra2) VALUES ('$nombr', '$apelli', '$correo1', '$usuari', '$contras', '$contras2')";
			$result=mysql_query($sql,$link);
			echo ("Sus datos han sido guardados");
		
    	    $oksf = $oksf + 1 ; 

		}
		else {
 
			header("Location: ./index.php");
 
		 } 
		
	}


?> 