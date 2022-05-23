<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
	<head>		
		<title> Talk4Me - Dados dos Atendimentos </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style_dados_atendimento.css">
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

		<h2> Registro de atendimento </h2>

		<div class="fundo">
			<div class="container">				
				<form action="cadastrar.php" method="POST" class="campos_cadastro" enctype="multipart/form-data">
					<div class="alinhamento">
						<div class="item">
							<label for="Nome"> Total de atendimentos: </label>
						</div>

						<div class="dados">
							<label for="e-mail"> 15 </label>						
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="fundo">
			<div class="container">				
				<form action="cadastrar.php" method="POST" class="campos_cadastro" enctype="multipart/form-data">
					<div class="alinhamento">
						<div class="item">
							<label for="Nome"> Total de usuários: </label>
						</div>

						<div class="dados">
							<label for="e-mail"> 15 </label>						
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="fundo">
			<div class="container">				
				<form action="cadastrar.php" method="POST" class="campos_cadastro" enctype="multipart/form-data">
					<div class="alinhamento">
						<div class="item">
							<label for="Nome"> Total de interpretes: </label>
						</div>

						<div class="dados">
							<label for="e-mail"> 15 </label>						
						</div>
					</div>
				</form>
			</div>
		</div>					
	</body>
</html>
