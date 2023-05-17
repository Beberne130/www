<!DOCTYPE html>
<html lang="fr">
	<head>
		<head>
			<!-- Liens externes -->
			<meta charset="UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<title>Sparkless - LE cendrier qui vous aide à arrêter de fumer</title>
			<meta name="description" content="Salut, nous sommes l'équipe de Sparkless. Notre conviction est de vous aider à arrêter de fumer. Alors qu'attendez vous ? Rejoignez l'aventure vers un monde sans tabac!" />
			<!-- SOURCES -->
			<link rel="icon" href="/img/icon/favicon.ico" />
			<!-- Font Awesome -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
			<!-- Google Fonts -->
			<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
			<!-- MDB -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
			<!-- Style CSS -->
			<link rel="stylesheet" href="/src/style.css" />
			<!-- Lien Manifest -->
			<link rel="manifest" href="/src/manifest.json" />
		</head>
	</head>
	<body>
		<header style="height: 50vh">
			<?php require_once("../src/navbar.php"); ?>
			<div class="p-5 text-center bg-image h-75" style="background-image: url('../img/stop-smoking2.jpg')">
				<div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
					<div class="d-flex justify-content-center align-items-center h-100"></div>
				</div>
			</div>
		</header>
		<div class="container pt-3">
			<h1>Contactez Sparkless</h1>
			<h2>Coordonnées</h2>
			<p>Adresse : 123 Rue du Cendrier Connecté, , Pays</p>
			<p>Téléphone : +XX XXX XXX XXX</p>
			<p>E-mail : contact@sparkless.com</p>
		</div>
		<?php require_once("../src/footer.php"); ?>
	</body>
</html>
