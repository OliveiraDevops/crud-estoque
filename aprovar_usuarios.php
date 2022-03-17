<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aprovar usuários</title>
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

	?>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<div style="text-align: right; padding-right: 50px;">
			<a href="menu.php" role="button" class="btn btn_sm btn-primary">Voltar</a>
		</div>
		<h4><Address>Aprovar usuários</Address></h4>
		<table class="table" style="margin-top: 20px;">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">E-mail</th>
					<th scope="col">Nível</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>

			<?php
			include 'conexao.php';

			$sql = "SELECT * FROM usuarios WHERE status = 'inativo'";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)){
				$id_usuario = $array['id_usuario'];
				$nomeusuario = $array['nomeusuario'];
				$mailusuario = $array['mailusuario'];
				$nivelusuario = $array['nivelusuario'];

				?>
				<tr>
					<td><?php echo $nomeusuario ?></td>
					<td><?php echo $mailusuario ?></td>
					<td><?php echo $nivelusuario ?></td>
					<td>
						<a class="btn btn-warning btn-sm" style="color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> 
						& nivelusuario=1" role="button">&nbsp;Adm.</a>
						<a class="btn btn-success btn-sm" style="color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
						& nivelusuario=2" role="button">&nbsp;Func.</a>
						<a class="btn btn-dark btn-sm" style="color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> 
						& nivelusuario=3" role="button">&nbsp;Conf.</a>
						<a class="btn btn-danger btn-sm" style="color: #fff" 
						href="_deletar_usuario.php?id=<?php echo $id_usuario ?> 
						& nivelusuario=<?php echo $nivelusuario?>" role="button">&nbsp;Excluir</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>

<script type="text/javascript" src="css/bootstrap.js"></script>
</body>
</html>