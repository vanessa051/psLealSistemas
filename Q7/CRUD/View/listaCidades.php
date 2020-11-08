<?php
require_once("../Model/conexao.php");
require_once("../Model/DAO.php");

$estados = listaEstados($conexao);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../View/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../View/css/style.css">
    <title>Cadastro City</title>
</head>

<body>
    <div class="container">
        <div class="card card-3">
            <div>
                <a href="../home.php"><img class="icon-img" src="img/home.jpg"></a>
                <h4 class="span-lista">Lista de Cidades</h4>
            </div>

            <div class="tabela">
                <table class="table" id="buscaTabela">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <?php
                    $cidades = listaCidades($conexao);
                    foreach ($cidades as $cidade) :
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $cidade['nome']; ?></td>
                                <td><?php echo $cidade['id_estado']; ?></td>
                                <td><a href="alteraCidadesForm.php?id=<?php echo $cidade['id']; ?>"><img class="icon" src="img/icon-edit.png"></a>
                                    <a href="../Control/removeCidade.php?id=<?php echo $cidade['id']; ?>"><img class="icon" src="img/icon-remove.png"></a></td>
                            </tr>
                        <?php
                    endforeach
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="../View/js/jquery.js"></script>
<script src="../View/js/bootstrap.min.js"></script>

</html>