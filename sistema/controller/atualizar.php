<?php
    include "../conf.php";
    include "../model/atualizar.php";
    
    
    $numreg = $_POST['id'];
    $amodelo = $_POST['amodelo'];
    $acor = $_POST['acor'];
    $aanofabricacao = $_POST['aanofabricacao'];
    $avalor = $_POST['avalor'];

    atutestCarro($numreg, $amodelo, $acor, $aanofabricacao, $avalor, $con);
    
    if (mysqli_affected_rows($con)>=1) {
        echo "<script>
            alert('Atualizado com Sucesso');
            window.location.href = '../menu.php';
        </script>";
    } else {
        echo "
        <form id='form' action='../view/regatualizar.php' method='POST'>
            <input id='formField' type='hidden' name='id' value=$numreg>
          </form>
          <script >
                alert('Falha ao Atualizar');    
                document.getElementById('form').submit();
        </script>
          ";
    }
    
?>