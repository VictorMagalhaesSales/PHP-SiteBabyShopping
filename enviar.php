<?php
session_start();
?>
<html>
	<head>
		<title>Baby Shopping</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="enviar.css">
    </head>

	<body background="img/branco.png">

		<div class="menu">
			<a href="index.php" style="transition: all .4s linear;">INÍCIO</a>
			<a href="meninos.php" style="transition: all .4s linear;">MENINOS</a>
			<a href="meninas.php" style="transition: all .4s linear;">MENINAS</a>
			<a href="acessorio.php" style="transition: all .4s linear;">ACESSÓRIOS</a>
			<?php 
				if(isset($_SESSION['email'])){
					echo "<a class='logs'>Olá Sr(a) ".$_SESSION['sobrenome']."</a> | <a class='ae' href='sair.php'>SAIR</a>";
				}else{
					echo "<a href='login.php' style='transition: all .4s linear;' class='log'>Login</a>";
				}

			?>


		</div>
		<div class="cab">
			<marquee direction="left"  scrollDelay="200"><img src="img/n1.png" width="30px" id="n1"></marquee>
			<marquee direction="right"  scrollDelay="200"><img src="img/n2.png" width="30px" id="n2"></marquee>
			<marquee direction="right"  scrollDelay="350"><img src="img/n2.png" width="100px" id="n3"></marquee>
			<marquee direction="left"  scrollDelay="300"><img src="img/n3.png" width="70px" id="n4"></marquee>
			<marquee direction="right"  scrollDelay="400"><img src="img/n3.png" width="150px" id="n5"></marquee>
			<marquee direction="left"  scrollDelay="500"><img src="img/n1.png" width="170px" id="n6"></marquee>
		</div>
		<center>
		

<?php
	include_once("conexao.php");






	if(isset($_SESSION['email'])){

		$salvacao = 0;

		$nome = $_GET['r'];
		$nome2 = $_SESSION['nome'];
		$cpf = $_SESSION['cpf'];
		$cidade = $_GET['cid'];
		$endereco = $_GET['end'];
		$numero = $_GET['num'];
		$bairro = $_GET['bairro'];
		$qtd = $_GET['qtd'];
		$cep = $_GET['CEP'];
		$ncartao = $_GET['nc'];
		$pag = $_GET['pag'];
		$parc = $_GET['parc'];

		$sql = "SELECT estoque from produtos where nome='$nome'";
		$query = mysqli_query($conn,$sql);
	    $fetch = mysqli_fetch_row($query);

	    
	    

	    if($fetch[0] > 0){
	    	$novo = $fetch[0] - $qtd;
		    $update = "UPDATE produtos set estoque=$novo where nome='$nome'";
			$ins1 = mysqli_query($conn,$update);
			$insert = "INSERT INTO pedidos VALUES(0,'$nome2','$cpf','$cidade','$endereco','$numero','$bairro',$qtd,'$cep','$ncartao','$pag',$parc,'$nome');";
			$ins2 = mysqli_query($conn,$insert);
			$salvacao = 1;
	    }
		





		$sql = "SELECT estoque from produtos where nome='$nome'";
		$query = mysqli_query($conn,$sql);
	    $fetch = mysqli_fetch_row($query);




	    


	    if($fetch[0] <= 0 && $salvacao != 1){
	    echo "<h1>Estoque indisponível! Por favor volte mais tarde.</h1>";


	    }elseif(mysqli_affected_rows($conn)!= 0){

		echo("<h1>Seu pedido foi realizado com sucesso. Iremos analisar os dados do titular do cartão e aguardar a confirmação. Seu pedido será entregue assim que a confirmação for realizada.");
	    } else{                                                                                                                                                                            
			echo "Erro em nosso banco de dados! Por favor volte mais tarde.";
		}





	}else{
		echo("<h1 class='bb'>Para realizar a compra você precisa estar logado em nossa loja.<br>Logue ou crie sua conta <a href='login.php' class='bbaa'>CLICANDO AQUI</a></h1>");
	}



	mysqli_close($conn);
?>





		<div class="pe">
		<center>
			<img src="img/icons.png" width="15%"><br><br>
			Copyright © BabyShopping 2016. Todos os direitos reservados.
		</center>
		</div>

        </body>
    </html>