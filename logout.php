<?php
session_start();
session_destroy();
header('Location: login_interprete.php');
exit(); 