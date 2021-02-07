<?php
			// arquivo de conexão com banco de dados
			// conexão utilizando Mysqli   i=melhorado

	$servidor	=	"localhost";  
	$user		=	"root";
	$senha		=	"";
	$bd			=	"bdcm";
	$charset	=	"utf-8";
			//mysqli_connect(server,user,password,bd)

	$con		=	mysqli_connect("$servidor","$user","$senha","$bd");
	if (!$con){
		echo "<h1>A conexão com o Banco de Dados falhou!!!</h1>";
	}

	mysqli_set_charset($con,$charset);	//Define padrão de acentuação para utf-8 	
