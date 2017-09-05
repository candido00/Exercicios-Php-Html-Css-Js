<?php
	include "conexao.php";
	$msg= array('status' => 1, 'msg' => "Pagina do login");

	$sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = md5('$senha') ";

	$resultado = mysqli_fetch_assoc($conexao->query($sql));
	if ($resultado) {
		
		//caso exista retorno adiciona os dados retorno adciona os dados retornados
		//a mensagem retornada para aplicaçao
		$msg = array('status'=> 1, 'user' => $resultado);
		
		}else{
			$msg = array('status' => 2,'msg' => "usuario informado nao encontrado");
		}





 ?>