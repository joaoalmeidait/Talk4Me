<?php
session_start();
include_once ("conexao1.php");
$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular=filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING); 



if (isset($_POST['email']) && !empty($_POST['senha'])){
    $result_usuario="INSERT INTO usuarios (nome, email, celular, senha) VALUES('$nome','$email', '$celular', MD5('$senha'))";
    $result_usuario=mysqli_query($conexao, $result_usuario);
}else {
    header("Location: cadastro_usuario.html");
}if (mysqli_insert_id($conexao)) {
    header("Location: Interpretes.php");
    # code..

}


?>