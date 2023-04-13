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
	</head>
	<body>
		<header style="height: 50vh">
			<?php require_once("../src/navbar.php"); ?>
			<div class="p-5 text-center bg-image h-75" style="background-image: url('../img/stop-smoking2.jpg')">
				<div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
					<div class="d-flex justify-content-center align-items-center h-100">
						<div class="text-white">
							<h1 class="mb-3">Commande Sparkless maintenant !</h1>
							<h4 class="mb-3">Livraison Rapide et Gratuite !</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div class="row ms-5 mb-5">
				<div class="col-sm-4">
					<div class="card shadow-5-strong h-100">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<img src="../img/graphique tabac.jpg" class="img-fluid" />
							<a href="#!">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="text">
						<h5 class="card-title">Acheter mon cendrier Sparkless !</h5>
					</div>
				</div>
			</div>
		</main>
		<?php require_once("../src/footer.php");?>
	</body>
</html>
