<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/cados.css">

<body>
    <!-- Form Cadastro de Ordem de Serviço -->
    <form name="os" action="./includes/api/post-os/cados.php" method="post" autocomplete="off">
        <!-- Formalários Input -->
        <P class="form-group">
            <label for="idos">OS</label>
            <input class="form-idos-input" type="text" id="idos" name="os">
        </P>
        <!-- Dispositivo Input -->
        <P class="form-group">
            <label for="dispositivo">Dispositivo</label>
            <input class="form-dispositivo-input" type="text" id="dispositivo" required="required" name="equipamento">
        </P>
        <!-- Serviços Input -->
        <P class="form-group">
            <label for="servico">Serviços</label>
            <input class="form-servico-input" type="text" id="servico" required="required" name="servico">
        </P>
        <!-- Técnico Input -->
        <P class="form-group">
            <label for="tecnico">Técnico</label>
            <input class="form-tecnico-input" type="text" id="tecnico" required="required" name="tecnico">
        </P>
        <!-- Valor Input -->
        <P class="form-group">
            <label for="valor">Valor</label>
            <input class="form-valor-input" type="text" id="valor" required="required" name="valor">
        </P>
        <!-- Defeito -->
        <div>Defeito <br>
            <textarea name="defeito"></textarea>
        </div>
        <!-- ID Cliente -->
        <P class="form-group">
            <label for="idcliente">ID Cliente</label>
            <input class="form-idos-input" type="text" id="idcliente" name="idcliente">
        </P>
        <!-- Data Input -->
        <P class="data">
            <label for="data"></label>
            <input class="form-data-input" type="datetime-local" id="data" name="data_os">
        </P>
        <!-- Botões Input -->
        <input class="btn btn-dark" id="bntuser1" type="submit" value="Cadastrar" />
        <input class="btn btn-dark" id="bntuser2" type="reset" value="Limpar" />
        <a href="./includes/api/get-os/consultaos.php"><input type="button" class="btn btn-dark" name="consult" id="consult" value="Consultar"></a>
    </form>
</body>

</html>