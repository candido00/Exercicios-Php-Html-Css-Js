<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$valor = $_GET['valorHora'];
		$qtd = $_GET['qtdHora'];
		$sBruto = $valor*$qtd;
		$ir = $sBruto*11/100;
		$inss = $sBruto*8/100;
		$sind = $sBruto*5/100;
		$sLiquido = $sBruto-$ir-$inss-$sind;
	?>
	
	<table border="1">
		<thead>
			<td colspan="2">Valores calculados</td>
		</thead>
		<tr>
			<td>Valor da hora:</td>
			<td> R$<?php echo $valor; ?></td>
		</tr>
		<tr>
			<td>Quantidade de horas:</td>
			<td><?=$qtd ?></td>
		</tr>
		<tr>
			<td>Salário Bruto</td>
			<td> R$<?=$sBruto ?></td>
		</tr>
		<tr>
			<td>Imposto de Renda</td>
			<td> R$<?=$ir ?></td>
		</tr>
		<tr>
			<td>INSS</td>
			<td> R$<?=$inss ?></td>
		</tr>
		<tr>
			<td>Sindicato</td>
			<td> R$<?=$sind ?></td>
		</tr>
		<tr>
			<td>Salário líquido:</td>
			<td> R$<?=$sLiquido ?></td>
		</tr>
	</table>
	<table border="1">
		<?php
			for ($i=1; $i <= 0; $i++) { 
		?>
		<tr>
			<td>informação:</td>
			<td>valor <?=$i ?></td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>
