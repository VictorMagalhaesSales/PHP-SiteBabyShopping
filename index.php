<?php
session_start();
?>
<html>
	<head>
		<title>Baby Shopping</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="icon" href="img/favcon.png" >
		<style type="text/css">
			@font-face
				{font-family: 'oliver'; src: url('fonts/oliver.ttf');}
				@font-face
				{font-family:'lato'; src: url('fonts/lato.ttf');}
		</style>
		
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
			<marquee direction="left"  scrollDelay="200"><img src="img/n1.png" width="1.9%" id="n1"></marquee>
			<marquee direction="right"  scrollDelay="50"><img src="img/n2.png" width="1.9%" id="n2"></marquee>
			<marquee direction="right"  scrollDelay="70"><img src="img/n2.png" width="6.3%" id="n3"></marquee>
			<marquee direction="left"  scrollDelay="300"><img src="img/n3.png" width="4.4%" id="n4"></marquee>
			<marquee direction="right"  scrollDelay="100"><img src="img/n3.png" width="9.4%" id="n5"></marquee>
			<marquee direction="left"  scrollDelay="500"><img src="img/n1.png" width="10.7%" id="n6"></marquee>


			<!-- <marquee direction="left"  scrollDelay="200"><img src="img/n1.png" width="1.9%" id="n1"></marquee>
			<marquee direction="right"  scrollDelay="200"><img src="img/n2.png" width="1.9%" id="n2"></marquee>
			<marquee direction="right"  scrollDelay="350"><img src="img/n2.png" width="6.3%" id="n3"></marquee>
			<marquee direction="left"  scrollDelay="300"><img src="img/n3.png" width="4.4%" id="n4"></marquee>
			<marquee direction="right"  scrollDelay="400"><img src="img/n3.png" width="9.4%" id="n5"></marquee>
			<marquee direction="left"  scrollDelay="500"><img src="img/n1.png" width="10.7%" id="n6"></marquee> -->
		</div>
		<center>
		<div class="corpo">
			
				<a href="meninos.php"><img src="img/pro3.webp" width="37%"></a>
				<a href="meninas.php"><img src="img/pro1.webp" width="37%"></a><br>
				<a href="meninos.php"><img src="img/pro4.webp" width="37%"></a>
				<a href="meninos.php"><img src="img/pro2.webp" width="37%"></a>
				
			</div>

			<img src="img/pag.jpg" width="60%"><br><br><br><br>
			
		</div>
		</center>
		<DIV class="sobre">
				<div class="p1">
							<h1>SOBRE NÓS</h1>
							<p align="justify">Uma gestação e a chegada de um bebê é um momento único, e traz consigo muitos desafios e novidades, mas não se preocupe, estamos aqui para ajudar!</p>

							<p align="justify">Criamos um site para trazer mais praticidade e beleza a esta incrível fase das nossas crianças. Isto porque nos importamos em reunir produtos de uma linha sofisticada, elaborada especialmente com materiais de primeira qualidade, com o intuito de proporcionar conforto e estilo a estes pequeninos. Iniciamos o nosso trabalho com a melhor seleção de marcas, onde você encontrará roupas e acessórios para crianças de todas as idades.</p>

							<p align="justify">Nossos clientes são os nossos maiores bens, sendo assim, queremos proporcionar uma experiência única de compra, acompanhando tudo de perto, desde o envio ao recebimento, para que vocês, nossos clientes, tenham todo o tempo dedicado as coisas que realmente importam em nossa vida, deixando o restante por nossa conta.</p>

							<center><b>Conte sempre conosco e seja bem vindo a Baby Shopping!</b></center>
				</div>
		</DIV>
		<div class="email">
				<img src="img/c1.png" id="abest">
				<form method="post"  id="form">
					<input type="email" placeholder="exemplo@exemplo.com"><br><br>
					<input type="submit">
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