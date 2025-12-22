<!DOCTYPE html>
<html lang="en">

<head>

  <style>

    footer * {
        box-sizing: border-box;
    }
    footer {
        padding: 70px 0 0;
        box-sizing: border-box;
        width: 100%;
        font-size: 1em;
        border-top: 1px solid var(--line-color);
        background-color: rgb(10, 10, 10);
    }
    footer .cont {
        max-width: var(--max-width);
        margin: auto;
    }
    footer .row {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        color: var(--text-color);
        padding-inline: 100px;
    }
    footer .row > div:nth-child(1) {
        width: 35%;
    }
    footer .row > div {
        width: 20%;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 15px;
        flex-grow: 1;
    }

    footer .row p {
        margin: 20px 0;
        color: var(--text-color);
        opacity: .8;
        font-size: .95em;
        line-height: 1.8em;
        width: 90%;
    }

    footer .row h4 {
        position: relative;
        color: var(--primary);
        width: fit-content;
        padding: 5px 10px;
        font-weight: 500;
    }
    footer .row h4::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--primary);
        opacity: .2;
        border-radius: var(--border-radius);
    }

    footer .row ul,
    footer .row li {
        list-style-type: none;
        padding-left: 0;
        margin: 15px 0;
        transition: .3s;
        overflow: hidden;
    }

    footer .row li {
        transform: translateX(-15px);
    }
    footer .row li::before {
        content: '';
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-left: 8px solid var(--primary);
        border-bottom: 5px solid transparent;
    }
    footer .row li:hover {
        transform: translateX(0);
    }
    footer .row ul a {
        text-decoration: none;
        color: var(--text-color);
        opacity: .8;
        margin-left: 15px;
    }

    footer .contact-buttons {
        display: flex;
        gap: 20px;
    }

    footer .copyright {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 40px;
        height: 80px;
        color: rgb(255, 255, 255, .7);
        border-top: 1px solid var(--line-color);
        font-size: .9em;
    }

    /* Responsive */
    @media only screen and (max-width: 1367px) {

        footer .row > div {
            width: 50% !important;
            margin-bottom: 30px;
            padding: 0 !important;
        }

        footer .contact-buttons {
            flex-direction: column;
        }

    }
    @media only screen and (max-width: 574px) {
        
        footer > div {
            padding-inline: 20px;
        }
        footer .row {
            padding-inline: 0 !important;
        }
        footer .row > div {
            width: 100% !important;
        }

        footer .contact-buttons {
            flex-direction: column;
        }
    }
  </style>

</head>

<body>

  <footer data-aos="fade-in" class="footer">
      <div class="cont">
          <div class="row">
              <div>
                  <h2>AvaBucks Society</h2>
                  <p>Passionate about building clean, responsive, and user-friendly apps with React, React Native, Expo, and modern web technologies. Let's create something great together.</p>
                  <div class="contact-buttons">
                    <div class="ripple instagram"><a href="https://www.instagram.com/avabuckssociety/" target="_blank"><i class='bxl bx-instagram'></i>Contact on Instagram</a></div>
                    <div class="ripple outline"><a href="mailto:avabuckssociety@gmail.com" target="_blank"><i class='bx bx-envelope'></i>Contact by Email</a></div>
                  </div>
              </div>
              <div>
                  <h4>Site Map</h4>
                  <ul>
                      <li><a href="#portfolio">Portfolio</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#faqs">FAQs</a></li>
                      <li><a href="contact">Get in Touch</a></li>
                  </ul>  
              </div>
          </div>
      </div>
      <div class="copyright">
          <p>© Avabucks Society</p>
      </div>
  </footer>

</body>

</html>
