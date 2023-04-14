<?php
    include 'conexao.php';
    session_start();
// recebe os dados de login do formulário
$email = $_POST['email'];
$senha = $_POST['password'];

// busca o usuário no banco de dados a partir do email
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $query);

// verifica se a consulta foi bem-sucedida
if (!$result) {
    die('Erro ao executar a consulta: '.mysqli_error($conn));
}

// verifica se o usuário foi encontrado
if (mysqli_num_rows($result) == 1) {
    // recupera o registro do usuário encontrado
    $usuario = mysqli_fetch_assoc($result);
    // verifica se a senha informada é igual à senha cadastrada
    if ($senha === $usuario['senha']) {
        // usuário autenticado com sucesso, pode redirecionar para a página principal-
        $_SESSION['nome'] = $usuario['nome'];
        header('Location: ../principal.php');
        exit;
    } else {
        // senha incorreta
        echo 'Senha incorreta';
    }
}else{
    // usuário não encontrado
    echo 'Usuário não encontrado';
}

// fecha a conexão com o banco de dados
mysqli_close($conn);
?>