<!--
All of the HTML shown beneath is produced by Dennis B. M. Kristensen and is copyrighted as follows:

-->
<html>
    <head>
        <link rel="icon" href="../img/icon.ico" type="image">

        <!--Style for the page-->
        <link rel="stylesheet" href="../css/style.css">

        <!--Google font style-->
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap"
            rel="stylesheet"
        />

        <!--title for the tab-->
        <title>Forside</title>
        
        <meta charset="UTF-8"/>
        <meta name="robots" content="index, follow">
        <meta name="description" content="Frontend development skills: HTML, CSS, JavaScript and JQuery"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!--Javascript for functionality-->
        <script src="../js/main.js"></script>

        <!--JQuery for smooth experience-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--Cookie consent style from Osano-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/3ef472d498.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <a href="home.php">
                <img class="title-img" src="../img/title.png" alt="Title" height="46">
            </a>
            <button class="ham"></button>
            <nav class="navbar">
                <ul class="TopList" id="TopList">
                    <li class="active">
                        <a class="menuLink" href="home.php">
                            Forside
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="about.php">
                            Om mig
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="work.php">
                            Mit arbejde
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="resume.php">
                            CV
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="service.php">
                            Ydelser
                        </a>
                    </li>
                    <select id="langSelect" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" data-placeholder="Choose a Language...">
                        <option value="../da/home.php">Dansk</option>
                        <option value="../en/home.php">Engelsk</option>
                    </select>
                </ul>

                
            </nav>
            <script src="../js/responsive_menu.js"></script>
            <script src="../js/language.js"></script>
        </header>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../img/img1.png" style="width:100%">
                <div class="captiontext">CryptoPlotter software</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../img/img2.png" style="width:100%">
                <div class="captiontext">Billede fra Motiware development</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../img/img3.png" style="width:100%">
                <div class="captiontext">Stockbot software</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <!--Script for functionality of imageslider-->
        <script src="../js/img_slider.js"></script>

        <!--Script to make fade in-->
        <script src="../js/fade.js"></script>
        <div id="top" class="top">
            <p>
                In January 2021 i discovered the value of Bitcoin was very volatile which i thought could be fun to monitize in my own software. 
                I began finding a library for Python to get cryptocurrency prices, wich i pretty quickly found. 
                <a href="work.php">Læs mere</a>
            </p>
        </div>
        <div id="work" class="work">
            <img src="../img/Motiware.png" alt="Some work" width="373" height="246">
            <p>
                A tool i found fun to make was a task timer that could help you concentrate if you need to make some tasks but easily gets distracted. I began developing such a tool with my knowledge in C# and Windows Forms applications, which turns out to have some difficulties although it's not complicated software. <a href="work.php">Læs mere</a>
            </p>
        </div>
        <!--<div id="work" class="work">
            <img src="../img/icon.ico" alt="Some work" width="128" height="128">
            <p>
                Here's a picture of my x work and a description.
            </p>
        </div>-->
        <!--GSAP 3 script for scroll fun-->
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" 
            integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" 
            crossorigin="anonymous"
        ></script>
        <div class="intro">
            <div class="intro-text">
                <h1 class="hide">
                    <span class="text">Let's go invent tomorrow</span>
                </h1>
                <h1 class="hide">
                    <span class="text">rather than worrying about</span>
                </h1>
                <h1 class="hide">
                    <span class="text">what happened yesterday.</span>
                </h1>
            </div>
        </div>
        <div class="slider"></div>

        <!--Custom JS for load-->
        <script
            src="../js/load.js"
        ></script>
        <footer>
            <div class="float-container">
                <div class="social">
                    <p>
                        Links til mig og mit arbejde:
                    </p>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/dennis.kristensen.353">
                                <i class="fab fa-facebook-square"></i>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/dennis-kristensen-206603158/">
                                <i class="fab fa-linkedin"></i>
                                LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/DennisBMK">
                                <i class="fab fa-github-square"></i>
                                Github
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact">
                    <p>
                        Mine Kontakt informationer:
                    </p>
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                            +45 28859199
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:bang353@gmail.com">
                                bang353@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="aboutme">
                    <p>
                        Om mig:
                    </p>
                    <p>
                        Jeg er en ung mand der studerer Maskinmester, som har en passion for elektronik og mekanik. Min interesse for disse emner startede hjemme på gården da jeg hjalp min far med at reparere forskellige maskiner.
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="sitemap.php" class="sitemap"><i class="fas fa-map"></i> Sitemap</a>
				<p>&copy; <?php $date = date("Y"); echo "$date";?> Mosekjaer. All Rights Reserved. <span>Designed by <a href="http://dennismosekjaer.com" target="_blank">Dennis B. M. Kristensen</a></span></p>
			</div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
        <script>
        window.cookieconsent.initialise({
            "palette": {
            "popup": {
                "background": "#000"
            },
            "button": {
            "background": "#f1d600"
            }
            }
        });
        </script>
    </body>
</html>