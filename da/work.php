<!--Redirect to construction alert
<meta http-equiv="Refresh" content="0; url='under_construction.php'" />-->

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
        <title>Arbejde</title>

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
        </header>
        <div class="myWork">
            <h1>
                Arbejde
            </h1>
            <p id="motiware">
                Motiware GUI
                <a onclick="motiwareOpenDAFunction()">
                    Læs mere
                </a>
                <!--
                    A description of the application so that people understand why it's build

                    Download function found at https://www.w3schools.com/howto/howto_html_download_link.asp
                    <a href="/images/myw3schoolsimage.jpg" download>
                        <img src="/images/myw3schoolsimage.jpg" alt="W3Schools">
                    </a>
                -->
            </p>
            <p id="IOTLamp">
                IoT Lamp
                <a onclick="IOTLampOpenDAFunction()">
                    Læs mere
                </a>
            </p>
            <p id="UniInstaller">
                UniInstaller
                <!--
                    The UniInstaller app is simply an installer, that can be customized to install different kind of software. 
                    I wanted to make this UniInstaller because i'm making different kinds of software and an easy installer is a priority.
                -->
                <a onclick="uniinstallerOpenDAFunction()">
                    Læs mere
                </a>
            </p>
            <p id="Yfinance">
                Yfinance-StockBot
                <!--
                    The UniInstaller app is simply an installer, that can be customized to install different kind of software. 
                    I wanted to make this UniInstaller because i'm making different kinds of software and an easy installer is a priority.
                -->
                <a onclick="YfinanceOpenDAFunction()">
                    Læs mere
                </a>
            </p>
            <p id="CryptoUpdater">
                CryptoUpdater 
                <a onclick="CryptoUpdaterOpenDAFunction()">
                    Læs mere
                </a>
            </p>

            
        </div>

        <script src="../js/work.js"></script>

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
                        Mine kontakt informationer:
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