<?php
$servername = "eb67u.myd.infomaniak.com";
$username = "eb67u_site";
$password = "MDPsparkless30";
$dbname = "eb67u_sparkless";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (nom, prenom, age, email, passwd, nbCigaretteInscription)
          VALUES ('John', 'Doe', 17, 'john@example.com', )";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Nouvel utilisateur créé avec succès :D";
}

catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>