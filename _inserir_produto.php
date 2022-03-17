<?php 

include 'conexao.php';

	$nroproduto = $_POST['nroproduto'];
	$nomeproduto = $_POST['nomeproduto'];
	$categoria = $_POST['categoria'];
	$quantidade = $_POST['quantidade'];
	$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto', '$categoria', $quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container"  style="width: 500px; margin-top: 100px;">
	<center>
	<h4>Produto adicionado com sucesso!</h4>
	<div style="padding-top: 20px;">
		<center>
		<a href="menu.php" role="button" class="btn btn_sm btn-primary">Voltar</a>
		<a href="adicionar_produto.php" role="button" class="btn btn_sm btn-success">Cadastrar novamente</a>
		</center>
	</div>
	</center>
</div>