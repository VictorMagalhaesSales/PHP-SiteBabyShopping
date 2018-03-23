<?php
include_once("conexao.php");
session_start();
$btenviar = filter_input(INPUT_POST, 'btenviar', FILTER_SANITIZE_STRING);

if ($btenviar){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

	

	//echo "$email e $senha";
	if((!empty($email)) AND (!empty($senha))){
		$sql = "SELECT * from usuarios where email='$email' AND senha='$senha'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);

		if(($row['senha'] == $senha) AND ($row['email'] == $email)){
			$_SESSION['email'] = $row['email'];
			$_SESSION['nome']  = $row['nome'];
			$_SESSION['sobrenome']  = $row['sobrenome'];
			$_SESSION['cpf']  = $row['cpf'];

			header("Location: index.php");
		}else{
			$_SESSION['msg']="Email ou senha incorreta!";
			header("Location: login.php");
		}


		// if($query){

		// 	$row = mysqli_fetch_assoc($query);
		// 	if(password_verify($senha, $row['senha'])) {
		// 		header("Location: index.php");
		// 	}else{
		// 		$_SESSION['msg']="Login e senha incorreto!";
		// 		header("Location: login.php");
		// 	}

		// }
	}else{
		$_SESSION['msg']="Digite o email e senha";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg']="Página não encontrada";
	header("Location: login.php");
}

?>