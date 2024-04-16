<?php
        // informacoes do cliente
        // $idcli = $_POST['idcliente'];
        $cliname = $_POST['nome_cli'];
        $clienderec = $_POST['endereco_cli'];
        $clifone = $_POST['fone_cli'];
        $cliemail = $_POST['email_cli'];

    // inclui o arquivo de conexao com o banco de dados

        $strcon = mysqli_connect('localhost','root','','dbos') or die ('Erro ao conectar ao servidor');

        // insere as informacoes do formulario na tabela cliente no banco dbos
        $sql = "INSERT INTO tbclientes (nome_cli, endereco_cli, fone_cli,email_cli)
         VALUES 
         ('$cliname','$clienderec','$clifone','$cliemail')";

        mysqli_query($strcon,$sql) or die (" Erro ao tentar cadastrar registro");
        mysqli_close($strcon);
        echo " Arquivo cadastrado com sucesso";