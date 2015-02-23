<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<?php
session_start();
  $oksme = -1; 
  $oksma = 1;
?>
<html>
  <head>
    <title>Gtokey</title>

    <link rel="stylesheet" href="css/avgrund.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="StyleSheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript">
    var i = 0;
    function anterior(){
    i=i+333;
    if(i>=0){
      document.getElementById('contep').style.left='0px';
      i=0;
    }else{
      document.getElementById('contep').style.left=i+'px';
    }
  }
    function btn_siguiente(){
    i= i -333;
    if(i<=-1329){
      document.getElementById('contep').style.left='-1329px';
      i=-1329;
    }else{
    document.getElementById('contep').style.left=i+'px';
    }
    }
    </script>
    <script>
    window.addEventListener('load',inicio,false);
    var a = false;
    function inicio()
    {
    document.getElementById("formulario1").addEventListener('submit',validar,false);
    document.getElementById('btn2').addEventListener('mousedown',presion1,false);
    document.getElementById('btn2').addEventListener('dblclick',presion1,false);
    document.getElementById('bodyconte').addEventListener('mouseover',ocultar,false);
    }
    function limpia5()
    {
    a = true;
    }
    function ocultar(event)
    {
    document.getElementById('tooltip3').style.display="none";
    }
    
    function mostrar()
    {
    document.getElementById("tooltip3").style.display="block";
    }
    function validar(evt)
    {
    var nom=document.getElementById("nombre").value;
    var ape=document.getElementById("apellido").value;
    var co=document.getElementById("correo").value;
    var usu=document.getElementById("usuario").value;
    var cla=document.getElementById("contrasena").value;
    var con2=document.getElementById("contrasena2").value;
    if (usu.length==0 || cla.length==0 || nom.length==0 || ape.length==0 || co.length==0 || con2.length==0)
    {
    a = false;
    evt.preventDefault();
    }
    else
    {
    a = true;
    }
    if (cla != con2)
    {
    
    document.getElementById('error').innerHTML=(" *Las contraseñas no coinciden ");
    document.getElementById("contrasena").value="";
    document.getElementById("contrasena2").value="";
    evt.preventDefault();
    }
    
    if ( a === true)
    {
    if (cla.length < 6)
    {
    document.getElementById('error').innerHTML=(" *Contraseña mayor de 6 caracteres ");
    document.getElementById("contrasena").value="";
    document.getElementById("contrasena2").value="";
    evt.preventDefault();
    
    }
    }
    
    
    }
    
    function presion1(evt)
    {
    var nom=document.getElementById("nombre").value;
    var ape=document.getElementById("apellido").value;
    var co=document.getElementById("correo").value;
    var usu=document.getElementById("usuario").value;
    var cla=document.getElementById("contrasena").value;
    var con2=document.getElementById("contrasena2").value;
    if (usu.length==0 || cla.length==0 || nom.length==0 || ape.length==0 || co.length==0 || con2.length==0)
    {
    alert("Debe llenar todos los campos");
    evt.preventDefault();
    }
    } 
    function openDialog() {
    Avgrund.show( "#default-popup" );
    }
    function closeDialog() {
    Avgrund.hide();
    }
    </script>
    <script>
    function openDialog() {
    Avgrund.show( "#default-popup" );
    }
    function closeDialog() {
    Avgrund.hide();
    }
    function openDialog2() {
    Avgrund.show( "#poup-datos" );
    }
    function openDialog3() {
    Avgrund.show( "#poup-Noti" );
    }
    function openDialog4() {
    Avgrund.show( "#poup-Add" );
    }
    function openDialog5() {
    Avgrund.show( "#poup-ms_feed" );
    }
    </script>
  </head>
<?php 


