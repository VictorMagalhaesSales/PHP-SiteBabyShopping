<?php
session_start();
?>
<html>
	<head>
		<title>Baby Shopping</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="icon" href="img/favcon.png" >

		<script>
		function formatar(mascara, documento){
		  var i = documento.value.length;
		  var saida = mascara.substring(0,1);
		  var texto = mascara.substring(i)
		  
		  if (texto.substring(0,1) != saida){
		            documento.value += texto.substring(0,1);
		  }
		  
		}
		</script>

    </head>

	<body background="img/branco.png">

		<div class="menu">
			<a href="index.php">INÍCIO</a>
			<a href="meninos.php">MENINOS</a>
			<a href="meninas.php">MENINAS</a>
			<a href="acessorio.php">ACESSÓRIOS</a>
			<?php 
				if(isset($_SESSION['email'])){
					echo "<a class='logs'>Olá Sr(a) ".utf8_encode($_SESSION['sobrenome'])."</a> | <a class='ae' href='sair.php'>SAIR</a> <a class='car' style='font-size: 20px; color: black;' href='carrinho.php'><img src='img/car.png' width='30px'></a>";
				}else{
					echo "<a href='login.php' class='log'>Login</a>";
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
			<h2>
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg']."<br><br><br>";
					unset($_SESSION['msg']);
				}
				if(isset($_SESSION['deu'])){
					echo $_SESSION['deu']."<br><br><br>";
					unset($_SESSION['deu']);
				}
				?>
			</h2>
			<div class="login">
				<form method="POST" action="validar.php">
					<table>
					<tr bgcolor="#2ecc71"><td colspan="2"><h1><font color="white">Já está registrado?</font></h1></td></tr>
					<tr><td>Email</td><td><input type="email" name="email" size="40px" placeholder="Seu email" required></td></tr>
					<tr><td>Senha</td><td><input type="password" name="senha" placeholder="Sua senha" maxlength="30" required></td></tr>
					</table>
					<input type="submit" name="btenviar" value="Entrar">
				</form>
			</div>
			<div class="cadastro">
				<form method="POST" action="cadastro.php">
					<table>
					<tr bgcolor="#f1c40f"><td colspan="2"><h1><font color="white">Não possui uma conta?</font></h1></td></tr>
					<tr><td>Nome</td><td><input type="text" name="nome" size="40px" placeholder="Seu primeiro nome" maxlength="30" required></td></tr>
					<tr><td>Sobrenome</td><td><input type="text" name="sobrenome" size="40px" placeholder="Seu sobrenome"  maxlength="30" required></td></tr>
					<tr><td>Senha</td><td><input type="password" name="senha" placeholder="Sua senha completa"  maxlength="30" required></td></tr>
					<tr><td>Email</td><td><input type="email" name="email" placeholder="exemplo@exemplo.com" required></td></tr>
					<tr><td>CPF</td><td><input type="text" name="cpf" placeholder="123.123.123-00" maxlength="14" required OnKeyPress="formatar('###.###.###-##', this)">
					<tr><td>Nascimento</td><td><input type="text" name="nascimento" placeholder="00/00/0000" maxlength="10" required OnKeyPress="formatar('##/##/####', this)"></td></tr>
					<tr><td>Telefone</td><td><input type="text" name="telefone" placeholder="99 88888-7777" maxlength="13" required OnKeyPress="formatar('## #####-####', this)"></td></tr>
					</table>
					<input type="submit" name="btenviar" value="Cadastrar">
				</form>
			</div>

		<div class="pe">
		<center>
			<img src="img/icons.png" width="15%"><br><br>
			Copyright © BabyShopping 2016. Todos os direitos reservados.
		</center>
		</div>

        </body>
    </html>