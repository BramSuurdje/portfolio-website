<?php
$username = 'root';
$password = 'qwerty';
$dbname = 'bugs';
$dsn = "mysql:host=mysql;dbname=$dbname";
try {
  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>