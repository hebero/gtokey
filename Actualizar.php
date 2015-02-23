<?php
session_start();
?>
<html>
<body>
    
      <form action="actualizacion.php" method="POST">
       <p>Actualizar Datos </p>
          <p>Nombres:</p> <p>
          <input type="text" maxlength="40" id="resplandor" name="nombres" value="<?php echo($_SESSION["nom1"]); ?>" ></input>
          </p>
          <p>Apellidos:</p> <p>
          <input type="text" maxlength="40" id="resplandor" name="apellidos" value="<?php echo($_SESSION["ape1"]); ?>" ></input>
          </p>
          <p>Correo electrónico:</p><p>
          <input type="text" maxlength="40" id="resplandor" name="correo" value="<?php echo($_SESSION["corre1"]); ?>" ></input>
          </p>
          <p>Contraseña:</p><p>
          <input type="password" maxlength="40" id="resplandor" name="contrasena" value="" ></input>
          </p>
          <p>Repita contraseña:</p><p>
          <input type="password" maxlength="40" id="resplandor" name="contrasena2" value=""></input>
          </p>
          <input type="button" id="capa" onclick="javascript:closeDialog();" value="Cerrar">
          <button onclick="#">Guardar</button>
        </div>
      </form>
      
    </aside>
    </html>
