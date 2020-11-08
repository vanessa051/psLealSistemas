<?php
require_once('Model/conexao.php');
require_once('Model/DAO.php');
//require_once('Control/Control.php');

$estados = listaEstados($conexao);
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="View/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="View/css/style.css">
	<title>Cadastro City</title>
</head>

<body>
	<div class="container">
		<div class="card card-3">
			<div class="row">
				
				<div class="col-sm">
					<div class="card-heading">
						<img class="img-home" src="View/img/brasil.jpg">
					</div>
				</div>

				<div class="col-sm">
					<div class="card-body">
						<div class="span-home">
							<span class="font-poppins">Cadastre cidades do Brasil!</span>
						</div>

						<form class="form-cidade form" action="Control/insereCidade.php" method="POST">
							<label for="nome_cidade">Nome: </label>
							<input class="input-cidade form-control" required name="nome_cidade" type="text" placeholder="Ex: Belém">

							<label for="id_estado">Escolha o estado:</label> <br>
							<select class="dropdown" name="id_estado" id="select_estado">
								<?php foreach ($estados as $estado) : ?>
									<option value="<?= $estado['id'] ?>"><?= $estado['nome'] ?></option>
								<?php endforeach ?>
							</select>

							<div class="botao">
								<button type="submit" class="btn btn-outline-light btn-cadastra">Cadastrar</button>
							</div>
						</form>

						<div class="div-link-visualizar-cidades">
							<a class="link-visualizar-cidades" href="View/listaCidades.php">Visualizar cidades cadastradas.</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="View/js/jquery.js"></script>
<script src="View/js/bootstrap.min.js"></script>

</html>