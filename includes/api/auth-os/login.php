<?php

session_start();

// vnclui arquivo de conexão
include("conexao.php");

// verifica se os campos de login e senha foram preenchidos
if (empty($_POST['login']) || empty($_POST['senha'])) {
    header("Location: /OS/pages/index.php");
    exit();
}

// Proteção contra SQL injection usando mysqli_prepare
$userlogin = mysqli_real_escape_string($conexao, $_POST['login']);
$userpassword = mysqli_real_escape_string($conexao, $_POST['senha']);
//$userpassword = md5($userpassword); // Se a senha estiver criptografada com MD5

// query de consulta
$query = "SELECT login, iduser FROM tbusuarios WHERE login = ? AND senha = ?";

// prepara a query
$stmt = mysqli_prepare($conexao, $query);

// aerifica se a preparação da query foi sucedida
if ($stmt) {
    // associa parametros à query
    // string e string
    mysqli_stmt_bind_param($stmt, "ss", $userlogin, $userpassword);

    // executa a query
    mysqli_stmt_execute($stmt);

    // armazena o resultado da query
    mysqli_stmt_store_result($stmt);

    // verifica se ha algum registro retornado
    if (mysqli_stmt_num_rows($stmt) == 1) {
        // define a sessão de login
        $_SESSION['login'] = $userlogin;
        header("Location: /OS/pages/principal.php");
        exit();
    } else {
        header("Location: /OS/pages/index.php");
        exit();
    }
} else {
    // se a preparação da query falhar, redireciona para a página de login com mensagem de erro
    header("Location: /OS/pages/index.php?error=preparation_failed");
    exit();
}
