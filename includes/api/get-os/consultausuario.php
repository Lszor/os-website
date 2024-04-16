<?php

// Tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>iduser</th>";
echo "<th>usuario</th>";
echo "<th>fone</th>";
echo "<th>login</th>";
echo "<th>tipouser</th>";
echo "</tr>";

// Conectando ao BD:
$strcon = mysqli_connect('localhost', 'root', '', 'dbos') or die('Erro ao conectar ao servidor');

// Realiza a instrução SQL
$sql = "SELECT * FROM tbusuarios";
$resultado = mysqli_query($strcon, $sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
    $iduser = $registro['iduser'];
    $username = $registro['usuario'];
    $userfone = $registro['fone'];
    $userlogin = $registro['login'];
    $halfLength = strlen($userlogin) / 2;
    $maskedLogin = substr_replace($userlogin, str_repeat('*', $halfLength), $halfLength);
    $perfil = $_POST['perfil'];

    echo "<tr>";
    echo "<td>" . $iduser . "</td>";
    echo "<td>" . $username . "</td>";
    echo "<td>" . $userfone . "</td>";
    echo "<td>" . $maskedLogin . "</td>";
    echo "<td>*****</td>";
    echo "<td>" . $perfil . "</td>";
    echo "</tr>";
}