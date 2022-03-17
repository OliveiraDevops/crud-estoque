<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro usuário</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style type="text/css">
#tamanhoContainer {
	width: 500px;
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
		<div style="margin: 20px; text-align: right;" >
			<a href="menu.php" role="button" class="btn btn-primary btn-sm" >Voltar</a>
		</div>
		<h4>Cadastro de usuário</h4>
		<form action="_inserir_usuario.php" method="post" style="margin-top: 20px;">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" name="nomeusuario" placeholder="Insira nome e sobrenome" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" class="form-control" name="mailusuario" placeholder="insira seu e-mail" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Senha</label>
				<input id="txtsenha" type="password" class="form-control" name="senhausuario" placeholder="Insira uma senha" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Confirme sua senha</label>
				<input type="password" name="senhausuario2" class="form-control" placeholder="Repita sua senha" autocomplete="off" oninput="validaSenha(this)" required>
				<small>As senhas precisam ser iguais</small>
			</div>
			<div class="form-group">
				<label>Nível de usuário</label>
				<select class="form-control" name="nivelusuario">
					<option value="1">Funcionário</option>
					<option value="2">Conferente</option>
					<option value="3">Adiministrador</option>
				</select>
			</div>
			<div style="margin-top: 10px; margin: 20px; text-align: right;" >
				<button type="submit" class="btn btn-success btn-sm" >Cadastrar</button>
			</div>
		</form>
	</div>
<script type="text/javascript" src="css/bootstrap.js"></script>
<script>
	function validaSenha(input){
		if (input.value != document.getElementById('txtsenha').value){
			input.setCustomValidity('Repita a senha corretamente');
		} else {
			input.setCustomValidity('');
		}

	}
</script>
</body>
</html>