<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Notícia</title>

<script defer src="js/fontawesome/fontawesome-all.js"></script>

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
			
					<div>
					<i class="fas fa-calendar-alt"></i> 
					data
					</div> 
					
					<div>
					<i class="fas fa-user"></i>
					autor
					</div>
					
					<div>
					<i class="fas fa-comment-alt"></i>
					12 <!--verificar com discus-->
					</div>
				
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
	
		<p>Subtitulo da notícia</p>
		
	</div>
	
	<div id="texto_noticia">
		
		<p class="par_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien purus, molestie vitae dui eget, rhoncus sagittis ligula. Donec sit amet mattis metus, in mattis nunc. Mauris accumsan elit id sollicitudin consectetur. Nullam ultricies ultrices lacinia. Integer elementum ex sed justo ullamcorper, eu placerat eros euismod. Mauris ut ligula quis justo faucibus rutrum quis id dolor. In non massa justo. Donec lectus lacus, auctor id facilisis eget, fermentum quis velit. Vivamus porta, felis eget laoreet dignissim, magna tellus finibus mauris, vitae commodo nisl risus sagittis massa. Vivamus ullamcorper nunc quis purus maximus, et iaculis sapien vestibulum. Etiam interdum turpis id volutpat hendrerit.</p>

		<p>Phasellus tortor nisi, venenatis vel nunc nec, sagittis hendrerit ex. Nulla id dignissim nunc. Nulla in nulla dolor. Phasellus volutpat congue elit a scelerisque. Sed dignissim enim ornare neque luctus, sed feugiat turpis congue. In euismod purus laoreet dolor consequat, sit amet condimentum ante scelerisque. Phasellus vel velit id risus feugiat egestas. In sit amet nisl id sapien imperdiet gravida. Pellentesque ut pretium orci. Vestibulum euismod leo ultricies bibendum sollicitudin. Ut mollis interdum est sed dictum. Fusce cursus elit arcu, in euismod ligula mollis in. Mauris et tempor nunc. Quisque semper tincidunt gravida. Curabitur ultricies dictum metus vitae placerat.</p>

		<p>Nam porta porttitor odio. Duis vitae vulputate dolor, id luctus massa. Nullam lobortis magna id elit tincidunt, ut gravida elit vehicula. Nam vestibulum sagittis quam, ut laoreet dolor posuere vel. Mauris mollis velit dolor, sed venenatis libero malesuada vitae. Vestibulum ultricies fringilla facilisis. Nulla elit lacus, maximus vitae odio ac, facilisis molestie nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

		<p>Quisque in eros orci. Suspendisse vestibulum elit nec est hendrerit, nec convallis justo iaculis. Proin luctus pellentesque metus eget gravida. Mauris fringilla nibh nec lorem varius ullamcorper. Vestibulum faucibus facilisis metus vitae lobortis. Suspendisse pretium fringilla scelerisque. Vivamus interdum quam quis mauris accumsan, ac efficitur tortor aliquam. Praesent commodo sit amet quam eu vehicula. Proin congue, libero tincidunt sagittis mattis, lectus purus dignissim nibh, vel auctor magna neque nec tortor. Donec ullamcorper sodales nulla, at consequat nibh cursus quis. Vestibulum a libero sed eros tincidunt vestibulum at eu est. Aenean eget urna vitae ex aliquam congue vitae sed lorem. Pellentesque fermentum dignissim eros, et ultricies velit faucibus a. Nam elementum placerat vestibulum. Curabitur tempor nulla semper, malesuada neque quis, pellentesque ex.</p>

		<p>Phasellus id ligula leo. Donec ut ultrices ligula. Integer dui tellus, consectetur vel accumsan ac, scelerisque vitae magna. Nam rhoncus, nulla id sodales porta, diam felis interdum turpis, non fermentum neque urna nec felis. Mauris in rutrum ligula. Sed et vehicula nibh. Maecenas sagittis orci dolor, in finibus dolor auctor in. Nam feugiat, orci non hendrerit consectetur, nibh nisi iaculis sapien, vel blandit risus lorem eget nibh. Vestibulum ut luctus urna. Suspendisse cursus sed tellus sit amet luctus.</p>
		
	</div>
	
	
	<div id="relacionadas_container">
		
		<p>Notícias relacionadas</p>
		
		
		<div id="relacionadas">
		
			<div class="noticia_relacionada">
		
				<img src="img/noticias/img_noticia_provisorio.jpg" alt="">
			
				<a href="#">Título da noticia</a>

			</div>

			<div class="noticia_relacionada">
		
				<img src="img/noticias/img_noticia_provisorio.jpg" alt="">
			
				<a href="#">Título da noticia Título da noticia</a>

			</div>

			<div class="noticia_relacionada">
		
				<img src="img/noticias/img_noticia_provisorio.jpg" alt="">
			
				<a href="#">Título da noticia</a>

			</div>

		</div>
		
	</div>
	
	
	
	<div id="comentarios_container">
		
		<p>Comentários</p>
		
		
		<div class="lista_comentarios">
			
			
			
			
		<div class="comentario">
			
			<div id="disqus_thread"></div>
				<script>

				/**
				*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				s.src = 'https://cineontherocks.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			
			
		</div>
			
								
		</div>
		
	</div>
	
	
</section>

<aside id="ficha_tec_filme_container">
	<div id="ficha_tec">
		
		<img src="img/posters/img_poster_provisorio.jpg" alt="">
		
		<div id="titulo_filme">
			<h2>Título do filme</h2>
			
			<i class="fas fa-film"></i> 
			<a href="#">Ficha técnica</a>
			<br>
			<i class="far fa-star"></i> 
			<a href="#">Crítica</a>
			
		</div>
		
	</div>
	
	
	
	
</aside>


<footer>
	
</footer>			
	
</main>

<script id="dsq-count-scr" src="//cineontherocks.disqus.com/count.js" async></script>
</body>
</html>