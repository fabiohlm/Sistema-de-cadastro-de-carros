<?php
    function atutestCarro($numreg, $modelo, $cor, $anofabricacao, $valor, $con){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $qregistro = "UPDATE carros SET modelo = '$modelo', cor = '$cor', anofabricacao = $anofabricacao, valor = $valor WHERE numreg = $numreg";
        mysqli_query($con, $qregistro, $query = MYSQLI_STORE_RESULT);
    }
?>