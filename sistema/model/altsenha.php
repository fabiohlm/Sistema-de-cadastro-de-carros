<?php
    include "../conf.php";

    function altSenha($con, $loginusuario, $novasenha) {
        $qas = "UPDATE usuario SET senha = '$novasenha' WHERE loginusuario = '$loginusuario'";
        $query = mysqli_query($con, $qas);
        return mysqli_affected_rows($con);
    }
?>