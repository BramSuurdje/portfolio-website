<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      // Controleer of het een afbeelding is
      if(isset($_FILES["fileToUpload"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if ($check !== false) {
              echo "Bestand is een afbeelding - " . $check["mime"] . ".<br>";
              $uploadOk = 1;
          } else {
              echo "Sorry, bestand is geen afbeelding.<br>";
              $uploadOk = 0;
          }
      }

      // Controleer bestandsgrootte
      if ($_FILES["fileToUpload"]["size"] > 3000000) {
          echo "Sorry, bestand is te groot.<br>";
          $uploadOk = 0;
      }

      // Controleer bestandsnaam
      if (strlen($_FILES["fileToUpload"]["name"]) > 50 || !preg_match('/[A-Z]/', $_FILES["fileToUpload"]["name"])) {
          echo "Ongeldige bestandsnaam.<br>";
          $uploadOk = 0;
      }

      // Controleer of de map 'uploads' bestaat, anders maak deze aan
      if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
      }

      // Controleer of de map schrijfbaar is
      if (!is_writable($target_dir)) {
        echo "Upload map is niet schrijfbaar. Controleer de permissies.<br>";
        $uploadOk = 0;
      }

      // Upload het bestand
      if ($uploadOk == 0) {
        echo "Sorry, bestand is niet geüpload.<br>";
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Het bestand " . basename($_FILES["fileToUpload"]["name"]) . " is geüpload.";
        } else {
            echo "Sorry, er was een probleem met het uploaden van het bestand.";
        }
      }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <?php include("../metadata.php") ?>
</head>
<body>
  
  <main>
    <div class="uploadform">
      <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg, image/jpg, image/png, image/gif">
        <input type="submit" class="success-button" value="Submit">
        <a href="/upload/overzicht.php" class="success-button">Alle Bestanden </a>
      </form>
    </div>
  </main>

  <?php include('../components/footer.php'); ?>
</body>
</html>