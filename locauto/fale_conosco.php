
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Locauto</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/config.css">
</head>
<body>
	
	<?php session_start();
	// so o usuário não estiver logado - NAO APARECE O PERFIL
	if(!$_SESSION['cpf_cnpj'])  
	{																				
		// chamando o arquivo cabeçalho
		require 'cabecalho.php';
	}
	// se o usuário estiver logado - NAO APARECE O LOGIN
	else if($_SESSION['cpf_cnpj']) 
	{
		// chamando o arquivo cabeçalho logado
		require 'cabecalho_logado.php';
	}
	?>

	<section class="hero is-success is-fullheight">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="column is-4 is-offset-4">
					<h3 class="title has-text-grey">Locauto<strong>®</strong></h3>
					<h3 class="title has-text-grey"><a href="" target="_blank"> </a></h3>


	<!-- Interface -->
	<div class="box">
		<strong>Fale Conosco</strong><br><br>
		<strong>Prefere ligar para nós?</strong><br>
		<strong>Telefone: ( xx-xxxxxxxxx )</strong><br><br>

		<strong>ou Nos mande uma mensagem:</strong><br><br>

			<form action="contato.php" method="POST" autocomplete="off">

				<div class="field">
					<div class="control">
						<strong>Nome:</strong>
						<input name="nome" name="text" class="input is-large" placeholder="Nome" autofocus oninput="this.value = this.value.replace(/[^A-Za-z0-9]+/g, '').replace(/(\..*)\./g, '$1');">
					</div>
				</div>

				<div class="field">
					<div class="control">
						<strong>Seu Email:</strong>
						<input name="email" class="input is-large" type="text" placeholder="Seu E-mail">
					</div>
				</div>

				<div class="field">
					<div class="control">
						<strong>Comentário:</strong>
						<textarea style="height:10em;" name="comentario" class="input is-large" type="text" placeholder="Seu comentario" oninput="this.value = this.value.replace(/[^A-Za-z0-9]+/g, '').replace(/(\..*)\./g, '$1');"></textarea>
					</div>
				</div>

			<div class="field">
				<a href="index.php"><strong>Cancelar</strong></a>
			</div>

				<!-- Botão enviar com design CSS -->
				<button type="submit" class="button is-dark is-block  is-large is-fullwidth">Enviar</button>
				
			</form>
	</div>
			</div>
		</div>
	</div>
</section>
	
	<?php 
	// chamando o arquivo rodape
	require 'rodape.php'; 
	?>
	</body>

</html>
