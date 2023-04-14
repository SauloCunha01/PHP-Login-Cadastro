<?php
// credenciais do banco de dados
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'InforG6';
// cria uma conexão com o banco de dados
$conn = mysqli_connect($host, $user, $pass, $dbname);
// verifica se a conexão foi bem-sucedida
if (!$conn) {
    die('Erro ao conectar ao banco de dados: '.mysqli_connect_error());
}
?>
