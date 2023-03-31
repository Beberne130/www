<?php
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
?>