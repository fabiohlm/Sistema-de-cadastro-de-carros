<?php
    function deletaCarro($numreg, $con){
        mysqli_report(MYSQLI_REPORT_ERROR);
        $qregistro = "DELETE FROM carros WHERE numreg = $numreg";
        mysqli_query($con, $qregistro, $query = MYSQLI_STORE_RESULT);
    }
?>