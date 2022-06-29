<?php
    include "../conf.php";
    include "../model/deletar.php";
    
    $numreg = $_POST['id'];
    
    deletaCarro($numreg, $con);
    header('location: ../menu.php');
?>