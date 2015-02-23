<?php
session_start();
?>
<?php
		include "conexion.php";
		$link=Conectarse();
		$usuari = $_POST['usuar1'];
		$contras = $_POST['contrase1'];
		$contras=sha1(md5($contras));
		$numero = "1"; 

		$sql = sprintf("SELECT usuario.nom, usuario.ape, usuario.usu, usuario.contra, usuario.corre FROM usuario WHERE usuario.usu= '%s' && usuario.contra= '%s'", $usuari, $contras);
		$result=mysql_query($sql,$link);
		if(mysql_num_rows($result)){
			$array=mysql_fetch_array($result);
			$_SESSION["nom1"]= $array["nom"];
			$_SESSION["ape1"]= $array["ape"];  
			$_SESSION["usu1"]= $array["usu"];
			$_SESSION["contra1"]= $array["contra"]; 
			$_SESSION["corre1"]= $array["corre"];
			$sql2=sprintf("SELECT feed.MS_FEED  FROM feed WHERE id_feed = '1' && usu= '%s'",$usuari);
			$result2= mysql_query($sql2,$link);
			if(mysql_num_rows($result2)){
				$array2=mysql_fetch_array($result2);
				$_SESSION["ms_feed1"]= $array2["MS_FEED"]; 
				
			}
			$sql2=sprintf("SELECT feed.MS_FEED  FROM feed WHERE id_feed = '2' && usu= '%s'",$usuari);
			$result2= mysql_query($sql2,$link);
			if(mysql_num_rows($result2)){
				$array2=mysql_fetch_array($result2);
				$_SESSION["ms_feed2"]= $array2["MS_FEED"]; 
				
			}
			$sql2=sprintf("SELECT feed.MS_FEED  FROM feed WHERE id_feed = '3' && usu= '%s'",$usuari);
			$result2= mysql_query($sql2,$link);
			if(mysql_num_rows($result2)){
				$array2=mysql_fetch_array($result2);
				$_SESSION["ms_feed3"]= $array2["MS_FEED"]; 
				
			}
			header("Location: ./index.php");
			}
			else {
			echo "<h2>Login o Password Incorrectos</h2>";
			}
?>