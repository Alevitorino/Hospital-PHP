<html>  <!--cadconsulta.php-->
	<head>
		<title>---SISTEMA CONSULTA---</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<?php include('listmenu.php'); ?>
		<div class="container">
			<form action="insereconsulta.php" method="POST">
				<div class="container mt-4">
					<div class="row">
						<div class="col-md-12 col-12">
								<div class="form-group">
									   <label>Paciente:</label>
									   <input type="text" class="form-control" name="paciente" placeholder="Digite o nome do paciente">
								  </div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Data:</label>
									<input type="date" class="form-control" name="dtcon" placeholder="Digite a data da consulta:">
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Hora:</label>
									<input type="time" class="form-control" name="hora" placeholder="Digite a hora da consulta:">
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
								    <label>Especialidade</label>  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  										Incluir
								</button>
								    <select class="form-control" name="especialidade">
								      <?php
								      	include ("conexao/conexao.php");
								      	$sql	=	"select * from tblespecialidades order by especial";
								      	$qry	=	mysqli_query($con,$sql);
								      	while ($linha = mysqli_fetch_array($qry)) {
								      	 ?>
								      	 <option value="<?php echo $linha['especial'];?>">
								      	 	<?php echo 	$linha['especial']; ?>
								      	 </option>
								      	 <?php
								      	}
								     	?>
								    </select>
  								</div>
						</div>
						<div class="col-md-4 col-12">
							<div class="form-group">
								<label>Pagamento:</label>
								<input type="text" class="form-control" name="forma" placeholder="Digite a forma de pagamento:">
								<small id="help" class="form-text text-muted">Digite se é convênio ou particular. Abrevie "conv" para convênio e "part" para particular.</small>
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Valor:</label>
									<input type="text" class="form-control" name="valor" placeholder="R$ = ">
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Unidade:</label>
									<input type="text" class="form-control" name="unidade" placeholder="Unidade que a consulta será realizada">
								</div>
						</div>
						<div class="col-md-12 col-12 text-center">
								<button type="submit" class="btn btn-primary">Cadrastar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
	        			<h5 class="modal-title" id="exampleModalLabel">Cadastrar Especialidade</h5>
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
      				</div>
      				<div class="modal-body">
        			<form action="insereespecialidade.php" method="POST">
						<div class="container mt-4">
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<label>Especialidade:</label>
										<input type="text" class="form-control" name="especial" placeholder="Digite a especialidade que deseja cadastrar">
									</div>
								</div>
									<div class="col-md-12 col-12 text-center">
										<button type="submit" class="btn btn-primary">Cadrastar</button>
									</div>
							</div>
						</div>
					</form>
      				</div>
      				<div class="modal-footer">
	        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      				</div>
    			</div>
  			</div>
		</div>
	</body>
</html>