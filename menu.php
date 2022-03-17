<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
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

	include 'conexao.php';

	$sql = "SELECT nivelusuario FROM usuarios WHERE mailusuario = '$usuario' and status = 'ativo'";
	$buscar = mysqli_query($conexao, $sql);
	$array = mysqli_fetch_array($buscar);
	$nivel = $array['nivelusuario'];

	?>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">

		<div class="row" style="margin-top: 20px;">

			<?php
			if (($nivel == 1)||($nivel == 3)) {
				?>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Cadastrar produto</h5>
							<p class="card-text">Entre se deseja cadastrar um produto novo</p>
							<a href="adicionar_produto.php" class="btn btn-primary">Adicionar produtos</a>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Listar produto</h5>
						<p class="card-text">Listar editar e excluir produtos cadastrados</p>
						<a href="listar_produtos.php" class="btn btn-primary">Listar produtos</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">

			<?php
			if (($nivel == 1)||($nivel == 3)) {
				?>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Cadastrar nova categoria</h5>
							<p class="card-text">Cadastrar uma nova categoria de produtos</p>
							<a href="adicionar_categoria.php" class="btn btn-primary">Adicionar categoria</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Cadastrar novo fornecedor</h5>
							<p class="card-text">Entre se deseja cadastrar uma novo fornecedor</p>
							<a href="adicionar_fornecedor.php" class="btn btn-primary">Adicionar fornecedor</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">

				<?php
				if ($nivel == 3) {
					?>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Gerenciar usuários</h5>
								<p class="card-text">Entre se deseja gerenciar usuário</p>
								<a href="gerenciar_usuarios.php" class="btn btn-warning">Gerenciar</a>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Deseja sair</h5>
						<p class="card-text">Deseja sair para a tela de Login</p>
						<a href="index.php" class="btn btn-danger">Sair</a>
					</div>
				</div>
			</div>
		</div>

<script type="text/javascript" src="css/bootstrap.js"></script>
</body>
</html>