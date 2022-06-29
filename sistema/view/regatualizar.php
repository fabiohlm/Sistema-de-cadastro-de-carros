<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualização de Registro</title>
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
    <?php  
        include "../controller/lista.php";
        $id = $_POST['id'];
        $ac = atualizarCarro($con, $id); 
        $my = mysqli_fetch_object($ac);   
    ?>
    <div id = "regatualizar">
        <h1>Atualização de Registro</h1>
        <form action="../controller/atualizar.php" method="post">
            <p>Modelo: 
                <input type="text" name="amodelo" value="<?php printf($my->modelo);?>">
            </p>
            <p>Cor: 
                <input type="text" name="acor" value="<?php printf($my->cor)?>">
            </p>
            <p>Ano de Fabricação: 
                <input type="number" name="aanofabricacao" value="<?php printf($my->anofabricacao)?>">
            </p>
            <p>Valor: 
                <input type="number" name="avalor" value="<?php printf($my->valor)?>">
            </p>
            <input type='hidden' name='id' value="<?php printf($my->numreg);?>">
            <input type="submit" value="Registrar">
            <input type="reset" value="Limpar Dados">
        </form>
    </div>
</body>
</html>