<?php 

$conexao = mysqli_connect("localhost","root","","loja");
	if (!$conexao){
		echo mysqli_erro();
	}
	$sql = "SELECT * FROM `produto`" ;

	$query = mysqli_query($conexao,$sql);
	if (!$query) {
		echo "deu ruim!";

	}else{
		$array = [];
		while ($p = mysqli_fetch_assoc($query)){
			array_push($array, json_encode($p));
		}
		echo "[";
		for ($i=0; $i < sizeof($array) ; $i++) { 
			if ($i != (sizeof($array)-1)) {
				echo $array[$i].",";

			}else{
				echo $array[$i];
			}

		}
		echo "]";
	
	}

 ?>