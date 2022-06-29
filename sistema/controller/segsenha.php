<?php
    include "../model/segsenha.php";

    $senhaform = $_POST['segsenha'];

    $senhabanco = mysqli_fetch_object(segSenha($con, $_SESSION['usuario']));

    if ($senhabanco->senha == $senhaform) {
        header("Location: ../view/altsenha.php");
    } else {
        echo "<script>
            alert('Senha Incorreta');
            window.location.href = '../view/segsenha.php';
        </script>";
    }
?>