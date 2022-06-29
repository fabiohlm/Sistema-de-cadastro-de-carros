<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script type="text/javascript" src="controller/scripts/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="look.css">
</head>
<body>
    <div class="center">
        <h1>Cadastro de Carros</h1>
    </div>
    <div id = "login">
        <h2>Login</h2>
        <form action="controller/login.php" method="post">
            <p>Nome de Usuário: <input type="text" name="loginusuario" id="loginusuario" onblur="nousuVazio()"></p>
            <p id = "mensnomeusu"></p>
            <p>Senha: <input type="password" name="senha" id="senha" onblur="senhaVazia()"></p>
            <p id = "menssenha"></p>
            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar Dados">
        </form>
    </div>
</body>
</html>