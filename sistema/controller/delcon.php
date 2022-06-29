<?php
    include "../conf.php";

    $numreg = $_POST['id'];
    
    echo "
    <form id='form' action='deletar.php' method='POST'>
        <input id='formField' type='hidden' name='id' value=$numreg>
    </form>
    <script>
        if (confirm('Deseja realmente deletar esse item?')){
            document.getElementById('form').submit();
        }else{
            window.location.href = '../view/lista.php';
        }
    </script>";
?>