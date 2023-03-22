<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<!DOCTYPE html>
<html>

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
    <script src="../src/signup.js" type="module"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <!-- MANIFEST -->
    <link rel="manifest" href="../src/manifest.json" />
</head>

<body class="bg-light">
    <main class="container text-center">
        <div class="row justify-content-md-center align-items-center" style="min-height: 100vh">
            <form id="form-signup" class="w-50">
                <a href="../index.html"><img class="mb-4" src="../img/icon/android-chrome-192x192.png" alt="" width="72"
                        height="72" /></a>
                <h2 class="mb-3 text-center">Inscription</h2>

                <!-- Changement page -->
                <div class="alert alert-primary" role="alert">J'ai déjà un compte. <a href="signin.html"
                        class="alert-link">Je me connecte</a></div>

                <!-- Message d'erreur -->
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <a id="errorMessage">Aucune erreur pour le moment!</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="row">
                    <!-- Prénom -->
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="prenom" placeholder="John" />
                            <label for="prenom">Prénom</label>
                        </div>
                    </div>
                    <!-- Nom -->
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nom" placeholder="Doe" />
                            <label for="nom">Nom</label>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="john.doe@example.com" />
                            <label for="email">Adresse email</label>
                        </div>
                    </div>
                </div>

                <!-- Mot de passe -->
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="6mi5q9rvYrl&Rx4v" />
                            <label for="password">Mot de passe</label>
                        </div>
                    </div>
                </div>

                <!-- Nombre de cigarettes consommés quotidiennement -->
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="nbrcig" placeholder="22" />
                            <label for="nbrcig">Nombre de cigarettes consommés quotidiennement</label>
                        </div>
                    </div>
                </div>

                <br />

                <button type="button" class="inscrire btn btn-lg btn-"><i class="fas fa-arrow-right"></i>
                    S'inscrire</button>
                <div id="apiError"></div>
            </form>
        </div>
    </main>
    <script>
    if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("../sw.js", {
            scope: "/"
        });
    }
    </script>
</body>

</html>