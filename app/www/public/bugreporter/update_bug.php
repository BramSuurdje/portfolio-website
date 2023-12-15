<?php
require_once('../db-connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['remove'])) { // Check if Remove button is clicked
        // Retrieve bug ID for removal
        $bugId = $_POST['bug_id'];

        // Delete bug report from the database
        try {
            $stmt = $conn->prepare('DELETE FROM bugreporter WHERE bug_id = :bugId');
            $stmt->bindParam(':bugId', $bugId);
            $stmt->execute();

            // Redirect back to the main bug reporting page after successful removal
            header('Location: /bugreporter/');
            exit();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } else { // Update button is clicked for editing
        // Retrieve and sanitize updated bug details
        $bugId = $_POST['bug_id'];
        $productName = $_POST['product'];
        $version = $_POST['version'];
        $hardwareType = $_POST['hardware'];
        $os = $_POST['os'];
        $frequency = $_POST['frequency'];
        $solution = $_POST['solution'];

        // Update bug details in the database
        try {
            $stmt = $conn->prepare('UPDATE bugreporter SET productname = :productname, version = :version, hardware_type = :hardware_type, os = :os, frequency = :frequency, solution = :solution WHERE bug_id = :bugId');
            $stmt->bindParam(':productname', $productName);
            $stmt->bindParam(':version', $version);
            $stmt->bindParam(':hardware_type', $hardwareType);
            $stmt->bindParam(':os', $os);
            $stmt->bindParam(':frequency', $frequency);
            $stmt->bindParam(':solution', $solution);
            $stmt->bindParam(':bugId', $bugId);
            $stmt->execute();

            // Redirect back to the main bug reporting page after successful update
            header('Location: /bugreporter/');
            exit();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
} else {
    echo 'Invalid request';
}
?>
