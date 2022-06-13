<?php

	class Cliente{
		
		private $mysql;
		
		public function __construct(mysqli $mysql){
			$this->mysql = $mysql;
		}
		
		public function exibirTodos(): array{
			
			$resultado = $this->mysql->query('SELECT nomeCliente FROM Cliente');
			$Clientes = $resultado->fetch_all(MYSQLI_ASSOC);
			var_dump($Clientes);
			return $Clientees;
			
			//$sql  = "SELECT nomeCliente, placaVeiculo, ObsCliente FROM Cliente";
            //$stmt = DB::prepare($sql);
            //$stmt->execute();
            //return $Clientees = $stmt->fetch();
		}
		
		public function adicionar(string $titulo, string $conteudo): void {
			$insereCliente = $this->mysql->prepare('insert into Cliente (titulo, conteudo) values(?,?);');
			$insereCliente->bind_param('ss', $titulo, $conteudo);
			$insereCliente->execute();
		}
		
		public function editar(string $id, $titulo, string $conteudo): void {
			$editaCliente = $this->mysql->prepare('update Cliente set titulo = ?, conteudo = ? where id=?;');
			$editaCliente->bind_param('sss', $titulo, $conteudo, $id);
			$editaCliente->execute();
		}
				
		public function remover(string $id): void {
			$removerCliente = $this->mysql->prepare('delete from Cliente where id=?');
			$removerCliente->bind_param('s', $id);
			$removerCliente->execute();
		}
		
		public function encontrarPorId(string $id){
			$selecionaCliente = $this->mysql->prepare("SELECT id, titulo, conteudo FROM Cliente WHERE id=?");
			$selecionaCliente->bind_param('s',$id);
			$selecionaCliente->execute();
			$Cliente = $selecionaCliente->get_result()->fetch_assoc();
			return $Cliente;
		}
		
		
	}

 ?>