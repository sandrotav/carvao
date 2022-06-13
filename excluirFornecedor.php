<?php

require 'config.php';
include 'src/Fornecedor.php';
require 'src/redireciona.php';

//var_dump($_GET);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$excluirFornecedor = new Fornecedor($mysql);		
	$excluirFornecedor->remover($_POST['id']);
	redireciona('index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Excluir Fornecedor</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir o fornecedor?</h1>
        <form method="post" action="excluirFornecedor.php">
			<input type="hidden" name="id" value="<?php echo $_GET['idFornecedor']; ?>" />
	
			<table class="table table-striped table-hover table-bordered display responsive" id="tblFornecedor" cellspacing="0" width="100%"> 
				<thead>
					<tr>
						<td>
							<button class="botao">Excluir</button>
						</td>
						<td align="right">
							<button type="button" onClick="history.back(-1)" class="botao botao-block">Voltar</button>
							<br>
						</td>
					</tr>
				</thead>	
			</table>
		
		</form>
	</div>
</body>
</html>