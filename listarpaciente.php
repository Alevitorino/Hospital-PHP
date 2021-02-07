<?php   //listarpaciente.php

	include("conexao/conexao.php");

	@$paciente	=	$_POST['paciente'];
	if(!isset($paciente)){ ?>
		<h1 style="background-color: #cecece; color: #fff; border-radius: 30px; text-align: center;">Sem conteúdo para Pesquisa</h1>
	<?php }else{

		$sql		=	"select * from tblconsultas where paciente like '%$paciente%'";

		$qry		=	mysqli_query($con,$sql);
		//inicio da tabela
		echo "<table border='1'>";
			echo "<tr>";
				echo "<td><h5>ID</td><td><h5>Paciente</h5></td><td><h5>Especialidade</h5></td> <td><h5>Data</h5></td> <td><h5>Hora</h5></td>  <td><h5>Forma</h5></td><td><h5>Valor</h5></td> <td><h5>Unidade</h5></td> <td colspan='2'><h5>Opções</h5></td>";
			echo "</tr>";
			
		while($linha	=	mysqli_fetch_array($qry)){
			echo "<tr>";
			echo 	"<td>{$linha	['idcon']}</td>";
			echo 	"<td>{$linha	['paciente']}</td>";
			echo 	"<td>{$linha	['especial']}</td>";
			echo 	"<td>{$linha	['dtcon']}</td>";
			echo 	"<td>{$linha	['hora']}</td>";
			echo 	"<td>{$linha	['forma']}</td>";
			echo 	"<td>{$linha	['valor']}</td>";
			echo 	"<td>{$linha	['unidade']}</td>";
			echo "<td><a href='editarpaciente.php?idcon={$linha['idcon']}'><img src='img/edit.png'</a></td>";
			echo "<td><a href='#'><img src='img/delete.png'</a></td>";
		
			echo "</tr>";
			}
	}
	echo "</table>";