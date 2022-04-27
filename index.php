<!DOCTYPE html>
<html>
<head>
	<title>Login Facebook</title>
	<!--aplicar depois as metas tags-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@700&family=Lato:ital,wght@0,900;1,900&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="Logo">
				<h2>facebook</h2>
			</div><!--Logo-->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone</p>
					<input type="email">
				</div><!--form-element-->

				<div class="form-element">
					<p>Senha</p>
					<input type="password">
				</div><!--form-element-->

				<div class="form-element">
					<input type="submit" name="acao" value="Enviar">
				</div><!--form-element-->
			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>
	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="img1.png.jpg">
			</div><!--img-pessoas-->

			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text" >
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text" >
					</div><!--w50-->

					<div class="w100">
						<input placeholder="E-mail" type="email" >
					</div><!--w100-->

					<div class="w100">
						<input placeholder="Senha" type="password" >
					</div><!--w100-->

						<div class="w100">
							<h2>Data de Nascimento</h2>

							<select name="nascimento-dia" class="nascimento">
								<?php
									for($i =1; $i <= 31; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<select name="nascimento-mês" class="nascimento">
								<option value="01">janeiro</option>
								<option value="02">fevereiro</option>
								<option value="03">março</option>
								<option value="04">abril</option>
								<option value="05">maio</option>
								<option value="06">junho</option>
								<option value="07">julho</option>
								<option value="08">agosto</option>
								<option value="09">setembro</option>
								<option value="10">outubro</option>
								<option value="11">novembro</option>
								<option value="12">dezembro</option>
							</select>
							<select name="nascimento-ano" class="nascimento">
								<?php
									for($i =1960; $i <= 2022; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<div class="clear"></div>
						</div><!--w100-->

						<div class="w100">
							<div class="input-radio">
								<input type="radio" name="sexo" value="masculino">
								<h2>Masculino</h2>
							</div><!--radio-->
						<div class="input-radio">
								<input type="radio" name="sexo" value="feminino">
								<h2>Feminino</h2>
							</div><!--radio-->
							<div class="clear"></div>
						</div>

						<div class="w100">
							<input type="submit" name="acao" value="Cadastar!">
						</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->

			</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-limgua"  href="#">Portugues (BR)</a>
			<a href="#">Ingles (ING)</a>
			<a href="#">Espanhol (ESP)</a>
			<a href="#">Francês (FR)</a>
			<a href="#">Russo (RS)</a>
			<a href="#">Italiano (ITA)</a>
			<a href="#">Chines (CHI)</a>
		</div><!--center-->

		<div style="border: 0; padding-top: 10px;" class="center">
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>

		</div><!--center-->
	</section><!--linguas-->

</body>
</html>