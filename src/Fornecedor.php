<?php

	class Fornecedor{
		
		private $mysql;
		
		public function __construct(mysqli $mysql){
			$this->mysql = $mysql;
		}
				
		public function exibirTodos(): array{
			
			$resultado = $this->mysql->query('SELECT idFornecedor, noFornecedor, endFornecedor, cidadeFornecedor, ufFornecedor, cepFornecedor, placaFornecedor, obsFornecedor FROM fornecedor');
			$fornece = $resultado->fetch_all(MYSQLI_ASSOC);
			//var_dump($fornece);
			return $fornece;
		}
		
	
		public function incluir(string $noFornecedor, string $endFornecedor, string $cidadeFornecedor, string $cepFornecedor, string $ufFornecedor, string $placaFornecedor, string $obsFornecedor): void {
			$incluirFornecedor = $this->mysql->prepare('insert into fornecedor (noFornecedor, endFornecedor, cidadeFornecedor, cepFornecedor, ufFornecedor, placaFornecedor, obsFornecedor) values(?,?,?,?,?,?,?);');
			$incluirFornecedor->bind_param('sssssss', $noFornecedor, $endFornecedor, $cidadeFornecedor, $cepFornecedor, $ufFornecedor, $placaFornecedor, $obsFornecedor);
			$incluirFornecedor->execute();
		}
		
		public function alterar(string $idFornecedor, string $noFornecedor, string $cidadeFornecedor, string $cepFornecedor, string $ufFornecedor, string $placaFornecedor, string $obsFornecedor): void {
	
			$editaFornecedor = $this->mysql->prepare('update fornecedor set noFornecedor = ?, cidadeFornecedor = ?, cepFornecedor = ?, ufFornecedor = ?, placaFornecedor = ?, obsFornecedor = ? where idFornecedor=?;');
   	  												//update fornecedor set noFornecedor = 'teste', cidadeFornecedor = 'Onça do Pitangui' , cepFornecedor = '35650001', ufFornecedor = 'MGX', placaFornecedor = 'UUU-9876', obsFornecedor = 'Observação do teste' where idFornecedor=2;
			$editaFornecedor->bind_param('sssssss', $noFornecedor, $cidadeFornecedor, $cepFornecedor, $ufFornecedor, $placaFornecedor, $obsFornecedor, $idFornecedor);
			$editaFornecedor->execute();
		}
				
		public function remover(string $idFornecedor): void {
			$removerFornecedor = $this->mysql->prepare('delete from fornecedor where idFornecedor=?');
			$removerFornecedor->bind_param('s', $idFornecedor);
			$removerFornecedor->execute();
		}
		
		public function encontrarPorId(string $idFornecedor){
			//echo 'FORNCEDOR ID';
			//echo $_POST['idFornecedor'];
			$selecionaFornecedor = $this->mysql->prepare('SELECT idFornecedor, noFornecedor, endFornecedor, cidadeFornecedor, ufFornecedor, cepFornecedor, placaFornecedor, obsFornecedor FROM fornecedor WHERE idFornecedor=?');
			$selecionaFornecedor->bind_param('s',$idFornecedor);
			$selecionaFornecedor->execute();
			$FornecedorSelecionado = $selecionaFornecedor->get_result()->fetch_assoc();
			return $FornecedorSelecionado;
		}
		
		
	}

 ?>