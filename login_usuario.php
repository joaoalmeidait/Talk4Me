<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
	<head>		
		<title> Talk4Me - Registro de atendimento </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Style_login_usuario.css">
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

		<div class="fundo">
			<div class="container">
				<h2> Login </h2>
				<?php
				if(isset($_SESSION['nao_autenticado'])):
				?>
				<div>
					<p>Usuario ou senha inválidos.</p>
				</div>
				<?php
				endif;
				unset($_SESSION['nao_autenticado']);
				?>
				<form action="logar_usuario.php" method="POST">
					<div class="input-field">
                        <label for="e-mail"> E-mail </label>
						<input class="campos" type="text" name="email" placeholder="Digite seu e-mail"required>						
					</div>
					<div class="input-field">
                        <label for="senha"> Senha </label>
						<input class="campos" type="password" name="senha" placeholder="Digite sua senha"required>						
					</div>
					<div class="botao_login">
						<input class="bt_login" type="submit" value="Confirmar">
					</div>
				</form>
				<div class="linhas">
					<a class="esqueceu_senha" href="Redefinir_senha.html"><p><b> Esqueci minha senha </b></p></a>
					<a class="esqueceu_senha" href=""><p><b> Cadastrar-se </b></p></a>
				</div>
			</div>
		</div>			
	</body>
</html>