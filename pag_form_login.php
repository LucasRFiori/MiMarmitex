<!doctype html>
<html lang="pt-br">

<head>
	<title>Login MiMarmitex</title>
	<meta charset="utf-8">

	<!-- Estilo customizado -->
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

</head>

<body>
	<div class="align">
		<div id="container">
			<img src="imagens/perfil.png">
			<form method="POST" action="assets/requests/request_login.php">
				<div>
					<input class="email" type="email" name="email" id="email" placeholder="Digite seu e-mail" required autofocus>
				</div>
				<div>
					<input class="senha" type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
				</div>
				<div>
					<input class="submit" type="submit" value="Logar" required>
				</div>
			</form>
			<a href="pag_form_registro.php">Registre-se aqui</a>
		</div>
	</div>

</body>

</html>