<?php 
session_start();
include "conexion.php";
$link=Conectarse();
$usuario = $_SESSION["usu1"]; 
$ms_feeda =$_POST["rss_add"];
$ms_feeda2 =$_POST["rss_add2"];
$ms_feeda3 =$_POST["rss_add3"];
$sql1 = "INSERT INTO feed (usu, id_feed, MS_FEED) VALUES ('$usuario','1','$ms_feeda')";
$sql2 = "INSERT INTO feed (usu, id_feed, MS_FEED) VALUES ('$usuario','2','$ms_feeda2')";
$sql3 = "INSERT INTO feed (usu, id_feed, MS_FEED) VALUES ('$usuario','3','$ms_feeda3')";
mysql_query($sql1,$link);
mysql_query($sql2,$link);
mysql_query($sql3,$link); 

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

			header("Location: ./misrss.php"); 
 ?>