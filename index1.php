<?php

include 'conexao.php';
include 'scripts/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT mailusuario, senhausuario FROM usuarios WHERE mailusuario = '$usuario' and status = 'ativo'";
$buscar = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
	$senha = $array['senhausuario'];
	$senhadecodifica = sha1($senhausuario);

	if ($total > 0) {
		if ($senhadecodifica == $senha) {

			session_start();

			$_SESSION['usuario'] = $usuario;

			header('Location: menu.php');
		} else {

			header('Location: erro.php');
		}
	} else {

		header('Location: erro.php');
	}
}


?>