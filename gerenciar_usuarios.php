<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerenciar usuários</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<style type="text/css">
#tamanhoContainer {
	width: 900px;
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
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Cadastrar novos usuários</h5>
						<p class="card-text">Entre se deseja cadastrar usuário</p>
						<a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Aprovar usuários cadastrados inativos</h5>
						<p class="card-text">Entre se deseja aprovar usuários cadastrados inativos</p>
						<a href="aprovar_usuarios.php" class="btn btn-primary">Aprovar</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Editar nível de usuários</h5>
						<p class="card-text">Entre se deseja editar o nível de um usuário</p>
						<a href="editar_usuarios.php" class="btn btn-primary">Editar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="css/bootstrap.js"></script>
</body>
</html>