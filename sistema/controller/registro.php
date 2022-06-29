<?php
    include "../model/registro.php";

    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $anofabricacao = $_POST['anofabricacao'];
    $valor = $_POST['valor'];

    registraCarro($modelo, $cor, $anofabricacao, $valor, $con);
    
    if (mysqli_affected_rows($con)>=1) {
        echo "<script>
            alert('Registrado com Sucesso');
            window.location.href = '../menu.php'
        </script>";
    } else {
        echo "<script>
            alert('Falha ao Registrar');
            window.location.href = '../view/registro.php'
        </script>";
    }
?>