<?php
// Démarrer une session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['session'])) {
    // Rediriger l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
}

// Déconnecter l'utilisateur
if (isset($_POST['logout'])) {
    // Détruire la session
    session_destroy();
    // Rediriger l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
}


// Récupérer les données personnelles de l'utilisateur
$email = $_SESSION['session'];



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
    <h1>Bienvenue <?php echo $email; ?> !</h1>
    <button type="submit" name="logout" id="logout" value="LOGOUT" class="inscrire btn btn-lg">Se déconnecter</button>
</body>

</html>