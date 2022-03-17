<?php 

include 'conexao.php';

	$cadcategoria = $_POST['cadcategoria'];

$sql = "INSERT INTO `cadcategoria`(`nome_categoria`) VALUES ('$cadcategoria')";
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container"  style="width: 500px; margin-top: 100px;">
	<center>
	<h4>Categoria adicionada com sucesso!</h4>
	<div style="padding-top: 20px;">
		<center>
		<a href="menu.php" role="button" class="btn btn_sm btn-primary">Voltar</a>
		<a href="adicionar_categoria.php" role="button" class="btn btn_sm btn-success">Cadastrar novamente</a>
		</center>
	</div>
	</center>
</div>