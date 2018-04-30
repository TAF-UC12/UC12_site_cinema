<!doctype html>

<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>
	
	<?php
		
		echo "Artigos especiais";
	
	?>	


</title>

<script defer src="js/fontawesome/fontawesome-all.js"></script>

<link href="css/estilo_geral.css" rel="stylesheet" type="text/css">
<link href="css/estilo_noticias.css" rel="stylesheet" type="text/css">

 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
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
	
	<header id="topo">
    
  <?php
	
	include_once "menu.php";
	
	?>
                          
</header>
	
	
<div id="topo_slides_container">

	<!--ESTA SECTION SÓ TEM O SLIDER-->
	<section id='destaques_topo'>

	
	
 	    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
   
           
  <?php          
 include "config/conectar.php";

//Agora é realizar a querie de busca no banco de dados

$sql = "SELECT * FROM noticias WHERE destaque = 'on' AND tipo = 2 ORDER BY 
id DESC LIMIT 3";


$resultado = mysqli_query($strcon, $sql)
or die ("Não foi possível realizar a consulta ao banco de dados");

// Agora iremos "pegar" cada campo da notícia
// e organizar no HTML

while ($linha=mysqli_fetch_array($resultado)) {

$id = $linha["id"];	
$titulo = $linha["titulo"];
$subtitulo = $linha["subtitulo"];
$imgDestaque = $linha["imgDestaque"];	
$relacionado = $linha["relacionado"];	


           echo "<div data-p='225.00'>
                <img data-u='image' src='img/slideshow/$imgDestaque' />
                <div class='noticia_titulo'>
                    <!--<img style='position:absolute;top:0px;left:0px;width:470px;height:160px;' src='img/c-phone-horizontal.png' />-->


                 	<h1>$titulo</h1>
                    <h2>$subtitulo</h2>

                 	<a href='noticia.php?news=$id&pgtitulo=$titulo&rel=$relacionado'><i class='fas fa-arrow-circle-right'></i> Continuar lendo</a>

                </div>
            </div>";
}
  ?>                 
                                   
            
        </div>
        
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
  	    
      
          
  
	</section>
	<!--FIM DA SECTION QUE SÓ TEM O SLIDER-->
	
</div>
<!--FIM DA DIV COM SLIDER E MENUS-->	

	<div id='mapasite'>
		<?php
		echo "<a href='index.php'>Home</i></a> | ";
		echo "<a href='noticias_index.php'>Notícias</i></a> | ";
		echo "<a href='artigos_index.php'>Artigos</i></a>";
		?>	
	</div>

	<div class='pg_titulo'>
	<?php
		$pgtitulo = $_GET["pg"];
		if ($pgtitulo == $pgtitulo) { echo 'Artigos especiais';}
		?>
	</div>


<div id="corpo_artigos">			
										
	
<!--INICIO SECTION COM AS DIVS DE LISTA DE ARTIGOS DA PAGINA DE ARTIGOS-->
<section id="artigos_container">

	<div id='lista_artigos'>


<?php          
           include "config/conectar.php";

//Agora é realizar a querie de busca no banco de dados

$noticia = $_GET['news'];		
		
		
$sql = "SELECT * FROM noticias WHERE TIPO= 2 ORDER BY 
id DESC";


$resultado = mysqli_query($strcon, $sql)
or die ("Não foi possível realizar a consulta ao banco de dados");

// Agora iremos "pegar" cada campo da notícia
// e organizar no HTML

while ($linha=mysqli_fetch_array($resultado)) {

$id = $linha["id"];
$titulo = $linha["titulo"];
$subtitulo = $linha["subtitulo"];
$data = $linha["data"];
$hora = $linha["hora"];
$img = $linha["img"];
$idautor = $linha["autor"];
$relacionado = $linha["relacionado"];		
          		

		echo "
		<div class='artigo'>
		
		<div class='artigo_tag'>Artigo</div>
		
		
			<a href='noticia.php?news=$id&pgtitulo=$titulo&rel=$relacionado'>
			
			<img src='img/noticias/$img'>
			
				<h4>$titulo</h4>

			</a>

	</div>";

}
  ?>	

		
		
	</div> <!--FINAL DO CONTAINER DOS ARTIGOS-->


</section>		
	
<!--INICIO SECTION COM AS DIVS DE NOTICIAS MAIS COMENTADAS-->	
	
		
	
</div><!--final do corpo-->		
		
<footer>

	<?php
		require_once "footer.php";
	?>

</footer>					
	
</main>

<script id="dsq-count-scr" src="//cineontherocks.disqus.com/count.js" async></script>
</body>
</html>