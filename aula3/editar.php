<?php 
	$idProduto = $_GET['idProd'];
	include("conexao.php");
	$sql = "SELECT nome, preco, quantidade, descricao FROM produto WHERE id=$idProduto";
	$consulta = mysqli_query($conexao,$sql);
	if(!$consulta){
		echo "<h2> Nenhum produto encontrado</h2>";
	}else{
		while ($produto = mysqli_fetch_assoc($consulta)) {
			
 ?>
<h2>Editar Produto</h2>

<form action="atualiza.php" method="get">
	<input type="hidden" name="id" value="<?=$idProduto ?>">
	<input type="text" name="nome" value="<?=$produto["nome"] ?>">
	<input type="text" name="preco" value="<?=$produto["preco"] ?>">
	<input type="text" name="quantidade" value="<?=$produto["quantidade"] ?>">
	<input type="text" name="descricao" value="<?=$produto["descricao"] ?>">
	<input type="submit" value="salvar">
	<input type="reset" value="cancelar">
</form>

<?php 
		} 
	}
 ?>