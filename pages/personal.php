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

// Déconnecter l'utilisateur
if (isset($_POST['logout'])) {
    // Détruire la session
    session_destroy();
    // Rediriger l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
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
</head>

<body>
    <?php require_once("../src/navbar.php") ?>
    <main>
        <h1>Bienvenue <?php echo $prenom; ?> !</h1>
        <form method="post">
            <input type="submit" name="logout" class="btn btn-lg btn-primary" value="Déconnexion">
        </form>
    </main>
</body>

</html>