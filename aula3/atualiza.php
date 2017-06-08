<?php

	$id =$_GET['id'];
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$quantidade = $_GET['quantidade'];
	$descricao = $_GET['descricao'];

	include("conexao.php");

	$sql = "UPDATE `produto` SET nome='$nome',preco=$preco,quantidade=$quantidade,descricao='$descricao' WHERE id=$id";
	echo $sql;
	$consulta = mysqli_query($conexao,$sql);
	if(!$consulta){
		echo mysqli_errno($conexao);
	}else{
		header("Location:index.php?p=ver");
	}
 ?>