<?php
require_once("../Model/conexao.php");
require_once("../Model/DAO.php");

$id = $_POST["id"];
$nome_cidade = $_POST["nome_cidade"];
$id_estado = $_POST["id_estado"];


if (alteraCidade($conexao, $id, $nome_cidade, $id_estado)) {
    header('Location: ../View/listaCidades.php');
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger"> A cidade não foi adicionada! <?php echo $msg; ?> </p>
<?php
}
mysqli_close($conexao);
?>