<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../metadata.php") ?>
    <style>
        .success-box {
            flex-direction: column;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include("../components/header.php"); ?>

    <div class="success-box">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $reason = $_POST['reason'];
                $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
                $hasError = false;
                if (empty($name))
                {
                echo "<p class='success-text'>your name is missing... resubmit the form</p>";
                $hasError = true;
                } elseif (empty($email))
                {
                echo "<p class='success-text'>your email is missing... resubmit the form</p>";
                $hasError = true;
                } elseif (empty($message))
                {
                echo "<p class='success-text'>your message is missing... resubmit the form</p>";
                $hasError = true;
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                echo '<p class="success-text">invalid email... resubmit the form</p>';
                $hasError = true;
                }
                if (!$hasError)
                {
                echo "<p class='text-xl max-w-7xl text-center' class='success-text'>thank you for contacting me $name, i will come in contact with you soon regarding your $reason. this is the email that you have submitted:($email)</p> ";
                } else {
                    header("Location: /");
                }
            }
        ?>
        <a href="/#contact" class="success-button">Return</a>
    </div>
    <?php include("../components/footer.php"); ?>
</body>
</html>
