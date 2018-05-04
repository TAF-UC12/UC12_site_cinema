
<?php


include 'conectar.php';


//Vamos definir as variáveis de data e hora
//para inserção no banco de dados


//vamos criar uma variável especial para a querie sql	
$idGenero = $_POST["idGenero"];
$nomeGenero = $_POST["nomeGenero"];


$sql = "SELECT * filmes WHERE genero = $idGenero";

$resultado = mysqli_query($strcon,$sql) or die(mysql_error()."<br>Erro ao executar a inserção dos dados");

					if (mysqli_num_rows($resultado)!=0){

 						while($elemento = mysqli_fetch_array($resultado))
 						{
   						$idfilme = $linha["id"];	
				$titulo = $linha["nome"];
				$lancamento = $linha["estreia"];
				$poster = $linha["poster"];
						}
          
			}






?>