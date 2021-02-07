<?php //editarpaciente.php
include('conexao/conexao.php');
$idcon	=	$_GET['idcon'];

echo "Número da consulta: {$idcon}";

$sql = "select * from tblconsultas where idcon='$idcon'";

$qry	=	mysqli_query($con,$sql);
$linha = mysqli_fetch_array($qry);
echo "<br>".$linha ['paciente'];

?> 
<html> <!-- menu.php -->
<head>
	<title>..::SIS CONSULTA.::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php //include('menu.php'); ?><br>
<div class="container">
	<form action="insereconsulta.php" method="post">
		<div class="row">
			<div class="col-12">
				  <div class="form-group">
					<label>Paciente</label>
					<input type="text" class="form-control" 
					name="paciente" value="<?php echo $linha['paciente'];?>">
				  </div>
			</div>
		</div>
<div class="row">
		<div class="col-4">
			<div class="form-group">
				<label>Data da Consulta</label>
				<input type="date" class="form-control" 
				name="dtcon" placeholder="Data da Consulta" value="<?php echo $linha['dtcon'];?>">
			</div>
		</div>
		<div class="col-4"> 
			<div class="form-group">
				<label>Hora da Consulta</label>
				<input type="time" class="form-control" 
				name="hora" placeholder="Hora da Consulta" value="<?php echo $linha['hora'];?>">
			</div>
		 </div>
		<div class="col-4">
			<div class="form-group">
				<label>Especialidade</label> 
				<input type="nome" class="form-control" 
				name="especialidade"  value="<?php echo $linha['especial'];?>">
				
<!--modal-->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Incluir</button>

<!--modal-->

	</div>
</div></div>
 <div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label>Tipo da Consulta</label>
			<input type="text" class="form-control" 
			name="forma" placeholder="Tipo da Consulta" value="<?php echo $linha['forma'];?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Valor da Consulta</label>
			<input type="text" class="form-control" 
			name="valor" placeholder="R$" value="<?php echo $linha['valor'];?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Unidade</label>
			<input type="text" class="form-control" 
			name="unidade" placeholder="Tipo da Consulta" value="<?php echo $linha['unidade'];?>">
		</div>
	</div>
</div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar nova especialidade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
    <form action="insereespecial.php" method="post">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Digite a especialidade:</label>
            <input type="text" class="form-control" name="especialidade2">
        </div>
</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Incluir</button>
    </div>
	</form>
</div>
</div>
</div>
</div>

</body>

</html>