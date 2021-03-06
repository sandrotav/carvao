<?php

require 'config.php';
include 'src/Fornecedor.php';
require 'src/redireciona.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	
	$incluir_fornecedor = new Fornecedor($mysql);
	$incluir_fornecedor->incluir($_POST['idFornecedor'],$_POST['noFornecedor'],$_POST['CidadeFornecedor'],$_POST['CepFornecedor'],$_POST['UfFornecedor'],$_POST['placaFornecedor'],$_POST['obsFornecedor']);
	redireciona('index.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Incluir do Fornecedor</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
			
<form action="incluirFornecedor.php" method="POST">

<div id="container">
<h4  align="center" class="panel-title">Inclusão do Fornecedor</h4>		
<table class="table table-striped table-hover table-bordered display responsive" id="tblFornecedor" cellspacing="0" width="100%"> 
	<thead>
		<tr>
			<tr>
				<th align="left">Nome do fornecedor
					<input class="campo-form" type="text" name="noFornecedor" id="noFornecedor" />
				</th>
			</tr>
			<tr>
				<th align="left">Endeço
					<input class="campo-form" type="text" name="endFornecedor" id="endFornecedor" />
				</th>
			</tr>
			<tr>
				<th align="left">cidade
					<input class="campo-form" type="text" name="cidadeFornecedor" id="cidadeFornecedor" />
				</th>
			</tr>
			<tr>
				<th align="left">CEP
					<input class="campo-form" type="text" name="cepFornecedor" id="cepFornecedor" />
				</th>
			</tr>
			<tr>
				<th align="left">UF
					<input class="campo-form" type="text" name="ufFornecedor" id="ufFornecedor" />
				</th>
			</tr>
			<tr>
				<th align="left">placa
					<input class="campo-form" type="text" name="placaFornecedor" id="placaFornecedor" />
				</th>
			</tr>
			<tr>
				<th align="left">Observação
					<textarea class="campo-form" type="text" name="obsFornecedor" id="obsFornecedor"></textarea>
				</th>
			</tr>
		</tr>	
		<tr>
			<td>
				<button class="botao">Incluir</button>
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