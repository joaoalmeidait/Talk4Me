<?php
 session_start();
include_once ("conexao1.php");
if (!isset($_SESSION['user'])) {
	$_SESSION['nao_autenticado'] = true;
	$_SESSION['worker'] = true;
}
print_r($_SESSION);

$result_usuario="SELECT nome, cidade, email,celular,descricao, arquivo FROM `interpretes`";
$result_usuario=mysqli_query($conexao, $result_usuario);
$dir="uploads/";


?>
<!DOCTYPE html>
<html>
	<head>		
		<title> Interpretes </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Style_interpretes.css">
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

		<?php while($dado = $result_usuario->fetch_array()){ ?>
			<div class="fundo">
				<article class="interpretes">				
					<div>
						<div class="Foto_Valor">
							<div>
								<img class="foto" src="<?php echo $dir.$dado['arquivo'] ?>" height="130" width="130">
							</div>

							<div class="profissional">
								<article class="nome">
									<h3> <?php echo $dado['nome'] ?></h3>
									<p class="funcao"> Interprete de libras </p>
									<p class="cidade"><?php echo $dado['cidade'] ?> </p>
								</article>
								<div class="valor">
									<p>Disponibilidade: #</p>
								</div>					
							</div>	
						</div>
						
						<div class="informações">
							<div class="sobre_mim">
								<strong>
									<p> Sobre mim: </p>
								</strong>
								
							</div>
							<div class="descrição">
								<p class="texto"> <?php echo $dado['descricao'] ?> </p>
							</div>	
						</div>
						<?php
						if(isset($_SESSION['nao_autenticado'])):
						?>
						<div class="contato">
							<form action="login_usuario.php" type="submit"> 
								<button class="bt_confirmar" >
									<p> ENTAR EM CONTATO </p>
									<i class="bi bi-whatsapp"></i>				           
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-whatsapp">
										<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
									</svg>
								</button>
							</form>
						</div>
						<?php
						else:
						?>
						
						<div class="contato">
							<form action="https://wa.me/<?php echo $dado['celular'] ?>" type="submit"> 
								<button class="bt_confirmar" >
									<p> ENTAR EM CONTATO </p>
									<i class="bi bi-whatsapp"></i>				           
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-whatsapp">
										<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
									</svg>
								</button>
							</form>
						</div>
						<?php
				endif;
				unset($_SESSION['nao_autenticado']);
				?>									
					</div>					
				</article>
			</div>
		<?php } ?>
	</body>
</html>