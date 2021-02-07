<html>  <!--pesqnome.php-->
	<head>
		<title>---SISTEMA CONSULTA---</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<?php include('listmenu.php'); ?>
		<div class="container">
			<form action="listar.php" method="POST">
				<div class="container mt-4">
					<div class="row">
						<div class="col-md-12 col-12">
								<div class="form-group">
									   <label>Paciente:</label>
									   <input type="text" class="form-control" name="paciente" placeholder="Digite o nome do paciente">
								  </div>
						</div>
						<div class="col-md-12 col-12 text-center">
							<input type="submit" class="btn btn-primary" value="Pesquisar">
						</div>
					</div>
				</div>	
			</form>	
	</body>
</html>								