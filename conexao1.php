<?php
$localhost="localhost";//none do host
$user="root";//usuario
$passw="";//senha
$banco="talk4me";//nome do banco de dados

//conexao 
$conexao=mysqli_connect($localhost, $user, $passw, $banco);

//consulta
//$sql=mysqli_query($conexao,"select * from usuarios");
//echo "existem ". mysqli_num_rows($sql) . " registros";