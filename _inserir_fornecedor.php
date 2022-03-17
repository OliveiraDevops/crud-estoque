<?php 

include 'conexao.php';

	$cadfornecedor = $_POST['cadfornecedor'];
	
$sql = "INSERT INTO `cadfornecedor`(`nome_fornecedor`) VALUES ('$cadfornecedor')";
$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container"  style="width: 500px; margin-top: 100px;">
	<center>
	<h4>Fornecedor adicionado com sucesso!</h4>
	<div style="padding-top: 20px;">
		<center>
		<a href="menu.php" role="button" class="btn btn_sm btn-primary">Voltar</a>
		<a href="adicionar_fornecedor.php" role="button" class="btn btn_sm btn-success">Cadastrar novamente</a>
		</center>
	</div>
	</center>
</div>