<?php
$message = "";
if (isset($_POST['submit'])) { //check if form was submitted
    session_start();
    if (isset($_POST['email']) && isset($_POST['passwd'])) {
        // connexion à la base de données
        $db_username = 'eb67u_site';
        $db_password = 'MDPsparkless30';
        $db_name = 'eb67u_sparkless';
        $db_host = 'eb67u.myd.infomaniak.com';
        $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
            or die('could not connect to database');

        // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
        // pour éliminer toute attaque de type injection SQL et XSS
        $email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
        $passwd = mysqli_real_escape_string($db, htmlspecialchars($_POST['passwd']));

        if ($email !== "" && $passwd !== "") {
            $requete = "SELECT count(*) FROM users where email = '" . $email . "' and passwd = '" . $passwd . "' ";
            $exec_requete = mysqli_query($db, $requete);
            $reponse = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if ($count == 1) // nom d'utilisateur et mot de passe correctes
            {
                $_SESSION['email'] = $email;
                var_dump("test1");
                header('Location: personnal.php');
                exit();
            } else {
                var_dump("test2");
                header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
                exit();
            }
        } else {
            var_dump("test3");
            header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
            exit();
        }
    } else {
        var_dump("test4");
        header('Location: login.php?erreur=3');
        exit();
    }
    mysqli_close($db); // fermer la connexion
}
?>

<!DOCTYPE html>
<html>

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
</head>

<body class="bg-light">
    <main class="container text-center">
        <div class="row justify-content-md-center align-items-center" style="min-height: 100vh">
            <form id="form-login" action="" method="POST">
                <a href="../index.html"><img class="mb-4" src="../img/icon/android-chrome-192x192.png" alt="" width="72" height="72" /></a>
                <h2 class="mb-3 text-center">Connexion</h2>

                <!-- Changement page -->
                <div class="alert alert-primary" role="alert">Je n'ai pas de compte. <a href="register.php" class="alert-link">Je m'inscris</a></div>

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
                            <input type="password" class="form-control" id="password" placeholder="6mi5q9rvYrl&Rx4v" name="passwd" />
                            <label for="password">Mot de passe</label>
                        </div>
                    </div>
                </div>

                <br />

                <button type="submit" name="submit" id="submit" value="LOGIN" class="inscrire btn btn-lg"><i class="fas fa-arrow-right"></i>S'inscrire</button>
                <?php
                if (isset($_GET['erreur'])) {
                    $err = $_GET['erreur'];
                    if ($err == 1 || $err == 2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </main>
</body>

</html>