<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'dbos');

// Conectar ao banco de dados
$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    die('Não foi possível conectar ao banco de dados: ' . mysqli_connect_error());
}

echo "Conectado com sucesso";
