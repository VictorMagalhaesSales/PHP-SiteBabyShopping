<?php
session_start();
?>
<html>
	<head>
		<title>Baby Shopping</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="meninas.css">
		
		<link rel="icon" href="img/favcon.png" >
	</head>

	<body>
		<img src="img/cab.png" class="cab2">
		
		<!-- ===================================================================================================== -->
		<div class="cm1">
				<div class="pedido">
					<img src="fr/r1.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Blusa rosa</h1> 
					<center>
					<h2>R$ 50,00</h2>
		            <font class="c"> OU ATÉ 3X DE $17,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r1" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<div class="cm2">
				<div class="pedido">
					<img src="fr/r2.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Blusa azul com detalhes florais</h1> 
					<center>
					<h2>R$ 25,00</h2>
		            <font class="c"> OU ATÉ 2X DE $13,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r2" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<div class="cm3">
				<div class="pedido">
					<img src="fr/r3.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Blusa listrada com flores </h1> 
					<center>
					<h2>R$ 60,00</h2>
		            <font class="c"> OU ATÉ 3X DE $20,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r3" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<div class="cm4">
				<div class="pedido">
					<img src="fr/r4.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Vestido azul com flores</h1> 
					<center>
					<h2>R$ 80,00</h2>
		            <font class="c"> OU ATÉ 3X DE $27,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r4" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<div class="cm5">
				<div class="pedido">
					<img src="fr/r5.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Blusa da Minnie colorida	</h1> 
					<center>
					<h2>R$ 20,00</h2>
		            <font class="c"> OU ATÉ 3X DE $10,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r5" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<div class="cm6">
				<div class="pedido">
					<img src="fr/r6.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Blusa florida</h1> 
					<center>
					<h2>R$ 35,00</h2>
		            <font class="c"> OU ATÉ 3X DE $12,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r6" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<div class="cm7">
				<div class="pedido">
					<img src="fr/r7.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Blusa da Minnie</h1> 
					<center>
					<h2>R$ 30,00</h2>
		            <font class="c"> OU ATÉ 2X DE $15,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r7" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<div class="cm8">
				<div class="pedido">
					<img src="fr/r8.webp" width="90%" class="ff">

				</div>
				<div class="inf">
					<font class="fec" size="6">X</font>
					<h1>Blusa da Minnie azul</h1> 
					<center>
					<h2>R$ 25,00</h2>
		            <font class="c"> OU ATÉ 2X DE $13,00</font><br>
		            <img src="img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>
						<input type="text" name="r" value="r8" >
		                <tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade" required></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua" required></td></tr>

						<tr><td align="right">Número</td> <td align="center"><input type="text" name="num" placeholder="Casa" required></td></tr>

						<tr><td align="right">Bairro</td> <td align="center"><input type="text" name="bairro" required></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1" required></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___" OnKeyPress="formatar('#####-###', this)" maxlength="9" required></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx" required maxlength="20"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="hipecard">Hipecard</option>
		                                <option value="American Express">American Express</option>
		                            </select>
		                </td></tr>
		                <tr><td><font size="1">.</font></td></tr>
						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1" required></td></tr>

		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		<!-- ===================================================================================================== -->




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
		<div class="corpo">
			<div class="produtos">
					<h1>PRODUTOS FEMININOS</h1>

					<div class="f">
						<img src="fr/r1.webp" width="250px"><br>
						<h2>Por R$ 50,00</h2><br>
						OU ATÉ 3X DE $17,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm1">

					</div>
					<div class="f">
						<img src="fr/r2.webp" width="250px"><br>
						<h2>Por R$ 25,00</h2><br>
						OU ATÉ 2X DE $13,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm2">
					</div>
					<div class="f">
						<img src="fr/r3.webp" width="250px"><br>
						<h2>Por R$ 60,00</h2><br>
						OU ATÉ 3X DE $20,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm3">
					</div>
					<div class="f">
						<img src="fr/r4.webp" width="250px"><br>
						<h2>Por R$ 80,00</h2><br>
						OU ATÉ 3X DE $27,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm4">
					</div>
					<br>
					<div class="f">
						<img src="fr/r5.webp" width="250px"><br>
						<h2>Por R$ 20,00</h2><br>
						OU ATÉ 2X DE $10,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm5">

					</div>
					<div class="f">
						<img src="fr/r6.webp" width="250px"><br>
						<h2>Por R$ 35,00</h2><br>
						OU ATÉ 3X DE $12,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm6">
					</div>
					<div class="f">
						<img src="fr/r7.webp" width="250px"><br>
						<h2>Por R$ 30,00</h2><br>
						OU ATÉ 2X DE $15,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm7">
					</div>
					<div class="f">
						<img src="fr/r8.webp" width="250px"><br>
						<h2>Por R$ 25,00</h2><br>
						OU ATÉ 2X DE $13,00<br>
						SEM JUROS<br>
						<input type="submit" value="Pedido" class="bm8">
					</div>
			</div>
		</div>
		<div class="pe">
		<center>
			<img src="img/icons.png" width="15%"><br><br>
			Copyright © BabyShopping 2016. Todos os direitos reservados.
		</center>
		</div>	


		<script src="jq/viadao.js"></script>
        <script >
            $(".bm1").click(function(){
                $(".cm1").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })
            $(".bm2").click(function(){
                $(".cm2").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })
            $(".bm3").click(function(){
                $(".cm3").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })
            $(".bm4").click(function(){
                $(".cm4").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })
            $(".bm5").click(function(){
                $(".cm5").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })
            $(".bm6").click(function(){
                $(".cm6").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })
            $(".bm7").click(function(){
                $(".cm7").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })
            $(".bm8").click(function(){
                $(".cm8").show();
                $(".cab").hide();
                $(".menu").hide();
                $(".cab2").show();
            })

            $(".fec").click(function(){
                $(".cm1").hide();
                $(".cm2").hide();
                $(".cm3").hide();
                $(".cm4").hide();
                $(".cm5").hide();
                $(".cm6").hide();
                $(".cm7").hide();
                $(".cm8").hide();
                $(".cab").show();
                $(".menu").show();
                $(".cab2").hide();
            })
        </script>
	</body>
</html>