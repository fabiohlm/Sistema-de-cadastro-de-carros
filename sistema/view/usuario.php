<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="../look.css">
    <script type="text/javascript" src="../controller/scripts/usuario.js"></script>
</head>
<body>
    <div id="aba">
        <?php
            include "../conf.php";
            $info = mysqli_fetch_object(usuarioBanco($con, $_SESSION['usuario']));
            echo utf8_encode("<p>
                $info->nome $info->sobrenome
            </p>");
            if ($info->perfil == 1) {
                $perfil = "Administrador";
            } elseif ($info->perfil == 2) {
                $perfil = "Gerente";
            } else {
                $perfil = "Vendedor";
            }
            echo "<p>
                $perfil
            </p>";
        ?>
        <a href="../controller/sairsessao.php">Sair</a>
    </div>
    <div id="usuario">
        <h1>Cadastro de Usuário</h1>
        <form action="../controller/usuario.php" method="post">
            <p>Nome: <input id="nome" name="nome" type="text" onkeyup="funcMaster('nome');">
                <br>
                <span id="nomevazio"></span>
            </p>
            <p>Sobrenome: <input id="sobrenome" name="sobrenome" type="text" onkeyup="funcMaster('sobrenome');">
                <br>
                <span id="sobrenomevazio"></span>
            </p>
            <p>Nome de Usuário: <input id="loginusuario" name="loginusuario" type="text" onkeyup="funcMaster('loginusuario');">
                <br>
                <span id="loginusuvazio"></span>
            </p>
            <p>Senha: <input id="senha" name="senha" type="password" onkeyup="funcMaster('senha');">
                <br>
                <span id="senhavazia"></span>
            </p>
            <p>Confirmar Senha: <input id="confsenha" name="confsenha" type="password" onkeyup="funcMaster('confsenha');">
                <br>
                <progress id="barra" value="" max="100"></progress>
                <br>
                <span id="mensagem"></span>
                <br>
                <span id="confsenhavazia"></span>
                <br>
                <span id="vsmincar">*Número mínimo de caracteres: 6</span>
                <br>
                <span id="vsnum">*Digite pelo menos um número</span>
                <br>
                <span id="vsmai">*Digite pelo menos um caractere maiúsculo</span>
                <br>
                <span id="vsmin">*Digite pelo menos um caractere minúsculo</span>
                <br>
                <span id="vscaresp">*Digite pelo menos um caractere especial(Ex.:$@#&!)</span>
            </p>
            <p>Nível de Acesso: 
                <select id="perfil" name="perfil" onclick="funcMaster('perfil');">
                    <option value="null">--</option>
                    <option value="1">Administrador</option>
                    <option value="2">Gerente</option>
                    <option value="3">Vendedor</option>
                </select><br>
                <span id="perfilvazio"></span>
            </p>
            <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" onclick=" funcMaster('cadastrar');">
            <input type="reset" value="Limpar dados">
        </form>
    </div>
</body>
</html>