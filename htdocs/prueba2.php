<!DOCTYPE html><html>
  <head>
    <style type="text/css">
    /*Fondo*/
    body {
    background: url("textura.jpg") 10px -656px repeat;
    }
    /* Aqui comienza la barra*/
    .nav {
    padding-left: 0px;
    }
    .barra {
    margin-top:-15;
    position: fixed;
    background-color:white;
    left: 0px;
    top: 0px;
    width: 100%;
    height: auto;
    border-bottom: 1px solid  #DDD;
    }
    .nav li {
    float: left;
    }
    .nav li a {
    background-color: white;
    text-decoration: none;
    display: inline;
    float: left;
    color: gray;
    }
    .nav a{
    color: gray;
    font: 20px Garamond bold;
    text-align: center;
    padding:10px;
    width: 95px;
    height: 20px;
    border-right: 1px solid #DDD;
    border-bottom: 1px solid #DDD;
    -webkit-transition: color 0.4s,
    border 0.6s;
    }
    .logo li a {
    color: black;
    font: 23px ArialBlack bold;
    }
    .opciones a:hover {
    background-color: ;
    color: #0093CC;
    background-color:#FCFCFC;
    border-right: 1px solid #0093CC;
    border-bottom: 1px solid #0093CC;
    }
    .opcionesf a{
    width: auto;
    text-align:right;
    }
    .opcionesf li {
    float: right;
    }
    /* Aqui termina la barra*/
    /* Aqui comienza el interior*/
    .contenedor{
    border: 1px solid #DDD;
    border-radius: 5px;
    height: 480px;
    width: 400px;
    -webkit-transition: border 0.5s;
    }
    .nev li {
    position: relative;
    left: 0px;
    top: 425px;
    list-style:none;
    }
    img.imagen{
    position: absolute;
    left: 15px;
    top: 10px;
    width: 370px;
    height: 170px;
    }
    .texto {
    width: 370px;
    height: 170px;
    position: absolute;
    top: 185px;
    left:10px;
    padding-left:5px;
    word-wrap: break-word;
    text-align: justify;
    }
    .subtitulo p{
    margin:0px;
    font: 12px Impact, fantasy;
    color: #686868
    text-align:none;
    letter-spacing: 2px;
    word-spacing: 2px;
    }
    .titulo p{
    margin-top:0px;
    margin-bottom:8px;
    font: 30px Impact, fantasy;
    }
    .etiqueta a{
    margin:0px;
    font: 16px Arial;
    color: #808080;
    text-decoration: none;
    }
    .info p{
    font: 18px Garamond;
    color: #505050 ;
    }
    .contenedor:hover{
    position:relative;
    border: 1px solid #0093CC;
    }
    .nev li a {
    text-decoration: none;
    display: inline;
    float: left;
    }
    .nev a{
    text-align:right;
    padding: 5px 10px 5px 20px;
    margin: 0px;
    color: gray;
    font: 17px Garamond bold;
    width: 60px;
    height: 15px;
    border: 1px solid #DDD;
    border-radius:5px;
    -webkit-transition: color 0.5s;
    }
    .ax1 li a{
    background: url("descarga.png") 10px 6px no-repeat;
    margin:0px;
    border-radius:5px 0px 0px 5px;
    width: 40px;
    -webkit-transition: background 0.5s;
    }
    .ax2 li a{
    width: 30px;
    border-left:0px;
    border-radius:0px 5px 5px 0px;
    background: none;
    margin-right: 10px;
    text-align:center;
    padding: 5px 10px 5px 5px;
    -webkit-transition: background 0.5s;
    }
    .ax3 li a{
    background: url("descarga.png") 10px -565px no-repeat;
    margin-right: 10px;
    -webkit-transition: background 0.5s;
    }
    .ax4 li a{
    background: url("descarga.png") 10px -656px no-repeat;
    width: 75px;
    -webkit-transition: background 0.5s;
    }
    .ax1 a:hover{
    background: url("descarga.png") 10px -15px no-repeat;
    }
    .ax3 a:hover{
    background: url("descarga.png") 10px -536px no-repeat;
    }
    .ax4 a:hover{
    background: url("descarga.png") 10px -627px no-repeat;
    }
    .nev a:hover {
    color: #0093CC;
    background-color:#FCFCFC;
    }
    /* Aqui termina el interior*/
    </style>
  </head>
  <body onload="javascript:reposicionar()">
    <?php
    include "conexion.php";
    $query ="SELECT  Id, feed FROM noticias";
    $result = mysql_query($query);
    echo mysql_error();
    while($row = mysql_fetch_array($result))
    {
    for($i=0;$i<1;$i++)
    {
    require_once 'rss_fetch.inc';
    $url = $row["feed"];
    $rss = fetch_rss($url);
    if($rss){ // inicio agregado
    // inicio paginacion
    $currentpage = $_SERVER['PHP_SELF']."?url=".$url;
    $total = count($rss->items);
    $maxRows_Blogdenotas = 1;
    $pageNum_Blogdenotas = 1;
    $letras=0;
    if (isset($_GET['pag'])) {
    $pageNum_Blogdenotas = intval($_GET['pag']);
    }
    $startRow_Blogdenotas = $pageNum_Blogdenotas * $maxRows_Blogdenotas;
    if (isset($_GET['pag'])) {
    $pageNum_Blogdenotas = intval($_GET['pag']);
    }
    $startRow_Blogdenotas = $pageNum_Blogdenotas * $maxRows_Blogdenotas;
    $totalRows_Blogdenotas = $total;
    $totalPages_Blogdenotas = ceil($totalRows_Blogdenotas/$maxRows_Blogdenotas)-1;
    $items = array_slice($rss->items, $startRow_Blogdenotas, $maxRows_Blogdenotas);
    // fin paginacion
    $cout  = 0;
    foreach ($rss->items as $item ) {
    $title = $item[title];
    $url   = $item[link];
    $cout  = $cout+1;
    $des   = $item[description];
    // if(strlen($des->description)>$letras)
    // {}
    echo '<div class="contenedor"'."id = $cout". ' style="position:absolute;">';
	echo '<img class="imagen" src="../Union%20de%20TODO/images.jpg"/>';
      echo '<div class="texto">';
	echo '<div class="subtitulo"><p>SUBTITULO</p></div>';
        echo '<div class="titulo">';
        echo"<p><a href=$url>$title</a></div></p>";
	echo'<div class="etiqueta"><a href="#">Salud</a></div>';
        
          if(strlen($des)>150)
          {
	  echo'<div class="info">';
          $variabledesc = $des;
          $titulomostrado = substr($variabledesc,0,150);
          echo "<p id=desc$cout>$titulomostrado"."..."."</p><br>
          </p>";
          }else{
	  echo'<div class="info">';
          echo "<p id=desc$cout>$des</p><br>
          </p>";
          }
          echo "</div>";
          ?>
          <div>
          <ul class="nev">
            <div class="ax1"><li><a href="#">Ok's</a></li></div>
            <div class="ax2"><li><a href="#">1569</a></li></div>
            <div class="ax3"><li><a href="#">guardar</a></li></div>
            <div class="ax4"><li><a href="#">compartir</a></li></div>
          </ul>
          <?php
        echo'</div>';
        }
        }else{
        
        } //fin
        include "desconectar.php";
        }
        }
        ?>
      </body>
    </html>
