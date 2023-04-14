<?php
    include 'conexao.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // Prepara a consulta SQL para inserir os dados na tabela "usuarios"
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    // Executa a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";
        header('Location: ../index.php');
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();

?>