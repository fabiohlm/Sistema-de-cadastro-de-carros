<?php
    include "../conf.php";

    $numusu = $_POST['numusu'];
    
    echo "
    <form id='form' action='delusu.php' method='POST'>
        <input id='formField' type='hidden' name='numusu' value='$numusu'>
    </form>
    <script>
        if (confirm('Deseja realmente deletar esse usuário?')){
            document.getElementById('form').submit();
        }else{
            window.location.href = '../view/listausuario.php';
        }
    </script>";
?>