include "conexion.php"; 
$link=Conectarse();


  $result = mysql_query("SELECT mostrar.mos1, mostrar.mos2, mostrar.mos3, mostrar.mos4, mostrar.mos5, mostrar.mos6, mostrar.mos7,
mostrar.mos8, mostrar.mos9, mostrar.mos10, mostrar.mos11, mostrar.mos12, mostrar.mos13, mostrar.mos14, mostrar.mos15, mostrar.mos16,
mostrar.mos17, mostrar.mos18, mostrar.mos19, mostrar.mos20, mostrar.mos21, mostrar.mos22, mostrar.mos23, mostrar.mos24, mostrar.mos25, 
mostrar.mos26, mostrar.mos27, mostrar.mos28, mostrar.mos29, mostrar.mos30, mostrar.mos31, mostrar.mos32, mostrar.mos33, mostrar.mos34,
mostrar.mos35, mostrar.mos36  FROM mostrar WHERE mostrar.id_m= '1'", $link);

      if ($reg=mysql_fetch_array($result))
    {
      $dato1 = $reg['mos1']; $dato2 = $reg['mos2']; $dato3 = $reg['mos3']; $dato4 = $reg['mos4']; $dato5 = $reg['mos5'];
      $dato6 = $reg['mos6']; $dato7 = $reg['mos6']; $dato8 = $reg['mos8']; $dato9 = $reg['mos9']; $dato10 = $reg['mos10'];
      $dato11 = $reg['mos11']; $dato12 = $reg['mos12']; $dato13 = $reg['mos13']; $dato14 = $reg['mos14']; $dato15 = $reg['mos15'];
      $dato16 = $reg['mos16']; $dato17 = $reg['mos17']; $dato18 = $reg['mos18']; $dato19 = $reg['mos19']; $dato20 = $reg['mos20'];
      $dato21 = $reg['mos21']; $dato22 = $reg['mos22']; $dato23 = $reg['mos23']; $dato24 = $reg['mos24']; $dato25 = $reg['mos25'];
      $dato26 = $reg['mos26']; $dato27 = $reg['mos27']; $dato28 = $reg['mos28']; $dato29 = $reg['mos29']; $dato30 = $reg['mos30'];
      $dato31 = $reg['mos31']; $dato32 = $reg['mos32']; $dato33 = $reg['mos33']; $dato34 = $reg['mos34']; $dato35 = $reg['mos35'];
      $dato36 = $reg['mos36'];

      $array[0] = "";
      $array[1] = $dato1;
      $array[2] = $dato2;
      $array[3] = $dato3;
      $array[4] = $dato4;
      $array[5] = $dato5;
      $array[6] = $dato6;
      $array[7] = $dato7;
      $array[8] = $dato8;
      $array[9] = $dato9;
      $array[10] = $dato10;
      $array[11] = $dato11;
      $array[12] = $dato12;
      $array[13] = $dato13;
      $array[14] = $dato14;
  /*  $array[15] = $dato16;
      $array[16] = $dato17;
      $array[17] = $dato18;
      $array[18] = $dato19;
      $array[19] = $dato20;
      $array[20] = $dato21;
      $array[21] = $dato22;
      $array[22] = $dato23;
      $array[23] = $dato24;
      $array[24] = $dato25;
      $array[25] = $dato26;
      $array[26] = $dato27;
      $array[27] = $dato28;
      $array[28] = $dato29;
      $array[29] = $dato30;
      $array[30] = $dato31;
      $array[31] = $dato32;
      $array[32] = $dato33;
      $array[33] = $dato34;
      $array[34] = $dato35;
      $array[35] = $dato36;*/

    }
    
  
if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
  $usuari = $_SESSION["usu1"];
  $okscont = true; 
  if($okscont == true)
  {
    $sql = sprintf("SELECT contador.pos1, contador.pos2, contador.pos3, contador.pos4, contador.pos5, contador.pos6, contador.pos7,
    contador.pos8, contador.pos9, contador.pos10, contador.pos11, contador.pos12, contador.pos13, contador.pos14, contador.pos15, 
    contador.pos16, contador.pos17, contador.pos18, contador.pos19, contador.pos20, contador.pos21, contador.pos22, contador.pos23, 
    contador.pos24, contador.pos25, contador.pos26, contador.pos27, contador.pos28, contador.pos29, contador.pos30, contador.pos31, 
    contador.pos32, contador.pos33, contador.pos34, contador.pos35, contador.pos36 FROM contador WHERE contador.usu= '%s'", $usuari);
      $result=mysql_query($sql,$link);
      if ($reg=mysql_fetch_array($result))
    {
      $valor1 = $reg['pos1']; $valor2 = $reg['pos2']; $valor3 = $reg['pos3']; $valor4 = $reg['pos4']; $valor5 = $reg['pos5']; 
      $valor6 = $reg['pos6']; $valor7 = $reg['pos7']; $valor8 = $reg['pos8']; $valor9 = $reg['pos9']; $valor10 = $reg['pos10']; 
      $valor11 = $reg['pos11']; $valor12 = $reg['pos12']; $valor13 = $reg['pos13']; $valor14 = $reg['pos14']; $valor15 = $reg['pos15'];
      $valor16 = $reg['pos16']; $valor17 = $reg['pos17']; $valor18 = $reg['pos18']; $valor19 = $reg['pos19']; $valor20 = $reg['pos20']; 
      $valor21 = $reg['pos21']; $valor22 = $reg['pos22']; $valor23 = $reg['pos23']; $valor24 = $reg['pos24']; $valor25 = $reg['pos25']; 
      $valor26 = $reg['pos26']; $valor27 = $reg['pos27']; $valor28 = $reg['pos28']; $valor29 = $reg['pos29']; $valor30 = $reg['pos30'];
      $valor31 = $reg['pos31']; $valor32 = $reg['pos32']; $valor33 = $reg['pos33']; $valor34 = $reg['pos34']; $valor35 = $reg['pos35']; 
      $valor36 = $reg['pos36'];
      
      
    }   
  }
}
else 
{
      $no = "no";
}
?>

<input type="hidden" name="conectar" id="conectar" value="<?php echo($no); ?>">  
<input type="hidden" name="prueba" value="<?php echo($valor1); ?>" id="text1"> 
<input type="hidden" name="prueba" value="<?php echo($valor2); ?>" id="text2"> 
<input type="hidden" name="prueba" value="<?php echo($valor3); ?>" id="text3"> 
<input type="hidden" name="prueba" value="<?php echo($valor4); ?>" id="text4">
<input type="hidden" name="prueba" value="<?php echo($valor5); ?>" id="text5"> 
<input type="hidden" name="prueba" value="<?php echo($valor6); ?>" id="text6">
<input type="hidden" name="prueba" value="<?php echo($valor7); ?>" id="text7"> 
<input type="hidden" name="prueba" value="<?php echo($valor8); ?>" id="text8">
<input type="hidden" name="prueba" value="<?php echo($valor9); ?>" id="text9"> 
<input type="hidden" name="prueba" value="<?php echo($valor10); ?>" id="text10">
<input type="hidden" name="prueba" value="<?php echo($valor11); ?>" id="text11"> 
<input type="hidden" name="prueba" value="<?php echo($valor12); ?>" id="text12">
<input type="hidden" name="prueba" value="<?php echo($valor13); ?>" id="text13"> 
<input type="hidden" name="prueba" value="<?php echo($valor14); ?>" id="text14">
<input type="hidden" name="prueba" value="<?php echo($valor15); ?>" id="text15"> 
<input type="hidden" name="prueba" value="<?php echo($valor16); ?>" id="text16">
<input type="hidden" name="prueba" value="<?php echo($valor17); ?>" id="text17"> 
<input type="hidden" name="prueba" value="<?php echo($valor18); ?>" id="text18">
<input type="hidden" name="prueba" value="<?php echo($valor19); ?>" id="text19"> 
<input type="hidden" name="prueba" value="<?php echo($valor20); ?>" id="text20">
<input type="hidden" name="prueba" value="<?php echo($valor21); ?>" id="text21"> 
<input type="hidden" name="prueba" value="<?php echo($valor22); ?>" id="text22">
<input type="hidden" name="prueba" value="<?php echo($valor23); ?>" id="text23"> 
<input type="hidden" name="prueba" value="<?php echo($valor24); ?>" id="text24">
<input type="hidden" name="prueba" value="<?php echo($valor25); ?>" id="text25"> 
<input type="hidden" name="prueba" value="<?php echo($valor26); ?>" id="text26">
<input type="hidden" name="prueba" value="<?php echo($valor27); ?>" id="text27"> 
<input type="hidden" name="prueba" value="<?php echo($valor28); ?>" id="text28">
<input type="hidden" name="prueba" value="<?php echo($valor29); ?>" id="text29"> 
<input type="hidden" name="prueba" value="<?php echo($valor30); ?>" id="text30">
<input type="hidden" name="prueba" value="<?php echo($valor31); ?>" id="text31"> 
<input type="hidden" name="prueba" value="<?php echo($valor32); ?>" id="text32">
<input type="hidden" name="prueba" value="<?php echo($valor33); ?>" id="text33"> 
<input type="hidden" name="prueba" value="<?php echo($valor34); ?>" id="text34">
<input type="hidden" name="prueba" value="<?php echo($valor35); ?>" id="text35"> 
<input type="hidden" name="prueba" value="<?php echo($valor36); ?>" id="text36">

  <body onload="javascript:reposicionar();">
    <div id="page-wrap">
      <div id="bodyconte">
        <aside id="default-popup" class="avgrund-popup">
          <form action="ingreso.php" method="POST" id="formulario1">
            <div Class="contenedor_form">
              <h1 style=" position: relative; top:-40px; font:50px Century Gothic; color:white; width:685; background-color:rgb(117, 167, 119); text-align:center; border-radius:13px;">... Registrarse</h1>
              
              <div style="color: red; position: relative; top: -55px; left: 0px;" id="error" >  </div>
              <p>Nombres: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text" maxlength="40" id="nombre" class="resplandor" name="nombres" onkeypress="return regular1(event)"></input>
              </p>
              <p>Apellidos: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text" maxlength="40" id="apellido" class="resplandor" name="apellidos" onkeypress="return regular2(event)" ></input>
              </p>
              <p>Correo electrónico: &nbsp
              <input type="text" maxlength="40" id="correo" class="resplandor" name="correo" onkeypress="return regular3(event)"></input>
              </p>
              <p>Nombre de Usuario: &nbsp
              <input type="text" maxlength="40" id="usuario" class="resplandor" name="usuario" onkeypress="return regular4(event)"></input>
              </p>
              <p>Contraseña: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="password" maxlength="40" id="contrasena" class="resplandor" name="contrasena" onkeypress="return regular5(event)" onblur="limpia5()"></input>
              </p>
              <p>Repita contraseña:&nbsp&nbsp&nbsp
              <input type="password" maxlength="40" id="contrasena2" class="resplandor" name="contrasena2" onkeypress="return regular6(event)"></input>
              </p>
              <input type="button" class="btn1" onclick="javascript:closeDialog();" value="Cerrar">
              <input type="submit" class="btn2" value="Guardar">
            </div>
          </form>
          
        </aside>
        <aside id="poup-datos" class="avgrund-popup">
          <form action="actualizacion.php" method="POST" id="formulario2">
            <div Class="contenedor_form">
              <h1 style=" position: relative; top:-40px; font:50px Century Gothic; color:white; width:685; background-color:rgb(117, 167, 119); text-align:center; border-radius:13px;">... Tus datos</h1>
              
              <div style="color: red; position: relative; top: -55px; left: 0px;" id="error" >  </div>
              <p>Nombres: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text" maxlength="40" id="nombre" class="resplandor" name="nombres" onkeypress="return regular1(event)" value="<?php echo($_SESSION["nom1"]); ?>"></input>
              </p>
              <p>Apellidos: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text" maxlength="40" id="apellido" class="resplandor" name="apellidos" onkeypress="return regular2(event)" value="<?php echo($_SESSION["ape1"]); ?>" ></input>
              </p>
              <p>Correo electrónico: &nbsp
              <input type="text" maxlength="40" id="correo" class="resplandor" name="correo" onkeypress="return regular3(event)" value="<?php echo($_SESSION["corre1"]); ?>"></input>
              </p>
              <p>Nombre de Usuario: &nbsp
              <input type="text" maxlength="40" id="usuario" class="resplandor" name="usuario" onkeypress="return regular4(event)" value="<?php echo($_SESSION["usu1"]); ?>" readonly></input>
              </p>
              <p>Contraseña nueva: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="password" maxlength="40" id="contrasena" class="resplandor" name="contrasena" onkeypress="return regular5(event)" onblur="limpia5()"></input>
              </p>
              <p>Repita contraseña:&nbsp&nbsp&nbsp
              <input type="password" maxlength="40" id="contrasena2" class="resplandor" name="contrasena2" onkeypress="return regular6(event)"></input>
              </p>
              <input type="button" class="btn1" onclick="javascript:closeDialog();" value="Cerrar">
              <input type="submit" class="btn2" value="Actualizar">
            </div>
          </form>
        </aside >
<aside id="poup-Noti" class="avgrund-popup">
            
            <div Class="contenedor_form">
          <?php
          if(isset($_SESSION['usu1']) && !empty($_SESSION['usu1'])) {
          ?>
              <form action="ingreso_noticias.php" method="POST" id="formulario3" enctype="multipart/form-data" >
              <h1 style=" position: relative; top:-40px; font:50px Century Gothic; color:white; width:685; background-color:rgb(117, 167, 119); text-align:center; border-radius:13px;">... Redacta tu noticia</h1>
              <p>Titulo de Noticia:&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text" maxlength="40" class="resplandor" name="titulo" ></input>
              </p>
              <p>SubTitulo de Noticia:&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text" maxlength="40" class="resplandor" name="subtitulo" ></input>
              </p>
              <p>Contenido:&nbsp&nbsp&nbsp&nbsp
              <textarea maxlength="250" name="contenido" rows="4" cols="30" ></textarea>
              </p>
              <p>Imagen:&nbsp&nbsp&nbsp&nbsp
              <input type="file" name="imagen"></input>
              </p>
              <p>Etiquetas:&nbsp&nbsp&nbsp&nbsp
              <input type="text" maxlength="40" class="resplandor" name="etiqueta" ></input>
              </p>
              <input type="button" class="btn1" onclick="javascript:closeDialog();" value="Cerrar">
              <input type="submit" class="btn2" value="Guardar">
              </form>
          <?php
            } 
            else{
              echo '<h2>INICIA SESIÓN</h2>';
              echo'<form action="Process_Inicio.php" method="POST">';
                  echo'<p style=" top: 22px; position:relative;">&nbsp &nbsp &nbsp Usuario:';
                  echo'<input type="text" maxlength="40" id="resplandorb" class="resplandorb" name="usuar1" ></input>';
                  echo'</p>';
                  echo'<p style=" top: 12px; position:relative; margin: 5px; padding:0px;">Contraseña: ';
                  echo'<input type="password" maxlength="40" id="resplandorb" class="resplandorb" name="contrase1" ></input>';
                  echo'</p> ';
                  echo'<input type="button" id="capab1" onclick="submit()" value="Ingresar">';
                  echo'<input type="button" id="capab2" onclick="javascript:openDialog(); window.scrollTo(100,200);" value="Registrarme">';
                echo'</form>';
            }
            ?>
            </div>
          
        </aside>
        <aside id="poup-Add" class="avgrund-popup">
          <div class="contenedor_form">
            <h1 style=" position: relative; top:-40px; font:50px Century Gothic; color:white; width:685; background-color:rgb(117, 167, 119); text-align:center; border-radius:13px;">... Suscríbete a tus RSS</h1>
            <form action="add_msfeed.php" method="post">
              <p style="position: relative;  top: 150px;">Pón acá tu RSS:&nbsp;&nbsp;&nbsp;&nbsp; <br>
              <input type="text" class="resplandor" name="rss_add" style="width: 500px;">
              </p>
              <input type="button" class="btn1" onclick="javascript:closeDialog();" value="Cerrar" style="position: relative;top: 200px;">
              <input type="submit" class="btn2" value="Guardar" style="position: relative;  top: 200px;">
            </form>
          </div>
        </aside>
		<article class="avgrund-contents">
        <?php
         if(isset($_SESSION['usu1']) && !empty($_SESSION['usu1'])) {
          echo('<aside id="poup-ms_feed" class="avgrund-popup">');
          echo'<div class="contenedor_form">';
          echo'<h1 style=" position: relative; top:-40px; font:50px Century Gothic; color:white; width:685; background-color:rgb(117, 167, 119); text-align:center; border-radius:13px;">... Tus RSS a tus RSS</h1>';
          include "conexion2.php";
          for($o=0; $o < count($_SESSION["ms_feed1"]+1);$o++){
          echo'<form action="actual_msfeed.php" method="post">';
          echo'<input type="text" class="resplandor"  name="feedo" value="'. $_SESSION['ms_feed1'].'></input>';
          echo'<input type ="submit" value="Guardar">';
          echo'</form>';
          echo "<br>";
        }
          echo'<input type="button" class="btn1" onclick="javascript:closeDialog();" value="Cerrar" style="position: relative;top: 200px;">';
          echo'</div>';
          echo'</aside>';
        }
         ?>
		
      <?php 
      
	  $cout = 0;
      $link=Conectarse();
      $sql = sprintf("SELECT gto_noticias.id, gto_noticias.titulo, gto_noticias.subtitulo, gto_noticias.etiqueta, gto_noticias.imagen,gto_noticias.contenido, gto_noticias.dom FROM gto_noticias WHERE gto_noticias.dom= '1'");
        $result = mysql_query($sql,$link);
        echo mysql_error();
        while($row = mysql_fetch_array($result))
        {   
		      $cout  		     = $cout + 1;
          $ms_titulo     = $row["titulo"];
          $ms_subtitulo  = $row["subtitulo"];
          $ms_descripcion= $row["contenido"];
          $ms_etiqueta   = $row["etiqueta"];
          $ms_imagen     = $row["imagen"];
          $ms_fecha      = $row["fecha"];
          $ms_usuario    = $row["usu"];
          echo '<div class="contenedor"'."id = $cout".'cont'. ' style="position:absolute;left:70px; top:70px;">';
          echo '<img  src='."$ms_imagen".' class="imagen">';
          echo '<div class="texto">';
            echo '<div class="subtitulo"><p>';
            echo "$ms_subtitulo</p></div>";
            echo '<div class="titulo">';
            echo"<p><a href=#>$ms_titulo</a></p></div>";
            echo'<div class="etiqueta"><a href="#">';
            echo "$ms_etiqueta</a></div>";
            
            if(strlen($ms_descripcion)>150)
            {
            echo'<div class="info">';
              $variabledesc = $ms_descripcion;
              $titulomostrado = substr($variabledesc,0,150);
              echo "<p id=desc$cout>$titulomostrado"."..."."</p><br>
            </p></div>";
          echo "</div>";
          }else{
          echo'<div class="info">';
            echo "<p id=desc$cout>$ms_descripcion</p><br>
          </p></div>";
        echo "</div>";
        }
        ?>
        <ul class="nev">
          <form action="pps.php" method="POST">
          <input type="hidden" name="datos<?php echo("$cout"); ?>" id="datos<?php echo("$cout"); ?>" value="<?php echo($array[$cout]); ?>" style="position:absolute; left:0px;"> 
          <div class="ax1"><li><p div class="a" onclick="javascript:contador<?php echo "$cout"; ?>(); submit()">Ok's</p></li></div>
          <div class="ax2"><li><p div class="a"id="oks<?php echo "$cout"; ?>" style="cursor:default"><?php echo($array[$cout]); ?></p></li></div>
           
          <div class="ax4"><li><p div class="a">compartir</p></li></div>
          <input type="hidden" value="<?php echo "$cout"; ?>" name="idcont">
        </form>
        </ul>
      </div>
        
      <?php
      }
	  
      ?> 
	</div>
	<div class="barra">
      <ul class="nav">
        <div class="logo"><li><a href="http://gtokey.com">GtOkey</a></li></div>
        <div class="opciones">
          <li><a href="http://gtokey.com/ahora.php">Hoy</a></li>
		      <li><a href="http://gtokey.com/noticiasgt.php">Noticias</a></li>
          <li><a href="#" id="tool_noti">Noticiero<span class="tooltip">
            <div class="img_noti_content">
              <div class="conte" id="conte1">
                <div id="contep">
                  <img src="img/logocnn.png">
                  <img src="img/logofinpais.png">
                  <img src="img/logonoti7.png">
                  <img src="img/siglo21.jpg">
                  <img src="img/elperiodico.jpg">
                </div>
              </div>
                  <div style="position: absolute;top: 15px;left: 15px;">
                  <img src="img/btn.png" class="btn_atras" onclick="javascript: anterior();">
                  <img src="img/btn2.png" class="btn_sig" onclick="javascript: btn_siguiente();">
                </div>
            </div>
            </span></a>
          </li>
          <li><a href="#popular">Popular</a></li>
          <div class="opcionesf">
            <li><a href="#" onclick="javascript:openDialog3();">Redactar Noticia</a></li>
            <?php
            if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
            ?>
            <li><a href="#"><?php  echo($_SESSION["nom1"]." ".$_SESSION["ape1"]); ?>
              <li><a href="#" onclick="javascript:openDialog2();">Perfil</a></li>
              <li><a href="#" onclick="javascript:openDialog5();">Mis RSS</a></li>
              </a></span>
            </li>
            <li><a href="cerrar_sesion.php" >Cerrar Sesión</a></li>
            <?php
            }
            else{
            echo'<li><a href="#" class="tool" id="tool">Entrar <span class="tooltip2" id="tooltip2">';
              echo'<input type="button" id="botonfb">';
              echo'<input type="button" id="botontw">';
              echo'<button id="botongt" class="tool3" onclick="script:mostrar();"></button>';
              echo'<div class="tooltip3" id="tooltip3" style="display: none;">';
                echo'<form action="Process_Inicio.php" method="POST">';
                  echo'<p style=" top: 22px; position:relative;">&nbsp &nbsp &nbsp Usuario:';
                  echo'<input type="text" maxlength="40" id="resplandorb" class="resplandorb" name="usuar1" ></input>';
                  echo'</p>';
                  echo'<p style=" top: 12px; position:relative; margin: 5px; padding:0px;">Contraseña: ';
                  echo'<input type="password" maxlength="40" id="resplandorb" class="resplandorb" name="contrase1" ></input>';
                  echo'</p> ';
                  echo'<input type="button" id="capab1" onclick="submit()" value="Ingresar">';
                  echo'<input type="button" id="capab2" onclick="javascript:openDialog(); window.scrollTo(100,200);" value="Registrarme">';
                echo'</form>';
              echo '</div>';
            echo'</span></a></li>';
            }
            ?>
            <!--<li><a href="#" class="tool">Entrar <span class="tooltip2">
              <input type="button" id="botonfb">
              <input type="button" id="botontw">
              <button id="botongt" class="tool3"><span class="tooltip3">
              
              <form action="Process_Inicio.php" method="POST">
                <p>&nbsp &nbsp &nbsp Usuario:
                <input type="text" maxlength="40" id="resplandorb" name="usuar1" ></input>
                </p>
                <p>Contraseña:
                <input type="password" maxlength="40" id="resplandorb" name="contrase1" ></input>
                </p>
                <input type="button" id="capab" onclick="javascript:openDialog();" value="Registrarme">
                <button id="capab" onclick="#">Ingresar</button>
              </form>
              </span></button>
            </span></a></li> -->
          </div>
        </div>
      </ul>
    </div>
  </div>
  </article>
