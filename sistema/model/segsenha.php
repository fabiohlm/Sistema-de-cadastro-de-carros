<?php
    include "../conf.php";
    
    function segSenha($con, $loginusuario) {
        $qss = "SELECT senha FROM usuario WHERE loginusuario = '$loginusuario'";
        $query = mysqli_query($con, $qss);
        return $query;
    }
?>
