<?php

	class Artigo{
		
		private $mysql;
		
		public function __construct(mysqli $mysql){
			$this->mysql = $mysql;
		}
		
		public function adicionar(string $titulo, string $conteudo): void {
			$insereArtigo = $this->mysql->prepare('insert into artigos (titulo, conteudo) values(?,?);');
			$insereArtigo->bind_param('ss', $titulo, $conteudo);
			$insereArtigo->execute();
		}
		
		public function editar(string $id, $titulo, string $conteudo): void {
			$editaArtigo = $this->mysql->prepare('update artigos set titulo = ?, conteudo = ? where id=?;');
			$editaArtigo->bind_param('sss', $titulo, $conteudo, $id);
			$editaArtigo->execute();
		}
				
		public function remover(string $id): void {
			$removerArtigo = $this->mysql->prepare('delete from artigos where id=?');
			$removerArtigo->bind_param('s', $id);
			$removerArtigo->execute();
		}
		
		public function exibirTodos(): array{
			
			$resultado = $this->mysql->query('SELECT id,conteudo, titulo FROM artigos');
			$artigos = $resultado->fetch_all(MYSQLI_ASSOC);
			var_dump($artigos);
			return $artigos;
		}
		
		public function encontrarPorId(string $id){
			$selecionaArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo FROM artigos WHERE id=?");
			$selecionaArtigo->bind_param('s',$id);
			$selecionaArtigo->execute();
			$artigo = $selecionaArtigo->get_result()->fetch_assoc();
			return $artigo;
		}
	}

 ?>