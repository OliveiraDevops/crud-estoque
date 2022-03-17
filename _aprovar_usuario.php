<?php 

include 'conexao.php';
 
	$id = $_GET['id'];
	$nivelusuario = $_GET['nivelusuario'];

if ($nivelusuario == 1) {
	$update = "UPDATE usuarios SET status= 'ativo', nivelusuario = 1 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao,$update);
}
if ($nivelusuario == 2) {
	$update = "UPDATE usuarios SET status= 'ativo', nivelusuario = 2 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao,$update);
}
if ($nivelusuario == 3) {
	$update = "UPDATE usuarios SET status= 'ativo', nivelusuario = 3 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao,$update);
}

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container"  style="width: 500px; margin-top: 100px;">
	<center>
	<h4>Usuário aprovado com sucesso!</h4>
	<div style="padding-top: 20px;">
		<center>
		<a href="index.php" role="button" class="btn btn_sm btn-primary">Voltar</a>
		</center>
	</div>
	</center>
</div>

