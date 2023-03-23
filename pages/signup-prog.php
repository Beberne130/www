<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // Connection à la base de donnée
        $servername = "eb67u.myd.infomaniak.com";
        $username = "eb67u_site";
        $password = "MDPsparkless30";
        $dbname = "eb67u_sparkless";
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Récupérer les valeurs des champs
		$nom =  $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $email =  $_REQUEST['adresseemail'];
        $motdepasse = $_REQUEST['motdepasse'];
        $nbcig = $_REQUEST['nombrecigarettes'];
		
		// Ajout des infroamtions dans la table
		$sql = "INSERT INTO users VALUES ('$nom',
			'$prenom', '20','$email','$motdepasse','$nbcig')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$nom\n $prenom\n "
				. "$email\n $motdepasse\n $nbcig");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Fermeture de la connection
		mysqli_close($conn);
		?>
    </center>
</body>

</html>