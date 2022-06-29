<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários Cadastrados</title>
    <link rel="stylesheet" type="text/css" href="lista.css">
    <link rel="stylesheet" type="text/css" href="../look.css">
</head>
<body>
    <div id="aba">
        <?php
            include "../controller/listausuario.php";
            $info = mysqli_fetch_object(usuarioBanco($con, $_SESSION['usuario']));
            echo utf8_encode("<p>
                $info->nome $info->sobrenome
            </p>");
            if ($info->perfil == 1) {
                $perfil = "Administrador";
            } elseif ($info->perfil == 2) {
                $perfil = "Gerente";
            } else {
                $perfil = "Vendedor";
            }
            echo "<p>
                $perfil
            </p>";
        ?>
        <a href="../controller/sairsessao.php">Sair</a>
    </div>
    <div id = "lista">
        <h1>Lista de Usuários Cadastrados</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Nome de Usuário</th>
                <th>Nível de Permissão</th>
                <th>Editar</th>
                <th>Deletar</th>
            <?php
                echo "</tr>";
                $lu = listarUsuarios($con);
                while($row = mysqli_fetch_object($lu)){
                    echo "<tr>";    
                    echo utf8_encode("<td>
                        ".$row->nome."
                    </td>");
                    echo utf8_encode("<td>
                        ".$row->sobrenome."
                    </td>");
                    echo utf8_encode("<td>
                        ".$row->loginusuario."
                    </td>");
                    echo "<td>
                        ".$row->perfil."
                    </td>";
                    echo "<td>
                            <form method='post' action='edusuario.php'>
                                <input type='hidden' name='numusu' value=$row->numusu>
                                <input type='submit' value='Editar'>
                            </form>
                            </td>
                            <td>
                            <form method='post' action='../controller/delusucon.php'>
                                <input type='hidden' name='numusu' value=$row->numusu>
                                <input type='submit' value='Deletar'>
                            </form>
                            </td>
                        ";
                    }
                echo "</tr>";
                
            ?>
    </div>
    </table>
</body>
</html>