<?php
require 'config.php';
include 'src/Fornecedor.php';
require 'src/redireciona.php';

$incluir_fornecedor = new Fornecedor($mysql);
						//echo $_POST['noFornecedor'],$_POST['endFornecedor'],$_POST['cidadeFornecedor'],$_POST['cepFornecedor'],$_POST['ufFornecedor'],$_POST['placaFornecedor'],$_POST['obsFornecedor'];
$incluir_fornecedor->incluir($_POST['noFornecedor'],$_POST['endFornecedor'],$_POST['cidadeFornecedor'],$_POST['cepFornecedor'],$_POST['ufFornecedor'],$_POST['placaFornecedor'],$_POST['obsFornecedor']);
redireciona('index.php');
?>
