<?php

include 'conexao.php';

$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container"  style="width: 400px; margin-top: 20px;">
	<center>
		<h4>Atualizado com sucesso!</h4>
		<div style="padding-top: 20px;">
			<center>
			<a href="listar_produtos.php" class="btn btn_sm btn-warning">Voltar</a>
			</center>
		</div>
	</center>
</div>