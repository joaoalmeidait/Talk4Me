<?php
session_start();
include_once ("conexao1.php");
$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cidade=filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular=filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$descricao=filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$arquivo=filter_input(INPUT_POST, 'arquivo'); 
$senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING); 
$disponibilidade=filter_input(INPUT_POST, 'disponibilidade', FILTER_SANITIZE_STRING); 


if (isset($_POST['email']) && !empty($_POST['email'])){
    if (isset($_FILES['arquivo'])){
        $extensao=strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome=md5(time()) . $extensao;
        $diretorio ="uploads/";

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    }
    $result_usuario="INSERT INTO interpretes (nome, cidade, email, celular, descricao, arquivo, date, senha, disponibilidade) VALUES('$nome', '$cidade','$email', '$celular', '$descricao', '$novo_nome', NOW(), MD5('$senha'), '$disponibilidade')";
    $result_usuario=mysqli_query($conexao, $result_usuario);

    
}else {
    $_SESSION['nao_autenticado'] = true;
    header("Location: cadastro.php");
}if (mysqli_insert_id($conexao)) {
    $_SESSION['worker'] = $email;
    header("Location: cadastro_interprete_ok.php");
    # code..

}


?>