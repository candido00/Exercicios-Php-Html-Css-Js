<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$nome = $_GET['nome'];
		$email = $_GET['email'];

		include"conexao.php";
		//escrita da consulta
		$sql = "UPDATE usuario SET nome='$nome', email='$email' WHERE id=$id";
		if ($conexao->query($sql)) {
			$msg = array('status'=>1,'msg'=>"atualizado com sucesso");
			
		}else{
			$msg = "deu ruim na consulta <br>".mysqli_error($conexao);
		}
		header("contente-type: application/json");
		echo json_encode($msg);
	
	}else{
		echo "Usuario nao informado";
	}

	?>