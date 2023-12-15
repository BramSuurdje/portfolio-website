<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $productName = $_POST['product'];
  $version = $_POST['version'];
  $hardwareType = $_POST['hardware'];
  $os = $_POST['os'];
  $frequency = $_POST['frequency'];
  $solution = $_POST['solution'];

  // Insert data into the database
  try {
      require_once('../db-connect.php');

      // Prepare the SQL statement for insertion
      $stmt = $conn->prepare('INSERT INTO bugreporter (productname, version, hardware_type, os, frequency, solution) VALUES (:productname, :version, :hardware_type, :os, :frequency, :solution)');

      // Bind parameters to the prepared statement
      $stmt->bindParam(':productname', $productName);
      $stmt->bindParam(':version', $version);
      $stmt->bindParam(':hardware_type', $hardwareType);
      $stmt->bindParam(':os', $os);
      $stmt->bindParam(':frequency', $frequency);
      $stmt->bindParam(':solution', $solution);

      // Execute the prepared statement to insert a row
      $stmt->execute();

      header('Location: /bugreporter/');
  } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
  }

  $conn = null;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../metadata.php") ?>
  <link rel="stylesheet" href="/bugreporter/style.css">
</head>
<body>
  <div class="form-wrapper">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <h1>Add new bug</h1>
      <div class="form-items">
        <div><input type="text" name="product" placeholder="Product"></div>
        <div><input type="text" name="version" placeholder="Version"></div>
        <div><input type="text" name="hardware" placeholder="Hardware"></div>
        <div><input type="text" name="os" placeholder="OS"></div>
        <div><input type="text" name="frequency" placeholder="Frequency"></div>
        <div><input type="text" name="solution" placeholder="Solution"></div>
      </div>
      <div><button class="success-button" type="submit">Submit</button></div>
    </form>
  </div>

    <form method="post"></form>
</body>
</html>


