<?php
session_start();
require_once('../db-connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileType = $_FILES['fileToUpload']['type'];

    if ($fileName != "") {
        $fileContent = file_get_contents($fileTmpName);

        $tableCheck = $conn->query('SHOW TABLES LIKE "documents"');
        $tableExists = $tableCheck->rowCount() > 0;

        if (!$tableExists) {
            $sql = 'CREATE TABLE documents (
                id INT AUTO_INCREMENT PRIMARY KEY,
                file_name VARCHAR(255) NOT NULL,
                file_content LONGBLOB NOT NULL,
                file_type VARCHAR(100) NOT NULL,
                file_size INT NOT NULL
            )';
            
            $conn->exec($sql);
        }

        $sql = "INSERT INTO documents (file_name, file_content, file_type, file_size) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $fileName );
        $stmt->bindParam(2, $fileContent, PDO::PARAM_LOB);
        $stmt->bindParam(3, $fileType);
        $stmt->bindParam(4, $fileSize);

        if ($stmt->execute()) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Please select a file to upload.";
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