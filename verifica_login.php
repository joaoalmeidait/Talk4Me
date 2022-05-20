<?php
session_start();
if(!$_SESSION['email']){
    header ('Location: login_interprete.html');
    exit();
}