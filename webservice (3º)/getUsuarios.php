<?php 
	
	include "conexao.php";

	$sql = "SELECT id,nome,email FROM usuario";

	//executando a consulta e guardando o valor
	$resultado = $conexao->query($sql);

	if ($resultado) {

		//criando o array que vai receber a linha dos usuarios
		$usuarios = [];

		//preencendo o array com os usuarios retornados do banco
		while ($usuario =  mysqli_fetch_assoc($resultado)) {
			array_push($usuarios,$usuario);

		}
		//exibindo o resultado
		echo json_encode($usuarios);
	}


 ?>