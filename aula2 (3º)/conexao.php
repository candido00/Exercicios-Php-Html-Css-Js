<?php 
$conexao = mysqli_connect("localhost:3306","root","","loja");
	if (!$conexao){
		echo mysqli_erro();
	}
 ?>
