<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

</head>
<body>
	<form name="logar" method="post" action="logado.php">
		Usuário: <br>
		<input type="text" name="usuario"><br>
		Senha: <br>
		<input type="password" name="senha"><br><br>
		<input type="submit" name="enviar" value="Enviar">

	</form>
	<br>

	<button onclick="window.location.href = 'formulario.php'">Cadastrar</button>


</body>
</html>