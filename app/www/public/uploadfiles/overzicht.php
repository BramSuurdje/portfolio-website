<!DOCTYPE html>
<html>
<head>
    <title>Bestanden Overzicht</title>
    <?php include('../../metadata.php') ?>
</head>
<body>
    <h2>Overzicht van geüploade bestanden</h2>

    <?php
    $files = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    foreach ($files as $file) {
        echo "<a href='" . $file . "'>" . basename($file) . "</a><br>";
    }
    ?>
</body>
</html>
