<?php 
session_start();
	if(!isset($_SESSION['nome'])){
		header("location: login.php");
	}else{
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de controle de produtos</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div id="geral">
		<header>
			<h1>Cadastro de produtos</h1>
			<nav>
				<ul>
					<li><a href="index.php?p=home">home</a></li>
					<li><a href="index.php?p=add">Add produto</a></li>
					<li><a href="index.php?p=ver">Ver produtos</a></li>
					<li><a href="logoff.php">logoff</a></li>
				</ul>
			</nav>
		</header>
		<section id="conteudo">
			<?php 
				if(isset($_GET['p'])){
					$p = $_GET['p'];
					include($p.".php");
				}else{
					include("home.php");
				}
			 ?>
		</section>
		<footer>
			<address>
				rua tal de alguma coisa, número, 123, Edf. Predio, cidade - Estado
			</address>
		</footer>
	</div>
	<script type="text/javascript" src="js/global.js"></script>
</body>
</html>
<?php 
}
 ?>