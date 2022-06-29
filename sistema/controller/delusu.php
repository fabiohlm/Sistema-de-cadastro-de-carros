<?php
    include "../conf.php";
    include "../model/delusu.php";
    
    $numusu = $_POST['numusu'];
    
    deletaUsuario($numusu, $con);
    header('location: ../menu.php');
?>