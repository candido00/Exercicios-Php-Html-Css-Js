<?php 
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$qtd = $_GET['quantidade'];
	$desc = $_GET['descricao'];

	echo $nome.",".$desc.",".$preco.",".$qtd;

	#conexão com o Banco
	include("conexao.php");
	#Consulta com o Banco
	$query = "INSERT INTO `produto`(`nome`,`preco`,`quantidade`,`descricao`) VALUES ('$nome', '$preco', '$qtd', '$desc')";
	echo "<br>".$query."<br>";

	$consulta = mysqli_query($conexao,$query);

	if($consulta){
		echo "deu ruim";
		echo "Itens adicionados com SUCESSO!";
	}
?>
<a href="listagem.php">Ver Lista</a>
