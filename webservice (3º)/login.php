<?php
	$msg;
	if (isset($_POST['login']) && isset($_POST['senha'])) {
		$login = str_replace(" ","", $_POST['login']);
		$senha = str_replace(" ","", $_POST['senha']);

		if(strlen($login) < 4 || strlen($login) > 50 ){
			$msg= array('status' => 0, 'msg' => "login precisa ser maior que 3 e menor que 50 caracteres");

		}elseif (strlen($senha) < 8 || strlen($senha) > 30) {
			$msg= array('status' => 0, 'msg' => "senha precisa ser maior que 7 e menor que 30 caracteres");

		}else{
			require_once("logar.php");

		}

	}else{
		$msg = array('status' => 0, 'msg' => "informe o usuario e a senha");
	}
	echo json_encode($msg);

 ?>