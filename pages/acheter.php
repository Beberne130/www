<?php
if (isset($_POST['submit']))
	{
		$nbcend = $_REQUEST["cendrier"];
	}
?>
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
							<h1 class="mb-3">Commande du cendrier Sparkless</h1>
							<h4 class="mb-3">Livraison Rapide et Gratuite !</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main class="container d-flex">
			<div class="card mb-3 shadow-5-strong">
				<div class="row">
					<div class="col-md-4">
						<img src="../img/imagecendrierressource.png" class="img-fluid rounded-start" />
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h2 class="card-title">Achète ton cendrier Sparkless</h2>
							<p class="card-text">La livraison est offerte partout en France métropolitaine et outre-mer. Les commandes passées un jour ouvré avant 12h sont expédiées le jour même en Colissimo J+2. Pour les commandes en outre-mer, des frais supplémentaires peuvent s'appliquer lors du passage en douane.</p>
							<div class="form-floating mb-3 w-50">
								<input type="number" class="form-control" id="cendrier" placeholder="1" name="cendrier" />
								<label for="cendrier">Quantité</label>
								<button type="submit" name="submit" id="submit" value="REGISTER" class="btn btn-lg btn-primary w-100">Valider</button>
							</div>
							<h3>
								<p> Prix :
								<?php $price = 10 * $nbcend;
								echo  $price
								?>

								€
								</p>
							</h3>
							<button type="button" class="btn btn-primary">
								<!--
								******************************
								******************************
								**VA CHERCHER DES TUTOS TDC**
								******************************
								******************************
								-->
								<?php if(isset($_SESSION['email'])): ?>
								<div class="d-flex align-items-center">
									<a> Votre commande a été enregistrer. </a>
								</div>
								<?php else: ?>
								<div class="d-flex align-items-center">
									<a href="../pages/login.php"></a>
								</div>
								<?php endif; ?>

								Acheter
							</button>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php require_once("../src/footer.php");?>
	</body>
</html>
