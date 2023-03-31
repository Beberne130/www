<?php
// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupère les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifie si l'utilisateur est inscrit dans la base de données
    // Remplacez les valeurs de connexion à la base de données par les vôtres
    $host = "eb67u.myd.infomaniak.com";
    $username = "eb67u_site";
    $password_db = "MDPsparkless30";
    $dbname = "eb67u_sparkless";
    $conn = new mysqli($host, $username, $password_db, $dbname);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // L'utilisateur est inscrit, redirige-le vers la page personnal.php
        header("Location: personnal.php");
        exit();
    } else {
        // Affiche un message d'erreur
        $error_message = "L'adresse email ou le mot de passe est incorrect.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <?php if (isset($error_message)) { ?>
        <p>
            <?php echo $error_message; ?>
        </p>
    <?php } ?>
    <form method="post">
        <div>
            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="submit">Se connecter</button>
    </form>
</body>

</html>