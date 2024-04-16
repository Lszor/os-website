<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<link rel="stylesheet" href="css/cadcli.css">
<body>
    <form name="cliente" action="./includes/api/post-os/cadcli.php" method="post" autocomplete="off">
          <!-- Form Cadastro cliente -->
            <fieldset>
              <legend id="legendcad">Cadastro do Cliente</legend>   
                  <!-- Nome Input -->
              <div class="form-group">
                 <label for="form2nome2">Nome completo</label><br>
                   <input type="text" class="form-control" id="form2nome2" name="nome_cli" autofocus>
              </div>
              <!-- Endereço Input -->
              <div class="form-group">
               <label for="form2endereco1">Endereço</label><br>
                 <input type="text" class="form-control" id="form2endereco1" name="endereco_cli" autofocus>
                </div> 
                <!-- Fone -->
                <div class="form-group">
                     <label for="form2fone1">Fone</label><br>
                     <input type="text" class="form-control" id="form2fone1" name="fone_cli">
                </div><br>
               <!-- Email Input -->
              <div class="form-group">
                   <label for="form2email1">Email</label><br>
                   <input type="email" class="form-control" id="form2email1" name="email_cli" placeholder="email@exemple.com">
              </div>
            <!-- Botões -->
                   <input class="btn" id="bnt1" type="submit" value="Cadastrar"/>
                   <input class="btn" id="bnt2" type="reset" value="Limpar"/>
                   <a href="./php/consultacliente.php"><input type="button" class="btn btn-dark" name="consult" id="consult" value="Consultar"></a>
            </fieldset> 
    </form>
</body>
</html>