<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Notícia</title>

<link href="css/estilo_geral.css" rel="stylesheet" type="text/css">
<link href="css/estilo_noticia_individual.css" rel="stylesheet" type="text/css">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">

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
	
	<header>
    
  <?php
	
	include_once "menu.php";
	
	?>
                          
</header>
	
<div id="noticia_topo">
	
	<img src="img/noticias/img_noticia_provisorio.jpg" alt="">
		<div class="noticia_titulo">

                
                 	
                 	<h1>Título da notícia Título da notícia</h1>

                   
                 
                 <div class="info_noticia">
			
					<div>data</div> 
					
					<div>autor</div>
				
				</div>              
                 
                    
                   
          </div>
		
		
	</div>
	
</div>	
	
<!--<div class="pg_titulo">
	
	Notícias
	
</div>-->

<div id="corpo_noticia_individual">	

<section id="noticia_completa_container">
	
	<div id="noticia_completa_subtitulo">
	
		<h2>Subtitulo da notícia</h2>
		
	</div>
	
	<div id="texto_noticia">
		
		
		
	</div>
	
	
</section>


<footer>
	
</footer>			
	
</main>
</body>
</html>