<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bram's Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
</head>
<body>

    <?php include("header.php"); ?>

    <section id="home" class="hero">
        <div class="container hero-background">
            <div class="hero-content">
                <div class="hero-main">
                    <div class="hero-text">
                        <h1>Hi, I'm <b>Bram Suurd</b></h1>
                        
                        <p>Currently studying <i>Information Technology</i> at <a target="_blank" href="https://www.nhlstenden.com/en/courses/information-technology"><b>NHL Stenden <i class='bx bx-link-external' ></i></b></a></p>
                        
                        <span><a target="_blank" href="https://github.com/BramSuurdje"><i class='bx bxl-github'></i></a> <a target="_blank" href="https://www.linkedin.com/in/bramsuurd/"><i class='bx bxl-linkedin-square' ></i></a></span>
                    </div>
                    <div class="hero-img">
                        <img src="img/undraw_programming_re_kg9v.svg" alt="guy programming">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
        <div class="about-content">
            <div class="about-img">
                <img src="img/undraw_code_inspection_bdl7.svg" alt="About me">
            </div>
            <div class="about-text">
                <h3>About me</h3>  
                <h4>A Information Technology Student 
                <br>
                based in <a target="_blank" href="https://maps.app.goo.gl/o6vtFYk4X2Q7PLrD9">Emmen,The Netherlands <i class='bx bx-link-external' ></i></a></h4>
                <p>I live in the Netherlands, and I'm currently a student at <a href="https://nhlstenden.com/en" target="_blank">NHL Stenden <i class='bx bx-link-external' ></i></a> in Emmen, where I'm studying Information Technology. What drew me to programming is the incredible potential it holds for creating and innovating. The world of coding offers boundless opportunities to bring new ideas to life</p>
                <br>
                <p>Before coming to NHL Stenden, I was a student at <a href="https://www.drenthecollege.nl/english " target="_blank">Drenthe College <i class='bx bx-link-external' ></i></a> in Emmen, where I studied "Expert IT System and Devices." This earlier experience provided me with a good foundation in technology. Now, at NHL Stenden, I'm excited to learn more and explore the world of Information Technology in greater depth.</p>
            </div>
        </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <div class="projects-content">
                <p>portfolio</p>
                <h3>Here are all the projects that i've done</h3>
                <div class="projects-grid">
                    <div class="grid-item">
                    <div class="placeholder-image">
                        <img src="/img/Cirle-Solutions.png" loading="lazy" alt="">
                        </div>
                            <div class="project-text">
                                <a href="">Project Cirle-Solutions</a>
                            </div>
                            <div class="project-buttons">
                                <a class="button" href="#">More Details</a>
                                <a class="button" href="#">Live Demo</a>
                            </div>
                    </div>
                    <div class="grid-item">
                        <div class="placeholder-image">
                        <!-- <img src="" loading="lazy" alt=""> -->
                        </div>
                            <div class="project-text">
                                <a href="">Project</a>
                            </div>
                            <div class="project-buttons">
                                <a class="button" href="#">More Details</a>
                                <a class="button" href="#">Live Demo</a>
                            </div>
                    </div>
                    <div class="grid-item">
                        <div class="placeholder-image">
                        <!-- <img src="" loading="lazy" alt=""> -->
                        </div>
                            <div class="project-text">
                                <a href="">Project</a>
                            </div>
                            <div class="project-buttons">
                                <a class="button" href="#">More Details</a>
                                <a class="button" href="#">Live Demo</a>
                            </div>
                    </div>
                    <div class="grid-item">
                        <div class="placeholder-image">
                        <!-- <img src="" loading="lazy" alt=""> -->
                        </div>
                            <div class="project-text">
                                <a href="">Project</a>
                            </div>
                            <div class="project-buttons">
                                <a class="button" href="#">More Details</a>
                                <a class="button" href="#">Live Demo</a>
                            </div>
                    </div>
                    <div class="grid-item">
                        <div class="placeholder-image">
                        <img src="img/DVD-Video_Logo.svg.png" loading="lazy" alt="">
                        </div>
                            <div class="project-text">
                                <a href="">Videotheek</a>
                            </div>
                            <div class="project-buttons">
                                <a class="button" href="project5/videotheek.php">More Details</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="opdracht" class="opdracht">
        <div class="opdracht-container">
            <div class="opdracht-content">
                <div class="opdracht-text">
                <?php 
                    function vergelijkMet100($getal) {
                        if ($getal === null) {
                            echo "Geen getal opgegeven.";
                        }
                        elseif ($getal > 100) {
                            echo "$getal is hoger dan 100.";
                        }
                        elseif ($getal < 100) {
                            echo "$getal is later dan 100.";
                        }
                        else {
                            echo "$getal is gelijk aan 100.";
                        }
                    }

                    $getal = 128;
                    $resultaat = vergelijkMet100($getal);
                    echo "<p>$resultaat </p>";
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php") ?>

</body>
</html>