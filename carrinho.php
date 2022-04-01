<?php
session_start();
include_once ("conexao1.php");

$USUARIO=1;
//$consulta= "SELECT * FROM produto";
//$con= mysqli->query($consulta);
$result_usuario="SELECT nome, cidade, email,celular,descricao FROM `interpretes`";


$result_usuario=mysqli_query($conexao, $result_usuario);


?>
<!DOCTYPE html>
<html>
	<head>		
		<title> Carrinho </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="grid.css">
		<link rel="stylesheet" href="grid.css">
		<link rel="stylesheet" href="grid.css">	
		<style type="text/css">
				body {
				font-family:Arial, sans-serif;
			}

			img {
				-moz-transform: all 0.4s;
				-webkit-transform: all 0.4s;
				transition: all 0.4s;
			}

			img:hover {
				-moz-transform: scale(0.1);
				-webkit-transform: scale(0.1);
				transform: scale(0.9);
			}

			/* Cabeçalho */
			.cabeçalho {
				width: 100%;
				padding: 10px;
				background: #393F82;
				box-shadow: 0 0 8px rgba(0,0,0,0.2);
				top: 0;
				z-index: 99;
				position: fixed;
			    display: table-cell;
			    text-align: center;
			}

			.icones {
				float: right;
				margin-top: 40px;
				margin-right: 20px;
			}

			li {
				display: inline-flex;
				float: left;
			}			

			input.botao { /* Botão do cardapio */
				background-color: #ffffff;
	       		border: 1px solid transparent;
        		color: #393F82;
          		border-radius: 20px;
          		height: 30px;
          		width: 110px;
				font-weight: bold;	      
			}

			.botao:hover {
			    transition: 0.5s all;
			    box-shadow: 1px 1px 10px 1px black;				
			}					
			
			/* Rodapé */
			.rodape {
				width: 100%;
				padding: 10px;
				background: #ECECEC;
				box-shadow: 0 0 8px rgba(0,0,0,0.2);
				display: flex;
				justify-content: space-around;				
			}			

			img.whatsapp {
			    display: flex;
			}

			table.tel { 
				border: 2px solid transparent;
			    display: flex;			
			}

			/* Direitos */
			.direitos {
				text-align: center;
				background: #ECECEC;
				width: 100%;
				padding: 10px;				
			}

			.corpo {
				width: 100%;
				margin-top: 160px;;
				margin-bottom: 30px;
				display: flex;
				justify-content: center;
				align-items: center;
			}

			.tabela{				
				padding: 0 20px;
			}

			.tabela2{
				border: solid 1px black;
				border-radius: 15px;
				padding: 0 20px;
			}

			.corpo td,	th {
				padding: 15px 40px;
				display: table-cell;
				text-align: left;
				vertical-align: middle;				
			}

			.texto1 {
				text-align: right;
			}

			fieldset{
				width: 100%;
				border: none;
				display: inline-flex;
				flex-wrap: wrap;
				margin-top: 10px;
				padding: 0 0;	
			}

			.alterar{
				display: inline-flex;
				width: 82%;
			}

			.alt1{
				margin-right: 20px;	
				border: 1px solid;
				padding: 0 15px;
				border-radius: 15px;
			}

			.botao_confirmar {
				margin-top: auto;
				float: right;				
			}

			.bt_confirmar {
				padding: 10px 30px;
				background: #C56B34;
	       		border: 2px solid transparent;
	       		border-radius: 20px;
        		color: #fff;
        		transition: all 0.4s;	
			}

			.bt_confirmar:hover {
				transform: scale(0.9);
			}

			.botao_login {
				text-align: center;
				margin-bottom: 15px;
			}

			.alinhar {
				padding: 0 0;
				margin-top: 50px;
			}

			.botao_login2 {
				margin-top: 80px;
				text-align: center;
			}			

			.campos {
				
				height: 46px;
				margin-top: 25px;
				background: transparent;
				border: none;
				outline: none;
				border-bottom: 1px solid;
				transition: .25s ease-in-out;
			}

			.input-field {
				position: relative;
				margin-bottom: 20px;
			}

			label {
				position: absolute;
				top: 0;
				left: 0;
				transform: translateY(40px);
				transition: .25s ease-in-out;
			}

			.campo:focus{
				border-bottom: 2px solid;
				box-shadow: 0 1px 0 0;
			}			

			.campos:focus + label {
				transform: translateY(14px);
				font-weight: bold;
			}

			.campos:not(:placeholder-shown) + label {
				transform: translateY(14px);
				font-weight: bold;
			}

			.campos:not(:placeholder-shown) {
				border-bottom: 1px solid;
				box-shadow: 0 1px 0 0;
			}

			.campos::placeholder{
				color: transparent;
			}

		</style>
	</head>
	
	<body>
		<header class="cabeçalho"> <!--cabeçalho-->
			<a href="Pagina_inicial.html"> <img class="Logo" src="Rodapé_Cabeçalho/Logo.png" height="110" width="230"> </a>

			<div class="icones">
				<ul>
					<li>
						<form action="Cardapio.html">
							<input class="botao" type="submit" value="Cardápio">
						</form>
					</li>

					<li class="carrinho">
						<a href="carrinho.php"> <img src="Rodapé_Cabeçalho/carrinho.png" height="28" width="28"> </a>
					</li>
				</ul>
			</div>
		</header>

		<div class="corpo">
			<div class="tabela">
				<div class="tabela2">
					<table>
						<div>
							<tr>
								<th></th>
								<th scope="col">Nome</th>
								<th scope="col">Cidade</th>
								<th scope="col">Email</th>
								<th scope="col">Celular</th>
								<th scope="col">Descrição</th>
							</tr>
						</div>

						<div>
							<?php while($dado = $result_usuario->fetch_array()){ ?>
								
								<tr>
									<td><img src="tap1.png" height="75" width="75"></td>
									<td><?php echo $dado['nome'] ?></td>
									<td><?php echo $dado['cidade'] ?></td>
									<td><?php echo $dado['email'] ?></td>
									<td><?php echo $dado['celular'] ?></td>
									<td><?php echo $dado['descricao'] ?></td>
								
								</tr>
				
								<?php } ?>
						</div>
					</table>
							
				</div>	

				
			</div>			
		</div>

	</body>
</html>