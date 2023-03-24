<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // Récupérer les valeurs des champs
		$nom =  $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $age = $_REQUEST['age'];
        $email =  $_REQUEST['email'];
        $passwd = $_REQUEST['passwd'];
        $nbcig = $_REQUEST['nbcig'];

        // Connection à la base de donnée
        $servername = "eb67u.myd.infomaniak.com";
        $username = "eb67u_site";
        $password = "MDPsparkless30";
        $dbname = "eb67u_sparkless";

        $con = new mysqli($servername, $username, $password, $dbname);

		// Verifie que la connection soit bien établie
		if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }

		

		// Ajout des infroamtions dans la table
		$sql = "INSERT INTO users VALUES ('0', '$nom', '$prenom', '$age', '$email', '$passwd', '$nbcig')";

		if(mysqli_query($con, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$nom\n $prenom\n $age\n "
				. "$email\n $passwd\n $nbcig");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($con);
		}

		// Fermeture de la connection
		mysqli_close($con);
        header("Location: personnal.php");
        exit();
		?>
    </center>
</body>

</html>