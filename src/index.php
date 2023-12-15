<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("metadata.php") ?>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <section id="home" class="hero hero-background">
    <?php include("components/header.php"); ?>
        <div class="container">
            <div class="hero-content">
                <div class="hero-main">
                    <div class="hero-text">
                        <h1>Hi, I'm <b>Bram Suurd</b></h1>
                        <p>Currently studying <i>Information Technology</i> at <a target="_blank" href="https://www.nhlstenden.com/en/courses/information-technology"><b>NHL Stenden <i class='bx bx-link-external'></i></b></a></p>
                        <span>
                            <a target="_blank" href="https://github.com/BramSuurdje"><i class='bx bxl-github'></i></a> 
                            <a target="_blank" href="https://www.linkedin.com/in/bramsuurd/"><i class='bx bxl-linkedin-square'></i></a>
                            <a target="_blank" href="https://wa.me/+310621621560"><i class='bx bxl-whatsapp'></i></a>
                        </span>
                    </div>
                    <div class="hero-img">
                        <img class="hero-img-img" src="/img/undraw_programming_re_kg9v.svg" alt="guy programming">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container ">
            <div class="about-content">
                <div class="about-img">
                    <img src="/img/undraw_code_inspection_bdl7.svg" alt="About me">
                </div>
                <div class="about-text">
                    <h3>About me</h3>
                    <h4>An Information Technology Student
                        <br>
                        based in <a target="_blank" href="https://maps.app.goo.gl/o6vtFYk4X2Q7PLrD9">Emmen,The Netherlands <i class='bx bx-link-external'></i></a>
                    </h4>
                    <p>I live in the Netherlands, and I'm currently a student at <a href="https://nhlstenden.com/en" target="_blank">NHL Stenden <i class='bx bx-link-external'></i></a> in Emmen, where I'm studying Information Technology. What drew me to programming is the incredible potential it holds for creating and innovating. The world of coding offers boundless opportunities to bring new ideas to life.
                    <span><br><br>Before coming to NHL Stenden, I was a student at <a href="https://www.drenthecollege.nl/english " target="_blank">Drenthe College <i class='bx bx-link-external'></i></a> in Emmen, where I studied "Expert IT System and Devices." This earlier experience provided me with a good foundation in technology. Now, at NHL Stenden, I'm excited to learn more and explore the world of Information Technology in greater depth.</span></p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class=" container">
        <div class="projects-title">
            <h3>Projects</h3>
        </div>
        <div class="project-content">
            <div class="project-item">
                <div class="project-img">
                    <a href="https://circlesolutions.bramsuurd.nl" target="_blank"><img src="/img/pika-1699989569943-1x.png" alt=""></a>
                </div>
                <div class="project-info">
                    <h3>CircleSolutions</h3>
                    <h4>NHL Stenden periode 1 project</h4>
                    <p>In this project, we had to create a website for a company called "CircleSolutions." This company creates intranets and needed a new website to attract new customers.</p>
                    <div class="project-buttons">
                        <a href="https://circlesolutions.bramsuurd.nl" target="_blank">Check out website <i class='bx bx-link-external'></i></a>
                        <a href="https://github.com/NHL-P1-INF1A/Project-CircleSolutions" target="_blank">View Code <i class='bx bx-link-external'></i></a>
                    </div>
                    <h5>Used languages</h5>
                    <div class="project-languages">
                        <i class='bx bxl-html5' ></i>
                        <i class='bx bxl-css3' ></i>
                        <i class='bx bxl-php' ></i>
                        <i class='bx bxl-javascript' ></i>
                </div>
            </div>
        </div>
        <!-- <div class="project-right project-item">
            <div class="project-img">
                <a href="https://circlesolutions.bramsuurd.nl" target="_blank"><img src="/img/pika-1699989569943-1x.png" alt=""></a>
            </div>
            <div class="project-info project-info-right">
                <h3>CircleSolutions</h3>
                <h4>NHL Stenden periode 1 project</h4>
                <p>In dit project moesten we een website maken voor het bedrijf genaamt "CircleSolutions" dit bedrijf maakt intranetten en had een nieuwe website nodig om nieuwe klanten aan te trekken</p>
                <div class="project-buttons">
                    <a href="https://circlesolutions.bramsuurd.nl" target="_blank">Bekijk project <i class='bx bx-link-external'></i></a>
                    <a href="https://github.com/NHL-P1-INF1A/Project-CircleSolutions" target="_blank">Bekijk Code <i class='bx bx-link-external'></i></a>
                </div>
                <h5>Gebruikte talen</h5>
                <div class="project-languages">
                    <i class='bx bxl-html5' ></i>
                    <i class='bx bxl-css3' ></i>
                    <i class='bx bxl-php' ></i>
                    <i class='bx bxl-javascript' ></i>
            </div>
        </div> -->
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form">
                    <div class="contact-text">
                        <p>contact</p>
                    </div>
                    <form action="/contact/index.php" method="post" class="contact-form">
                        <div class="contact-items">
                            <div class="contact-items-1">
                                <div class="text-input">
                                    <input type="text" name="name" placeholder="Enter your name:" required>
                                </div>

                                <div class="text-input">
                                    <input type="email" name="email" placeholder="Enter your email:" required>
                                </div>
                            </div>
                            <div class="contact-items-1">
                                <div class="text-input">
                                    <input type="text" name="subject" placeholder="Enter your subject:" required>
                                </div>

                                <div class="contact-select">
                                    <select name="reason" required>
                                        <option disabled selected value="">Reason for contact:</option>
                                        <option value="question">Question</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="contact-message">
                                <textarea name="message" placeholder="Write your message:" required></textarea>
                            </div>
                        </div>
                        <div class="contact-newsletter">
                            <label for="contact-newsletter">Subscribe to Newsletter:</label>
                            <input type="radio" name="newsletter" value="Yes" checked> Yes
                            <input type="radio" name="newsletter" value="No"> No
                        </div>
                        <div class="contact-buttons">
                            <input class="contact-button" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- 
    <section id="opdracht" class="opdracht" >
        <div class="opdracht-container">
            <div class="opdracht-content">
                <div class="opdracht-text">
                    <?php
                    function vergelijkMet100($getal)
                    {
                        if ($getal === null) 
                        {
                            echo "Geen getal opgegeven.";
                        } elseif ($getal > 100) 
                        {
                            echo "$getal is hoger dan 100.";
                        } elseif ($getal < 100) 
                        {
                            echo "$getal is later dan 100.";
                        } else 
                        {
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
    </section> -->

    <?php include("components/footer.php"); ?>
</body>
</html>
