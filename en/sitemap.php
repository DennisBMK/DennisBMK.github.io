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
        <title>Sitemap</title>

        <meta charset="UTF-8"/>
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
    <header class="header">
            <a href="home.php">
                <img class="title-img" src="../img/title.png" alt="Title" height="46">
            </a>
            <button class="ham"></button>
            <nav class="navbar">
                <ul class="TopList" id="TopList">
                    <li class="active">
                        <a class="menuLink" href="home.php">
                            Front page
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="about.php">
                            About me
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="work.php">
                            My work
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="resume.php">
                            Resume
                        </a>
                    </li>
                    <li>
                        <a class="menuLink" href="service.php">
                            Services
                        </a>
                    </li>
                    <select id="langSelect" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" data-placeholder="Choose a Language...">
                        <option value="../en/home.php">English</option>
                        <option value="../da/home.php">Danish</option>
                    </select>
                </ul>
            </nav>
            <script src="../js/responsive_menu.js"></script>
        </header>
        <div id="sitemap"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.js"></script>
        <script src="../js/sitemap.js"></script>
        <footer>
            <div class="float-container">
                <div class="social">
                    <p>
                        Links to me and my work:
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
                        My contact information:
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
                        About me:
                    </p>
                    <p>
                        I'm a young man studying maritime and polytechnic engineering and playing around with electronics and mechanics. My passion for theese subjects started at home on the farm when i helped my dad repair machines and improve them.
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