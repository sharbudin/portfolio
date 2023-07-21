<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>nav_bar page</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Sharbudin.K</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <b>Linkedin</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <b>Social Media</b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Instagram</a></li>
                            <li><a class="dropdown-item" href="#">Facebook</a></li>
                        </ul>
                    </li>
                </ul>


                <div class="card-body; text-right;">
                    <a href="#" class="btn btn-success">Resume</a>
                    <a href="https://github.com/sharbudin" class="card-link">GitHub</a>
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>


            </div>
        </div>
    </nav>


    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-sm-0">
              <div class="card" style="width: 22rem;">
                  <img src="image\image.png" class="img-thumbnail" alt="No Image">
                  <div class="card-body">
                      <h3 class="card-title">Hello,</h3>
                      <p class="card-text">
                          <h5>I'm sharbudin.K</h5>
                          A passionate and experienced <b>software developer.</b>
                          With a strong background in <b> Oracle Database, PHP ,HTML,CSS,Linux</b>
                          I specialize in creating innovative and efficient software solutions.
                          Throughout my career, I have worked on a variety <b>Web Application </b>projects,
                          consistently delivering high-quality code and exceeding client expectations.
                      </p>
                  </div>
              </div>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-6">
              <div class="embed-responsive embed-responsive-16by9">
                  <video class="embed-responsive-item" controls src="video\portfolio.mp4" loop muted autoplay></video>
              </div>
          </div>
      </div>

      <!-- Skills Section -->
      <div class="container p-5 bg-light">
          <h1>Skills</h1>
          <div class="row">
              <div class="col-md-6">
                  <label>HTML</label>
                  <div class="progress">
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%;" aria-valuenow="75"
                          aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
              </div>
              <div class="col-md-6">
                  <label>CSS</label>
                  <div class="progress">
                      <div class="progress-bar bg-dark" role="progressbar" style="width: 75%;" aria-valuenow="75"
                          aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <label for="">MySql</label>
                  <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="85"
                          aria-valuemin="0" aria-valuemax="100">85%</div>
                  </div>
              </div>
              <div class="col-md-6">
                  <label for="">PHP</label>
                  <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100">80%</div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <label for="">Oracle</label>
                  <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90"
                          aria-valuemin="0" aria-valuemax="100">90%</div>
                  </div>
              </div>
              <div class="col-md-6">
                  <label for="">Linux</label>
                  <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
              </div>
          </div>
      </div>
  </div>


    {{-- experiance-s --}}

    <div class="card text-center">
        <div class="card-header">
           <h2>Work Experience</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">Stellar Innovation PVT LTD</h5>
          <img src="image\stellar.png" alt="No Image">
          <p class="card-text"><b>Company:</b> Stellar Innovation PVT LTD <br>
                       <b>Job Title:</b> PHP Developer <br>
                      <b> Years:</b> 1.2 Years <br>
                    <b>Date:</b> 04/05/2022 to Present <br>
                <b>Responsibilities And achievements:</b>  Collaborated with a team of developers to design and develop custom web applications for clients in various industries.<br>
                <b>*</b> Utilized PHP, Laravel framework, and MySQL database to build scalable and high-performance web solutions.<br>
                <b>*</b> Implemented front-end functionality using HTML, CSS, and JavaScript/jQuery, ensuring a seamless user experience.<br>
                <b>*</b> Integrated third-party APIs, such as payment gateways and social media platforms, to enhance application functionality.<br>
                <b>*</b> Conducted code reviews, identified and resolved bugs, and optimized application performance.<br>
                <b>*</b> Worked closely with clients to gather requirements, provide technical guidance, and deliver projects on time.<br>
                <b>*</b> Actively participated in agile development methodologies, including daily stand-up meetings and sprint planning.<br>
                <b>*</b> Contributed to the continuous improvement of development processes, implementing best practices and coding standards. </p>
          <a href="https://www.stellaripl.com/" class="btn btn-primary">About Company</a>
        </div>
      </div>

    {{-- experiance-e --}}


{{-- projects-start --}}

        <div class="card text-center">
            <div class="card-header">
                <h2>Projects</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ABC Chicken Center</h5>
                                <p class="card-text">Description: Developed a full-fledged e-commerce platform using
                                    Laravel. Integrated secure payment gateways, implemented product management
                                    features, and optimized performance for high scalability.
                                    Technologies: Laravel, Bootstrap MySQL, HTML, CSS, Php, JavaScript.</p>
                                <a href="#" class="btn btn-primary"><B>Source Code</B></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Men's Look</h5>
                                <p class="card-text">Description: Developed a full-fledged e-commerce platform using
                                    Laravel. Integrated secure payment gateways, implemented product management
                                    features, and optimized performance for high scalability.
                                    Technologies: Laravel, Boostrap, Php, MySQL, HTML, CSS, JavaScript, Node.js.</p>
                                <a href="#" class="btn btn-primary"><B>Source Code</B></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- project-end --}}

    {{-- carousel-S --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image\devimage.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image\devimage.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image\devimage.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

    {{-- carousel-e --}}



    {{-- footerstart --}}
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Pin code:631205, TamilNadu, India</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              sharbudin1234@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i>+91 8940695159</p>
            <p><i class="fas fa-print me-3"></i></p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">dream-dev.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    {{-- footerend --}}


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
