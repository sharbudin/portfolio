<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Personal portfolio Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&family=Saira+Stencil+One&display=swap"
    rel="stylesheet">
</head>

<body id="top" class="dark_theme">

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1 class="h1 logo">
        <a href="#"><b>Sharbudin</b></a>
      </h1>

      <div class="navbar-actions">

        <select name="language" id="lang">
          <option value="en">En</option>
          <option value="ar">Ta</option>
        </select>

        <button class="theme-btn" aria-label="Change Theme" title="Change Theme" data-theme-btn>
          <span class="icon"></span>
        </button>

      </div>

      <button class="nav-toggle-btn" aria-label="Toggle Menu" title="Toggle Menu" data-nav-toggle-btn>
        <span class="one"></span>
        <span class="two"></span>
        <span class="three"></span>
      </button>

      <nav class="navbar" data-navbar>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link">sharp</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#skills" class="navbar-link">Skills</a>
          </li>

          <li>
            <a href="#portfolio" class="navbar-link">Portfolio</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Contact</a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article class="container">

      <!--
        - #HERO
      -->

      <section class="hero" id="home">

        <figure class="hero-banner">

          <picture>
            <source srcset="./assets/images/shaa.png" media="(min-width: 750px)">
            <source srcset="./assets/images/sharbudin.jpg" media="(min-width: 500px)">
            <img src="./assets/images/sharp_sharbudin.jpg" alt="A man in a blue shirt with a happy expression"
              class="w-100">
          </picture>

        </figure>

        <div class="hero-content">

          <h2 class="h2 hero-title">We Design & Build Creative Products</h2>

          <a href="#contact" class="btn btn-primary">Get in touch</a>

        </div>

        <ul class="hero-social-list">

          <li>
            <a href="#" class="hero-social-link">
              <ion-icon name="logo-facebook"></ion-icon>

              <div class="tooltip">Facebook</div>
            </a>
          </li>

          <li>
            <a href="#" class="hero-social-link">
              <ion-icon name="logo-twitter"></ion-icon>

              <div class="tooltip">Twitter</div>
            </a>
          </li>

          <li>
            <a href="#" class="hero-social-link">
              <ion-icon name="logo-linkedin"></ion-icon>

              <div class="tooltip">Linkedin</div>
            </a>
          </li>

        </ul>

        <a href="#stats" class="scroll-down">Scroll</a>

      </section>





      <!--
        - #STATS
      -->

      <section class="stats" id="stats">
        <ul class="stats-list">

          <li>
            <a href="#" class="stats-card">

              <div class="card-icon">
                <img src="./assets/images/stats-card_icon-1.png" alt="Badge icon">
              </div>

              <h2 class="h2 card-title">
                2+ <strong>Years of Experience</strong>
              </h2>

              <ion-icon name="chevron-forward-outline"></ion-icon>

            </a>
          </li>

          <li>
            <a href="#" class="stats-card">

              <div class="card-icon">
                <img src="./assets/images/stats-card_icon-2.png" alt="Checkmark icon">
              </div>

              <h2 class="h2 card-title">
                30+ <strong>Completed Projects</strong>
              </h2>

              <ion-icon name="chevron-forward-outline"></ion-icon>

            </a>
          </li>

          <li>
            <a href="#" class="stats-card">

              <div class="card-icon">
                <img src="./assets/images/stats-card_icon-3.png" alt="Peoples rating icon">
              </div>

              <h2 class="h2 card-title">
                8+ <strong>Happy Clients</strong>
              </h2>

              <ion-icon name="chevron-forward-outline"></ion-icon>

            </a>
          </li>

        </ul>
      </section>





      <!--
        - #ABOUT
      -->

      <section class="about" id="about">

        <figure class="about-banner">
          <img src="./assets/images/aaaa.png" alt="A man in a alice blue shirt with a thinking expression"
            class="w-100">
        </figure>

        <div class="about-content section-content">

          <p class="section-subtitle">About me</p>

          <h2 class="h3 section-title">Need a Creative Product? I can Help You!</h2>

          <p class="section-text">
            <b>I'm sharbudin,</b>
                              A passionate and experienced <b>software developer.</b>
                          With a strong background in <b> Oracle Database, PHP ,HTML,CSS,Linux</b>
                          I specialize in creating innovative and efficient software solutions.
                          Throughout my career, I have worked on a variety <b>Web Application </b>projects,
                          consistently delivering high-quality code and exceeding client expectations.
          </p>

          <div class="btn-group">
            <button class="btn btn-secondary">Hire me</button>

            <button class="btn btn-primary">Download cv</button>
          </div>

        </div>

      </section>





      <!--
        - #SKILLS
      -->

      <section class="skills" id="skills">

        <div class="skills-content section-content">

          <p class="section-subtitle">My skills</p>

          <h2 class="h3 section-title">What My Programming Skills Included?</h2>

          <p class="section-text">
            I develop simple, intuitive and responsive user interface that helps users get things done with less effort
            and time
            with those technologies.
          </p>

          <div class="skills-toggle" data-toggle-box>
            <button class="toggle-btn active" data-toggle-btn>Skills</button>

            <button class="toggle-btn" data-toggle-btn>Tools</button>
          </div>

        </div>

        <div class="skills-box" data-skills-box>

          <ul class="skills-list">

            <li>
              <div class="skill-card">
                <div class="tooltip">HTML5</div>

                <div class="card-icon">
                  <img src="./assets/images/html5.png" alt="HTML5 logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">CSS3</div>

                <div class="card-icon">
                  <img src="./assets/images/css3.png" alt="CSS3 logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">JavaScript</div>

                <div class="card-icon">
                  <img src="./assets/images/javascript.png" alt="JavaScript logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">TypeScript</div>

                <div class="card-icon">
                  <img src="./assets/images/typescript.png" alt="TypeScript logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">jQuery</div>

                <div class="card-icon">
                  <img src="./assets/images/jquery.png" alt="jQuery logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Bootstrap</div>

                <div class="card-icon">
                  <img src="./assets/images/bootstrap.png" alt="Bootstrap logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Angular</div>

                <div class="card-icon">
                  <img src="./assets/images/angular.png" alt="Angular logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">React</div>

                <div class="card-icon">
                  <img src="./assets/images/react.png" alt="React logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Vue</div>

                <div class="card-icon">
                  <img src="./assets/images/vue.png" alt="Vue logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Firebase</div>

                <div class="card-icon">
                  <img src="./assets/images/firebase.png" alt="Firebase logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">PugJs</div>

                <div class="card-icon">
                  <img src="./assets/images/pugjs.png" alt="PugJs logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">SASS</div>

                <div class="card-icon">
                  <img src="./assets/images/sass.png" alt="SASS logo">
                </div>
              </div>
            </li>

          </ul>

          <ul class="tools-list">

            <li>
              <div class="skill-card">
                <div class="tooltip">Ajax</div>

                <div class="card-icon">
                  <img src="./assets/images/ajax.png" alt="Ajax logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Gulp</div>

                <div class="card-icon">
                  <img src="./assets/images/gulp.png" alt="Gulp logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Webpack</div>

                <div class="card-icon">
                  <img src="./assets/images/webpack.png" alt="Webpack logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Git</div>

                <div class="card-icon">
                  <img src="./assets/images/git.png" alt="Git logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Npm</div>

                <div class="card-icon">
                  <img src="./assets/images/npm.png" alt="Npm logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Command Line</div>

                <div class="card-icon">
                  <img src="./assets/images/command.png" alt="Command Line logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">VS Code</div>

                <div class="card-icon">
                  <img src="./assets/images/vs-code.png" alt="VS Code logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Trello</div>

                <div class="card-icon">
                  <img src="./assets/images/trello.png" alt="Trello logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">ClickUp</div>

                <div class="card-icon">
                  <img src="./assets/images/clickup.png" alt="ClickUp logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Slack</div>

                <div class="card-icon">
                  <img src="./assets/images/slack.png" alt="Slack logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Photoshop</div>

                <div class="card-icon">
                  <img src="./assets/images/photoshop.png" alt="Photoshop logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Adobe XD</div>

                <div class="card-icon">
                  <img src="./assets/images/adobe-xd.png" alt="Adobe XD logo">
                </div>
              </div>
            </li>

          </ul>

        </div>

      </section>





      <!--
        - #PROJECTS
      -->

      <section class="project" id="portfolio">

        <ul class="project-list">

          <li>
            <div class="project-content section-content">

              <p class="section-subtitle">My Works</p>

              <h2 class="h3 section-title">See My Works Which Will Amaze You!</h2>

              <p class="section-text">
                We develop the best quality website that serves for the long-term. Well-documented, clean, easy and
                elegant interface
                helps any non-technical clients.
              </p>

            </div>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="./assets/images/project-1.png" class="w-100" alt="A macintosh on a yellow background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 01</h3>

                <time class="publish-date" datetime="2022-04">April 2022</time>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="./assets/images/project-2.png" class="w-100" alt="On a Blue background, a Wacom and a mouse.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 02</h3>

                <time class="publish-date" datetime="2022-04">April 2022</time>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="./assets/images/project-3.png" class="w-100"
                  alt="A Cassette tape on a mellow apricot background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 03</h3>

                <time class="publish-date" datetime="2022-04">April 2022</time>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="./assets/images/project-4.png" class="w-100"
                  alt="Blue digital watch on a dark liver background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 04</h3>

                <time class="publish-date" datetime="2022-04">April 2022</time>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="./assets/images/project-5.png" class="w-100"
                  alt="On a dark liver background, Airport luggage car carrying a luggage.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 05</h3>

                <time class="publish-date" datetime="2022-04">April 2022</time>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="./assets/images/project-6.png" class="w-100"
                  alt="On a yellow background, a digital watch and a glass.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 06</h3>

                <time class="publish-date" datetime="2022-04">April 2022</time>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="./assets/images/project-7.png" class="w-100"
                  alt="A fujifilm instant camera on a dark electric blue background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 07</h3>

                <time class="publish-date" datetime="2022-04">April 2022</time>
              </div>

            </a>
          </li>

          <li>
            <button class="load-more">Load more work</button>
          </li>

        </ul>

      </section>





      <!--
        - #CONTACT
      -->

      <section class="contact" id="contact">

        <div class="contact-content section-content">

          <p class="section-subtitle">Contact</p>

          <h2 class="h3 section-title">Have You Any Project? Please Drop a Message</h2>

          <p class="section-text">
            Get in touch and let me know how i can help. Fill out the form and i’ll be in touch as soon as possible.
          </p>

          <ul class="contact-list">

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Address:</h3>

                <address class="contact-info">
                  2/345 LIBRARY STREET K.G.KANDIGAI(V&P) TIRUTTANI TIRUVALLUR-631205
                </address>
              </div>

            </li>

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Phone:</h3>

                <a href="tel:01234567789" class="contact-info">(+91) 8940695159</a>

                <a href="tel:09765432200" class="contact-info">(+91) 9791963286</a>
              </div>

            </li>

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Email:</h3>

                <a href="mailto:info@jack.com" class="contact-info">sharbudin1234@gmail.com</a>

                <a href="mailto:support@jack.com" class="contact-info">k.sharbudin@stellaripl.com.com</a>
              </div>

            </li>

            <li>
              <ul class="contac-social-list">

                <li>
                  <a href="#" class="contact-social-link">
                    <div class="tooltip">Facebook</div>

                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="contact-social-link">
                    <div class="tooltip">Twitter</div>

                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="contact-social-link">
                    <div class="tooltip">Linkedin</div>

                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="contact-social-link">
                    <div class="tooltip">Youtube</div>

                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

        <form action="" class="contact-form">

          <div class="form-wrapper">

            <label for="name" class="form-label">Name</label>

            <div class="input-wrapper">

              <input type="text" name="name" id="name" required placeholder="e.g sharbudin" class="input-field">

              <ion-icon name="person-circle"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="email" class="form-label">Email</label>

            <div class="input-wrapper">

              <input type="email" name="email" id="email" required placeholder="e.g sharbudin1234@gmail.com"
                class="input-field">

              <ion-icon name="mail"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="phone" class="form-label">Phone</label>

            <div class="input-wrapper">

              <input type="tel" name="phone" id="phone" required placeholder="Phone Number" class="input-field">

              <ion-icon name="call"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="message" class="form-label">Message</label>

            <div class="input-wrapper">

              <textarea name="message" id="message" required placeholder="Write message..."
                class="input-field"></textarea>

              <ion-icon name="chatbubbles"></ion-icon>

            </div>

          </div>

          <button type="submit" class="btn btn-primary">Send</button>

        </form>

      </section>

    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <p class="h1 logo">
        <a href="#">
         Web Developer<span>.</span>
        </a>
      </p>

      <p class="copyright">
        &copy; 2023 <a href="#"></a>. All rights reserved
      </p>

    </div>
  </footer>





  <!--
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top title="Go to Top">
    <ion-icon name="arrow-up"></ion-icon>
  </a>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>