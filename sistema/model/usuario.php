<?php
    include "../conf.php";

    function cadastraUsuario($nome, $sobrenome, $loginusu, $perfil, $senha, $con) {
        $qcu = "INSERT INTO usuario (nome, sobrenome, loginusuario, senha, perfil) VALUES ('$nome', '$sobrenome', '$loginusu', '$senha', '$perfil')";
        //$qpu = "INSERT INTO permissoes (idusuario,idperfil) VALUES ('$loginusu', $perfil)";
        mysqli_query($con, $qcu);
        //mysqli_query($con, $qpu);
    }
    
?>