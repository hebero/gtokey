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

 $usuario = $_SESSION["usu1"];
 $titulo = $_POST['titulo'];
 $subtitulo = $_POST['subtitulo'];
 $etiqueta = $_POST['etiqueta'];
 $contenido = $_POST['contenido'];
 
 //$fecha = $_POST['fecha'];

 $sql = "INSERT INTO gto_noticias (id, titulo, subtitulo, etiqueta, nombre, imagen, contenido, dom) VALUES (NULL, '$titulo', '$subtitulo', '$etiqueta', '$nombreArchivo', '$ruta', '$contenido', '1')";
$result=mysql_query($sql,$link);
echo ('<script> alert("Sus Datos Han sido Guardados"); </script>');
if(mysql_affected_rows()){
header("Location: ./noticiasgt.php");
} else {
echo ('<script> alert("Ocurrio un Error al Introducir sus Datos!"); </script>');
}
?>