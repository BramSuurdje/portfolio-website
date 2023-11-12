<!DOCTYPE html>
<?php
/* 
* Filename      : videotheek.php
* Assignment    : portfolio website
* Created       : 10/2/2023
* Description   : 
* Programmer    : Bram Suurd | 5371333
*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoTheek</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
</head>
<body>
<br><br><br><br> <!-- om er voor te zorgen dat de text onder de header weg komt :)))) ik zal het niet doen bij het tentamen -->

    <?php include("header.php"); ?>

    <?php
    function controleerAanmelding($leeftijd, $geslacht, $recentBezocht) 
    {
    $meldingen = array();

    if ($leeftijd < 18) 
    {
        $meldingen[] = "Je wordt doorgestuurd naar de kinderafdeling.";
    }

    if ($geslacht == "vrouw") 
    {
        $meldingen[] = "Er komt binnenkort een lady's night evenement.";
    }

    if ($recentBezocht) 
    {
        $meldingen[] = "Je krijgt korting omdat je de website onlangs hebt bezocht.";
    }

    if (count($meldingen) == 3) 
    {
        echo "Foutmelding: Alle voorwaarden zijn van toepassing.";
    } else {
        foreach ($meldingen as $melding) 
        {
            echo "<p>$melding</p>";
        }
    }
}

// Voorbeeldgebruik:
$leeftijd = 96;
$geslacht = "vrouw";
$recentBezocht = true;

controleerAanmelding($leeftijd, $geslacht, $recentBezocht);

    ?>

    <script src="/js/index.js"></script>
</body>
</html>