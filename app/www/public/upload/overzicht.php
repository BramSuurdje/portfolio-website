<!DOCTYPE html>
<html>
<head>
    <?php include('../metadata.php') ?>
    <style>
        /* Voeg hier je minimale styling toe */
        .file-container {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Overzicht van geüploade bestanden</h2>

    <?php
    $files = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    foreach ($files as $file) {
        $filename = basename($file);
        echo "<div class='file-container'>";
        echo "<a href='" . $file . "'>" . $filename . "</a>";
        echo "<form method='post' action='./verwijder.php'>";
        echo "<input type='hidden' name='filename' value='" . $filename . "'>";
        echo "<input type='submit' value='Verwijderen' name='verwijderen'>";
        echo "</form>";
        echo "</div>";
    }
    ?>

</body>
</html>
