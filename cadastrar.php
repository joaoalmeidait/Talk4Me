<?php
session_start();
include_once ("conexao1.php");
$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cidade=filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular=filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$descricao=filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);


if (isset($_POST['email']) && !empty($_POST['email'])){
    $result_usuario="INSERT INTO interpretes (nome, cidade, email, celular, descricao) VALUES('$nome', '$cidade','$email', '$celular', '$descricao')";
    $result_usuario=mysqli_query($conexao, $result_usuario);

}else {
    header("Location: cadastro.php");
}if (mysqli_insert_id($conexao)) {
    header("Location: Interpretes.php");
    # code..

}


?>