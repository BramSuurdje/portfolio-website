<?php
    $files = scandir("documents");
    if(!isset($_GET["file"])){
        header("location: index.php");
    }
    else{
        $file = str_replace("_", ".", $_GET["file"]);
        if(!in_array($file, $files)){
            header("location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../../metadata.php") ?>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex sm:flex-row justify-center items-center flex-col-reverse">
    <a class=" mr-11 mt-11 font-bold text-3xl self-start" href="../jaar1/">Ga Terug</a>
    <?php echo '<iframe class="h-screen sm:w-1/2 w-full"  height="950" src="./documents/' . $file . '" frameborder="0"></iframe>'; ?>
  </div>
</body>
</html>