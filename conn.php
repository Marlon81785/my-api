<?php

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$database = 'novoBanco';

	$mysqli = mysqli_connect($servidor, $usuario, $senha, $database);

	$status;

	

	function pingBanco(){
		if(!$mysqli) {
			$status = 'Banco de dados conectado';
		}else{
			$status = 'Falha ao conectar com o banco de dados';
		}

		echo json_encode(array(
			'status' => $status,
		));
	}

	

?>
