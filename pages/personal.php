<?php
// Démarrer une session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // Rediriger l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
} else {
    // Récupérer les données personnelles de l'utilisateur
    $email = $_SESSION['email'];
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Liens externes -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ma page - Sparkless</title>
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
		<!-- ChartJS -->
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	</head>

	<body>
		<?php require_once("../src/navbar.php") ?>
		<main class="pt-5">
			<!-- Jumbotron -->
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1 class="display-4"> Bievenue <?php echo $prenom; ?> sur votre page personelle</h1>
					<p class="lead">Sur cette page, vous pouvez suivre votre consommation de cigarettes.</p>
				</div>
			</div>

			<!-- Contenu de la page -->
			<div class="container">
                <div class="col col-auto d-flex">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Aujourd'hui</h5>
                            <p class="card-text"><h1 class="display-4">5</h1></p>
                        </div>
                    </div>
                </div>
			</div>

		</main>
	</body>
</html>
