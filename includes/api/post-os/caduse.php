<?php
        // informacoes do usuario
        $iduser = $_POST['iduser'];
        $username = $_POST['usuario'];
        $userfone = $_POST['fone'];
        // login do usuario
        $userlogin = $_POST['login'];
        $userpassword = $_POST['senha'];
        $perfil = $_POST['perfil'];
        
    // inclui o arquivo de conexao com o banco de dados
    include_once("conexao.php");

        $strcon = mysqli_connect('localhost','root','','dbos') or die ('Erro ao conectar ao servidor');
        
        // insere as informacoes do formulario na tabela usuarios no banco dbos
        $sql = "INSERT INTO tbusuarios VALUES ";
        $sql .="('$iduser','$username','$userfone','$userlogin','$userpassword','$perfil')";

        mysqli_query($conexao,$sql) or die (" Erro ao tentar cadastrar registro");
        mysqli_close($conexao);
        echo " Arquivo cadastrado com sucesso";