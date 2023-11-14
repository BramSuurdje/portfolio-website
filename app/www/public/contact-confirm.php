<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include("components/header.php"); ?>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $mailFrom = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if (!$mailFrom) {
            echo "<div class='confirm-message container'><p>Invalid email address. Please <a href='index.php#contact'>go back</a> and try again.</p></div>";
            exit;
        } else {
            $mailFrom = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<div class='confirm-message container'><p>Thank you, $name. Your message has been sent successfully. Please check your email ($mailFrom) for our response. If any details are incorrect, please resubmit the form.</p></div>";
    }
    ?>

    <?php include("components/footer.php"); ?>
</body>
</html>