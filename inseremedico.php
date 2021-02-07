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
			window.location.href = 'cadmedico.php';
		}, 1000);
	}
</script>
	</head>
	<body>
		<?php
			include("conexao/conexao.php");
			//pegando os dados do formulário cadconsulta.php

			$medico				=	$_POST['medico'];
			$especialidade		=	$_POST['especialidade'];

			//insert into nometbl(campo1,campo2) values ('$var','$var2');

			$sql		=	"insert into tblmedico(medico,especialidade)
							values ('$medico','$especialidade')";

			$qry		=	mysqli_query($con,$sql);
			if(!$qry){
				echo "<h1>Falha no Cadastro!</h1>";
			}else{
				 echo '<script type="text/javascript">redirect();</script>';
			}
		?>
	</body>
</html>		