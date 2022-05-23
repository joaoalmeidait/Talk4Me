<?php
session_start();
if(!$_SESSION['user']){
    header ('Location: login_interprete.html');
    exit();
}