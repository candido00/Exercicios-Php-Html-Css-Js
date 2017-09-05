<<?php 
	include "conexao.php";

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "INSERT INTO usuario VALUES (NULL,'$nome','$email',MD5('$senha'))";

	if ($conexao->query($sql)) {
		$msg =  array('status' => 1,'msg'=>'usuario inserido com sucesso' );

	}else{
		echo "Erro =".$sql."<br/>".mysqli_error($conexao);
	}

	$json = $msg;
	header('contente-type: application/json');
	echo json_encode($json);



 ?>