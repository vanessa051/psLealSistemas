<?php
require_once("../Model/conexao.php");
require_once("../Model/DAO.php");


$nome_cidade = $_POST["nome_cidade"];
$id_estado = $_POST["id_estado"];


if (insereCidade($conexao, $nome_cidade, $id_estado)) {
    header('Location: ../View/listaCidades.php');
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger"> A cidade não foi alterada! <?= $msg ?> </p>
<?php
}
mysqli_close($conexao);
?>