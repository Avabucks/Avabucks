<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AvaBucks Society | Web & Mobile Development</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <meta name="author" content="Avabucks">
    <meta name="keywords" content="React, React Native, Expo, HTML, CSS, JavaScript">
    <meta name="description"
        content="We build fast, responsive web and mobile applications using modern technologies like React, React Native, Expo, HTML, CSS and JavaScript. We focus on clean code, elegant design and intuitive user experiences.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="favicon.png">

    <!-- Include FILES -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./responsive.css">
    <script src="./js/script.js"></script>

    <!-- ===== Boxicons ===== -->
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/animations.min.css' rel='stylesheet'>

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="bg-svg" style="height: 6200px">
        <div class="lines-container">
            <?php for ($i = 0; $i < 9; $i++) { ?>
                <div class="v-line"></div>
            <?php } ?>
        </div>
        <div class="top-center circle"></div>
        <div class="top-right circle"></div>
        <div class="top-left circle"></div>
        <div class="center circle"></div>
        <div class="left-center circle"></div>
        <div class="bottom circle"></div>
        <i class='bx bx-code-alt'></i>
        <i class='bx bx-bracket-curly'></i>
        <i class='bx bx-bracket'></i>
    </div>

    <div class="home">
        <div class="hero">
            <h1>Building Modern <div id="phrases" class="gradient-bg"></div> <span>for your business<span
                        class="gradient-text">.</span></span></h1>
            <h2>We build fast, responsive web and mobile applications using modern technologies like React, React
                Native, Expo, HTML, CSS and JavaScript. We focus on clean code, elegant design and intuitive user
                experiences.</h2>
            <a href="#tools"><i class="bx bxs-chevron-down bx-fade-down "></i></a>
        </div>
    </div>

    <div id="tools" class="section tools">
        <div><i class='bxl bx-c'></i><span>C</span></div>
        <div><i class='bxl bx-java'></i><span>Java</span></div>
        <div><i class='bxl bx-html5'></i><span>HTML</span></div>
        <div><i class='bxl bx-css3'></i><span>CSS</span></div>
        <div><i class='bxl bx-javascript'></i><span>JavaScript</span></div>
        <div><i class='bxl bx-typescript'></i><span>TypeScript</span></div>
        <div><i class='bxl bx-php'></i><span>PHP</span></div>
        <div><i class='bxl bx-react'></i><span>React</span></div>
        <div><i class='bxl bx-vite-js'></i><span>Vite</span></div>
        <div><i class='bxl bx-next-js'></i><span>Next</span></div>
        <div><i class='bxl bx-expo'></i><span>Expo</span></div>
        <div><i class='bxl bx-unity'></i><span>Unity</span></div>
        <div><i class='bxl bx-android'></i><span>Android</span></div>
        <div><i class='bxl bx-apple'></i><span>Apple</span></div>
    </div>

    <div id="portfolio" class="section portfolio">
        <div class="section-title">
            <span>Portfolio</span>
            <h3>Our Latest Works<span class="gradient-text">.</span>
                <div class="underline"></div>
            </h3>
        </div>
        <div class="portfolio-container">
            <!-- FOCUSSPOT -->
            <div>
                <div class="thumb">
                    <a href="https://focusspot.vercel.app/" target="_blank">
                        <div style="background-image: url('assets/406shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">App</span>
                        <h3>FocusSpot</h3>
                        <span class="desc">FocusSpot is the app that helps you discover the best shared study and work
                            spaces in your city.
                            Studying or working in a space that meets your needs can transform your productivity and
                            make your study or workdays more enjoyable.</span>
                        <div class="logos">
                            <i class='bxl bx-react'></i>
                            <i class='bxl bx-typescript'></i>
                            <i class='bxl bx-expo'></i>
                            <i class='bxl bx-android'></i>
                            <i class='bxl bx-apple'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="https://github.com/Avabucks/FocusSpot" target="_blank"><i
                                    class='bxl bx-github icon-butt search-icon'></i>Rate on GitHub</a></div>
                        <div class="ripple grey"><a href="https://focusspot.vercel.app/" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Check
                                out FocusSpot</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-crown"></i></div>
            <!-- PROVERBY -->
            <div>
                <div class="thumb">
                    <a href="https://proverby.it/" target="_blank">
                        <div style="background-image: url('assets/185shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Web App</span>
                        <h3>Proverby</h3>
                        <span class="desc">Proverby, built with Next.js and TypeScript, is a vibrant collection of
                            proverbs contributed by the community. Users can explore, like, and share their favorite
                            proverbs, creating an interactive and collaborative experience. With a modern and fast
                            interface, Proverby makes it easy to discover and spread popular wisdom with just a few
                            clicks.</span>
                        <div class="logos">
                            <i class='bxl bx-react'></i>
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-css3'></i>
                            <i class='bxl bx-typescript'></i>
                            <i class='bxl bx-next-js'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="https://github.com/Avabucks/Proverby" target="_blank"><i
                                    class='bxl bx-github icon-butt search-icon'></i>Rate on GitHub</a></div>
                        <div class="ripple grey"><a href="https://proverby.it/" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Check
                                out Proverby</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-crown"></i></div>
            <!-- BLAZEBEGIN -->
            <div>
                <div class="thumb">
                    <a href="https://blazebegin.avabucks.it/" target="_blank">
                        <div style="background-image: url('assets/595shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Web App</span>
                        <h3>BlazeBegin</h3>
                        <span class="desc">BlazeBegin was a web app where startups could promote their projects, with
                            all submissions personally reviewed by us to ensure quality and consistency. Built with
                            HTML, CSS, JavaScript, and PHP, it provided a simple, organized space for showcasing ideas
                            and keeping the listing curated.</span>
                        <div class="logos">
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-css3'></i>
                            <i class='bxl bx-javascript'></i>
                            <i class='bxl bx-php'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="https://github.com/Avabucks/BlazeBegin" target="_blank"><i
                                    class='bxl bx-github icon-butt search-icon'></i>Rate on GitHub</a></div>
                        <div class="ripple grey"><a href="https://blazebegin.avabucks.it/" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Check
                                out BlazeBegin</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-crown"></i></div>
            <!-- BOXCODING -->
            <div>
                <div class="thumb">
                    <a href="https://boxcoding.avabucks.it/" target="_blank">
                        <div style="background-image: url('assets/861shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Web App</span>
                        <h3>BoxCoding</h3>
                        <span class="desc">BoxCoding was a social platform for web developers to share and discover
                            HTML, CSS, and JavaScript components. Built with HTML, CSS, JavaScript and PHP, it featured
                            a community where users could upload their own elements, each submission personally checked
                            by us, so that others could freely use them in their projects.</span>
                        <div class="logos">
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-css3'></i>
                            <i class='bxl bx-javascript'></i>
                            <i class='bxl bx-php'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="https://github.com/Avabucks/BoxCoding" target="_blank"><i
                                    class='bxl bx-github icon-butt search-icon'></i>Rate on GitHub</a></div>
                        <div class="ripple grey"><a href="https://boxcoding.avabucks.it/" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Check
                                out BoxCoding</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-bolt"></i></div>
            <!-- PLATER -->
            <div>
                <div class="thumb">
                    <a href="http://plater.avabucks.it/" target="_blank">
                        <div style="background-image: url('assets/336shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Web App</span>
                        <h3>Plater</h3>
                        <span class="desc">Plater was a web platform, built with HTML, CSS, JavaScript, and PHP,
                            designed to let users create and manage their own websites, much like a lightweight CMS. It
                            offered an intuitive interface for building pages, organizing content, and customizing
                            layouts without needing advanced coding skills.</span>
                        <div class="logos">
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-css3'></i>
                            <i class='bxl bx-javascript'></i>
                            <i class='bxl bx-php'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="https://github.com/Avabucks/Plater" target="_blank"><i
                                    class='bxl bx-github icon-butt search-icon'></i>Rate on GitHub</a></div>
                        <div class="ripple grey"><a href="http://plater.avabucks.it/" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Check
                                out Plater</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-piggy-bank"></i></div>
            <!-- PONGBALL -->
            <div>
                <div class="thumb">
                    <a href="portfolio/PongBall" target="_blank">
                        <div style="background-image: url('assets/910shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Game</span>
                        <h3>PongBall</h3>
                        <span class="desc">PongBall is a game made in Construct 3 where the goal is to score points by
                            bouncing a ball on a platform and passing it through gates. It features smooth animations,
                            an in-game shop, and a fun, arcade-style challenge.</span>
                        <div class="logos">
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-android'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple grey"><a href="portfolio/PongBall" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Try
                                PongBall</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-paper-plane"></i></div>
            <!-- BROKENPIN -->
            <div>
                <div class="thumb">
                    <a href="portfolio/BrokenPin" target="_blank">
                        <div style="background-image: url('assets/885shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Game</span>
                        <h3>BrokenPin</h3>
                        <span class="desc">BrokenPin is a Construct 3 game where you aim and shoot a ball to knock down
                            pins, with the aiming direction constantly moving for an extra challenge. It also features
                            an in-game shop and smooth, engaging animations.</span>
                        <div class="logos">
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-android'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="portfolio/BrokenPin.apk" download><i
                                    class='bxl bx-android icon-butt search-icon'></i>Download APK</a></div>
                        <div class="ripple grey"><a href="portfolio/BrokenPin" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Try
                                BrokenPin</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-education"></i></div>
            <!-- BOUNCYRUN -->
            <div>
                <div class="thumb">
                    <a href="portfolio/BouncyRun" target="_blank">
                        <div style="background-image: url('assets/992shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Game</span>
                        <h3>BouncyRun</h3>
                        <span class="desc">BouncyRun is a Unity 2D game where you must collect all the stars in each
                            level to progress, featuring endless gameplay, fast-paced platforming action, and smooth,
                            eye-catching animations.</span>
                        <div class="logos">
                            <i class='bxl bx-unity'></i>
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-android'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="portfolio/BouncyRun.apk" download><i
                                    class='bxl bx-android icon-butt search-icon'></i>Download APK</a></div>
                        <div class="ripple grey"><a href="portfolio/BouncyRun" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Try
                                BouncyRun</a></div>
                    </div>
                </div>
            </div>
            <div class="divider"><i class="bx bx-bomb"></i></div>
            <!-- DUET -->
            <div>
                <div class="thumb">
                    <a href="portfolio/Duet" target="_blank">
                        <div style="background-image: url('assets/7shots_so.webp');"></div>
                    </a>
                </div>
                <div class="info">
                    <div>
                        <span class="tag">Game</span>
                        <h3>Duet</h3>
                        <span class="desc">Duet is a Unity 2D game recreation of the popular game of the same name. The
                            player controls two balls that rotate in sync around a central point, avoiding incoming
                            obstacles. The game features smooth animations, a minimalist design, and fluid controls to
                            closely match the original experience.</span>
                        <div class="logos">
                            <i class='bxl bx-unity'></i>
                            <i class='bxl bx-html5'></i>
                            <i class='bxl bx-android'></i>
                        </div>
                    </div>
                    <div class="cta-portfolio">
                        <div class="ripple outline"><a href="portfolio/Duet.apk" download><i
                                    class='bxl bx-android icon-butt search-icon'></i>Download APK</a></div>
                        <div class="ripple grey"><a href="portfolio/Duet" target="_blank"><i
                                    class='bx bx-arrow-out-up-right-stroke-square bx-tada icon-butt search-icon'></i>Try
                                Duet</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="section about">
        <div class="section-title">
            <span>About</span>
            <h3>Discover Us<span class="gradient-text">.</span>
                <div class="underline"></div>
            </h3>
        </div>
        <div class="text-cont">
            <h4>What We Do</h4>
            <p>
                We create digital experiences from websites to mobile apps and simple games specialized in building
                responsive, high-quality web and mobile applications using modern tools and frameworks like React, React
                Native, and Expo<span class="gradient-text">.</span><br><br>
                Our goal is to help individuals, startups, and businesses bring their ideas to life through clean code,
                user-friendly design, and efficient development. Whether you need a personal website, a custom app, or a
                small game project, I'm available and excited to collaborate<span class="gradient-text">.</span><br><br>
                We're always exploring new creative opportunities in this space because it's what we enjoy and where we
                see real potential<span class="gradient-text">.</span>
            </p>
        </div>
        <div class="img-cont">
            <img src="assets/about.svg">
        </div>
    </div>

    <div id="faqs" class="section faqs">
        <div class="section-title">
            <span>FAQs</span>
            <h3>Frequently Asked Questions<span class="gradient-text">.</span>
                <div id="faq-underline" class="underline"></div>
            </h3>
        </div>
        <div class="faqs-container">
            <!-- What services do you offer? -->
            <div>
                <div class="faq-question">
                    <span>What services do you offer?</span>
                    <i class='bx bx-plus'></i>
                </div>
                <div class="faq-answer">
                    We specialize in building responsive websites, mobile apps (iOS and Android), and small games using
                    modern technologies like React, React Native, and Expo. I can also help with UI/UX design,
                    prototyping, and deploying your project online.
                </div>
            </div>
            <!-- How long does a typical project take? -->
            <div>
                <div class="faq-question">
                    <span>How long does a typical project take?</span>
                    <i class='bx bx-plus'></i>
                </div>
                <div class="faq-answer">
                    It depends on the scope. A simple website might take 1-2 weeks, while a mobile app or more complex
                    project could take several weeks to a few months. We'll always provide a timeline after discussing
                    your requirements.
                </div>
            </div>
            <!-- What programming languages and technologies do you know? -->
            <div>
                <div class="faq-question">
                    <span>What programming languages and technologies do you know?</span>
                    <i class='bx bx-plus'></i>
                </div>
                <div class="faq-answer">
                    We're skilled in HTML, CSS, JavaScript, PHP, C, C++, Python, React, and React Native. This allows me
                    to build websites, web applications, mobile apps, and more complex software.
                </div>
            </div>
            <!-- Do you only develop websites, or also mobile apps? -->
            <div>
                <div class="faq-question">
                    <span>Do you only develop websites, or also mobile apps?</span>
                    <i class='bx bx-plus'></i>
                </div>
                <div class="faq-answer">
                    We develop both responsive websites and cross-platform mobile applications using React Native.
                </div>
            </div>
            <!-- Do you provide maintenance and updates? -->
            <div>
                <div class="faq-question">
                    <span>Do you provide maintenance and updates?</span>
                    <i class='bx bx-plus'></i>
                </div>
                <div class="faq-answer">
                    Yes, We offer ongoing maintenance, updates, and improvements to keep your project running smoothly
                    and up to date.
                </div>
            </div>
        </div>
    </div>

    <div id="faqs" class="section cta">
        <div class="gradient">
            <h4>Didn't find an answer?</h4>
            <span>Our team is here to help you — just reach out!</span>
            <div class="ripple gradient"><a href="https://www.linkedin.com/in/alessandro-de-stefano-02361036a"
                    target="_blank"><i class='bx bx-finger-up bx-tada icon-butt search-icon'></i>Get in Touch</a></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        var phrases_desktop = ["Web Apps", "Android & IOS Apps", "Responsive Portfolios", "Gamified Solutions", "Digital Products", "React Projects", "Progressive Web Apps"];
        var phrases_mobile = ["Web Apps", "Android Apps", "IOS Apps", "Portfolios", "Games", "Digital Products", "React Projects", "PWA"];
        var char_count = 0, phrase_count = 0;
        var interval, phrases;

        window.addEventListener("load", function () {
            phrases = window.innerWidth < 830 ? phrases_mobile : phrases_desktop;
            interval = setInterval(writeNextChar, 100);
        });

        function writeNextChar() {
            document.getElementById("phrases").classList.remove("fade-out");
            if (char_count < phrases[phrase_count].length) {
                document.getElementById("phrases").style.width = "auto";
                document.getElementById("phrases").textContent += phrases[phrase_count][char_count];
                document.getElementById("phrases").style.width = document.getElementById("phrases").offsetWidth + "px";
                if (phrases[phrase_count][char_count + 1] != " ") {
                    char_count++
                } else {
                    document.getElementById("phrases").textContent += " ";
                    char_count = char_count + 2;
                }
            } else {
                clearInterval(interval);
                setTimeout(() => {
                    document.getElementById("phrases").classList.add("fade-out");
                    setTimeout(() => {
                        interval = setInterval(writeNextChar, 100);
                        char_count = 1;
                        phrase_count < phrases.length - 1 ? phrase_count++ : phrase_count = 0;
                        document.getElementById("phrases").textContent = phrases[phrase_count][0];
                    }, 500);
                }, 3000);

            }
        }

        document.querySelectorAll('.faqs-container > div').forEach(el => {
            el.addEventListener('click', function () {
                document.querySelectorAll('.faqs-container > div').forEach(el => {
                    if (el != this) {
                        el.classList.remove("selected");
                        el.querySelector("i").classList.add("bx-plus");
                        el.querySelector("i").classList.remove("bx-minus");
                    }
                });
                this.classList.toggle("selected");
                this.querySelector("i").classList.toggle("bx-plus");
                this.querySelector("i").classList.toggle("bx-minus");
            });
        });

    </script>

</body>

</html>

<!--
TODOs:
    - 

CARICARE SU avabucks.it

MOCKUPS SU https://shots.so/
-->