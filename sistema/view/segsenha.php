<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alteração de senha</title>
    <link rel="stylesheet" type="text/css" href="../look.css">
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
    <div id="ssegsenha">
        <h1>Alteração de senha</h1>
        <form action="../controller/segsenha.php" method="post">
            <p>Confirme sua senha atual: <input type="password" name="segsenha" id="segsenha"></p>
            <p><input type="submit" value="Confirmar"></p>
        </form>
    </div>
</body>
</html>