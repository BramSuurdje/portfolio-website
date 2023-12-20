<?php
$username = 'root';
$password = 'qwerty';
$dbname = 'bugs';
$dsn = "mysql:host=custom_db;dbname=$dbname";
try {
  $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>