<!DOCTYPE html>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        .hide-on-desktop {
            display: none;
        }

        header * {
            user-select: none;
        }
        header {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--line-color);
            padding: 10px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: nowrap;
            width: 100%;
            transition: background-color .3s;
            height: 105px;
            background-color: rgb(15, 15, 15, 0);
        }
        .opacity-header {
            background-color: rgb(15, 15, 15, .6);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }
        
        header>div {
            width: var(--max-width);
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        header .headerLeft {
            align-items: center;
            display: flex;
            gap: 35px;
            color: var(--text-color);
            transition: .3s;
        }

        header .headerLeft .toggleMenu {
            pointer-events: all;
            font-size: 1.4em;
            cursor: pointer;
            color: var(--text-color);
            display: none;
            color: var(--text-color);
        }

        header .logo {
            pointer-events: none;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        header .logo>a {
            pointer-events: all;
            display: flex;
            align-items: center;
            height: 60px !important;
            margin: -15px;
            padding-inline: 15px;
            gap: 5px;
        }

        header .logo img {
            position: relative;
            z-index: 2;
            height: 50px;
            border-radius: 50em;
            border: 1px solid var(--line-color);
            padding: 0px;
        }

        header .title {
            font-size: 45px;
        }

        header a {
            text-decoration: none;
            color: var(--text-color);
            cursor: pointer;
            transition: .3s;
        }

        header a div {
            margin-left: 10px;
        }

        header a h2 {
            font-weight: 600;
            font-size: 1.1em;
            line-height: 23px;
            color: var(--text-color);
        }

        header a h3 {
            font-weight: 500;
            font-size: .9em;
            line-height: 23px;
            color: var(--text-color);
            opacity: .7;
        }

        header .menu-cont {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        header .search-menu {
            display: none;
        }

        header .menu {
            font-size: 1em;
            display: flex;
            align-items: center;
            flex-direction: row;
            gap: 20px;
            list-style-type: none;
        }

        header .copyright {
            display: none;
        }

        .nav .logo {
            display: none;
        }

        .hidden {
            display: none !important;
        }

        header .v-divider {
            height: 40px;
            border-left: 1px solid var(--line-color);
        }

        header .username-tag {
            display: inline-block;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 150px;
        }

        .diamond a {
            display: flex;
            align-items: center;
            gap: 4px;
            font-weight: 600;
            cursor: pointer;
            color: var(--text-color);
            border-radius: 50em;
            height: auto;
            padding: 7px 10px 4px 7px;
        }
        .diamond a::after {
            border-radius: 50em;
        }
        .diamond i,
        .tool-tip > div h4 i,
        .tool-tip .points-label i {
            font-size: 1.8em !important;
            opacity: 1 !important;
            background: var(--bg-objects);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .diamond span {
            opacity: .8;
        }

        header .shadow {
            display: none;
        }

        .floating-butt {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            animation: zoom-in .3s;
        }
        @keyframes zoom-in {
            0% {
                opacity: 0;
                transform: scale(.7);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .floating-butt a {
            height: 65px;
            width: 65px;
            border-radius: 50em;
            box-shadow: 2px 2px 6px 4px rgb(10, 10, 10, .4);
        }

        .floating-butt a i {
            font-size: 1.5em;
        }
        .floating-butt a::after {
            border-radius: 50em;
        }

        .vertical-header {
            position: fixed;
            z-index: 1000;
            width: var(--max-width);
            left: 50%;
            top: 90px;
            display: flex;
            justify-content: flex-end;
            pointer-events: none;
        }
        .tool-tip > div {
            margin-right: 210px;
            padding: 15px;
            border-radius: 15px;
            background-color: rgb(15, 15, 15, .6);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--line-color);
            width: 380px;
        }
        .vertical-menu > ul {
            padding: 0 10px;
            border-radius: 15px;
            list-style-type: none;
            background-color: rgb(15, 15, 15, .6);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--line-color);
        }
        .vertical-menu > ul li {
            margin: 10px 0;
        }
        .vertical-menu.show-menu * {
            pointer-events: auto;
        }
        .vertical-menu > ul .ripple > a {
            justify-content: flex-start;
            width: 100%;
            min-width: 230px;
        }
        .vertical-menu > ul .h-divider {
            width: 100%;
            border-top: 1px solid var(--line-color);
        }
        .vertical-header.show-menu,
        .vertical-more.show-menu {
            transition: .3s ease-out;
            opacity: 1;
            transform: translate(-50%, 0);
        }
        .vertical-header.hidden-menu,
        .vertical-more.hidden-menu {
            transition: .3s ease-out;
            opacity: 0;
            transform: translate(-50%, 10px);
        }

        .tool-tip > div {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .tool-tip > div h4 {
            font-weight: 600;
            font-size: 1.1em;
            display: flex;
            gap: 5px;
            justify-content: center;
            align-items: center;
        }
        .tool-tip > div p {
            opacity: .7;
        }
        .tool-tip .points-label {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: -5px;
        }
        .tool-tip .points-label > div {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 5px;
            padding-inline: 15px;
            height: 60px;
            background-color: var(--line-color);
            border-radius: 10px;
            font-size: .9em;
        }
        .tool-tip .points-label > div span:nth-child(2) {
            width: 10%;
        }
        .tool-tip .points-label > div span:nth-child(3) {
            width: 80%;
        }

        .not-read-label {
            background-color: var(--primary);
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50em;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 20px;
            width: 20px;
            font-size: .9em;
        }

    </style>

</head>

<body>

    <header>
        <div>
            <div class="shadow shadow-inactive"></div>
            <div class="headerLeft">
                <!-- <i class="toggleMenu bx bx-menu"></i> -->
                <div class="ripple logo">
                    <i class="toggleMenu bx bx-menu"></i>
                    <a href="index">
                        <img src="favicon.png" alt="" />
                        <div>
                        <h2>AvaBucks</h2>
                        <h3>Society</h3>
                        </div>
                    </a>
                </div>
                <div class="nav nav-inactive">
                    <div>
                        <div class="logo">
                            <i class="toggleMenu bx bx-menu"></i>
                            <a href="index">
                                <img src="favicon.png" alt="" />
                                <div>
                                <h2>AvaBucks</h2>
                                <h3>Society</h3>
                                </div>
                            </a>
                        </div>
                        <ul class="menu">
                            <div class="v-divider"></div>
                            <li class="lnk ripple"><a href="#portfolio"><i class='bx bx-card-view'></i>Portfolio</a></li>
                            <li class="lnk ripple"><a href="#about"><i class='bx bx-book-alt'></i>About</a></li>
                            <li class="lnk ripple"><a href="#faqs"><i class='bx bx-quote-single-left'></i>FAQs</a></li>
                            <li class="lnk ripple linkedin hide-on-desktop"><a href="https://www.linkedin.com/in/alessandro-de-stefano-02361036a" target="_blank"><i class='bxl bx-linkedin-square bx-tada icon-butt search-icon'></i>Get in Touch</a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>© Avabucks Society</p>
                    </div>
                </div>
            </div>

            <div class="menu-cont">
                    <div class="v-divider"></div>
                    <div class="ripple linkedin"><a href="https://www.linkedin.com/in/alessandro-de-stefano-02361036a" target="_blank"><i class='bxl bx-linkedin-square bx-tada icon-butt search-icon'></i>Get in Touch</a></div>
            </div>
        </div>
    </header>

    <script>

        const menus = document.querySelectorAll(".toggleMenu");
        const links = document.querySelectorAll(".lnk a");
        const nav = document.querySelector(".nav");
        const shadow = document.querySelector(".shadow");

        menus.forEach((menu, index) => {
            menu.addEventListener("click", handleOnClickToggleMenu);
        });
        links.forEach((link, index) => {
            link.addEventListener("click", handleOnClickToggleMenu);
        });

        function handleOnClickToggleMenu(e) {
            window.scrollTo(0, 0);
            nav.classList.toggle("nav-active");
            shadow.classList.toggle("shadow-active");
            nav.classList.toggle("nav-inactive");
            shadow.classList.toggle("shadow-inactive");
            document.body.classList.toggle("lock-scroll");
        }
        
        window.addEventListener("scroll", function () {
            if (window.scrollY < 50) {
                document.querySelector("header").classList.remove("opacity-header");
            } else {
                document.querySelector("header").classList.add("opacity-header");
            }
        });
    </script>

</body>

</html>
