<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Mj1229@#";

try {
  $conn = new PDO("mysql:host=$servername;dbname=hr_project", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>