<?php
$host = "localhost";
$dbname = "gdlwebcamp";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}
catch(PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>