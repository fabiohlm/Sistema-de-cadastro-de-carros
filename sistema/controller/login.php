<?php
    include "../model/login.php";

    $loginusuario = $_POST['loginusuario'];
    $senha = $_POST['senha'];

    $rows = loginUsuario($con, $loginusuario, $senha);
    $qlq = mysqli_fetch_object($rows);
  
    if ($qlq->perfil) {
        
        $_SESSION['usuario'] = $loginusuario;
        $_SESSION['perfil'] = $qlq->perfil;
        
        echo "<script>
            alert('Login Efetuado com Sucesso');
            window.location.href = '../menu.php'
        </script>"; 
    } else {
        echo "<script>
            alert('Nome de Usuário ou Senha incorretos');
            window.location.href = '../index.php'
        </script>";
    }
?>