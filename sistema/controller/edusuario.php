<?php
    include "../model/edusuario.php";

    $numusu = $_POST['numusu'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $loginusuario = $_POST['loginusuario'];
    $perfil = $_POST['perfil'];

    $logb = LogusuBanco($con, $loginusuario);
    if ($logb) {
        editaUsuario($con, $numusu, $nome, $sobrenome, $loginusuario, $perfil);
        echo "<script>
            alert('Usuário Atualizado com Sucesso!');
            window.location.href = '../menu.php';
        </script>";
    } else {
        echo "<script>
            alert('Nome de Usuário já existente');
            window.location.href = '../view/listausuario';
        </script>";
        
    }
?>