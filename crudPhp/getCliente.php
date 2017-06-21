<?php 
	$msg;
	if (isset($_GET['id'])) {
		include "conexao.php";
		$id = $_GET['id'];
		$sql = "SELECT id, nome, cpf, logradouro, numero, bairro, telefone FROM cliente WHERE id=$id";
		$resultado = mysqli_fetch_assoc($conexao->query($sql));
		if ($resultado) {
			$msg = array('status' =>1 , 'user' => $resultado);
		}else{
			$msg = array('status' =>2 , 'msg' => "cliente informado não existe!");
		}
	}else{
		$msg = array('status' =>3 ,'msg' => "Nenhum cliente informado!" );
	}
	echo json_encode($msg);
 ?>