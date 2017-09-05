<?php 
	$msg;
	if (isset($_GET['nome'])) {

		include "conexao.php";
		$nome = $_GET['nome'];

		$sql = "DELETE FROM cliente WHERE nome= '$nome'";
		$resultado = $conexao->query($sql);
		if ($resultado) {
			$msg = array('status' =>1 ,'msg' => "cliente deletado com sucesso!" );
		}else{
			$msg = array('status' =>2 ,'msg' => "cliente informado nao existe");
		}
	}else{
		$msg = array('status' =>3 ,'msg'=>"Nenhum cliente informado!" );
	}
	echo json_encode($msg);
 ?>