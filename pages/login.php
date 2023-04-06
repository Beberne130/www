<?php
// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['session'])) {
    // Rediriger l'utilisateur vers la page avec ses données personnelles
    header('Location: personnal.php');
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
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    // Requête SQL pour vérifier si l'utilisateur existe dans la base de données
    $query = "SELECT * FROM users WHERE email='$email' AND passwd='$passwd'";
    $result = mysqli_query($conn, $query);

    // Si l'utilisateur existe dans la base de données, redirigez-le vers la page d'accueil
    if(mysqli_num_rows($result) == 1) {
        $_SESSION['session'] = $_POST['email'];
        header("Location: personnal.php");
        exit;
    } else {
    // Sinon, affichez un message d'erreur
    echo "Email ou mot de passe incorrect.";
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($conn);

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="http://sparkless">
    <!-- Liens externes -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#FFB100" />
    <title>Connexion - Sparkless</title>
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

<body class="bg-light">
    <main class="container text-center">
        <div class="row justify-content-md-center align-items-center" style="min-height: 100vh">
            <form id="form-login" action="" method="POST">
                <a href="../index.html"><img class="mb-4" src="../img/icon/android-chrome-192x192.png" alt="" width="72" height="72" /></a>
                <h2 class="mb-3 text-center">Connexion</h2>

                <!-- Changement page -->
                <div class="alert alert-primary" role="alert">Je n'ai pas de compte. <a href="/pages/register.php" class="alert-link">Je m'inscris</a></div>

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
                            <input type="passwd" class="form-control" id="passwd" placeholder="6mi5q9rvYrl&Rx4v" name="passwd" />
                            <label for="passwd">Mot de passe</label>
                        </div>
                    </div>
                </div>

                <br />

                <button type="submit" name="submit" id="submit" value="LOGIN" class="inscrire btn btn-lg"><i class="fas fa-arrow-right"></i>Se connecter</button>        
            </form>
        </div>
    </main>
</body>

</html>