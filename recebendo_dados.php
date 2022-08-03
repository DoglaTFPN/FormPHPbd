<?php  
$con = mysqli_connect("localhost","root","","Atividade");
	if (mysqli_connect_errno()) {
		echo "Erro: ".mysqli_connect_error();

	}else{

		$sql ="INSERT INTO Cadastro Values ('$_POST[codigo]','$_POST[nome]','$_POST[sobrenome]','$_POST[email]','$_POST[cpf]','$_POST[sexo]','$_POST[usuario]','$_POST[senha]')";

	if (mysqli_query($con,$sql)) {
		
		echo "Cadastrado com sucesso!!!";

	}else{

		echo "Erro ao inserir: ".mysqli_error($con);
	}

	mysqli_close($con);

	}







?>