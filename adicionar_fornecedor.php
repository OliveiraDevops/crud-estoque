<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Cadastrar fornecedor</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<style type="text/css">
#tamanhoContainer {
	width: 500px;
}

</style>
<body>

	<?php
//Permissao nivel de usuario
	session_start();
	$usuario = $_SESSION['usuario'];

	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}

	?>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<div style="margin-top: 20px;text-align: right;" >
			<a href="menu.php" role="button" class="btn btn-primary btn-sm" >Voltar</a>
		</div>
		<h4>Cadastrar fornecedor</h4>
		<form action="_inserir_fornecedor.php" method="post" style="margin-top: 20px;">
			<div class="form-group">
				<input type="text" class="form-control" name="cadfornecedor" placeholder="Insira o novo fornecedor" autocomplete="off" required>
			</div>
			<div style="margin-top: 20px;text-align: right;" >
				<button type="submit" class="btn btn-success btn-sm" >Cadastrar</button>
			</div>
		</form>

<script type="text/javascript" src="css/bootstrap.js"></script>
</body>
</html>