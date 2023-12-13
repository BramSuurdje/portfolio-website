<?php

$location = 'localhost:5315';
$DB_name = 'users';
$username = "root";
$password = "qwerty";

try {
  new PDO('mysql:host="$location";dbname="$DB_name;charset="utf-8', $username, $password);
} catch (Exception $ex) {
  
}

?>