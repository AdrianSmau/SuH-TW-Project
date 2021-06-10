<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Superheroes Web Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
</head>

<body>
    <div class="pre-loader">
        <img src="/public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
    </div>
    <button onclick="topFunction()" id="back-to-top">
        Top
    </button>
    <header class="header-bar" id="myHead">
        <div class="navbar-wrapper">
            <div class="logo-section">
                <a href="#0">
                    <img src="/public/images/Logo/A7D03C98-7C3A-4A9A-9B5E-676E369D025A-900x346.jpeg" alt="Our Logo!">
                </a>
            </div>
            <div>
                <a class="icon" onclick="minimizeFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
        <nav class="header-nav" id="myTopnav">

            <ul>
                <li>
                    <a href="#Home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#Game">
                        Game
                    </a>
                </li>
                <li>
                    <a href="#About">
                        About
                    </a>
                </li>
                <li>
                    <a href="#Contact">
                        Contact
                    </a>
                </li>
            </ul>

        </nav>
        <div class="user-section">
            <a class="login-button" href="/public/login">Login</a>
            <a class="register-button" href="/public/register">Register</a>
        </div>
    </header>

    <section id="Home">
        <h1 style="font-size: 35px;">Welcome to Superheroes Web Game!</h1>
        <div class="slideshow-container">
            <div class="slideshow-inner">
                <div class="slides-fade">
                    <img src="/public/images/HomeSlider/224562_1920x1080.jpg" style="width: 960px;" alt="dog" />
                    <p class="image-description"> Learn while having fun! </p>
                </div>

                <div class="slides-fade">
                    <img src="/public/images/HomeSlider/229965.jpg" style="max-width: 960px;" alt="cat" />
                    <p class="image-description"> Expand your knowledge! </p>
                </div>

                <div class="slides-fade">
                    <img src="/public/images/HomeSlider/328886.jpg" style="max-width: 960px;" alt="horse" />
                    <p class="image-description"> Compete with other players! </p>
                </div>

                <div class="slides-fade">
                    <img src="/public/images/HomeSlider/705020.jpg" style="max-width: 960px;" alt="turtle" />
                    <p class="image-description"> Wait no more! Log in and play! </p>
                </div>
            </div>
            <a class="previous" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <br />
            <div style="text-align: center;">
                <span class="dot" onclick='currentSlide(1)'></span>
                <span class="dot" onclick='currentSlide(2)'></span>
                <span class="dot" onclick='currentSlide(3)'></span>
                <span class="dot" onclick='currentSlide(4)'></span>
            </div>
        </div>
    </section>
    <section id="Game" class="game">
        <h1>Game</h1>
        <h2>Presentation video</h2>
        <p><iframe width="747" height="420" src="https://www.youtube.com/embed/nhp3OPuqszs" title="SuperHeroesWebGame Presentation Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
        <p>THE OFFICIAL SUPERHEROES-WEB-GAME™ DOCUMENTATION CAN BE FOUND <a href="/public/doc" target="_blank" style="color: #ED1D24"> HERE</a>!</p>
        <p>THE OFFICIAL SUPERHEROES-WEB-GAME™ USER GUIDE CAN BE FOUND <a href="/public/guide" target="_blank" style="color: #ED1D24"> HERE</a>!</p>
        <p>THE OFFICIAL SUPERHEROES-WEB-GAME™ GITHUB PAGE CAN BE FOUND <a href="https://github.com/AdrianSmau/SuH-TW-Project" target="_blank" style="color: #ED1D24"> HERE</a>!</p>
    </section>
    <section id="About" class="about">
        <h1>About</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/GQGY_7h0o1s" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p>THE MARVEL UNIVERSE IS A FICTIONAL UNIVERSE WHERE THE STORIES IN MOST AMERICAN COMIC BOOK TITLES AND OTHER MEDIA PUBLISHED BY MARVEL COMICS TAKE PLACE. SUPER-TEAMS SUCH AS THE AVENGERS, THE X-MEN, THE FANTASTIC FOUR, THE GUARDIANS OF THE GALAXY,
            THE DEFENDERS, THE MIDNIGHT SONS, AND MANY MARVEL SUPERHEROES AND WELL-KNOWN VILLAINS LIVE IN THIS UNIVERSE.
        </p>

        <p>THE MARVEL UNIVERSE IS FURTHER DEPICTED AS EXISTING WITHIN A "MULTIVERSE" CONSISTING OF THOUSANDS OF SEPARATE UNIVERSES, ALL OF WHICH ARE THE CREATIONS OF MARVEL COMICS AND ALL OF WHICH ARE, IN A SENSE, "MARVEL UNIVERSES". IN THIS CONTEXT, "MARVEL
            UNIVERSE" IS TAKEN TO REFER TO THE MAINSTREAM MARVEL CONTINUITY, WHICH IS CURRENTLY KNOWN AS PRIME EARTH.
        </p>
        <p>THE DC UNIVERSE (DCU) IS THE FICTIONAL SHARED UNIVERSE WHERE MOST STORIES IN AMERICAN COMIC BOOK TITLES PUBLISHED BY DC COMICS TAKE PLACE. DC SUPERHEROES AND ALSO SOME OF THE MARVEL SUPERHEROES ARE FROM THIS UNIVERSE, AND IT ALSO CONTAINS WELL-KNOWN
            SUPERVILLAINS FROM BOTH UNIVERSES. IN CONTEXT, THE TERM "DC UNIVERSE" USUALLY REFERS TO THE MAIN DC CONTINUITY.
        </p>

        <p>THE TERM "DC MULTIVERSE" REFERS TO THE COLLECTION OF ALL CONTINUITIES WITHIN DC COMICS PUBLICATIONS. WITHIN THE MULTIVERSE, THE MAIN DC UNIVERSE HAS GONE BY MANY NAMES, BUT IN RECENT YEARS HAS BEEN REFERRED TO BY "PRIME EARTH" (NOT TO BE CONFUSED
            WITH "EARTH PRIME").</p>

        <p>THE MAIN DC UNIVERSE, AS WELL AS THE ALTERNATE REALITIES RELATED TO IT, BEGAN AS THE FIRST SHARED UNIVERSE IN COMIC BOOKS AND WERE QUICKLY ADAPTED TO OTHER MEDIA SUCH AS FILM SERIALS OR RADIO DRAMAS. IN SUBSEQUENT DECADES, THE CONTINUITY BETWEEN
            ALL OF THESE MEDIA BECAME INCREASINGLY COMPLEX WITH CERTAIN STORYLINES AND EVENTS DESIGNED TO SIMPLIFY OR STREAMLINE THE MORE CONFUSING ASPECTS OF CHARACTERS' HISTORIES.</p>

        <p>THIS WEBSITE CONTAINS SPECIFIC INFORMATION DESCRIBING THE SUPERHEROES AND THE SUPERVILLAINS FROM EACH UNIVERSE , AFTER CRITERIAS SUCH AS : NAME , HAIR COLOR , SEX , DATE OF THE FIRST APPEARANCE , NUMBER OF THE APPEARANCES ETC. </p>
        <p>THIS INFORMATION IS ACCESIBILE IN EVERY LANGUAGE ,DEVELOPING THE INTERNATIONALIZATION OF A WEBSITE. THE GAME CAN BE PLAYED IN THE LANGUAGE OF YOUR PREFFERENCE , AS YOU CAN SET IT FROM THE 'SELECT LANGUAGE' BUTTON.
        </p>
    </section>
    <section id="Contact">
        <h1>Contact</h1>
        <h2>Meet your heroes:</h2>
        <ul class="contact">
            <li> <img src="/public/images/Contact/Mosor.jpg" alt="Mosor">
                <address class="infos">
                    <strong>Phone</strong> : 0729145790<br>
                    <strong>Mail</strong> : mosorandrei49@gmail.com<br>
                    <strong>Facebook</strong> : <a href="https://www.facebook.com/andrei.mosor.3"
                        target="_blank">andrei.mosor.3</a><br>
                    <strong>Linkedin</strong> : <a href="https://www.linkedin.com/in/andrei-mosor-27961b202/"
                        target="_blank">Andrei Mosor</a>
                </address>
            </li>
            <li> <img src="/public/images/Contact/Smau.jpg" alt="Smau">
                <address class="infos">
                    <strong>Phone</strong> : 0747907142<br>
                    <strong>Mail</strong> : smauadrian@gmail.com<br>
                    <strong>Facebook</strong> : <a href="https://www.facebook.com/adrian.smau.5"
                        target="_blank">adrian.smau.5</a><br>
                    <strong>Linkedin</strong> : <a href="https://www.linkedin.com/in/smauadrianconstantin/"
                        target="_blank">Adrian Smau</a>
                </address>
            </li>
            <li> <img src="/public/images/Contact/Gramescu.jpg" alt="Gramescu">
                <address class="infos">
                    <strong>Phone</strong> : 0737226480<br>
                    <strong>Mail</strong> : gramescu30@gmail.com<br>
                    <strong>Facebook</strong> : <a href="https://www.facebook.com/gramescu.george.7"
                        target="_blank">gramescu.george.7</a><br>
                    <strong>Linkedin</strong> : <a href="https://www.linkedin.com/in/rares-gramescu-208243207/"
                        target="_blank">Rares Gramescu</a>
                </address>
            </li>
        </ul>
    </section>
    <footer id="footer">
        <p>© Copyright 2021 DC VS MARVEL </p>
    </footer>
    <!--Script for 'back to top' button functionality-->
    <script src="/public/scripts/topButton.js"></script>
    <!--Script for 'minimize header' button functionality-->
    <script src="/public/scripts/minimizeButton.js"></script>
    <!--Script for home slideshow functionality-->
    <script src="/public/scripts/slideshowHome.js"></script>
    <!--Script for page preloader functionality-->
    <script src="/public/scripts/preLoader.js"></script>
</body>

</html>