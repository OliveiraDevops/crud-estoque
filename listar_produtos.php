<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Produtos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<style type="text/css">
#tamanhoContainer {
	width: 1000px;
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
		<div style="text-align: right; padding-right: 50px;">
			<a href="menu.php" role="button" class="btn btn_sm btn-primary">Voltar</a>

		</div>
		<h4>Lista de produtos</h4>
		<table class="table" style="margin-top: 20px;">
			<thead>
				<tr>
					<th scope="col">Cod. produto</th>
					<th scope="col">Nome produto</th>
					<th scope="col">Categoria</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>

			<?php

			include 'conexao.php';
			$sql = "SELECT * FROM `estoque`";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)){

				$id_estoque = $array['id_estoque'];
				$nroproduto = $array['nroproduto'];
				$nomeproduto = $array['nomeproduto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedor = $array['fornecedor'];
				?>
				<tr>
					<td><?php echo $nroproduto ?></td>
					<td><?php echo $nomeproduto ?></td>
					<td><?php echo $categoria ?></td>
					<td><?php echo $quantidade ?></td>
					<td><?php echo $fornecedor ?></td>
					<td>
						<?php 

						if (($nivel == 1)||($nivel == 3)) {
							?>
							<a class="btn btn-warning btn-sm" style="color: #fff" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button">&nbsp;Editar</a>
						<?php } 

						if ($nivel == 3) {
							?>
							<a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button">&nbsp;Excluir</a>

						<?php } ?>
					</td>
				</tr>
			<?php } ?>

		</table>
	</div>

<script type="text/javascript" src="css/bootstrap.js"></script>
</body>
</html>