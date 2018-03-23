<?php
	
	$servidor = "localhost"; // 127.0.0.1
	$usuario = "root";
	$senha = "";
	$dbname = "loja";

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
    }  

?>