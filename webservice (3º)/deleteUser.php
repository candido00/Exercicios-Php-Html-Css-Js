<?php 
//cria a variavel que vai receber a nensagem
$msg;
	//verifica se o id o id do usuario foi informado pela aplicaçao
	if (isset($_GET['id'])) {
		//caso o id esteja setado faz a conexao
		include "conexao.php";
		//adiciona o ceteudo do id a variavel id
		$id = $_GET['id'];
		//escreve a consulta sql para retornar o usuario que contenha o id informado
		$sql = "DELETE FROM usuario WHERE id=$id";

		//efetua a consulta no banco
		$resultado = $conexao->query($sql);
		if ($resultado) {
		
		//caso exista retorno adiciona os dados retorno adciona os dados retornados
		//a mensagem retornada para aplicaçao
		$msg = array('status'=> 1, 'msg' => "usuario deletado com sucesso");
		}else{
			$msg = array('status' => 2,'msg' => "usuario informado nao existe");
		}
		//adiciona o usuario retornado ao json
	}else{
		$msg = array('status' => 3, 'msg' => "nenhum usuario foi informado");
	}

	echo json_encode($msg);

	

?>



