<?php
$username = 'root';
$password = 'qwerty';
$dbname = 'bugs';
$dsn = "mysql:host=localhost;dbname=$dbname;charset=utf8";
try {
  $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 