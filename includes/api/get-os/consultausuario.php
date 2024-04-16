<?php

    // Tabela e cabeçalho de dados:
    echo "<table border=1>";
    echo"<tr>";
    //echo "<th>iduser</th>";
    echo "<th>iduser</th>";
    echo "<th>usuario</th>";
    echo "<th>fone</th>";
    echo "<th>login</th>";
    echo "<th>senha</th>";
    echo "<th>tipouser</th>";
    echo "</tr>";

    //conectando ao bd:
    $strcon = mysqli_connect('localhost','root','','dbos') or die ('Erro ao conectar ao servidor');
    
    //realiza a instrução sql
    $sql = "select * from tbusuarios";
    $resultado = mysqli_query($strcon,$sql) or die("erro ao retornar dados");

    //Obtendo os dados por meio de um loop while
    while ($registro = mysqli_fetch_array($resultado))
    {
        $iduser = $registro['iduser'];
        $username = $registro['usuario'];
        $userfone = $registro['fone'];
        $userlogin = $registro['login'];
        $userpassword = $registro['senha'];
        $perfil = $_POST['perfil'];

        echo "<tr>";
        echo "<td>".$iduser."</td>";
        echo "<td>".$username."</td>";
        echo "<td>".$userfone."</td>";
        echo "<td>".$userlogin."</td>";
        echo "<td>".$userpassword."</td>";
        echo "<td>".$perfil."</td>";
        echo "</tr>";
    }

    mysqli_close($strcon);
    echo"</table>"

?>