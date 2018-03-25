


<script>

	$(document).ready(function(){
	$('.menu-anchor').on('click touchstart', function(e){
		$('html').toggleClass('menu-active');
	  	e.preventDefault();
	});
})

</script>

<span class="menu-anchor"></span>

<menu>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contato</a></li>
    </ul>
</menu>