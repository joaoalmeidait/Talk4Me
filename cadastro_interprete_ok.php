<?php
session_start();

include('conexao1.php');
$email_interprete = $_SESSION['worker'];
$id_worker="SELECT nome FROM `interpretes` WHERE `email` = '$email_interprete'";
$id_worker=mysqli_query($conexao, $id_worker);
$dado_w = $id_worker->fetch_array();
$id_w = $dado_w['nome'];

?>
<!DOCTYPE html>
<html>
	<head>		
		<title> Interpretes </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Style_cadastro_interprete_ok.css">
	</head>

	<body>
		<header>
			<nav>
				<div class="logo">
					<a href="Home.html">
						<img src="logo.jpg" alt="logo site" height="100" width="100">
					</a>
				</div>
				<ul>
					<button>&#9776;</button>
					<nav class="menu">
						<ul>
							<li><a href="Home.html">HOME</a></li>
							<li><a href="Interpretes.php">INTERPRETES</a></li>
							<li>
								<a href="cadastro_interprete.html">SOU INTERPRETE</a>
								<ul>
									<li><a href="login_interprete.php">LOGIN</a></li>
									<li><a href="cadastro_interprete.html">CADASTRO</a></li>
								</ul>
							</li>   
							<li><a href="logout.php">SAIR</a></li>                
						</ul>
					</nav>
				</ul>
			</nav>
		</header>

		<div class="corpo">
			<h1> Olá, <?php echo $id_w ?> </h1>
			<h1 class="op"> Escolha uma das opções abixo: </h1>
			<ul class="texto">
				<li><a  href= "Registro_atendimento.html"> <h1> Registrar Atendimento </h1><a></li>
				<li><a  href= "Registro_atendimento.html"> <h1> Editar cadastro </h1><a></li>
			</ul>
		</div>
    </body>   
</html>