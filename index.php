<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Substitua estas linhas com a lógica de verificação adequada (por exemplo, consultando um banco de dados)
    $usuario_correto = "usuario";
    $senha_correta = "senha123";

    // Verifica se as credenciais estão corretas
    if ($login == $usuario_correto && $senha == $senha_correta) {
        // Credenciais corretas, redireciona para a página logada
        header("Location: pagina_logada.php");
        exit();
    } else {
		// Credenciais incorretas, exibe uma mensagem de erro
		$erro = "Credenciais incorretas. Tente novamente.";
	}
}
?>

<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="with=device-with, initial-scale=1.0">
	<title>KBusão</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="kdobusao.css">
	<link rel="stylesheet" href="mediaquery.css">
</head>
<body>
	<main>
		<section id="login">
			<div id="imagem">
			
			</div>
			<div id="formulário">
				<h1>Kd O Busão<h1>
				<p>Faça seu login!<p>
				<form action="KBuaão.html" method="post" autocomplete="on">
					<div class="campo">
						<i class="material-icons">person</i>
						<input tipe="email" name="login" id="ilogin" autocomplete="email" placeholder="Seu email">
						<label for="ilogin">Login</label>
					</div>
					<div class="campo">
						<i class="material-icons">vpn_key</i>
						<input tipe="password" name="senha" id="isenha" style="-webkit-text-security: circle" autocomplete="current-password" placeholder="Sua senha" required>
						
						<label for="isenha">Senha</label>
						
					</div>
					<a href="http://127.0.0.1:5500/index.html" class="botao">
						Entrar
					<i class="material-icons">mail</i>
					</a>
					
					<a href="#" class="botao">
						Esqueci a senha
					<i class="material-icons">mail</i>
					</a>
					<a href="#" class="botao">
						Cadastrar
					<i class="material-icons">mail</i>
					</a>
					
				</form>
				<?php if (isset($erro)) { ?>
                <div class="erro"><?php echo $erro; ?></div>
               	<?php } ?>
			</div>
		</section>
	</main>
</body>
</html>