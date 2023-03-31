<?php
  $servername = "eb67u.myd.infomaniak.com";
  $username = "eb67u_site";
  $password = "MDPsparkless30";
  //$dbname = "eb67u_sparkless";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>