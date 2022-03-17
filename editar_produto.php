<?php

include 'conexao.php';
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<style type="text/css">
#tamanhoContainer {
	width: 400px;
	-webkit-box-shadow: 0px 0px 25px 6px rgba(0,0,0,0.3); 
	box-shadow: 0px 0px 25px 6px rgba(0,0,0,0.3);
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

	<div class="container" id="tamanhoContainer" style="margin-top: 40px; border-radius: 15px; border: 2px solid #f3f3f3;">
		<h4>Formulário de Cadastro</h4>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
			<?php

			$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array = mysqli_fetch_array($buscar)){

				$id_estoque = $array['id_estoque'];
				$nroproduto = $array['nroproduto'];
				$nomeproduto = $array['nomeproduto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedor = $array['fornecedor'];

				?>
				<div class="form-group">
					<label>Cod. Produto</label>
					<input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
					<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
				</div>
				<div class="form-group">
					<label>Nome Produto</label>
					<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>" required>
				</div>
				<div class="form-group">
					<label>Categoria</label>
					<select class="form-control" name="categoria" required>
						<option style="font-display: gray;"disabled selected>Selecione uma opção</option>

						<?php

						include 'conexao.php';
						$sql = "SELECT * FROM `cadcategoria` order by 'nome_categoria' ASC";
						$buscar = mysqli_query($conexao,$sql);

						while ($array = mysqli_fetch_array($buscar)){
							$id_cadcategoria = $array['id_cadcategoria'];
							echo $nome_categoria = $array['nome_categoria'];

							?>
							<option><?php echo $nome_categoria ?></option>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Quantidade</label>
					<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>" required>
				</div>
				<div class="form-group">
					<label>Fornecedor</label>
					<select class="form-control " name="fornecedor" required>
						<option disabled selected>Selecione uma opção</option>

						<?php

						$sql = "SELECT * FROM `cadfornecedor` order by 'nome_fornecedor' ASC";
						$buscar = mysqli_query($conexao,$sql);

						while ($array = mysqli_fetch_array($buscar)){
							$id_cadfornecedor = $array['id_cadfornecedor'];
							$nome_fornecedor = $array['nome_fornecedor'];

							?>
							<option><?php echo $nome_fornecedor ?></option>

						<?php } ?>
					</select>
				</div>
				<div style="margin-top: 20px; margin: 10px; text-align: right;" >
					<button type="submit" class="btn btn-success btn-sm">Atualizar</button>
				</div>
				<?php } ?>
		</form>

<script type="text/javascript" src="css/bootstrap.js"></script>
</body>
</html>