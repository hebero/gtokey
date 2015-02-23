<?php 
session_start();
 include "conexion.php";
 $link=Conectarse();
 $usuario = $_SESSION["usu1"]; 
 $feed1 = $_POST['feedo1'];
 $feed2 = $_POST['feedo2'];
 $feed3 = $_POST['feedo3'];

 $sql1 ="UPDATE feed SET MS_FEED = '$feed1' WHERE feed.id_feed = '1' && usu='$usuario'";
 $sql2 ="UPDATE feed SET MS_FEED = '$feed2' WHERE feed.id_feed = '2' && usu='$usuario'";
 $sql3 ="UPDATE feed SET MS_FEED = '$feed3' WHERE feed.id_feed = '3' && usu='$usuario'";
mysql_query($sql1,$link);
mysql_query($sql2,$link);
mysql_query($sql3,$link);

	$sql2=sprintf("SELECT feed.MS_FEED  FROM feed WHERE id_feed = '1' && usu= '%s'",$usuari);
			$result2= mysql_query($sql2,$link);
			if(mysql_num_rows($result2)){
				$array2=mysql_fetch_array($result2);
				$_SESSION["ms_feed1"]= $array2["MS_FEED"]; 
				
			} 
			$sql4=sprintf("SELECT feed.MS_FEED  FROM feed WHERE id_feed = '2' && usu= '%s'",$usuari);
			$result2= mysql_query($sql4,$link);
			if(mysql_num_rows($result2)){
				$array2=mysql_fetch_array($result2);
				$_SESSION["ms_feed2"]= $array2["MS_FEED"]; 
				
			}
			$sql4=sprintf("SELECT feed.MS_FEED  FROM feed WHERE id_feed = '3' && usu= '%s'",$usuari);
			$result2= mysql_query($sql4,$link);
			if(mysql_num_rows($result2)){
				$array2=mysql_fetch_array($result2);
				$_SESSION["ms_feed3"]= $array2["MS_FEED"]; 
				
			}
echo ('<script> alert("Sus Datos Han sido Actualizados"); </script>');
header('Location: ./misrss.php' );
?>