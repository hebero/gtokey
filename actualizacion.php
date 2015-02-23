<?php 
session_start();
 include "conexion.php";
$link=Conectarse();
$usuario = $_SESSION["usu1"]; 
 $nom = $_POST['nombres2'];
 $apelli = $_POST['apellidos2'];
 $correo1 = $_POST['correo2'];
 $contras = $_POST['contrasena2'];
 $contras2 = $_POST['contrasena3'];
$sql ="UPDATE  usuario SET nom='$nom', ape='$apelli', corre='$correo1', contra='$contras' WHERE usu='$usuario'" ; 
$result=mysql_query($sql,$link);
echo ('<script> alert("Sus Datos Han sido Actualizados"); </script>');
header('Location: ./index.php' );
?>