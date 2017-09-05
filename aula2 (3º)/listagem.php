<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tabela</title>
</head>
<body>
	<a href="index.php">Inserir novo Item</a>

	<table border="1">
		<thead>
			<td colspan="5">Listagem dos Produtos</td>
		</thead>
		<tr>
			<td>ID:</td>
			<td>Nome</td>
			<td>Preço</td>
			<td>Descrição</td>
			<td>Quantidade</td>
		</tr>
		<?php 
		#conexão com o Banco
		include("conexao.php");
		$q = "SELECT * FROM `produto`";
		$resultado = mysqli_query($conexao,$q);
		while ($p=mysqli_fetch_assoc($resultado)){

		?>
		<tr>
			<td><?=$p['id'] ?></td>
			<td><?=$p['nome'] ?></td>
			<td><?=$p['preco'] ?></td>
			<td><?=$p['descricao'] ?></td>
			<td><?=$p['quantidade'] ?></td>
		</tr>
		<?php 
			}
		 ?>
	</table>
</body>
</html>
