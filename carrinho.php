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
					echo "<a class='logs'>Olá Sr(a) ".utf8_encode($_SESSION['sobrenome'])."</a> | <a class='ae' href='sair.php'>SAIR</a>";
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
				
			<?php 
				echo "<hr><br>";
				echo "<h1>Olá ".$_SESSION['nome'].", seja bem vindo ao seu carrinho<br><br>";
				echo "<hr><br>";
				echo "<h1>Seus pedidos:</h1><br>";
				include_once("conexao.php");
				$nome1 = $_SESSION['nome'];
				$sql = "SELECT produtos from pedidos where nome = '$nome1';";
				$query = mysqli_query($conn,$sql);
	    		$fetch = mysqli_fetch_row($query);

	    		
	    		

				while($fetch = mysqli_fetch_row($query)){
					if($fetch[0] == 'm1'){
	    				echo "<h1>Blusa regata do batman azul</h1>";
	    			}
	    			elseif($fetch[0] == 'm2'){
	    				echo "<h1>Blusa do Super Homem azul</h1>";
	    			}
	    			elseif($fetch[0] == 'm3'){
	    				echo "<h1>Blusa do Homem Aranha azul</h1>";
	    			}
	    			elseif($fetch[0] == 'm4'){
	    				echo "<h1>Blusa do batman cinza</h1>";
	    			}
	    			elseif($fetch[0] == 'm5'){
	    				echo "<h1>Blusa regata do Homem Aranha </h1>";
	    			}
	    			elseif($fetch[0] == 'm6'){
	    				echo "<h1>Blusa Skate azul</h1>";
	    			}
	    			elseif($fetch[0] == 'm7'){
	    				echo "<h1>Blusa 1987 vermelha</h1>";
	    			}
	    			if($fetch[0] == 'm8'){
	    				echo "<h1>Blusa cidade cinza</h1>";
	    			}
	    			elseif($fetch[0] == 'r1'){
	    				echo "<h1>Blusa rosa</h1>";
	    			}
	    			elseif($fetch[0] == 'r2'){
	    				echo "<h1>Blusa azul com detalhes florais</h1>";
	    			}
	    			elseif($fetch[0] == 'r3'){
	    				echo "<h1>Blusa listrada com flores</h1>";
	    			}
	    			elseif($fetch[0] == 'r4'){
	    				echo "<h1>Vestido azul com flores</h1>";
	    			}
	    			elseif($fetch[0] == 'r5'){
	    				echo "<h1>Blusa da Minnie colorida</h1>";
	    			}
	    			elseif($fetch[0] == 'r6'){
	    				echo "<h1>Blusa florida</h1>";
	    			}
	    			elseif($fetch[0] == 'r7'){
	    				echo "<h1>Blusa da Minnie</h1>";
	    			}
	    			elseif($fetch[0] == 'r8'){
	    				echo "<h1>Blusa da Minnie azul</h1>";
	    			}
	    			elseif($fetch[0] == 'a1'){
	    				echo "<h1>Chapeu</h1>";
	    			}
	    			elseif($fetch[0] == 'a2'){
	    				echo "<h1>Cachecol</h1>";
	    			}
	    			elseif($fetch[0] == 'a3'){
	    				echo "<h1>Luva Azul</h1>";
	    			}
	    			elseif($fetch[0] == 'a4'){
	    				echo "<h1>Luva Roxa</h1>";
	    			}
	    			elseif($fetch[0] == 'a5'){
	    				echo "<h1>Chapeu Corinthians</h1>";
	    			}
	    			elseif($fetch[0] == 'a9'){
	    				echo "<h1>Luva Vermelha</h1>";
	    			}
	    			elseif($fetch[0] == 'a7'){
	    				echo "<h1>Chapeu Rosa</h1>";
	    			}
	    			elseif($fetch[0] == 'a8'){
	    				echo "<h1>Chapeu Azul</h1>";
	    			}

				}










			?>




		<div class="pe">
		<center>
			<img src="img/icons.png" width="15%"><br><br>
			Copyright © BabyShopping 2016. Todos os direitos reservados.
		</center>
		</div>

        </body>
    </html>