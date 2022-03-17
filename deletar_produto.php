<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container"  style="width: 500px; margin-top: 100px;">
	<center>
		<h4>Deletado com sucesso!</h4>
		<div style="padding-top: 20px;">
			<center>
				<a href="listar_produtos.php" class="btn btn_sm btn-warning">Voltar</a>
			</center>
		</div>
	</center>
</div>