<?php
	$conexao = mysqli_connect("localhost","root","","loja");
	if(!$conexao){
		echo mysqli_error();
	}
?>