<?php

$servername = "localhost";
$username = "fsdio";
$password = "fsdio123*";
$dbname = "my_mathearn";

try {
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  echo "Connected successfully";
} catch(Exception $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>