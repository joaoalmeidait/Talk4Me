<?php
session_start();
include('conexao1.php');
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login_interprete.php');
    exit();
}


$email =  $_POST['email'];
$senha =  $_POST['senha'];

$query = "select id, nome from interpretes where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row==1){

    $_SESSION['worker'] = $email;
    header('Location: cadastro_interprete_ok.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header ('Location: login_interprete.php');
    exit();
}