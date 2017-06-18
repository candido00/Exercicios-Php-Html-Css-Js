<?php 

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$nome = $_GET['nome'];
	$cpf = $_GET['cpf'];
	$logradouro = $_GET['logradouro'];
	$numero = $_GET['numero'];
	$bairro = $_GET['bairro'];
	$telefone = $_GET['telefone'];

	include "conexao.php";

	$sql = "UPDATE cliente SET id= '$id', nome= '$nome', cpf= '$cpf', logradouro= '$logradouro', numero= '$numero', bairro= '$bairro',telefone= '$telefone' WHERE id= '$id'";
	if ($conexao->query($sql)) {
		$msg = array('status' =>1 , 'msg' => "cliente atualizado com sucesso");
	}else{
		$msg ="deu ruim na consulta <br>".mysqli_error($conexao);
	}
	header("content-type: application/json");
	echo json_encode($msg);
}else{
	echo "cliente nao informado!";
}
 ?>