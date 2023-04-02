<?php


$hostname = "eb67u.myd.infomaniak.com";
$user = "eb67u_site";
$password = "MDPsparkless30";
$database = "eb67u_sparkless";

/*$hostname = '51.75.124.193';
$user = 'sparkless';
$password = 'sparkless-damin';
$database = 'sparkless';
$port = 3306;*/

// Initialisation
$mysqli = mysqli_init();
if (!$mysqli) {
    die("mysqli_init() : Connect Error: " . $mysqli->connect_error());
}

var_dump("test1");

// Connexion à la base de données
$mysqliConnected = $mysqli->real_connect($hostname, $user, $password, $database);
if (!$mysqliConnected) {
    die("Connect Error: " . $mysqli->connect_error());
}

var_dump("test2");

$sql = "SELECT * FROM users";

var_dump("test3");

// Lancement de la requête
$mysqli->real_query($sql);

var_dump("test4");

if ($mysqli->field_count) { // S'il y a des données ?
    $result = $mysqli->store_result();
}

var_dump("test5");

// Referme la connexion
$mysqli->close();

var_dump("test6");

var_dump($result);

?>