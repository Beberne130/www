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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#FFB100" />
    <title>Ma page - Sparkless</title>
    <!-- SOURCES -->
    <link rel="stylesheet" href="../src/style.css" />
    <link rel="icon" href="../img/icon/favicon.ico" />
    <link rel="apple-touch-icon" href="../img/icon/android-chrome-512x512.png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</head>

<body>
    <h1>Bienvenue <?php echo $prenom; ?> !</h1>
    <form method="post">
        <input type="submit" name="logout" value="Déconnexion">
    </form>
</body>

</html>