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
					window.location.href = 'cadpaciente.php';
				}, 1000);
			}
		</script>
	</head>
	<body>
		<?php
			include("conexao/conexao.php");
			//pegando os dados do formulário cadconsulta.php

            $cpf		=	$_POST['cpf'];
            $nome		=	$_POST['nome']; 
			$tel		=	$_POST['tel'];

			$verifica_cpf = mysqli_query($con,"SELECT * FROM tblpaciente WHERE cpf = '$cpf'"); 

			if(mysqli_num_rows($verifica_cpf) >= 1){
				echo "<h1>CPF já cadastrado<br>Falha no Cadastro!</h1>";
				
			   }else{
					$sql		=	"insert into tblpaciente(cpf,nome,tel)
							values ('$cpf','$nome','$tel')";

					$qry		=	mysqli_query($con,$sql);
			}

			
		
		?>
	</body>
</html>		