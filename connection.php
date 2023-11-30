<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "courage_school_system";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "error:" . $e->getMessage();
}
