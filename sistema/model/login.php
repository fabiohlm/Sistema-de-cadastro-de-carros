<?php
    include "../conf.php";

    function loginUsuario($con, $loginusuario, $senha){
        mysqli_report(MYSQLI_REPORT_ERROR);
        //$qregistro = "SELECT nome, sobrenome FROM usuario WHERE  loginusuario = '$loginusuario' AND senha = '$senha'";
        $qregistro = "SELECT nome, sobrenome, perfil 
                        FROM usuario
                        WHERE  loginusuario = '$loginusuario'
                        AND senha = '$senha'";
        $qlu = mysqli_query($con, $qregistro);
        //$numrows = mysqli_num_rows($qlu);
        
        //return $numrows;
        return $qlu;
    }
    
?>