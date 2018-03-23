<html>
	<head>
		<title>Baby Shopping</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="m1.css">
	</head>

	<body>
		<div class="cm1">
				<div class="pedido">
					<img src="../fr/m1.webp" width="90%" class="f">

				</div>
				<div class="inf">
					<h1>Blusa regata do batman azul</h1>
					<center>
					<h2>R$ 50,00</h2>
		            <font class="c"> OU ATÉ 3X DE $17,00</font><br>
		            <img src="../img/frete.png" width="30px"> Frete grátis para todo país
					</center>

					<Br><br><br>
					<form method="GET" action="enviar.php">
						<table>

		                <tr><td align="right">Nome</td> <td align="center"><input type="text" name="nome" placeholder="Nome Completo"></td></tr>

		                <tr><td align="right">CPF</td> <td align="center"><input type="text" name="cpf" placeholder="12345678912"></td></tr>

						<tr><td align="right">Cidade</td> <td align="center"><input type="text" name="cid" placeholder="Cidade"></td></tr>

						<tr><td align="right">Endereço</td> <td align="center"><input type="text" name="end" placeholder="Rua X Casa X"></td></tr>

						<Tr><td  align="right">Quantidade</td><td td align="center"><input type="number" name="qtd" value="1"></td></tr>

						<Tr><td  align="right">CEP</td><td td align="center"><input type="text" name="CEP" placeholder="_____-___"></td></tr>

						<Tr><td  align="right">N° do cartão</td><td td align="center"><input type="text" name="nc" placeholder="xxxxxxxxxxxxxxxxxxx"></td></tr>

						<tr><td align="right">Pagamento</td>
		                        <td align="left">
		                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            <select name="pag">
		                                <option value="visa">Visa</option>
		                                <option value="elo">ELO</option>
		                                <option value="mastercard">Mastercard</option>
		                                <option value="boleto">Boleto</option>
		                            </select>
		                </td></tr>

						<Tr><td  align="right">Parcelas</td><td td align="center"><input type="number" name="parc" value="1"></td></tr>





		                </table>
						<input type="submit" value="Fazer pedido">
					</form>
				</div>
		</div>
		
	</body>
</html>