</div>
<div class="avgrund-cover"></div>
<script type="text/javascript" src="js/avgrund.js"></script>
<script type="text/javascript" src="js/restriccion.js"></script>
<div id="footer" style="">
  <div class="ftr-inner">
    <selection class ="ft_cont foot_info">
      <header class="ft_hed"><div class="ft_titulo">Equipo de Gtokey</div></header>
      <hr style="width: 186px;">
      <div class="ft_content">
        <p class="p_content" onClick="location.href = 'http://www.gtokey.com/about.html'" style="cursor:pointer;">¿Quienes somos?</p>
        <p class="p_content" onClick="location.href = 'http://www.gtokey.com/metas.html'" style="cursor:pointer;">Nuestras visiones</p>
      </div>
    </selection>
    <selection class ="ft_cont foot_social">
      <header class="ft_hed"><div class="ft_titulo">Siguenos</div></header>
      <hr style="width: 186px;">
      <div class="ft_content" style="margin-left: 34px;">
        <div style="position:relative; top:35px">
          <div id="ft_tw" onClick="location.href = 'https://twitter.com/gtokey'">Siguenos en Twitter</div>
          <hr style="width: 186px;">
          <div id="ft_fb" onClick="location.href = 'https://www.facebook.com/Gtokey' ">Búscanos en Facebook</div>
        </div>
      </div>
    </selection>
    <selection class ="ft_cont foot_ads">
      <header class="ft_hed"><div class="ft_titulo">Gtokey</div></header>
      <hr style="width: 186px;">
      <div class="ft_content">
        <p>Todas las noticias más importantes del mundo y Guatemala aquí, en un mismo lugar.</p>
        <hr style="width: 186px;">
        <p>Contáctanos</p>
        <a href="mailto:administracion@gtokey.com" style="color: rgb(0, 214, 255);text-decoration: none;">administracion@gtokey.com</a>
      </div>
    </selection>
  </div>
</div>
</body>
<script type="text/javascript" src="js/avgrund.js"></script>
<script type="text/javascript" src="js/restriccion.js"></script>
<script src="js/redimensionar.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/oks.js"></script>
</html>