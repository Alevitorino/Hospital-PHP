<html>  
	<head>
		<title>---SISTEMA CONSULTA---</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script type="text/javascript">
			function redirect()
			{
				setInterval(function(){
					window.location.href = 'cadconsulta.php';
				}, 1000);
			}
		</script>
		
	</head>
	<body>
		<?php
			include("conexao/conexao.php");
			//pegando os dados do formulário cadconsulta.php

			$paciente	=	$_POST['paciente'];
			$dtcon		=	$_POST['dtcon'];
			$hora		=	$_POST['hora'];
			$especial	=	$_POST['especialidade'];
			$forma		=	$_POST['forma'];
			$valor		=	$_POST['valor'];
			$unidade	=	$_POST['unidade'];

			//insert into nometbl(campo1,campo2) values ('$var','$var2');

			$sql		=	"insert into tblconsultas(paciente,dtcon,hora,especial,forma,valor,unidade)
							values ('$paciente','$dtcon','$hora','$especial','$forma','$valor','$unidade')";

			$qry		=	mysqli_query($con,$sql);
			if(!$qry){
				echo "<h1>Falha no Cadastro!</h1>";
			}else{
				echo '<script type="text/javascript">redirect();</script>';
			}
		?>
	</body>
</html>						


