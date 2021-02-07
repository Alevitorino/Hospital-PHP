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
			<form action="inseremedico.php" method="POST">
				<div class="container mt-4">
					<div class="row">
						<div class="col-md-12 col-12">
								<div class="form-group">
									   <label>Médico:</label>
									   <input type="text" class="form-control" name="medico" placeholder="Digite o nome do médico">
								  </div>
						</div>
						<div class="col-md-12 col-12">
								<div class="form-group">
								    <label>Especialidade</label>
								    <select class="form-control" name="especialidade">
								      <?php
								      	include ("conexao/conexao.php");
								      	$sql	=	"select * from tblespecialidades order by especial";
								      	$qry	=	mysqli_query($con,$sql);
								      	while ($linha = mysqli_fetch_array($qry)) {
								      	 ?>
								      	 <option value="<?php echo $linha ['idespecial'];?>">
								      	 	<?php echo 	$linha['especial']; ?>
								      	 </option>
								      	 <?php
								      	}
								     	?>
								    </select>
  								</div>
  								<div class="col-md-12 col-12 text-center">
								<button type="submit" class="btn btn-primary">Cadrastar</button>
								</div>
						</div>
				</form>
		</div>
	</body>
</html>		