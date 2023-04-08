<?php
// Vérifier si l'utilisateur est déjà connecté
session_start();
if (isset($_SESSION['email'])) {
    // Rediriger l'utilisateur vers la page avec ses données personnelles
    header('Location: /pages/personal.php');
    exit;
}

if (isset($_POST['submit'])) { //Vérifie que le bouton submit soit cliqué

    // Identifiants BDD
    $servername = "eb67u.myd.infomaniak.com";
    $username = "eb67u_site";
    $password = "MDPsparkless30";
    $dbname = "eb67u_sparkless";

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Vérification de l'email et du mot de passe
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

    // Requête SQL pour vérifier si l'utilisateur existe dans la base de données
    $query = "SELECT id, nom, prenom FROM users WHERE email='$email' AND passwd='$passwd'";
    $result = mysqli_query($conn, $query);

    // Si l'utilisateur existe dans la base de données, redirigez-le vers la page d'accueil
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $email;
		$_SESSION['id'] = $id;
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['prenom'] = $row['prenom'];

        header("Location: /pages/personal.php");
        exit;
    } else {
    // Sinon, affichez un message d'erreur
    $error = "Email ou mot de passe incorrect.";
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($conn);

}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Connexion - Sparkless</title>
		<!-- Liens externes -->
		<link rel="icon" href="/img/icon/favicon.ico" />
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
		<!-- MDB -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
		<!-- Style CSS -->
		<link rel="stylesheet" href="../src/style.css" />
	</head>
	<body class="bg-light">
		<main class="container text-center">
			<div class="row justify-content-md-center align-items-center min-vh-100">
				<form id="form-login" action="" method="POST" class="col-md-6 col-lg-5 col-xl-4">
					<a href="/index.php"><img class="mb-4" src="/img/icon/android-chrome-192x192.png" alt="" width="72" height="72" /></a>
					<h2 class="mb-3 text-center">Connexion</h2>

					<!-- Email -->
					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="email" placeholder="john.doe@example.com" name="email" required />
						<label for="email">Adresse email</label>
					</div>

					<!-- Mot de passe -->
					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="passwd" placeholder="6mi5q9rvYrl&Rx4v" name="passwd" required />
						<label for="passwd">Mot de passe</label>
					</div>

					<!-- Bouton de connexion -->
					<button type="submit" name="submit" id="submit" value="LOGIN" class="btn btn-lg btn-primary w-100"><i class="fas fa-arrow-right me-2"></i>Se connecter</button>

					<!-- Message d'erreur -->
					<?php if(isset($error)): ?>
					<div class="alert alert-danger mt-3" role="alert">
						<?= $error ?>
					</div>
					<?php endif; ?>

					<!-- Changement de page -->
					<div class="mt-3">
						<span>Je n'ai pas de compte.</span>
						<a href="/pages/register.php" class="link-primary">Je m'inscris</a>
					</div>
				</form>
			</div>
		</main>

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
	</body>
</html>
