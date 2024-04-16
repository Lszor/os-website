<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/caduse.css'>

</head>

<body>
  <h1>Bem Vindo <span class="badge badge-secondary">Usuário
    </span></h1>

  <a href="principal.html"><button type="button" class="btn btn-secondary">Voltar</button></a><br>
  <span class="form-user"></span>
  <!-- Cadastro de Usuário -->
  <form action="./includes/api/post-os/caduse.php" method="post">
    <legend>Cadastro de Usuario</legend>
    <br>
    <div class="container">

      <!-- iduser Input -->
      <div class="form-group">
        <label for="iduser">iduser</label>
        <br>
        <input class="form-iduser-input" type="text" id="iduser" name="iduser">
      </div>
      <br>
      <!-- Usuário Input -->
      <div class="form-group">
        <label class="form-label" for="usuario">Usuário</label>
        <br>
        <input type="text" id="usuario" class="form-control" name="usuario" required placeholder="Nome de Usúario" />
      </div>
      <br>
      <!-- Fone Input -->
      <div class="form-group">
        <label class="form-label" for="userfone">Fone</label>
        <br>
        <input type="text" class="form-control" id="userfone" name="fone" required placeholder="11912344321">
      </div>
      <br>
      <!-- Login Input -->
      <div class="form-group">
        <label class="form-label" for="login">Login</label>
        <br>
        <input type="text" id="login" class="form-control" name="login" required placeholder="seuemail@email.com" />
      </div>
      <br>
      <!-- Senha Input -->
      <div class="senha">
        <label class="form-label" for="usersenha">Senha</label><br>
        <input type="password" id="usersenha" class="form-control" required name="senha" placeholder="******" />
      </div><br>
      <!-- Tipo de Usuário Input -->
      <div class="form-group">
        <label for="tipouser">Tipo de Usúario</label><br>
        <select name="perfil" id="tipouser" class="form-control">
          <option value="admin">Administrador</option>
          <option value="tecnico">Técnico do sistema</option>
          <option value="estagiario">Estágiario</option>
        </select>
      </div><br>
      <!-- Botões Input -->
      <input class="btn btn-dark" id="bntuser1" type="submit" value="Cadastrar" />
      <input class="btn btn-dark" id="bntuser2" type="reset" value="Limpar" />
      <a href="./includes/api/get-os/consultausuario.php"><input type="button" class="btn btn-dark" name="consult" id="consult" value="Consultar"></a>
    </div>
  </form>
</body>

</html>