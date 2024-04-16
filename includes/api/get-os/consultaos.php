<?php

// Tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>OS</th>";
echo "<th>Equipamento</th>";
echo "<th>Serviço</th>";
echo "<th>Técnico</th>";
echo "<th>Valor</th>";
echo "<th>Data OS</th>";
echo "<th>Defeito</th>";
echo "<th>ID Cliente</th>";
echo "</tr>";

//conectando ao bd:
$strcon = mysqli_connect('localhost', 'root', '', 'dbos') or die('Erro ao conectar ao servidor');

//realiza a instrução sql
$sql = "select * from tbos";
$resultado = mysqli_query($strcon, $sql) or die("erro ao retornar dados");

//Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
    $idos = $registro['os'];
    $equip = $registro['equipamento'];
    $servico = $registro['servico'];
    $tecrespons = $registro['tecnico'];
    $valorOs = $registro['valor'];
    $dataos = $registro['data_os'];
    $defeitoOs = $registro['defeito'];
    $idcliente = $registro['idcliente'];

    echo "<tr>";
    echo "<td>" . $idos . "</td>";
    echo "<td>" . $equip . "</td>";
    echo "<td>" . $servico . "</td>";
    echo "<td>" . $tecrespons . "</td>";
    echo "<td>" . $valorOs . "</td>";
    echo "<td>" . $dataos . "</td>";
    echo "<td>" . $defeitoOs . "</td>";
    echo "<td>" . $idcliente . "</td>";


    echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";
