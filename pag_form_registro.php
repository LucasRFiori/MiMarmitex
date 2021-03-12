<!doctype html>
<html lang="pt-br">

<head>
	<title>Cadastro MiMarmitex</title>
	<meta charset="utf-8">

	<!-- Estilo customizado -->
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

</head>

<body>
	<div class="align">
		<div id="container">
			<img src="imagens/perfil.png">
			<form method="POST" action="assets/requests/request_registro.php">
				<div>
					<input class="usuario" type="text" name="nome" id="email" placeholder="Insira seu nome" required autofocus>
				</div>
				<div>
					<input class="email" type="email" name="email" placeholder="Insira seu email" required>
				</div>
                <div>
				<input class="cpf" type="text" id="CPF" name="CPF" placeholder="Insira seu cpf" required></input>
				</div>
                <div>
					<input class="senha" type="password" name="senha" placeholder="Digite sua senha" required>
				</div>
				<div>
					<input class="submit" type="submit" value="Registrar">
				</div>
			</form>
			<a href="pag_form_login.php">Já possui cadastro?</a>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
	<script src="assets/js/app.js"></script>
</script>
</body>

</html>