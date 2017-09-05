<?php 
	$id = $_GET['id'];
	
	include("conexao.php");
	$sql = "DELETE FROM `produto` WHERE id=$id";
	echo $sql;
	$consulta = mysqli_query($conexao,$sql);
	if(!$consulta){
		echo mysqli_errno($conexao);
	}else{
		header("Location:index.php?p=ver");
	}
 ?>