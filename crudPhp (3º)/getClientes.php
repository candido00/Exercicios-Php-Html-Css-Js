<?php 

include "conexao.php";

$sql = "SELECT  id, nome, cpf, logradouro, numero, bairro, telefone FROM cliente";

$resultado = $conexao->query($sql);
if ($resultado) {
	$clientes = [];
	while ($cliente = mysqli_fetch_assoc($resultado)) {
		array_push($clientes, $cliente);
	}
	echo json_encode($clientes);
}

 ?>