<?php
$username = 'root';
$password = 'qwerty';
$dbname = 'bugs';
$charset = 'utf8mb4';
$dsn = 'mysql:host=mysql;dbname=$dbname;charset=$charset';
try {
  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>