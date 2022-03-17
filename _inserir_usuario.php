<?php 

include 'conexao.php';
include 'scripts/password.php';

	$nomeusuario = $_POST['nomeusuario'];
	$mailusuario = $_POST['mailusuario'];
	$senhausuario = $_POST['senhausuario'];
	$nivelusuario = $_POST['nivelusuario'];
	$status = 'ativo';

$sql = "INSERT INTO `usuarios`(`nomeusuario`, `mailusuario`, `senhausuario`, `nivelusuario`, `status`) 
	VALUES ('$nomeusuario', '$mailusuario', sha1('$senhausuario'), $nivelusuario,'$status')";
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container"  style="width: 500px; margin-top: 100px;">
	<center>
	<h4>Usuário cadastrado com sucesso!</h4>
	<div style="padding-top: 20px;">
		<center>
		<a href="cadastro_usuario.php" role="button" class="btn btn_sm btn-primary">Voltar</a>
		</center>
	</div>
	</center>
</div>