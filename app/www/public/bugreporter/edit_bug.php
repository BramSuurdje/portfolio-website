<?php
  $servername = 'localhost';
  $username = 'bram';
  $password = '123';
  $dbname = 'bugs';
  
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    // Retrieve bug details based on the provided ID
    $bugId = $_GET['id'];
    $stmt = $conn->prepare('SELECT * FROM bugreporter WHERE bug_id = :bugId');
    $stmt->bindParam(':bugId', $bugId);
    $stmt->execute();
    $bugDetails = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($bugDetails) {
        // Display an edit form with the retrieved bug details
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../metadata.php") ?>
  <link rel="stylesheet" href="/bugreporter/style.css">
</head>
<body>
  <div class="form-wrapper">
    <form action="update_bug.php" method="post">
      <h1>Edit Bug</h1>
      <div class="form-items">
        <input type="hidden" name="bug_id" value="<?php echo $bugDetails['bug_id']; ?>">
        <div><input type="text" name="product" value="<?php echo $bugDetails['productname']; ?>"></div>
        <div><input type="text" name="version" value="<?php echo $bugDetails['version']; ?>"></div>
        <div><input type="text" name="hardware" value="<?php echo $bugDetails['hardware_type']; ?>"></div>
        <div><input type="text" name="os" value="<?php echo $bugDetails['os']; ?>"></div>
        <div><input type="text" name="frequency" value="<?php echo $bugDetails['frequency']; ?>"></div>
        <div><input type="text" name="solution" value="<?php echo $bugDetails['solution']; ?>"></div>
      </div>
      <div style="display:flex; gap:10px;">
        <div><button class="remove-button" type="submit" name="remove">Remove</button></div>
        <div><button class="success-button" type="submit">Update</button></div>
      </div>
    </form>
  </div>
</body>
</html>
<?php
        // Close PHP tag after HTML code
    } else {
        echo 'Bug not found';
    }
} else {
    echo 'Bug ID not provided';
}
?>
