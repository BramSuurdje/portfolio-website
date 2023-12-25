

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../metadata.php") ?>
</head>
<body>
<div style="display: flex; justify-content:center; flex-direction: column; align-items: center; height:100vh; ">
  <?php
  try {
    include('../db-connect.php');
  
    $databaseCheck = $conn->query('SHOW DATABASES LIKE "bugs"');
    $databaseExists = $databaseCheck->rowCount() > 0;
  
    if (!$databaseExists) {
      $createDatabase = $conn->query('CREATE DATABASE bugs');
    }
    $tableCheck = $conn->query('SHOW TABLES LIKE "bugreporter"');
    $tableExists = $tableCheck->rowCount() > 0;
    if (!$tableExists) {
      $sql = 'CREATE TABLE bugreporter (
        bug_id INT AUTO_INCREMENT PRIMARY KEY,
        productname VARCHAR(255),
        version DECIMAL(10, 2),
        hardware_type VARCHAR(255),
        os VARCHAR(255),
        frequency VARCHAR(255),
        solution VARCHAR(255)
      )';
      $conn->exec($sql);
    } else {
      echo "";
    }
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
  try {
    include('../db-connect.php');
    // Fetch data from the 'bugreporter' table
    $stmt = $conn->query('SELECT bug_id, productname, `version`, hardware_type, os, frequency, solution FROM bugreporter');
    $bugReports = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Display the table header
    echo '<h2 style="padding-bottom: 1rem;">bugreporter</h2>';
  
    // Check if there are records in the table
    if (count($bugReports) > 0) {
      // Display data in a table format
      echo '<table border="1">';
      echo '<tr>';
      foreach ($bugReports[0] as $key => $value) {
        echo "<th>$key</th>";
      }
      echo '<th>Edit</th>'; // Add a new column header for the Edit link
      echo '</tr>';
      foreach ($bugReports as $report) {
        echo '<tr>';
        foreach ($report as $value) {
          echo "<td>$value</td>";
        }
        echo '<td><a href="/bugreporter/edit_bug.php?id=' . $report['bug_id'] . '">Edit</a></td>';
        echo '</tr>';
      }
      echo '</table>';
    } else {
      echo 'No records found <br>';
    }
    echo '<a style="padding-top: 1rem;" href="/bugreporter/new_bug_form.php">Add Bug</a>';
  
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
  $conn = null;
  ?>
</div>
</body>
</html>