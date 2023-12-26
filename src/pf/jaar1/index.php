<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../../metadata.php") ?>
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
                  <!-- <li class="flex items-center justify-center"><a class="text-lg font-bold" href="../jaar2/">Jaar 2</a></li>
                  <li class="flex items-center justify-center"><a class="text-lg font-bold" href="../jaar3/">Jaar 3</a></li>
                  <li class="flex items-center justify-center"><a class="text-lg font-bold" href="../jaar4/">Jaar 4</a></li> -->
                </ul>
              </div>
            </div>
          </div>
      </div>
    </nav>

    <div class="flex flex-col justify-center items-center mt-24">
      <h1 class="text-4xl font-bold">Semester 1</h1>
      <div class="grid grid-cols-4 gap-5 max-w-7xl mt-5">
      <?php
        $documenten = [
            "Edumundo Opdrachten" => [
              "phpFile" => "eoj1s1.php",
              "imageFile" => "./documents/Edermundo.voorkant.png"
            ],
            "Plan Van Aanpak" => [
              "phpFile" => "./pvaj1s1.php",
              "imageFile" => "./documents/PVA.voorkant.png"
            ],
            "Notulen" => [
              "phpFile" => "./notulenj1s1.php",
              "imageFile" => "./documents/Notulen.voorkant.png"
            ],
            "Agenda" => [
              "phpFile" => "./agendaj1s1.php",
              "imageFile" => "./documents/Agenda.voorkant.png"
            ]
        ];

        foreach ($documenten as $document => $files) {
            echo "<div class='flex flex-col justify-center items-center'>";
            echo "<a href='" . $files['phpFile'] . "'><img src='" . $files['imageFile'] . "' alt='" . $document . "' loading='lazy'></a>";
            echo "<a class='text-2xl font-bold' href='" . $files['phpFile'] . "'>" . $document . "</a>";
            echo "</div>";
        }
      ?>
      </div>
    </div>
  </main>

</body>
</html>