<?php  
$con = mysqli_connect("localhost","root","","Atividade");
	if (mysqli_connect_errno()) {
		echo "Erro: ".mysqli_connect_error();

	}else{

		$sql ="INSERT INTO Cadastro Values ('$_POST(Codigo)','$_POST(Nome)','$_POST(Sobrenome)','$_POST(Email)','$_POST(CPF)''$_POST(Usuario)','$_POST(Senha)','$_POST(Sexo)'))";

	if (mysqli_query($con,$sql)) {
		
		echo "Cadastrado com sucesso!!!";

	}else{

		echo "Erro ao inserir: ".mysqli_error($con);
	}

	mysqli_close($con);

	}







?>