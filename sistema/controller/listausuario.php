<?php
    include "../conf.php";
    function listarUsuarios($con){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $result = "SELECT numusu, nome, sobrenome, loginusuario, perfil FROM usuario";
        $ql = mysqli_query($con, $result);
        return $ql;
    }

    function atualizarUsuario($con, $numusu){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $result = "SELECT numusu, nome, sobrenome, loginusuario, perfil FROM usuario WHERE numusu = $numusu";
        $ql = mysqli_query($con, $result);
        return $ql;   
    }
?>