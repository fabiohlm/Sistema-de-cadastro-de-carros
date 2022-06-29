<?php
    include "../model/usuario.php";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $loginusu = $_POST['loginusuario'];
    $senha = $_POST['senha'];
    $perfil = $_POST['perfil'];

    $logb = LogusuBanco($con, $loginusu);
    if (!$logb) {
        cadastraUsuario($nome, $sobrenome, $loginusu, $perfil, $senha, $con);
        echo "<script>
            alert('Usuário Cadastrado com Sucesso!');
            window.location.href = '../menu.php';
        </script>";
    } else {
        echo "<script>
            alert('Nome de Usuário já existente');
            window.location.href = '../view/usuario.php';
        </script>";
        
    }
    


?>