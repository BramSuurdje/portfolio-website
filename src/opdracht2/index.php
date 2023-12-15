<!DOCTYPE html>
<?php
/* 
* Filename      : opdracht2.php
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
    $genres = ["horror", "comedy", "sci-fi", "romance", "action"];
    function displayGenres($genres) {
        foreach ($genres as $genre) {
            echo "<p>$genre</p>";
        }
    }

    function displaySortedGenres($genres) {
        sort($genres);
        foreach ($genres as $genre) {
            echo "<p>$genre</p>";
        }
    }

    echo "<p class='opdracht-text-ding'>A. Geef de genres weer op het scherm, 1 per regel:</p>";
    displayGenres($genres);
    echo "<br>";
    echo "<p>B. Geef de genres weer op het scherm, op alfabetische volgorde:</p>";
    displaySortedGenres($genres);

    ?>

<br>

<?php

function streep () 
{
    for ($i = 0 ; $i < 1 ; $i++)
    {
        for($j=1;$j<11;$j++)
        {
            echo "*";
        }
        echo "<br/>";
    }
}
function vierkant () {
    for ($i = 0 ; $i < 4 ; $i++)
    {
        for($j=1;$j<11;$j++)
        {
            echo "*";
        }
        echo "<br/>";
    }
}
function halveKerstBoom () 
{
    for($i=0;$i<=9;$i++)
    {        
        for($j=0;$j<=$i;$j++)
        {
            echo "*";
        }
        echo "<br/>";
    }
}
function halveKerstBoomO() 
{
    for($i=0 ; $i<=9 ; $i++) 
    {
        for($j=9-$i ; $j>=0 ; $j--)
        {
        echo "*";
        }
    echo "<br>";
    }
}

echo "<br>";
streep();
echo "<br>";
vierkant();
echo "<br>";
halveKerstBoom();
echo "<br>";
halveKerstBoomO();
?>
<br>
<p>Volg ons op social media:</p>
<?php
$socialImg = ["img/facebook.png", "img/twitter.png", "img/instagram.png", "img/linkedin.png"];
$socialName = ["Facebook", "Twitter", "Instagram", "LinkedIn"];
$socialURL = ["https://www.facebook.com", "https://www.twitter.com", "https://www.instagram.com", "https://www.linkedin.com"];

for ($i = 0; $i < count($socialImg); $i++) 
{
    echo "<a href='" . $socialURL[$i] . "' target='_blank'>";
    echo "<img src='" . $socialImg[$i] . "' alt='" . $socialName[$i] . "' width='100' height='100'>";
    echo "</a>";
}
?>

<br>
<?php
function functionTesting () {
    echo "<br>";
    $helloWorld = "hello world";
    echo $helloWorld;
}
echo $helloWorld;
functionTesting()
?>
<!-- je kan een variable die je aanmaakt in een functie niet gebruiken buiten de functie -->

    <script src="/js/index.js"></script>

</body>
</html>