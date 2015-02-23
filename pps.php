<?php
$oksme = -1; 
$oksma = 1; 
session_start();
$usuari = $_SESSION["usu1"];
include "conexion.php"; 
$link=Conectarse();
@$dato1 = $_POST["datos1"]; 
@$dato2 = $_POST["datos2"]; 
@$dato3 = $_POST["datos3"];
@$dato4 = $_POST["datos4"]; 
@$dato5 = $_POST["datos5"]; 
@$dato6 = $_POST["datos6"]; 
@$dato7 = $_POST["datos7"]; 
@$dato8 = $_POST["datos8"]; 
@$dato9 = $_POST["datos9"]; 
@$dato10 = $_POST["datos10"]; 
@$dato11 = $_POST["datos11"]; 
@$dato12 = $_POST["datos12"]; 
@$dato13 = $_POST["datos13"]; 
@$dato14 = $_POST["datos14"]; 
@$dato15 = $_POST["datos15"]; 
@$dato16 = $_POST["datos16"]; 
@$dato17 = $_POST["datos17"]; 
@$dato18 = $_POST["datos18"]; 
@$dato19 = $_POST["datos19"]; 
@$dato20 = $_POST["datos20"]; 
@$dato21 = $_POST["datos21"]; 
@$dato22 = $_POST["datos22"]; 
@$dato23 = $_POST["datos23"]; 
@$dato24 = $_POST["datos24"]; 
@$dato25 = $_POST["datos25"]; 
@$dato26 = $_POST["datos26"]; 
@$dato27 = $_POST["datos27"]; 
@$dato28 = $_POST["datos28"]; 
@$dato29 = $_POST["datos29"]; 
@$dato30 = $_POST["datos30"];
@$dato31 = $_POST["datos31"];
@$dato32 = $_POST["datos32"];
@$dato33 = $_POST["datos33"];
@$dato34 = $_POST["datos34"];
@$dato35 = $_POST["datos35"];
@$dato36 = $_POST["datos36"];


