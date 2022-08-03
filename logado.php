<?php 

$user = $_POST['usuario'];
$senha = $_POST['senha'];


$con = mysqli_connect("localhost", "root", "", "Atividade");	

	


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<?php  
	if (mysqli_connect_errno())
	{
		echo "Erro: ".mysqli_connect_error();
	}
	else
	{
		
		$sql = "SELECT Usuario, Senha FROM Cadastro";
		$resultado = mysqli_query($con, $sql);

		$pessoa = mysqli_fetch_array($resultado);

		if ($user == $pessoa['Usuario'] && $senha == $pessoa['Senha'] )
		{
			session_start();
			echo "Bem-vindo, ".$user."!";

			echo "<p></p>";

		} 
		else
		{
			echo "Login inválido.";
		}
		


		mysqli_close($con);
	}
	?>
 </head>
 
 <body>
 	<form name="sistema" method="post" action="login.php">
 		<input type="submit" value="Sair" onclick=<?php session_destroy(); ?>>
 	</form>
 
 </body>
 </html>