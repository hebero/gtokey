<?php
 session_start();
 ?>
 <?php
 include "conexion.php";
$link=Conectarse();

$ruta="imagenes"; 
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo); 
$ruta=$ruta."/".$nombreArchivo;

$id = "";
$titulo=$_POST['titulo'];
$subtitulo=$_POST['subtitulo'];
$etiqueta=$_POST['etiqueta'];
$contenido=$_POST['contenido'];
$etiqueta=$_POST['etiqueta'];



$insertar = mysql_query("INSERT INTO gto_noticias VALUES ('".$id."','".$titulo."','".$subtitulo."','".$etiqueta."','".$nombreArchivo."','".$ruta."','".$contenido."')"); 
if($insertar)
{

 
header("Location: ./verimg.php");
}
else
{
echo("Lo siento"); 
}


?>
