<?php
    include "../model/lista.php";

    function listarCarros($con){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $result = "SELECT numreg, modelo, cor, anofabricacao, valor FROM carros";
        $ql = mysqli_query($con, $result);
        return $ql;
    }

    function atualizarCarro($con, $numreg){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $result = "SELECT numreg, modelo, cor, anofabricacao, valor FROM carros WHERE numreg = $numreg";
        $ql = mysqli_query($con, $result);
        return $ql;   
    }
    
    
    

?>