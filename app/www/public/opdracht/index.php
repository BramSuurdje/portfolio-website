<!DOCTYPE html>
<?php
/* 
* Filename      : opdracht.php
* Assignment    : portfolio website
* Created       : 10/2/2023
* Description   : 
* Programmer    : Bram Suurd | 5371333
*/
?>
<html lang="en">
<head>
    <?php include("../metadata.php") ?>
</head>
<body>

<?php include("../components/header.php"); ?>

    <?php

    function ctf($celsius) 
    {
        $fahrenheit = $celsius * 9/5 + 32;
        return $fahrenheit;
    }

    $celsius = 20;
    $fahrenheit = ctf($celsius);
    echo "<p class='opdracht-text-ding'>$celsius graden Celsius is $fahrenheit graden Fahrenheit.</p>";
    ?>

    <?php
    function ktm($kilometer) 
    {
        $mijl = $kilometer * 0.6214;
        return $mijl;
    }

    $kilometer = 25;
    $mijl = ktm($kilometer);
    echo "<p>$kilometer km/u is $mijl mph.</p>"
    ?>

    <script src="/js/index.js"></script>
</body>
</html>