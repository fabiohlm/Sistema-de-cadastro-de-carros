<?php
    include "../conf.php";

    function editaUsuario($con, $numusu, $nome, $sobrenome, $loginusuario, $perfil) {
        $qeu = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', loginusuario = '$loginusuario', perfil = '$perfil' WHERE numusu = '$numusu'";
        mysqli_query($con, $qeu);
    }
    
?>