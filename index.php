	
	
	<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CST | Isoladores Santa Terezinha</title>
  <!-- CSS PRINCIPAL -->
  <link rel="stylesheet" href="./assets/style.css">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- BOX ICONS -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

	<body>

		<!-- HEADER -->
		<?php include "includes/header.php"; ?>

		<main class="main-1">
			<!-- INICIO -->
			<div class="container text-center" id="inicio">
				<div class="row">
					<div class="inicio-titulo col-md-7 col-sm-12">
						<h6><span>CST | Isoladores Santa Terezinha</span></h6>
						<h1>Confiança e qualidade em Isoladores há mais de 65 anos.</h1>
						<p>
							Mais de 40 países atendidos!
						</p>
						<a href="./sobre.php" class="btn btn-secondary px-5 py-2">Saiba Mais</a>
					</div>
					<div class="inicio-img col-md-5 col-sm-12 h-25">
						<img src="./images/electric-tower-tower-svgrepo-com.svg" alt="">
					</div>
				</div>
			</div>



			<!-- SOBRE -->
			<section class="sobre section" id="sobre">
				<h2 class="sobre_titulo"><span class="section-title">Sobre</span></h2>

				<div class="sobre_container bd-grid">
					<div class="sobre_img">
						<img src="./images/undraw_Business_decisions_re_84ag (2).svg" alt="">
					</div>

					<div class="painel">
						<h2 class="sobre_subtitulo">Somos a CST</h2>
						<p class="sobre_texto">A CST é um dos maiores fabricantes de isoladores da América Latina, há 65 anos
							fornecendo produtos de alta qualidade para mais de 40 países.

							Com 220 colaboradores e um parque fabril de 25 mil m2 em uma área de 76 mil m2, dispõe de toda a
							infraestrutura necessária para desenvolver, produzir e distribuir para todo o mundo.
							Nossa capacidade de produção mensal é de 400 toneladas de porcelana e 25 mil isoladores de vidro.
							<br>
							<a href="./sobre.php#about" class="btn btn-danger px-5 py-2">Saiba Mais</a>
						</p>

					</div>
				</div>
			</section>

			<!-- CLIENTES -->

			<section class="clientes section" id="clientes">
				<h2 class="section-title">Alguns de nossos clientes</h2>

				<div class="clientes_container">

					<div class="clientes_img">

						<img src="./images/uai-color.png" alt="">
					</div>
					<div class="clientes_img">

						<img src="./images/siemens-color.png" alt="">
					</div>
					<div class="clientes_img">

						<img src="./images/overhead-color.png" alt="">
					</div>
					<div class="clientes_img">
						<img src="./images/equatorial-color.png" alt="">
					</div>

					<div class="clientes_img">
						<img src="./images/cpfl-color.png" alt="">
					</div>

					<div class="clientes_img">
						<img src="./images/enel-color.png" alt="">
					</div>
				</div>
			</section>


			<!-- CONTATO -->
			<section class="contato section" id="contato">
				<h2 class="section-title">Contato</h2>
				<div class="contato-container">
					<div className="contact-container">
						<form action="">

							<label>Nome</label>
							<input type="text" id="firstName" name="firstname" placeholder="Seu nome" />

							<label>Sobrenome</label>
							<input type="text" id="lastName" name="lastname" placeholder="Seu sobrenome" />

							<label>Assunto</label>
							<textarea id="subject" name="subject" placeholder="Digite a sua mensagem"></textarea>

							<button class="contact-button" type="submit">Enviar</button>

						</form>
					</div>
				</div>
			</section>

			<!-- FOOTER -->
			<?php include "includes/footer.php"; ?>

		</main>


		<!-- SCRIPTS -->
		<?php include "includes/scripts.php"; ?>

	</body>

	</html>