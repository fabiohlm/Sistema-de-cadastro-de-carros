<?php
    function deletaUsuario($numusu, $con){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $qregistro = "DELETE FROM usuario WHERE numusu = $numusu";
        mysqli_query($con, $qregistro);
    }
?>