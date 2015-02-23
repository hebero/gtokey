<?php
session_start();
?>
 <html>
  <head>
    <link rel="stylesheet" href="css/avgrund.css">
    <link rel="StyleSheet" href="css/estilo.css" type="text/css">
    <script>
    function openDialog() {
    Avgrund.show( "#default-popup" );
    }
    function closeDialog() {
    Avgrund.hide();
    }
    </script>
  </head>
  <body>
    <aside id="default-popup" class="avgrund-popup">
      <form action="ingreso.php" method="POST">
        <div Class="contenedor_form">
          <h1 style=" position: relative; top:-40px; font:50px Century Gothic; color:white; width:685; background-color:rgb(117, 167, 119); text-align:center; border-radius:13px;">... Registrarse</h1>
          
          <p>Nombres:</p> <p>
          <input type="text" maxlength="40" id="resplandor" name="nombres" ></input>
          </p>
          <p>Apellidos:</p> <p>
          <input type="text" maxlength="40" id="resplandor" name="apellidos" ></input>
          </p>
          <p>Correo electrónico:</p><p>
          <input type="text" maxlength="40" id="resplandor" name="correo" ></input>
          </p>
          <p>Nombre de Usuario:</p><p>
          <input type="text" maxlength="40" id="resplandor" name="usuario" ></input>
          </p>
          <p>Contraseña:</p><p>
          <input type="password" maxlength="40" id="resplandor" name="contrasena" ></input>
          </p>
          <p>Repita contraseña:</p><p>
          <input type="password" maxlength="40" id="resplandor" name="contrasena2" ></input>
          </p>
          <input type="button" id="capa" onclick="javascript:closeDialog();" value="Cerrar">
          <button id="capa" onclick="#">Guardar</button>
        </div>
      </form>
      
    </aside>
    <article class="avgrund-contents">
    <div class="contenedor" style="position:absolute; left: 70px; top: 70px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 470px; top: 70px;">
      <img class="imagen" src="img/yo.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 870px; top: 70px;">
      <img class="imagen" src="img/tu.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 70px; top: 550px;">
      <img class="imagen" src="img/prueba.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 470px; top: 550px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 870px; top: 550px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 70px; top: 1030px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 470px; top: 1030px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 870px; top: 1030px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 70px; top: 1510px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 470px; top: 1510px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="contenedor" style="position:absolute; left: 870px; top: 1510px;">
      <img class="imagen" src="img/images.jpg"/>
      <div class="texto">
        <div class="subtitulo"><p>Una nueva forma de ver las cosas</p></div>
        <div class="titulo"><p>Las vacas ayudan a innovar las reacciones</p></div>
        <div class="etiqueta"><a href="#">Salud</a></div>
        <div class="info"><p>Estudios recientes han demostrado que a través de procesos químicos es posible modifcar la leche para obetener resultados beneficiosos en la piel y así evitar enfermedades.</p></div>
      </div>
      <ul class="nev">
        <div class="ax1"><li><a href="#">Ok's</a></li></div>
        <div class="ax2"><li><a href="#">1569</a></li></div>
        <div class="ax3"><li><a href="#">guardar</a></li></div>
        <div class="ax4"><li><a href="#">compartir</a></li></div>
      </ul>
    </div>
    <div class="barra">
      <ul class="nav">
        <div class="logo"><li><a href="#">GtOkey</a></li></div>
        <div class="opciones">
          <li><a href="#">Hoy</a></li>
          <li><a href="#" id="tool_noti">Noticiero<span class="tooltip">
            <div class="img_noti_content">
              <div class="img_noti" >
                <img src="img/logocnn.png">
              </div>
              <div class="img_noti" >
                <img src="img/logofinpais.png">
              </div>
            </div>
            </span></a>
          </li>
          <li><a href="#">Por venir...</a></li>
          <div class="opcionesf">
            <li><a href="#">Buscar</a></li>
            <?php
            if(isset($_SESSION['nom1']) && !empty($_SESSION['nom1'])) {
            echo('<li><a href="#" class="tool">');
              echo($_SESSION["nom1"]." ".$_SESSION["ape1"]);
              echo'<a href="cerrar_sesion.php" >Cerrar Sesión</a>';
            echo'</a></li>';
            }
            else{
              echo'<li><a href="#" class="tool">Entrar <span class="tooltip2">';
            echo'<input type="button" id="botonfb">';
            echo'<input type="button" id="botontw">';
            echo'<button id="botongt" class="tool3"><span class="tooltip3">';
            
            echo'<form action="Process_Inicio.php" method="POST">';
              echo'<p>&nbsp &nbsp &nbsp Usuario:';
              echo'<input type="text" maxlength="40" id="resplandorb" name="usuar1" ></input>';
              echo'</p>';
              echo'<p>Contraseña:';
              echo'<input type="password" maxlength="40" id="resplandorb" name="contrase1" ></input>';
              echo'</p>';
              echo'<input type="button" id="capab" onclick="javascript:openDialog();" value="Registrarme">';
              echo'<button id="capab" onclick="#">Ingresar</button>';
            echo'</form>';
            echo'</span></button>';
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
<div class="avgrund-cover"></div>
<script type="text/javascript" src="js/avgrund.js"></script>
</body>
</html>