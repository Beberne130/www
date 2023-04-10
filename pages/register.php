<?php
// Vérifier si l'utilisateur est déjà connecté
session_start();
if (isset($_SESSION['email'])) {
    // Rediriger l'utilisateur vers la page avec ses données personnelles
    header('Location: /pages/personal.php');
    exit;
}

if (isset($_POST['submit'])) { // Verifie que le bouton submit soit cliqué
    // Récupérer les valeurs des champs
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $passwd = $_REQUEST['passwd'];
    $nbcig = $_REQUEST['nbcig'];

    // Vérification des champs
    $error = "";
    if(empty($_REQUEST['nom'])) {
        $error .= "Le champ nom est manquant.<br>";
    }
    if(empty($_REQUEST['prenom'])) {
        $error .= "Le champ prénom est manquant.<br>";
    }
    if(empty($_REQUEST['age'])) {
        $error .= "Le champ âge est manquant.<br>";
    }
    if(empty($_REQUEST['email'])) {
        $error .= "Le champ email est manquant.<br>";
    }
    if(empty($_REQUEST['passwd'])) {
        $error .= "Le champ mot de passe est manquant.<br>";
    }
    if(empty($_REQUEST['nbcig'])) {
        $error .= "Le champ nombre de cigarettes est manquant.<br>";
    }

    // Connection à la base de donnée
    $servername = "eb67u.myd.infomaniak.com";
    $username = "eb67u_site";
    $password = "MDPsparkless30";
    $dbname = "eb67u_sparkless";

    // Connection à la BDD avec les identifiants définis précédemment
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Verifie que la connection soit bien établie
    if (!$con) {
        die("Connection échouée!" . mysqli_connect_error());
    }

	// Définir le fuseau horaire
	date_default_timezone_set('Europe/Paris');
	// Récupérer la date du jour
	$today = date('Y-m-d');

    // Ajout des infroamtions dans la table si pas d'erreur
    if($error == "") {
        $sql = "INSERT INTO users (nom, prenom, age, email, passwd, nbCigaretteInscription) VALUES ('$nom', '$prenom', '$age', '$email', '$passwd', '$nbcig')";
        if (mysqli_query($con, $sql)) {
			// Si l'tuilisateur est inscrit, on récupère l'ID qui lui est assigné
			$query = "SELECT id FROM users WHERE email='$email'";
    		$result = mysqli_query($con, $query);
			$result2 = mysqli_fetch_assoc($result);
			extract($result2);
			$_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            header("Location: /pages/personal.php");
            exit();
		// Sinon affiche message d'erreur
    	} else {
        	$error .= "Erreur: " . $sql . "<br>" . mysqli_error($con); }// Fermeture de la connection mysqli_close($con); 
    	}

} 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Inscription - Sparkless</title>
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
				<form id="form-register" action="" method="POST" class="col-md-6 col-lg-5 col-xl-4">
					<!-- Icon -->
					<a href="/index.php"><img class="mb-4" src="/img/icon/android-chrome-192x192.png" alt="" width="72" height="72" /></a>
					<h2 class="mb-3 text-center">Inscription</h2>

					<div class="row">
						<!-- Prénom -->
						<div class="col">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="prenom" placeholder="John" name="prenom" />
								<label for="prenom">Prénom</label>
							</div>
						</div>
						<!-- Nom -->
						<div class="col">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="nom" placeholder="Doe" name="nom" />
								<label for="nom">Nom</label>
							</div>
						</div>
						<!-- Age -->
						<div class="col">
							<div class="form-floating mb-3">
								<input type="number" class="form-control" id="age" placeholder="34" name="age" />
								<label for="age">Âge</label>
							</div>
						</div>
					</div>

					<!-- Email -->
					<div class="row">
						<div class="col">
							<div class="form-floating mb-3">
								<input type="email" class="form-control" id="email" placeholder="john.doe@example.com" name="email" />
								<label for="email">Adresse email</label>
							</div>
						</div>
					</div>

					<!-- Mot de passe -->
					<div class="row">
						<div class="col">
							<div class="form-floating mb-3">
								<input type="password" class="form-control" id="passwd" placeholder="6mi5q9rvYrl&Rx4v" name="passwd" />
								<label for="passwd">Mot de passe</label>
							</div>
						</div>
					</div>

					<!-- Nombre de cigarettes consommés quotidiennement -->
					<div class="row">
						<div class="col">
							<div class="form-floating mb-3">
								<input type="number" class="form-control" id="nbcig" placeholder="22" name="nbcig" />
								<label for="nbcig">Nombre de cigarettes consommés quotidiennement</label>
							</div>
						</div>
					</div>

					<!-- Bouton de connexion -->
					<button type="submit" name="submit" id="submit" value="REGISTER" class="btn btn-lg btn-primary w-100"><i class="fas fa-arrow-right me-2"></i>S'inscrire</button>
					
                    <!-- Message d'erreur -->
					<?php if(isset($error)): ?>
					<div class="alert alert-danger mt-3" role="alert">
						<?= $error ?>
					</div>
					<?php endif; ?>

					<!-- Changement de page -->
					<div class="mt-3">
						<span>J'ai un compte.</span>
						<a href="/pages/login.php" class="link-primary">Je me connecte</a>
					</div>
				</form>
			</div>
		</main>
	</body>
</html>