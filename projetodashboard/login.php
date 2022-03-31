<?php

  session_start();
  if (array_key_exists('erroLogin', $_SESSION))
  {
    $erro = $_SESSION['erroLogin'];
    unset($_SESSION['erroLogin']);
  }
  else
  {
    $erro = null;
  }



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Soluth Contábeis</title>

  <link rel="icon" href="Imagens/favi.ico" type="image/ico" sizes="64x64">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/styleIndex.css">
</head>

<body>

<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form">
					<span class="login-form-title">
						Faça o login
					</span>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="email" autocomplete="off">
						<span class="focus-input-form" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input margin-bottom-35">
						<input class="input-form" type="password" name="password">
						<span class="focus-input-form" data-placeholder="Senha"></span>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn">
							Login
						</button>
					</div>

					<ul class="login-utils">
						<li class="margin-bottom-8 margin-top-8">
							<span class="text1">
								Esqueceu sua
							</span>

							<a href="#" class="text2">
								senha?
							</a>
						</li>

						<li>
							<span class="text1">
								Não tem conta?
							</span>

							<a href="#" class="text2">
								Criar
							</a>
						</li>
					</ul>
				</form>
			</div>
			<img src="images/logo.png" width="300" height="300" class="margin-left-50" />
		</div>
	</div>

</body>
</html>
