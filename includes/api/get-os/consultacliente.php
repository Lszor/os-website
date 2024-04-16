<?php

// Tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>Cliente</th>";
echo "<th>Endereço</th>";
echo "<th>Fone</th>";
echo "<th>Email</th>";
echo "</tr>";

//conectando ao bd:
$strcon = mysqli_connect('localhost', 'root', '', 'dbos') or die('Erro ao conectar ao servidor');

//realiza a instrução sql
$sql = "select * from tbclientes";
$resultado = mysqli_query($strcon, $sql) or die("erro ao retornar dados");

//Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
    $cliname = $registro['nome_cli'];
    $clienderec = $registro['endereco_cli'];
    $clifone = $registro['fone_cli'];
    $cliemail = $registro['email_cli'];

    echo "<tr>";
    echo "<td>" . $cliname . "</td>";
    echo "<td>" . $clienderec . "</td>";
    echo "<td>" . $clifone . "</td>";
    echo "<td>" . $cliemail . "</td>";
    echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";
