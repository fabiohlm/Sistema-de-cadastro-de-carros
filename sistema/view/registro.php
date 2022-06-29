<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro de Carro</title>
    <link rel="stylesheet" type="text/css" href="../look.css">
</head>
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
    <div id = "regcarro">
        <h1>Registro de Carro</h1>
        <form action="../controller/registro.php" method="post">
            <p>Modelo: <input type="text" name="modelo" value=""></p>
            <p>Cor: <input type="text" name="cor" value=""></p>
            <p>Ano de Fabricação: <input type="number" name="anofabricacao" value=""></p>
            <p>Valor: <input type="number" name="valor" value=""></p>
            <input type="submit" value="Registrar">
            <input type="reset" value="Limpar Dados">
        </form>
    </div>
</body>
</html>