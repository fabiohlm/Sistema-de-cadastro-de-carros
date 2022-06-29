<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "carros";
    $port = 3306;
    $con = mysqli_connect($host, $usuario, $senha, $database, $port);
    session_start();

    function usuarioBanco($con, $usuario) {
        $qau = "SELECT nome, sobrenome, perfil 
            FROM usuario
            WHERE  loginusuario = '$usuario'";
        $usu = mysqli_query($con, $qau);
        return $usu;
    }

    function LogusuBanco($con, $loginusuario){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $qlub = "SELECT * FROM usuario WHERE loginusuario = '$loginusuario'";
        $query = mysqli_query($con, $qlub);
        if ($query){
            return true;
        } else {
            return false;
        }
    }


?>
