
<?php
session_start();
?>
<html>
  <head>
    <title>Gtokey</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
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
    <script src="js/redimensionar.js" type="text/javascript" charset="utf-8"></script>
  </head>
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
              <form action="ingreso_noticias.php" method="POST" id="formulario3">
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
			<p> Para agregar tus RSS personales solo copia el feed (URL que te proporciona el sitio web) de la página en los campos y presiona el boton guardar y LISTO!.
			  Ejemplo de feed correcto: http://cnnespanol.cnn.com/feed/ </p>
              <p style="position: relative;  top: 20px;">Pon aca tus RSS:&nbsp;&nbsp;&nbsp;&nbsp; <br> 
              <input type="text" class="resplandor" name="rss_add" style="width: 500px;">
			  <input type="text" class="resplandor" name="rss_add2" style="width: 500px;">
			  <input type="text" class="resplandor" name="rss_add3" style="width: 500px;">
              </p>
              <input type="button" class="btn1" onclick="javascript:closeDialog();" value="Cerrar" style="position: relative;top: 200px;">
              <input type="submit" class="btn2" value="Guardar" style="position: relative;  top: 200px;">
            </form>
          </div>
        </aside>
        <?php
         if(isset($_SESSION['usu1']) && !empty($_SESSION['usu1'])) {
          echo('<aside id="poup-ms_feed" class="avgrund-popup">');
          echo'<div class="contenedor_form">';
          echo'<h1 style=" position: relative; top:-40px; font:50px Century Gothic; color:white; width:685; background-color:rgb(117, 167, 119); text-align:center; border-radius:13px;">... Tus RSS a tus RSS</h1>';
          include "conexion2.php";
          for($o=0; $o < count($_SESSION["ms_feed1"]+1);$o++){
          echo'<form action="actual_msfeed.php" method="post">';
		  echo'<p> Si deseas actualizar tus rss basta con borrar el url existente y colocar el nuevo, luego presionar actualizar y LISTO!. </p>'; 
          echo'<br><br><p>RSS no. 1: <input type="text" class="resplandor"  name="feedo1" value="'.$_SESSION["ms_feed1"].'"></input><br><br>';  
		  
          echo'<p>RSS no. 2: <input type="text" class="resplandor"  name="feedo2" value="'.$_SESSION["ms_feed2"].'"></input><br><br>'; 
		  
		  echo'<p>RSS no. 3: <input type="text" class="resplandor"  name="feedo3" value="'.$_SESSION["ms_feed3"].'"></input>'; 
          
          echo "<br>"; 
        }
		  echo'<input type="submit" class="rssbtn" value="Actualizar" style="position: relative;  top: 20px;">&nbsp';
          echo'<input type="button" class="btn1" onclick="javascript:closeDialog();" value="Cerrar" style="position: relative;top: 20px;">'; 
		  echo'</form>';
          echo'</div>';
          echo'</aside>';
		
        }
		
         ?>
		 <?PHP
		 
		 ?>
        <article class="avgrund-contents">
		
        <?php
        if(isset($_SESSION['usu1']) && !empty($_SESSION['usu1'])) {
          $usuar=$_SESSION["usu1"];
            if(isset($_SESSION['ms_feed1']) && !empty($_SESSION['ms_feed1'])) {
		
			 $query = "SELECT MS_FEED FROM feed WHERE usu = '$usuar'";
		 
              $varini =6;
            }else{ 
              echo '<div id="alrt_rss">';
                echo "¿No tienes RSS?<br>";
                echo '<p><a href="#" onclick="javascript:openDialog4();">Suscríbete</a></p>';
              echo '</div>';
              $query=""; 
                }
            }
        else{
          $query ="SELECT  Id, MS_FEED FROM noticias";
          $varini=5;
            }
        include "conexion2.php";
        $res_cout=0;
        $result = mysql_query($query);
        echo mysql_error();
		echo '<input type="button" class="rss" value="RSS" style="position:absolute; top:50px; left:-2%;" onclick="javascript:openDialog5();">';   
        while($row = mysql_fetch_array($result))
        {
          require_once 'rss_fetch.inc';
            $url = $row["MS_FEED"];
            $rss = fetch_rss($url);
            $cont_class = $rss->channel['link'];
              if($rss){
                $items = array_slice($rss->items, 0,$varini);
                $cout  = $res_cout;
                foreach ($items as $item ) {
                $title = $item[title];
                $url   = $item[link];
                $images= $item[image];
                $cate  = $item[category];
                $cout  = $cout+1;
                $res_cout=$cout;
                $des   = $item[description]; 
          echo '<div class="contenedor"'."id = $cout".'cont'. ' style="position:absolute;left:70px; top:70px;">';
          echo '<img class="imagen '."$cont_class".'">';
          echo '<div class="texto">';
            echo '<div class="subtitulo"><p></p></div>';
            echo '<div class="titulo">';
            echo"<p><a href=$url>$title</a></p></div>";
            echo'<div class="etiqueta"><a href="#">';
            echo "$cate</a></div>";
            
            if(strlen($des)>150)
            {
            echo'<div class="info">';
              $variabledesc = $des;
              $titulomostrado = substr($variabledesc,0,150);
              echo "<p id=desc$cout>$titulomostrado"."..."."</p><br>
            </p></div>";
          echo "</div>";
          }else{
          echo'<div class="info">';
            echo "<p id=desc$cout>$des</p><br>
          </p></div>";
        echo "</div>";
        }
        ?>
        <ul class="nev">
		<!--
          <div class="ax1"><li><p div class="a">Ok's</p></li></div>
          <div class="ax2"><li><p div class="a">0</p></li></div> !-->
           
          <div class="ax4"><li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo($url); ?>" data-lang="es" data-related="<?php echo($titulomostrado); ?>" related="Gtokey" data-hashtags="noticiasGT" data-via="Gtokey">Tweet</a></li></div>
        </ul>
      </div>
      <?php
      }
      }else{
      
      }
      }
      ?>
    </div>
    <div class="barra">
      <ul class="nav">
        <div class="logo"><li><a href="http://gtokey.com">GtOkey</a></li></div>
        <div class="opciones">
          <li><a href="http://gtokey.com/index.php">Hoy</a></li>
          <li><a href="http://gtokey.com/noticiasgt.php">Publicaciones</a></li> 
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
  
          <div class="opcionesf">
            <li><a href="#" onclick="javascript:openDialog3();">Redactar Noticia</a></li>
            <?php
            if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
            ?>
            <li><a href="#"><?php  echo($_SESSION["nom1"]); ?>
              <li><a href="#" onclick="javascript:openDialog2();">Perfil</a></li>
              <li><a href="misrss.php">Mis RSS</a></li>
              </a></span>
            </li>
            <li><a href="cerrar_sesion.php" >Cerrar Sesion</a></li>
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
                  echo'<p style=" top: 12px; position:relative; margin: 5px; padding:0px;">Contrasena: ';
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
<div class="avgrund-cover"  ></div>
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
        <p>Contactenos</p>
        <a href="mailto:administracion@gtokey.com" style="color: rgb(0, 214, 255);text-decoration: none;">administracion@gtokey.com</a>
      </div>
    </selection>
  </div>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>