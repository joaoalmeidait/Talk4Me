<?php
session_start();
class Usuario{
    public function login ($email, $senha){
        global $pdo;
        $sql="SELECT * FROM usuarios WHERE email= :email AND senha= :senha";
        //prepara a consulta recebdno sql
        $sql= $pdo->prepare($sql);
        //colocaa os valores das variaveis
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        //executa a query
        $sql->execute();

        //se houver registro
        if ($sql->rowCount() > 0){
            $dado=$sql->fetch();
            
            //cria sessão no sistema
            $_SESSION['idUser']= $dado['idusuario'];
            return true;      
          }else {
              return false;
          }

    }
    
}








?>