<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../metadata.php") ?>

  <style>
    .verwijder-div {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <?php include('../components/header.php') ?>

  <div class="verwijder-div">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filename = $_POST["filename"];
        $filepath = "uploads/" . $filename;
        if (file_exists($filepath)) {
            if (unlink($filepath)) {
                echo "Het bestand " . $filename . " is verwijderd.";
            } else {
                echo "Sorry, er was een probleem met het verwijderen van het bestand.";
            }
        } else {
            echo "Bestand niet gevonden.";
        }
    } else {
      header("location:/#home");
    }
    ?>
    <a href="./overzicht.php" class="success-button">Ga terug</a>
  </div>
</body>
</html>