<?php 

include "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO cliente VALUES (NULL,'$nome','$cpf','$logradouro','$numero','$bairro','$telefone')";

if ($conexao->query($sql)) {
	$msg = array('status' =>1 , 'msg'=>'cliente inserido com sucesso!' );
}else{
	echo "Erro = ".$sql."<br />".mysqli_error($conexao);
}

$json = $msg;
header('content-type: application/json');
echo json_encode($json);

?>