$idcont = $_POST["idcont"]; 
if($idcont == 1) 
{
	$insertar2 = mysql_query("update mostrar set mos1='$dato1' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos1 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos1'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos1='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos1='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}
if($idcont == 2) 
{
	$insertar2 = mysql_query("update mostrar set mos2='$dato2' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos2 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos2'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos2='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos2='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}
if($idcont == 3) 
{
	$insertar2 = mysql_query("update mostrar set mos3='$dato3' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos3 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos3'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos3='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos3='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 4) 
{
	$insertar2 = mysql_query("update mostrar set mos4='$dato4' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos4 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos4'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos4='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos4='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 5) 
{
	$insertar2 = mysql_query("update mostrar set mos5='$dato5' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos5 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos5'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos5='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos5='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 6) 
{
	$insertar2 = mysql_query("update mostrar set mos6='$dato6' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos6 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos6'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos6='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos6='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 7) 
{
	$insertar2 = mysql_query("update mostrar set mos7='$dato7' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos7 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos7'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos7='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos7='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 8) 
{
	$insertar2 = mysql_query("update mostrar set mos8='$dato8' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos8 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos8'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos8='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos8='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 9) 
{
	$insertar2 = mysql_query("update mostrar set mos9='$dato9' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos9 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos9'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos9='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos9='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 10) 
{
	$insertar2 = mysql_query("update mostrar set mos10='$dato10' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos10 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos10'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos10='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos10='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 11) 
{
	$insertar2 = mysql_query("update mostrar set mos11='$dato11' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos11 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos11'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos11='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos11='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 12) 
{
	$insertar2 = mysql_query("update mostrar set mos12='$dato12' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos12 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos12'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos12='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos12='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 13) 
{
	$insertar2 = mysql_query("update mostrar set mos13='$dato13' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos13 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos13'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos13='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos13='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 14) 
{
	$insertar2 = mysql_query("update mostrar set mos14='$dato14' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos14 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos14'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos14='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos14='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 15) 
{
	$insertar2 = mysql_query("update mostrar set mos15='$dato15' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos15 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos15'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos15='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos15='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 16) 
{
	$insertar2 = mysql_query("update mostrar set mos16='$dato16' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos16 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos16'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos16='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos16='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 17) 
{
	$insertar2 = mysql_query("update mostrar set mos17='$dato17' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos17 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos17'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos17='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos17='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 18) 
{
	$insertar2 = mysql_query("update mostrar set mos18='$dato18' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos18 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos18'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos18='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos18='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 19) 
{
	$insertar2 = mysql_query("update mostrar set mos19='$dato19' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos19 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos19'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos19='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos19='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}


if($idcont == 20) 
{
	$insertar2 = mysql_query("update mostrar set mos20='$dato20' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos20 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos20'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos20='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos20='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 21) 
{
	$insertar2 = mysql_query("update mostrar set mos21='$dato21' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos21 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos21'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos21='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos21='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 22) 
{
	$insertar2 = mysql_query("update mostrar set mos22='$dato22' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos22 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos22'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos22='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos22='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 23) 
{
	$insertar2 = mysql_query("update mostrar set mos23='$dato23' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos23 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos23'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos23='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos23='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 24) 
{
	$insertar2 = mysql_query("update mostrar set mos24='$dato24' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos24 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos24'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos24='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos24='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 25) 
{
	$insertar2 = mysql_query("update mostrar set mos25='$dato25' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos25 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos25'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos25='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos25='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 26) 
{
	$insertar2 = mysql_query("update mostrar set mos26='$dato26' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos26 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos26'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos26='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos26='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 27) 
{
	$insertar2 = mysql_query("update mostrar set mos27='$dato27' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos27 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos27'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos27='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos27='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 28) 
{
	$insertar2 = mysql_query("update mostrar set mos28='$dato28' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos28 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos28'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos28='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos28='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 29) 
{
	$insertar2 = mysql_query("update mostrar set mos29='$dato29' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos29 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos29'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos29='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos29='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 30) 
{
	$insertar2 = mysql_query("update mostrar set mos30='$dato30' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos30 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos30'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos30='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos30='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 31) 
{
	$insertar2 = mysql_query("update mostrar set mos31='$dato31' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos31 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos31'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos31='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos31='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 32) 
{
	$insertar2 = mysql_query("update mostrar set mos32='$dato32' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos32 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos32'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos32='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos32='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 33) 
{
	$insertar2 = mysql_query("update mostrar set mos33='$dato33' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos33 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos33'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos33='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos33='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 34) 
{
	$insertar2 = mysql_query("update mostrar set mos34='$dato34' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos34 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos34'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos34='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos34='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 35) 
{
	$insertar2 = mysql_query("update mostrar set mos35='$dato35' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos35 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos35'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos35='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos35='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}

if($idcont == 36) 
{
	$insertar2 = mysql_query("update mostrar set mos36='$dato36' where id_m='1'", $link); 
	if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
		$okscont = true; 
		if($okscont == true)
		{
			$sql = sprintf("SELECT contador.pos36 FROM contador WHERE contador.usu= '%s'", $usuari);
			$result=mysql_query($sql,$link);
			if ($reg=mysql_fetch_array($result))
			{
				$valor = $reg['pos36'];
			
				if($valor == 1)
				{
					$insertar = mysql_query("update contador set pos36='$oksme' where usu='$usuari'", $link);
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
				if($valor == -1)
				{
					$insertar = mysql_query("update contador set pos36='$oksma' where usu='$usuari'", $link);			
					if($insertar)
					{   
						$valor = $reg['oks'];
						echo(" REDIRECCIONAR A INDEX "); 
					}
					else
					{
						echo("ERROR"); 
					}
				}
			}
		
		}

	} 
	else
	{
		echo("<br> <br> hola comieron popo"); 
	}
}
header("Location: ./noticiasgt.php");

	
?>