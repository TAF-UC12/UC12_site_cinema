<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Home</title>
<link href="css/estilo_geral.css" rel="stylesheet" type="text/css">
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
    
  <nav>
<button class="btn-menu">
  <span class="bar"></span>
  <span class="text">Menu</span>
</button>
<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#" class="dd dd-01">About</a>
    	<ul class="dd-01-ul">
        	<li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
        <li><a href="#">Five</a></li>
        <li><a href="#">Six</a></li>
     </ul>
</li>
	<li><a href="#" class="dd dd-02">Services</a>
    	<ul class="dd-02-ul">
    		<li><a href="#">Lorem</a></li>
    		<li><a href="#">Fuga</a></li>
    		<li><a href="#">Veniam</a></li>
    		<li><a href="#">Amet</a></li>
    		<li><a href="#">Repudiandae</a></li>
    	</ul>
    </li>
	<li><a href="#">Blog</a></li>
	<li><a href="#">Contact</a></li>
</ul>
</nav>
        
 <script>
	
	var menu01 = new MobileMenu;

menu01.init();

function MobileMenu(){
	
	// set variables
	var $body = $('body');
	var $btnMenu = $('.btn-menu');
	// get the nav li elements from the 
	// desktop menu
	var navLiHTML = $('header nav ul').html();
	// create the mobile menu from the desktop li elements...
	var mobileNavHTML = $('<nav class="mobile-nav"><ul>' + navLiHTML  + '</ul></nav>');
	
	// Add the mobile menu to the main element...
	$('main').prepend(mobileNavHTML);
	
	// select the newly created mobile menu
	var $mobileNav = $('.mobile-nav');
	
	// select all the "a" links that have a 
	// sub menu
	var $dd = $('.mobile-nav .dd');
	
	// initialization method for the
	// MobileMenu class	
	this.init = function(){
		
		// measure height of menu in open state
		// then close the menu
		$body.addClass('show');
		var mobileNavOriginalHeight = $mobileNav.height();
		var mobileNavHeight = $mobileNav.height();
		$body.removeClass('show');
		
		// Open all the menus and the sub menus 
		// and measure the height of each
		// sub menu then close all the 
		// sub menus
		$body.addClass('show');
		$('.mobile-nav .dd').addClass('dd-show');
		// Loop through the sub menus add get the height
		// of the sub menus and set a data attribute to 
		// that height
		$('.mobile-nav .dd').each(function(){
			var theHeight = $(this).next().height();
			$(this).next().attr('data-height', theHeight);	
		}); // end each...
		// Close the menu and the sub menus
		$body.removeClass('show');
		$('.mobile-nav .dd').removeClass('dd-show');

		// Click event handler for the mobile menu
		$btnMenu.click(function(){
			// check if body element has the
			// class show
			if($body.hasClass('show')){
				// menu is open...
				// remove any heights set on the mobile nav
				$mobileNav.removeAttr('style');
				// remove the "show" class from the body
				// element
				$body.removeClass('show');
				// remove any heights set on the sub
				// menus
				$dd.next().removeAttr('style');
				// remove the "dd-show" class from the
				// links that have sub menu items 				
				$dd.removeClass('dd-show');	
			}else{
				// menu is closed...
				// set height of mobile menu to the open height
				$mobileNav.css('height', mobileNavOriginalHeight);
				// add the class "show" to the body element
				$body.addClass('show');	
			} // end if menu is open...
				
		}); // end mobile menu click event handler
				
		$dd.click(function(){
			// check if this sub menu link
			// is open
			if($(this).hasClass('dd-show')){
				// this sub menu is open...
				// get current height of mobile menu
				mobileNavHeight = $mobileNav.outerHeight();
				// set new height of mobile menu by taking the
				// existing height of the mobile menu and
				// subtracting the height of the sub menu that
				// was clicked on...
				$mobileNav.css('height', (mobileNavHeight - $(this).next().data('height')));
				// remove the height style that was applied to this
				// sub menu
				$(this).next().removeAttr('style');
				// remove the "dd-show" class from the sub menu link
				// that was clicked on
				$(this).removeClass('dd-show');	
			}else{
				// this sub menu is closed
				// remove any height styles applied
				// to any sub menus
				$dd.next().removeAttr('style');
				// remove the "dd-show" class from
				// any sub menu link elements
				$dd.removeClass('dd-show');
				// set the new height of the 
				// mobile menu by adding the
				// height of mobile navs orginal 
				// open state height to the height
				// of the sub menu item that was
				// clicked on
				$mobileNav.css('height', (mobileNavOriginalHeight + $(this).next().data('height')));
				// set the height of the sub menu that
				// was clicked on
				$(this).next().css('height', $(this).next().data('height'))
				// add the "dd-show" class to
				// sub menu link that was clicked on...
				$(this).addClass('dd-show');
			} // end if sub menu is open	
		}) // end sub menu click event handler

	} // end init()
	
} // end MobileMenu Constructor
	</script>             
                          
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
                <img data-u="image" src="img/slideshow_home/slide3.jpg" />
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
	
			
	
	
</div>	
	
	
	
	
	
	
	
	
	
	
	
</main>



</body>
</html>