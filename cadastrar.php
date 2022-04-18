<?php
session_start();
include_once ("conexao1.php");
$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cidade=filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular=filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$descricao=filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$arquivo=filter_input(INPUT_POST, 'arquivo'); 
$valor=filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING); 



if (isset($_POST['email']) && !empty($_POST['email'])){
    if (isset($_FILES['arquivo'])){
        $extensao=strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome=md5(time()) . $extensao;
        $diretorio ="uploads/";

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    }
    $result_usuario="INSERT INTO interpretes (nome, cidade, email, celular, descricao, arquivo, date, valor) VALUES('$nome', '$cidade','$email', '$celular', '$descricao', '$novo_nome', NOW(),'$valor')";
    $result_usuario=mysqli_query($conexao, $result_usuario);

    
}else {
    header("Location: cadastro.php");
}if (mysqli_insert_id($conexao)) {
    header("Location: Interpretes.php");
    # code..

}


?>