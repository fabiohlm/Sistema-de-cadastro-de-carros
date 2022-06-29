<?php
    include "conf.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
    <title>Página Inicial</title>
    <link rel="stylesheet" type="text/css" href="look.css">
</head>
<body>
    <div id="aba">
        <?php
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
        <a href="controller/sairsessao.php">Sair</a>
    </div>
    
    <div id = "cadastro">
    <h1>Cadastro de Carros</h1>
        <ul>
        
            <?php    
                if(($_SESSION['perfil'] == 1) or ($_SESSION['perfil'] == 2)) {
                    echo "<li><a href='view/registro.php'>Registro de Carros</a></li>";
                }
            ?>
            <li><a href="view/lista.php">Acessar lista de Carros</a></li>
            <?php    
                if(($_SESSION['perfil'] == 1)) {
                    echo "<li><a href='view/usuario.php'>Cadastro de Usuário</a></li>";
                    echo "<li><a href='view/listausuario.php'>Lista de Usuários Cadastrados</a></li>";
                }
            ?>
            <li><a href="view/segsenha.php">Alterar senha</a></li>
        </ul>
    </div>
</body>
</html>