<?php

	$con = mysqli_connect("localhost", "root", "", "Atividade");

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar com a base de dados!";
	
	mysqli_connect_error();

	}else{

		echo "Conexão Aberta";
	}
?>