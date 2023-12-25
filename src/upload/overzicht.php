<?php
require_once('../db-connect.php'); // Include the database connection script

// Fetch documents from the database
$stmt = $conn->query('SELECT * FROM documents');
$documents = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Document Overview</h1>
    
    <?php if (count($documents) > 0) : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>File Name</th>
                    <th>File Type</th>
                    <th>File Size (bytes)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documents as $document) : ?>
                    <tr>
                        <td><?php echo $document['id']; ?></td>
                        <td><?php echo $document['file_name']; ?></td>
                        <td><?php echo $document['file_type']; ?></td>
                        <td><?php echo $document['file_size']; ?></td>
                        <td><a href="view_document.php?id=<?php echo $document['id']; ?>">View</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No documents found.</p>
    <?php endif; ?>
</body>
</html>
