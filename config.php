<?php
	   //  acessoLocal , utilizador, senha, nome do BD
$mysql = new mysqli('localhost','root', '', 'carvao' );
	// tipo de formatação de acesso ao BD
$mysql->set_charset('utf8');

if ($mysql == false)
	echo "Erro na conexão";
?>