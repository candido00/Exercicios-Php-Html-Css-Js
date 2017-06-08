<?php 
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$quantidade = $_GET['quantidade'];
	$descricao = $_GET['descricao'];
	include("conexao.php");
	$sql = "INSERT INTO `produto`(nome,preco,quantidade,descricao) VALUES ('$nome',$preco,$quantidade,'$descricao')";
	echo $sql;
	$consulta = mysqli_query($conexao,$sql);
	if(!$consulta){
		echo mysqli_errno($conexao);
	}else{
		header("Location:index.php?p=home");
	}
 ?>