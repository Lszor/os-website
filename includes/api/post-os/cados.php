<?php
$idos = $_POST['os'];
$equip = $_POST['equipamento'];
$servico = $_POST['servico'];
$tecrespons = $_POST['tecnico'];
$valorOs = $_POST['valor'];
$dataos = $_POST['data_os'];
$defeitoOs = $_POST['defeito'];
$idcliente = $_POST['idcliente'];

// inclui o arquivo de conexao com o banco de dados
include_once("conexao.php");


$strcon = mysqli_connect('localhost', 'root', '', 'dbos') or die('Erro ao conectar ao servidor');

// insere as informacoes do formulario na tabela usuarios no banco dbos
$sql = "INSERT INTO tbos (equipamento, defeito, servico, tecnico, valor, idcliente)
        VALUES 
        ('$equip','$defeitoOs','$servico','$tecrespons','$valorOs','$idcliente')";


mysqli_query($conexao, $sql) or die(" Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "Cadastro efetuado com sucesso";
