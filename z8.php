<?php
//insert no banco de dados  e volta pro cardápio

$PRODUTO =9;
$USUARIO=1;
include_once ("conexao1.php");
$result_usuario="INSERT INTO compra (NUM_PEDIDO, PRODUTO, USUARIO, PRECO, QUANTIDADE) VALUES (NULL, '$PRODUTO', '$USUARIO', '10', '1')";
$result_usuario=mysqli_query($conexao, $result_usuario);
header("Location: Cardapio.html");
?>      