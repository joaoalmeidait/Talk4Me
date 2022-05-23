<?php
session_start();
include_once ("conexao1.php");
$email_interprete= filter_input(INPUT_POST, 'email_interprete', FILTER_SANITIZE_STRING);
$data=filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$email_usuario= filter_input(INPUT_POST, 'email_usuario', FILTER_SANITIZE_EMAIL);
$duracao=filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_STRING);
$descricao=filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

$id_usuario="SELECT 'id' FROM `usuarios` where 'email' = '$email_usuario'";
$id_usuario=mysqli_query($conexao, $id_usuario);
$dado_u = $id_usuario->fetch_array();
    $id_u = $dado_u['id'];



$id_worker="SELECT 'id' FROM `interpretes` where 'email' = '$email_interprete'";
$id_worker=mysqli_query($conexao, $id_worker);
$dado_w = $id_worker->fetch_array();
$id_w = $dado_w['id'];

print_r($id_u);
print_r($id_w);

if (isset($_POST['email_usuario']) && !empty($_POST['email_usuario'])){
   
    $result_usuario="INSERT INTO atendimento (id_usuario, id_interprete, date, duracao, descricao) VALUES ('$id_u', '$id_w', '$data', '$duracao', '$descricao')";
    $result_usuario=mysqli_query($conexao, $result_usuario);

    
}else {
    header("Location: atendimento_registrado.html");
}if (mysqli_insert_id($conexao)) {
    header("Location: Registro_atendimento.html");
    # code..
}


?>