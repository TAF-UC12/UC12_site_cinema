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
<link href="css/estilo_filme.css" rel="stylesheet" type="text/css">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">

 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    

</head>

<body>
<main role="main">

<header>
    
  <?php
	
	include_once "menu.php";
	
	?>
                          
</header>	

<section id="filme_topo_container">
	
	<div id="filme_info">
		
		<div id='poster_filme'>
		
			<img src='img/posters/submersao.jpg'>
		
		</div>
		
		<div id="info"></div>
		
	</div>
	
</section>	


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
	<h4>$sinopse</h4>";
}
?>
	
</div>


</div>

</main>
</body>
</html>