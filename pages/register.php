<?php
if (isset($_POST['submit'])) { // Verifie que le bouton submit soit cliqué
    // Récupérer les valeurs des champs
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $passwd = $_REQUEST['passwd'];
    $nbcig = $_REQUEST['nbcig'];

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

    // Ajout des infroamtions dans la table
    $sql = "INSERT INTO users (nom, prenom, age, email, passwd, nb-cigarette-inscription) VALUES ('$nom', '$prenom', '$age', '$email', '$passwd', '$nbcig')";

    // Si envoi des données effectué, redirige vers page perso sinon affiche message d'erreur
    if (mysqli_query($con, $sql)) {
        echo "Nouvel utilisateur enrgistré avec succès";
        header("Location: personal.php");
        exit();
    } else {
        echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Fermeture de la connection
    mysqli_close($con);
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
    <title>Inscription - Sparkless</title>
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
            <form id="form-register" action="" method="post">
                <!-- Icon -->
                <a href="../index.html"><img class="mb-4" src="../img/icon/android-chrome-192x192.png" alt="" width="72" height="72" /></a>
                <h2 class="mb-3 text-center">Inscription</h2>

                <!-- Changement page -->
                <div class="alert alert-primary" role="alert">J'ai déjà un compte. <a href="login.php" class="alert-link">Je me connecte</a></div>

                <!-- Message d'erreur
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <a id="errorMessage">Aucune erreur pour le moment!</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                -->

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
                            <input type="text" class="form-control" id="age" placeholder="34" name="age" />
                            <label for="age">Age</label>
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

                <br />

                <button type="submit" name="submit" class="inscrire btn btn-lg btn-"><i class="fas fa-arrow-right"></i>S'inscrire</button>

                <div id="apiError"></div>
            </form>
        </div>
    </main>
</body>

</html>