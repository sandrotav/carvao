<?php
require 'config.php';
include 'src/Fornecedor.php';

$det_forne = new Fornecedor($mysql);
$detalhe = $det_forne->encontrarPorId($_GET['idFornecedor']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Detalhamento do Fornecedor</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="container">
	<h3 align="center" class="panel-title">Detalhamento do Fornecedor</h3>		
	<table class="table table-striped table-hover table-bordered display responsive" id="tblFornecedor" cellspacing="0" width="100%"> 
		<thead>
			<tr>
				<th align="left"><h3>Nome do fornecedor</h3></th>
				<th align="left">Endeço</th>
				<th align="left">cidade</th>			
				<th align="left">CEP</th>
				<th align="left">UF</th>
				<th align="left">placa</th>
			</tr>		
		</thead>
		<br>
		<tbody>
			<tr>
				<td class="text-center"><h4><?php echo $detalhe['noFornecedor'];?> </h4></td>
				<td class="text-center"><p> <?php echo $detalhe['endFornecedor'];?> </p></td>
				<td class="text-center"><p> <?php echo $detalhe['cidadeFornecedor'];?> </p></td>
				<td class="text-center"><p> <?php echo $detalhe['cepFornecedor'];?> </p></td>			
				<td class="text-center"><p> <?php echo $detalhe['ufFornecedor'];?> </p></td>			
				<td class="text-center"><p> <?php echo $detalhe['placaFornecedor'];?> </p></td>
			</tr>
			<tr><td>
				<br>
				</td>
			</tr>
			
			<tr>
				<p><th align="left">Observação</th></p>
			</tr>	
			<tr>
				<td class="text-center"><?php echo nl2br($detalhe['obsFornecedor']); ?></td>
			</tr>
			<tr>
				<br>				
				<td colspan="6" align="right">
					<button type="button" onClick="history.back(-1)" class="botao botao-block">Voltar</button>
				<br>
			</td>
			</tr>
		
		</tbody>		
	</table>

</div>

</html>