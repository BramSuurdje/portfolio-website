<nav>
    <div class="header-wrapper">
        <div class="header-container glass" >
            <div class="header-logo">
                <a href="/#home">bram</a>
            </div>
            <div class="nav-menu">
                <ul class="menu-list">
                    <!-- <li class="nav-item"><a href="/#home">Home</a></li> -->
                    <li class="nav-item"><a href="/#about">About</a></li>
                    <li class="nav-item"><a href="/#projects">Projects</a></li>
                    <!-- <li class="nav-item"><a href="/opdrachten">Opdrachten</a></li> -->
                    <!-- <li class="nav-item"><a href="/opdracht.php">PHP</a></li> -->
                    <div class="header-contact">
                        <a href="/#contact">Lets talk!</a>
                    </div>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <ul class="mobile-menu-list">
            <!-- <li class="nav-item"><a href="/#home">Home</a></li> -->
            <li class="nav-item"><a href="/#about">About</a></li>
            <li class="nav-item"><a href="/#projects">Projects</a></li>
            <!-- <li class="nav-item"><a href="/opdrachten">Opdrachten</a></li> -->
            <!-- <li class="nav-item"><a href="/opdracht.php">PHP</a></li> -->
            <li class="nav-item">
                <a href="/#contact">Lets talk!</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.querySelector('.hamburger');
        const mobileMenu = document.querySelector('.mobile-menu');

        // Toggle the mobile menu when the hamburger is clicked
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('show-menu');
        });

        // Close the mobile menu when a link inside it is clicked
        const mobileLinks = document.querySelectorAll('.mobile-menu-list .nav-item a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('show-menu');
                hamburger.classList.remove('active');
            });
        });
    });
</script>
