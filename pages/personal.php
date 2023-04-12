<?php
// Démarrer une session
session_start();

// Identifiants BDD
$servername = "eb67u.myd.infomaniak.com";
$username = "eb67u_site";
$password = "MDPsparkless30";
$dbname = "eb67u_sparkless";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // Rediriger l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
}

// Récupérer les données personnelles de l'utilisateur
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');
// Récupérer la date du jour
$today = date('Y-m-d');

// Vérifier si le une ligne est présente dans la table consommation avec userId=$id et dateConso=$today
$sql = "SELECT * FROM consommation WHERE userId=$id AND dateConso='$today'";
$result = mysqli_query($conn, $sql);
$conso = mysqli_fetch_assoc($result);
// Si la ligne n'existe pas
if (mysqli_num_rows($result) == 0) {
	// Ajouter une ligne dans la table consommation avec userId=$id, dateConso=$today et nbCigarette=0
	$sql = "INSERT INTO consommation (userId, dateConso, nbCigarette) VALUES (" . $conso['id'] . ", " . $today . ", '0')";
	mysqli_query($conn, $sql);
}
// Si le bouton ajouterCigarette est cliqué ajouter une cigarette à la ligne de la table consommation avec userId=$id et dateConso=$today
if (isset($_POST['ajouterCigarette'])) {
	// Mettre à jour le champs nbCigarette avec userId=$conso['id'] et dateConso=$today
	$sql = "UPDATE consommation SET nbCigarette=nbCigarette+1 WHERE userId=" . $conso['id'] . " AND dateConso='$today'";
	mysqli_query($conn, $sql);
	header("Refresh:0");
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
            <?php if(isset($error)): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?= $error ?>
                </div>
            <?php endif; ?>
			<!-- Jumbotron -->
			<div class="jumbotron jumbotron-fluid pb-5">
				<div class="container">
					<h1 class="display-4">Bienvenue <?php echo $prenom; ?> sur votre page personelle.</h1>
					<p class="lead">Sur cette page, vous pouvez suivre votre consommation de cigarettes.</p>
                    <form method="post">
						<input type="submit" name="ajouterCigarette" class="btn btn-primary" value="Ajouter une cigarette">
					</form>
				</div>
			</div>

			<!-- Contenu de la page -->
			<div class="container">
                <div class="col col-auto d-flex">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Aujourd'hui</h5>
                            <p class="card-text"><h1 class="display-4"><?php echo $conso['nbCigarette'] ?></h1></p>
                        </div>
                    </div>
                </div>
			</div>

		</main>
	</body>
</html>
