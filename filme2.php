<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>
	
<?php
		$pgtitulo = $_GET["pg"];
		$titulo_aba = $_GET["pgtitulo"];
		
		if ($titulo_aba == "$titulo_aba") { echo "$titulo_aba";}
	
	?>	
		

</title>

<script defer src="js/fontawesome/fontawesome-all.js"></script>

<link href="css/estilo_geral.css" rel="stylesheet" type="text/css">
<link href="css/estilo_filme2.css" rel="stylesheet" type="text/css">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">

 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>

</head>

<body>
<main role="main">

<header>
    
  <?php
	
	include_once "menu.php";
	
	?>
                          
</header>	

<div id="filme_topo">
	
	<img src="img/capa_paginas.jpg" alt="img_topo">
	
</div>	


<?php
	
$pgtitulo = $_GET["pgtitulo"];

?>	
	<div id='mapasite'>
		<?php
		echo "<a href='index.php'>Home </a>| ";
		echo "<a href='lancamentos_index.php'>Lançamentos </a>| ";
		echo "<a href='#'>$titulo_aba</a>";
		?>	
	</div>

	<div class='pg_titulo'>
	<?php
		if ($pgtitulo == "$pgtitulo") { echo "$pgtitulo";}
		?>
	</div>


<!--<div class="pg_titulo">
	
	//<?php
//	$pgtitulo = $_GET["pgtitulo"];
//	
//	if ($pgtitulo == "$pgtitulo") { echo "<h1>$pgtitulo</h1>";}
//	
//	?>
	
</div>-->

<div id="corpo_filme">

<?php

require_once "config/conectar.php";

//Agora é realizar a querie de busca no banco de dados	
	
	
$filme = $_GET["filme"];	
	
$sql = "SELECT * FROM filmes WHERE id = $filme";	
	
$resultado = mysqli_query($strcon, $sql)
or die ("Não foi possível realizar a consulta ao banco de dados");
	
while ($linha=mysqli_fetch_array($resultado)) {
	
$titulo = $linha["nome"];
$titoriginal = $linha["nomeOriginal"];
$poster = $linha["poster"];	
$estreia = $linha["estreia"];
$elenco = $linha["elenco"];	
$sinopse = $linha["sinopse"];
$diretor = $linha["diretor"];
$duracao = $linha["duracao"];
$genero = $linha["genero"];
$pais = $linha["paisOrigem"];

echo "<div id='poster_filme'>
				<img src='img/posters/$poster' alt='$titulo'>
		
			</div>
	
<div id='ficha_filme'>
		<p>Título original</p>
		<h4>$titoriginal</h4>
		<p>País origem</p>
		<h4>$pais</h4>
		<p>Direção</p>
		<h4>$diretor</h4>
		<p>Elenco</p>
		<h4>$elenco</h4>
		<p>Estréia</p>
		<h4>$estreia</h4>
		<p>Genêro</p>
		<h4>$genero</h4>
		<p>Duração</p>
		<h4>$duracao min</h4>
		
	</div>";

?>	
	
<div id="galeria_filme">
	
	
</div>	
	
<?php 
	echo "<div id='filme_sinopse'>
	
	<p>Sinopse</p>
	$sinopse";
}
?>
	
</div>


</div>

</main>
</body>
</html>