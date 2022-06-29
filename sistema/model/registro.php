<?php
    include "../conf.php";
    
    function registraCarro($modelo, $cor, $anofabricacao, $valor, $con){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $qregistro = "INSERT INTO carros (modelo, cor, anofabricacao, valor) VALUES ('$modelo', '$cor', $anofabricacao, $valor)";
        mysqli_query($con, $qregistro, $query = MYSQLI_STORE_RESULT);
    }
?>