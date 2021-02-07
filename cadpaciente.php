<html>  
	<head>
		<title>---SISTEMA CONSULTA---</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<?php include('listmenu.php'); ?>
		<div class="container">
			<form action="inserepaciente.php" method="POST">
				<div class="container mt-4">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<label>Nome:</label>
								<input type="text" class="form-control" name="nome" placeholder="Digite o nome do paciente">
							 </div>
                        </div>
                        <div class ="col-md-6">     
                             <div class="form-group">
								<label>CPF:</label>
								<input type="text" class="form-control" name="cpf" placeholder="Digite o CPF do paciente">
							 </div>
                        </div>
                        <div class="col-md-6">     
                             <div class="form-group">
								<label>Telefone:</label>
								<input type="text" class="form-control" name="tel" placeholder="Digite o telefone do paciente">
							 </div>
						</div>
						<div class="col-md-12 col-12 text-center">
								<button type="submit" class="btn btn-primary">Cadrastar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>