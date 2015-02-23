<?php
 
include "conexion.php";
 $link=Conectarse();
 
 $nombr = $_POST['nombres'];
 $apelli = $_POST['apellidos'];
 $correo1 = $_POST['correo'];
 $usuari = $_POST['usuario'];
 $contras = $_POST['contrasena'];
 $contras2 = $_POST['contrasena2'];
 
$sql = sprintf("SELECT usu FROM usuario WHERE usuario.usu = '%s'" , $usuari);
 
$result=mysql_query($sql,$link);
 
if(mysql_num_rows($result)){
 
echo "El usuario ya existe en la Base de Datos";
 
} else {
 
mysql_free_result($result);
 
if($contras!=$contras2) {
 
echo ("Las Contraseñas deben coincidir");
 
} else {
 
$contras=sha1(md5($contras));
 
$sql = "INSERT INTO usuario (nom, ape, corre, usu, contra) VALUES ('$nombr', '$apelli', '$correo1', '$usuari', '$contras')";
$result=mysql_query($sql,$link);
$sql = "INSERT INTO contador (usu) VALUES ('$usuari')";
$result=mysql_query($sql,$link);
echo ("Sus datos han sido guardados");

 
if(mysql_affected_rows()){
 
header("Location: ./index.php");
 
} else {
 
echo ("Ocurrio un Error al Introducir los Datos");
 
}
 
}
 
}
 
?>