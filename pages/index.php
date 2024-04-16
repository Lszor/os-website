<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/login.css'>
  <script src='main.js'></script>
</head>

<body>
  <h1>Sistema OS
  </h1>
  <h2>Bem vindo ao Sistema de OS</h2>
  <form class="form_card" name="login" action="./includes/api/auth-os/login.php" method="post" autocomplete="off">
    <div class="card_header">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path fill="currentColor" d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z"></path>
      </svg>
      <h1 class="form_heading">Sign in</h1>
    </div>
    <div class="field">
      <label for="username">Username</label>
      <input class="input" name="login" type="text" placeholder="Email" id="username">
    </div>
    <div class="field">
      <label for="password">Password</label>
      <input class="input" name="senha" type="password" placeholder="Password" id="password">
    </div>
    <div class="field">
      <button class="button" type="submit">Login</button>
    </div>
  </form>
</body>

</html>