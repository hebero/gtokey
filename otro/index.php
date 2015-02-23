<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>otro</title>
		<link rel="stylesheet" href="../css/avgrund.css">
		<link rel="icon" href="../img/favicon.png" type="image/png">
		<link rel="StyleSheet" href="../css/estilo.css" type="text/css">
	</head>
	<body onload="javascript:reposicionar();">
	<div id="page-wrap">
      <div id="bodyconte">
		<article class="avgrund-contents">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<form method ="post" action ="otro.php">
			RSS<input type ="text" name ="hola"><br>
			Cuantos items<input type ="text" name ="holo" value ="4">

			<input type="submit">
		</form>
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
								<img src="../img/logocnn.png">
								<img src="../img/logofinpais.png">
								<img src="../img/logonoti7.png">
								<img src="../img/siglo21.jpg">
								<img src="../img/elperiodico.jpg">
							</div>
						</div>
						<div style="position: absolute;top: 15px;left: 15px;">
							<img src="../img/btn.png" class="btn_atras" onclick="javascript: anterior();">
							<img src="../img/btn2.png" class="btn_sig" onclick="javascript: btn_siguiente();">
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
</div>
<div class="avgrund-cover"  ></div>
<script type="text/javascript" src="../js/avgrund.js"></script>
<script type="text/javascript" src="../js/restriccion.js"></script>
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
</body>
<script src="../js/redimensionar.js" type="text/javascript" charset="utf-8"></script>
</html>