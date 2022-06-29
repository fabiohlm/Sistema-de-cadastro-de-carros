<?php
    include "../model/altsenha.php";

    $novasenha = $_POST['senha'];

    $as = altSenha($con, $_SESSION['usuario'], $novasenha);

    if ($as >= 1){
        echo "<script>
            alert('Senha Alterada com Sucesso');
            window.location.href = '../menu.php';
        </script>";
    } else {
        echo "<script>
            alert('Falha ao Alterar Senha');
            window.location.href = '../view/altsenha.php';
        </script>";
    }
?>