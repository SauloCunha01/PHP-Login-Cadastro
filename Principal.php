<?php
    include 'php/conexao.php';
    session_start();
    echo 'Seja Bem vindo! : '.$_SESSION['nome'];
    
?>