
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Carros Cadastrados</title>
    <link rel="stylesheet" type="text/css" href="lista.css">
    <link rel="stylesheet" type="text/css" href="../look.css">
</head>
<body>
    <div id="aba">
        <?php
            include "../controller/lista.php";
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
        <h1>Lista de Carros Cadastrados</h1>
        <table>
            <tr>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Ano de Fabricação</th>
                <th>Valor</th>
            <?php
                if ($_SESSION['perfil'] == 1 or $_SESSION['perfil'] == 2) {
                    echo "<th>Editar</th>";
                    echo "<th>Deletar</th>";
                }
                echo "</tr>";
                $lc = listarCarros($con);
                while($row = mysqli_fetch_object($lc)){
                    echo "<tr>";    
                        echo "<td>
                            ".$row->modelo."
                        </td>";
                        echo "<td>
                            ".$row->cor."
                        </td>";
                        echo "<td>
                            ".$row->anofabricacao."
                        </td>";
                        echo "<td>
                            ".$row->valor."
                        </td>";
                        if ($_SESSION['perfil'] == 1 or $_SESSION['perfil'] == 2) {
                            echo "<td>
                                    <form method='post' action='regatualizar.php'>
                                        <input type='hidden' name='id' value=$row->numreg>
                                        <input type='submit' value='Editar'>
                                    </form>
                                    </td>
                                    <td>
                                    <form method='post' action='../controller/delcon.php'>
                                        <input type='hidden' name='id' value=$row->numreg>
                                        <input type='submit' value='Deletar'>
                                    </form>
                                    </td>
                                ";
                            }

                    echo "</tr>";
            
                }
            ?>
    </div>
    </table>
</body>
</html>