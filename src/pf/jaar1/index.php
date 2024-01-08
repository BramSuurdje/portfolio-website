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
                  <li class="flex items-center justify-center"><a class="text-lg font-bold" href="/pf/jaar1/">Jaar 1</a></li>
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
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 max-w-7xl mt-5">
      <?php
        $documenten = [
            "Edumundo Opdrachten" => [
              "imageFile" => "./documents/Edermundo.voorkant.png",
              "link" => "document.php?file=Portfolio-2022-2023.pdf"
            ],
            "Plan Van Aanpak" => [
              "imageFile" => "./documents/PVA.voorkant.png",
              "link" => "document.php?file=Plan-van-aanpak-Circle SolutionsV1.2.pdf"
            ],
            "Notulen" => [
              "imageFile" => "./documents/Notulen.voorkant.png",
              "link" => "document.php?file=notulen-11-12-2023.pdf"
            ],
            "Agenda" => [
              "imageFile" => "./documents/Agenda.voorkant.png",
              "link" => "document.php?file=Agenda-19-10-2023.pdf"
            ],
            "Communiceren" => [
              "imageFile" => "https://placehold.co/240x340",
              "link" => "#"
            ],
            "Vergadertechnieken" => [
              "imageFile" => "https://placehold.co/240x340",
              "link" => "#"
            ],
            "Presenteren" => [
              "imageFile" => "https://placehold.co/240x340",
              "link" => "#"
            ],
            "Feedback geven en krijgen" => [
              "imageFile" => "https://placehold.co/240x340",
              "link" => "#"
            ],
            "Reflecteren" => [
              "imageFile" => "https://placehold.co/240x340",
              "link" => "#"
            ]
        ];

        foreach ($documenten as $document => $files) {
            echo "<div class='flex flex-col justify-center items-center'>";
            echo "<a href='" . $files['link'] . "'><img class=' w-[240px] h-[340px]' src='" . $files['imageFile'] . "' alt='" . $document . "' loading='lazy'></a>";
            echo "<a class=' text-lg font-bold' href='" . $files['link'] . "'>" . $document . "</a>";
            echo "</div>";
        }
      ?>
      </div>
    </div>
  </main>

</body>
</html>