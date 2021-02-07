<html>  
	<head>
		<title>---SISTEMA CONSULTA---</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script language="JavaScript" type="text/javascript">
			alert("CADASTRADO COM SUCESSO!");
			history.back();
		</script>
	</head>
	<body>
		<?php
			include("conexao/conexao.php");
			//pegando os dados do formulário cadconsulta.php

			$especial		=	$_POST['especial'];

			//insert into nometbl(campo1,campo2) values ('$var','$var2');

			$sql		=	"insert into tblespecialidades(especial)
							values ('$especial')";

			$qry		=	mysqli_query($con,$sql);
			if(!$qry){
				echo "<h1>Falha no Cadastro!</h1>";
			}else{
				
			}
		?>
	</body>
</html>		