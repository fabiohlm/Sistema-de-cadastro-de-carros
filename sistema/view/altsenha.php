<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../look.css">
    <script type="text/javascript" src="../controller/scripts/senha.js"></script>
    <title>Alteração de Senha</title>
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
        <a href="../index.php">Sair</a>
    </div>
    <div id="ssenha">
            <h1>Alteração de Senha</h1>
            <form action="../controller/altsenha.php" method="post">
                <p>Nova Senha: 
                    <input type="password" name="senha" id="senha" onkeyup="checksenha();">
                    <br>
                    <span id="senvaz"></span>
                </p>
                <p>Confirme a Nova Senha: 
                    <input type="password" name="confsenha" id="confsenha" onkeyup="checksenha();">
                    <span id="sendife"></span>
                    <br>
                    <span id="confsenvaz"></span>
                </p>
                <p>
                    <input type="submit" value="Confirmar" id="cadastrar" name="cadastrar" onclick="checksenha();">
                </p>
            </form>
    </div>
</body>
</html>