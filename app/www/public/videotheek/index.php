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
    <?php include("../metadata.php") ?>
    <link rel="stylesheet" href="./videotheek.css">
</head>
<body>
<br><br><br><br> <!-- om er voor te zorgen dat de text onder de header weg komt :)))) ik zal het niet doen bij het tentamen -->

    <?php include("../components/header.php"); ?>

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