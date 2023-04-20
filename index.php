<!DOCTYPE html>
<html lang="fr">
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
	<body>
		<header style="height: 75vh">
			<?php require_once("src/navbar.php"); ?>
			<div class="p-5 text-center bg-image h-75" style="background-image: url('img/stop-smoking2.jpg')">
				<div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
					<div class="d-flex justify-content-center align-items-center h-100">
						<div class="text-white">
							<h1 class="mb-3">Envie d'arrêter de fumer ?</h1>
							<h4 class="mb-3">Essayez Sparkless dès maintenant!</h4>
							<a class="btn btn-outline-light btn-lg" href="pages/ressources.php" role="button">Information</a>
							<a class="btn btn-outline-light btn-lg" href="pages/acheter.php" role="button">Acheter</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main class="container d-flex pb-5">
			<div class="row">
				<div class="col-sm-4 pt-1">
					<div class="card shadow-5-strong h-100">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<img src="img/graphique tabac.jpg" class="img-fluid" />
							<a href="#!">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
							</a>
						</div>
						<div class="card-body">
							<h5 class="card-title">Mesurez votre consommation</h5>
							<p class="card-text">Sparkless utilise des capteurs pour suivre chaque cigarette que vous allumez et éteignez, vous donnant une vue précise de votre consommation de tabac. Vous pouvez ainsi prendre conscience de votre consommation réelle et prendre des mesures pour la réduire.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 pt-1">
					<div class="card shadow-5-strong h-100">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<img src="img/récompense.png" class="img-fluid" />
							<a href="#!">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
							</a>
						</div>
						<div class="card-body">
							<h5 class="card-title">Recevez des encouragements</h5>
							<p class="card-text">Sparkless vous envoie des encouragements pour vous aider à réduire votre consommation de tabac. Vous pouvez personnaliser les paramètres pour recevoir les encouragements qui vous conviennent le mieux, ce qui vous aide à rester motivé.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 pt-1">
					<div class="card shadow-5-strong">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<img src="img/chatting.png" class="img-fluid" />
							<a href="#!">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
							</a>
						</div>
						<div class="card-body">
							<h5 class="card-title">Connectez-vous avec une communauté d'utilisateurs :</h5>
							<p class="card-text">Sparkless vous permet de vous connecter avec une communauté d'utilisateurs qui partagent votre objectif d'arrêter de fumer. Vous pouvez échanger des conseils et des astuces avec d'autres utilisateurs, trouver du soutien et de la motivation.</p>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php require_once("src/footer.php"); ?>
		<script>
			if ("serviceWorker" in navigator) {
				navigator.serviceWorker.register("/src/sw.js", { scope: "/" });
			}
		</script>
	</body>
</html>
