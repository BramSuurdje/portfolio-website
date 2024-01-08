<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../metadata.php") ?>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <main>
    <nav>
      <div class="header-wrapper">
          <div class="header-container glass">
              <div class="header-logo">
                  <a href="/#home">bram</a>
              </div>
              <div class="flex self-center items-center">
                <ul class="flex gap-4">
                  <li class="flex items-center justify-center"><a class="text-lg font-bold" href="./jaar1/">Jaar 1</a></li>
                  <!-- <li class="flex items-center justify-center"><a class="text-lg font-bold" href="./jaar1/">Jaar 2</a></li>
                  <li class="flex items-center justify-center"><a class="text-lg font-bold" href="./jaar1/">Jaar 3</a></li>
                  <li class="flex items-center justify-center"><a class="text-lg font-bold" href="./jaar1/">Jaar 4</a></li> -->
                </ul>
              </div>
            </div>
          </div>
      </div>
    </nav>

    <div style="height: 92vh;" class="flex flex-col justify-center items-center gap-10">
      <h1 class="text-4xl font-bold">Professional Skills</h1>
      <img class="w-1/4" src="../img/professional-skills.svg" alt="">
    </div>
  </main>
  <footer>
    <?php include("../components/footer.php"); ?>
  </footer>
</body>
</html>