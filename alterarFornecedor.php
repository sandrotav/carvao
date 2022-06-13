<?php
require 'config.php';
include 'src/Fornecedor.php';
require 'src/redireciona.php';

$alterar_fornecedor = new Fornecedor($mysql);
$alterar_fornecedor->alterar($_POST['idFornecedor'],$_POST['noFornecedor'],$_POST['cidadeFornecedor'],$_POST['cepFornecedor'],$_POST['ufFornecedor'],$_POST['placaFornecedor'],$_POST['obsFornecedor']);
redireciona('index.php');
?>
