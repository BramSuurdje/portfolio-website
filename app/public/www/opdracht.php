<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Opdracht</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/opdracht.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
</head>
<body>

<?php include("header.php"); ?>

    <?php

    function ctf($celsius) {
        $fahrenheit = $celsius * 9/5 + 32;
        return $fahrenheit;
    }

    $celsius = 20;
    $fahrenheit = ctf($celsius);
    echo "<p class='opdracht-text-ding'>$celsius graden Celsius is $fahrenheit graden Fahrenheit.</p>";
    ?>

    <?php
    function ktm($kilometer) {
        $mijl = $kilometer * 0.6214;
        return $mijl;
    }

    $kilometer = 25;
    $mijl = ktm($kilometer);
    echo "<p>$kilometer km/u is $mijl mph.</p>"
    ?>
</body>
</html>