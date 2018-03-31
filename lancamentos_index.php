<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Lançamentos</title>

<script defer src="js/fontawesome/fontawesome-all.js"></script>

<link href="css/estilo_geral.css" rel="stylesheet" type="text/css">
<link href="css/estilo_lancamentos.css" rel="stylesheet" type="text/css">
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
	
<div id="lancamentos_topo">
	
	
	
</div>	

<div class="pg_titulo">
	
	<?php
	$pgtitulo = $_GET["pg"];
	
	if ($pgtitulo == "") { echo "Lançamentos";}
	
	?>
	
</div>


<div id="corpo_lancamentos">
<!---->	

	
<section id="descricao_container">	
	
	<div class="TabControl">
	<div id="header">
		<ul class="abas">
			<li>
				<div class="aba">
					<span>Em cartaz</span>
				</div>
			</li>
			<li>
				<div class="aba">
					<span>Em breve</span>
				</div>
			</li>
			<li>
				<div class="aba">
					<span>Mostrar todos</span>
				</div>
			</li>
		</ul>
	</div>
	<div id="content">
		<div class="conteudo">
			<section>
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
				<figcaption><b>Título do filme</b><br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			
			
			</section>
			
			
		</div>
		
		<div class="conteudo">
			<section>
			
			 <figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure>  
			
			</section>
		</div>
		
		<div class="conteudo">
			<section>
			
			 <figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			<figure>
  				
				<a class='poster' href='#'>
  					<img src="img/posters/teste.jpg" alt="">
  				</a>
				
  				<figcaption>Título do filme<br>01/01/2018</figcaption>
  				
			</figure> 
			
			 

			</section>
		</div>
		
	</div>
</div>
	
				
</section>
	
			
</div>		
	
</main>
<!--SCRIPT PARA FUNCIONAMENTO DAS ABAS-->
<script type="text/javascript">
	$(document).ready(function(){
		$("#content div:nth-child(1)").show();
		$(".abas li:first div").addClass("selected");		
		$(".aba").click(function(){
			$(".aba").removeClass("selected");
			$(this).addClass("selected");
			var indice = $(this).parent().index();
			indice++;
			$("#content div").hide();
			$("#content div:nth-child("+indice+")").show();
		});

		$(".aba").hover(
			function(){$(this).addClass("ativa")},
			function(){$(this).removeClass("ativa")}
		);				
	});
	
	$(elemento).hover(
	function(){/*função a ser executada ao pôr o cursor sobre o elemento*/},
	function(){/*função a ser executada ao tirar o cursor do elemento*/}
	);
</script>

</body>
</html>