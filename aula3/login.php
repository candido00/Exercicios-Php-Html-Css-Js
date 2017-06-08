<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login do sistema!</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header>
		<h1>Página de Login</h1>
	</header>
	<section>
		<form action="logar.php" method="post">
			<input type="text" name="login" placeholder="login:">
			<input type="password" name="senha" placeholder="senha:">
			<input type="submit" value="login">
			<input type="reset" value="cancelar">
		</form>
	</section>
</body>
</html>