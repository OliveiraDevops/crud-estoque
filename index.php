<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scaleble=no" />
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style type="text/css">
	#tamanhoContainer {
		width: 400px;
    -webkit-box-shadow: 0px 0px 25px 6px rgba(0,0,0,0.3); 
    box-shadow: 0px 0px 25px 6px rgba(0,0,0,0.3);
	}
</style>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
  <div style="padding: 10px">
    <center>
      <img src="icone-de-cadeado-aberto.png" width="125px" height="125px">
    </center>
    <form class="form-signin" action="index1.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label class="sr-only">Login e-mail</label>
      <input type="email" name="usuario" class="form-control" placeholder="Insira seu e-mail" required autofocus>
      <label class="sr-only">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Insira sua senha" required>
      <div style="margin-top: 20px;text-align: right;" >
        <button class="btn btn-success btn-sm" type="submit">Login</button>
      </div>
    </form>
  </div>
</div>
<center>
  <div style="margin-top: 10px">
    <small>Você não possui cadastro? Clique<a href="cadastro_usuario_externo.php"> aqui</a></small>
  </div>
</center>
<script type="text/javascript" src="css/bootstrap.js"></script>
</body>
</html>