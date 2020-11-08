<?php
require_once('../Model/conexao.php');
require_once('../Model/DAO.php');
//require_once('Control/Control.php');
$id = $_GET['id'];
$cidade = buscaCidade($conexao, $id);
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
	<div class="container" > 
	<div class="row">
		<div class="card card-3 mb-3 card-altera">
			
			<div class="card-body">

				<div class="span-home">					
					<span class="font-poppins span-altera">Alterar o cadastro da cidade</span>
					<a href="listaCidades.php" style="justify-content:left;"><img class="icon-close" src="img/close.png"></a>
				</div>

				<form class="form-cidade form" action="../Control/alteraCidade.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $cidade['id'] ?>">
					<label for="nome_cidade">Nome: </label>
					<input class="input-cidade form-control" name="nome_cidade" type="text" value="<?php echo $cidade['nome'] ?>">

					<label for="id_estado">Escolha o estado:</label> <br>
					<select class="dropdown" name="id_estado" id="select_estado">
						<?php foreach ($estados as $estado) :
							$estadoSelecionado = $cidade['id_estado'] == $estado['id'];
							$selecao = $estadoSelecionado ? "selected='selected'" : "";
						?>
							<option value="<?php echo $estado['id'] ?>" <?php echo $selecao ?>>
								<?php echo $estado['nome'] ?>
							</option>
						<?php endforeach ?>
					</select>

					<div class="botao">
						<button type="submit" class="btn btn-outline-light btn-cadastra">Alterar</button>
					</div>
				</form>

			</div>
			</div>
		</div>
	</div>
</body>
<script src="../View/js/jquery.js"></script>
<script src="../View/js/bootstrap.min.js"></script>

</html>