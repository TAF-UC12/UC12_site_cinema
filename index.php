<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>

	<?php
		$pgtitulo = $_GET["pg"];
	
		if ($pgtitulo == "") { echo "Página inicial";}
	
	?>

</title>

<link href="css/estilo_geral.css" rel="stylesheet" type="text/css">
<link href="css/estilo_index.css" rel="stylesheet" type="text/css">
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


	
<div id="topo_slides_container">

	<!--ESTA SECTION SÓ TEM O SLIDER-->
	<section id='destaques_topo'>

	
	
 	    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
           
            <div data-p="225.00">
                <img data-u="image" src="img/slideshow_home/slide1.jpg" />
                <div class="noticia_titulo_home">
                    <!--<img style="position:absolute;top:0px;left:0px;width:470px;height:160px;" src="img/c-phone-horizontal.png" />-->
                 <div>
                 	
                 	<h1>Título da notícia</h1>
                    <h2>Subtitulo da notícia</h2>
                 	
                 	
                 </div>   
                        
                   
                   
                </div>
            </div>
            
            <div data-p="225.00">
                <img data-u="image" src="img/slideshow_home/slide2.jpg" />
                <div class="noticia_titulo_home">
                    <!--<img style="position:absolute;top:0px;left:0px;width:470px;height:160px;" src="img/c-phone-horizontal.png" />-->
                 <div>
                 	
                 	<h1>Título da notícia</h1>
                    <h2>Subtitulo da notícia</h2>
                 	
                 	
                 </div>   
                        
                   
                   
                </div>
            </div>
            
            <div data-p="225.00">
                <img data-u="image" src="img/slideshow_home/slide3.jpg"/>
                <div class="noticia_titulo_home">
                    <!--<img style="position:absolute;top:0px;left:0px;width:470px;height:160px;" src="img/c-phone-horizontal.png" />-->
                 <div>
                 	
                 	<h1>Título da notícia</h1>
                    <h2>Subtitulo da notícia</h2>
                 	
                 	
                 </div>   
                        
                   
                   
                </div>
            </div>
            
            <div data-p="225.00">
                <img data-u="image" src="img/slideshow_home/slide4.jpg"/>
                <div class="noticia_titulo_home">
                    <!--<img style="position:absolute;top:0px;left:0px;width:470px;height:160px;" src="img/c-phone-horizontal.png" />-->
                 <div>
                 	
                 	<h1>Título da notícia</h1>
                    <h2>Subtitulo da notícia</h2>
                 	
                 	
                 </div>   
                        
                   
                   
                </div>
            </div>
            
        </div>
        
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;left:150px;" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        
        <!-- Arrow Navigator -->
       <!-- <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>-->
    </div>
    
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
  	    
      
          
  
	</section>
	<!--FIM DA SECTION QUE SÓ TEM O SLIDER-->
	
</div>
<!--FIM DA DIV COM SLIDER E MENUS-->	

<div class="pg_titulo">
	
	<?php
	$pgtitulo = $_GET["pg"];
	
	if ($pgtitulo == "") { echo "Home";}
	
	?>
	
</div>


<div id="corpo_home">			
									
<!--INICIO SECTION COM AS DIVS DE CRITICAS, ARTIGOS, ETC-->									
<section id="artigos_container">
	
	<div class="artigo">
		
		<img src="img/artigos/img_provisória.jpg">
		<h4>Críticas</h4>
	</div>
	
	<div class="artigo">
		
		<img src="img/artigos/img_provisória.jpg">
		<h4>Artigos</h4>
	</div>
	
	<div class="artigo">
		
		<img src="img/artigos/img_provisória.jpg">
		<h4>??????</h4>
	</div>
	
	<div class="artigo">
		
		<img src="img/artigos/img_provisória.jpg">
		<h4>??????</h4>
	</div>
	
</section>	
	
<!--INICIO SECTION COM AS DIVS DE LISTA DE NOTICIAS-->
<section id="noticias_container">
	
	
	<h2>Últimas notícias</h2>
	
	<div class="lista_noticias">
		
		<div class="noticia">
			
			<img src="img/noticias/img_noticia_provisorio.jpg" alt="">
			<div class="info_noticia">
			
				<div>data</div> 
				<div>hora</div>
				<div>autor</div>
				
			</div>
			
			
			<div class="chamada_noticia">
				<div><h1>titulo</h1></div>
				<div><h2>subtitulo</h2></div>
				<a href="#">continuar lendo</a>
			</div>
			
			
		</div>
		
		<div class="noticia">
			
			<img src="img/noticias/img_noticia_provisorio.jpg" alt="">
			<div class="info_noticia">
			
				<div>data</div>
				<div>hora</div>
				<div>autor</div>
				
			</div>
			
			
			<div class="chamada_noticia">
				<div><h1>titulo</h1></div>
				<div><h2>subtitulo</h2></div>
				<a href="#">continuar lendo</a>
			</div>
			
		</div>
		
		
		
	</div>
	
	
	
	
</section>		
	
<!--INICIO SECTION COM AS DIVS DE FILMES-->	
<section id="filmes_cartaz_container">

	<h2>Em cartaz</h2>
	
	<div class="cartaz_container">
		
		<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>
		
		<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>
		
		<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>
		
		<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>
		
		<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>
		
		<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>
		
		
	</div>
	
	<p><a href="#">Ver todos</a></p>
	
	
	
	<h2>Em breve</h2>
	
	<div class="embreve_container">

			<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>

			<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>

			<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>

			<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>

			<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>

			<div><a href="#"><img src="img/posters/img_poster_provisorio.jpg"></a></div>


		</div>
	
		<p><a href="#">Ver todos</a></p>
	
</section>	
	
	
	
</div><!--final do corpo-->	
	
	
	

	
<footer>
	
</footer>		
				
</main>



</body>
</html>