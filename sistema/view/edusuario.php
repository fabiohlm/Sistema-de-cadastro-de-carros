<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../look.css">
    <script type="text/javascript" src="../controller/scripts/edusuario.js"></script>
    <title>Edição de Usuário</title>
</head>
<body>
    <div id="aba">
        <?php
            include "../controller/listausuario.php";

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
    <?php
        $numusu = $_POST['numusu'];
        $au = atualizarUsuario($con, $numusu);
        $row = mysqli_fetch_object(atualizarUsuario($con, $numusu));
        $perfil = $row->perfil;
    ?>
    <div id="edusuario">
        <h1>Edição de Usuário</h1>
        <form action="../controller/edusuario.php" method="post">
            <p>Nome: 
                <input type="text" id="nome" name="nome" value="<?php printf(utf8_encode($row->nome))?>" onkeyup="vazio();">
                <br>
                <span id="nomevazio"></span>
            </p>
            <p>Sobrenome: 
                <input type="text" id="sobrenome" name="sobrenome" value="<?php printf(utf8_encode($row->sobrenome))?>" onkeyup="vazio();">
                <br>
                <span id="sobrenomevazio"></span>
            </p>
            <p>Nome de Usuário: 
                <input type="text" id="loginusuario" name="loginusuario" value="<?php printf(utf8_encode($row->loginusuario))?>" onkeyup="vazio();">
                <br>
                <span id="loginusuvazio"></span>
            </p>
            <p>Nível de Acesso: 
                <select id="perfil" name="perfil" onclick="vazio();">
                    <option value="null">--</option>
                    <option id="per1" value="1">Administrador</option>
                    <option id="per2" value="2">Gerente</option>
                    <option id="per3" value="3">Vendedor</option>
                </select>
                <br>
                <span id="perfilvazio"></span>
            </p>
            <p>
                <input type="hidden" name="numusu" id="numusu" value="<?php printf(utf8_encode($numusu))?>">
                <input type="submit" value="Cadastrar" id="cadastrar" onclick="vazio();">
            </p>
        </form>
    </div>
</body>
</html>