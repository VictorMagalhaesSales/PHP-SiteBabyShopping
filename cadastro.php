<?php
session_start();

function tiraCaract($valor){
		$pontos = array(",", ".","-");
		$result = str_replace($pontos, "", $valor);
		return $result;
}




	include_once("conexao.php");

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$telefone = $_POST['telefone'];





	include ("validarcpf.php");
	$cpf = tiraCaract($cpf);
	$iscpf=isCpfValid($cpf);
	if($iscpf){
			$insert = "INSERT INTO usuarios VALUES(0,'$nome','$sobrenome','$senha','$email','$cpf','$nascimento','$telefone');";
			$ins2 = mysqli_query($conn,$insert);
			if($ins2){
				$_SESSION['deu']="Cliente cadastrado com sucesso!";
				header("Location: login.php");
			}else{
				$_SESSION['deu']="Email já registrado!";
				header("Location: login.php");
			}
	}else{
		$_SESSION['deu']="Insira um cpf válido!";
		header("Location: login.php");
	}

	

	
	mysqli_close($conn);
?>