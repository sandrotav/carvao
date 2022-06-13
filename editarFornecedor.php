<?php
require 'config.php';
include 'src/Fornecedor.php';

$det_forne = new Fornecedor($mysql);
$editarFornecedor = $det_forne->encontrarPorId($_GET['idFornecedor']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Detalhamento do Fornecedor</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
			
<form action="alterarFornecedor.php" method="POST">

<div id="container">
<h4  align="center" class="panel-title">Alteração do Fornecedor</h4>		
<table class="table table-striped table-hover table-bordered display responsive" id="tblFornecedor" cellspacing="0" width="100%"> 
	<thead>
		<tr>
			<input type="hidden" name="idFornecedor" value="<?php echo $editarFornecedor['idFornecedor'];?>" />
			<tr>
				<th align="left">Nome do fornecedor
					<input class="campo-form" type="text" name="noFornecedor" id="noFornecedor" value="<?php echo $editarFornecedor['noFornecedor'];?>" />
				</th>
			</tr>
			<tr>
				<th align="left">Endeço
					<input class="campo-form" type="text" name="endFornecedor" id="endFornecedor" value="<?php echo $editarFornecedor['endFornecedor'];?>" />
				</th>
			</tr>
			<tr>
				<th align="left">cidade
					<input class="campo-form" type="text" name="cidadeFornecedor" id="cidadeFornecedor" value="<?php echo $editarFornecedor['cidadeFornecedor'];?>" />
				</th>
			</tr>
			<tr>
				<th align="left">CEP
					<input class="campo-form" type="text" name="cepFornecedor" id="cepFornecedor" value="<?php echo $editarFornecedor['cepFornecedor'];?>" />
				</th>
			</tr>
			<tr>
				<th align="left">UF
					<input class="campo-form" type="text" name="ufFornecedor" id="ufFornecedor" value="<?php echo $editarFornecedor['ufFornecedor'];?>" />
				</th>
			</tr>
			<tr>
				<th align="left">placa
					<input class="campo-form" type="text" name="placaFornecedor" id="placaFornecedor" value="<?php echo $editarFornecedor['placaFornecedor'];?>" />
				</th>
			</tr>
			<tr>
				<th align="left">Observação
					<textarea class="campo-form" type="text" name="obsFornecedor" id="obsFornecedor"><?php echo nl2br($editarFornecedor['obsFornecedor']); ?></textarea>
				</th>
			</tr>
		</tr>	
		<tr>
			<td>
				<button class="botao">Alterar</button>
			</td>
			<td align="right">
				<button type="button" onClick="history.back(-1)" class="botao botao-block">Voltar</button>
				<br>
			</td>
		</tr>
		
	</thead>
	<br>
	<tbody>
	</tbody>
	
</table>
</div> 
<!--- <div>
	<a class="botao botao-block" href="index.php">Voltar</a>
</div>  -->

</html>