<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kampus Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('landing/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('landing/assets/img/slide/slide-1.jpg') }}" alt="">
            </div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Kampus Indonesia</span></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('landing/assets/img/slide/slide-2.jpg') }}" alt="">
            </div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi
                  ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                  voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi
                  ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                  voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Kampus<br>Indonesia</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ asset('landing/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Artikel</a></li>
          <li class="dropdown"><a href="#"><span>Kampus</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Perguruan Tinggi Negri</a></li>
              <li><a href="#">Perguruan Tinggi Swasta</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="" href="login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Kampus Indonesia merupakan platform media informasi yang update seputar informasi pendidikan tinggi,
            kampus, beasiswa, magang dan pelatihan pengembangan diri serta tools dalam minat dan bakat mahasiswa. Kampus
            Indonesia sendiri merupakan bagian dari PT. Inspirasi Mandiri Nusantara atau PINTARA yang merupakan sebuah
            perusahaan startup dan bergerak pada bidang media informasi digital dengan berfokus pada bidang pendidikan.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('landing/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3><strong>Data kampus yang sudah terdaftar di website Kampus Indonesia</strong></h3>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Perguruan Tinggi Negri<i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Pergutuan Tinggi Swasta<i class="val">45%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

      </div>




      <!-- ======= More Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h2>Artikel Terbaru</h2>
            <p>Jangan Sampai Terlewatkan Artikel Terbaru Kami.</p>
          </div>


          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="card">
                <img src="{{ asset('landing/assets/img/more-service-1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="">Internship Batch 5</a></h5>
                  <p class="card-text">Open Recruitment Intenship Batch 5 Kampus Indonesia</p>
                  <a href="#" class="btn">Explore more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="card">
                <img src="{{ asset('landing/assets/img/more-service-2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="">Internship Batch 5</a></h5>
                  <p class="card-text">Open Recruitment Intenship Batch 5 Kampus Indonesia</p>
                  <a href="#" class="btn">Explore more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="card">
                <img src="{{ asset('landing/assets/img/more-service-3.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="">Internship Batch 5</a></h5>
                  <p class="card-text">Open Recruitment Intenship Batch 5 Kampus Indonesia</p>
                  <a href="#" class="btn">Explore more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End More Services Section -->


      <!-- ======= Contact Us Section ======= -->
      <section id="contact" class="contact section-bg">

        <div class="container">
          <div class="section-title">
            <h2>Contact Us</h2>
          </div>
        </div>

        <div class="container-fluid">

          <div class="row">

            <div class="col-lg-6 d-flex align-items-stretch infos">

              <div class="row">

                <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                  <i class="bx bx-map"></i>
                  <h4>Address</h4>
                  <p>Malang,<br>Jawa Timur, Indonesia</p>
                </div>
                <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                  <i class="bx bx-phone"></i>
                  <h4>Call Us</h4>
                  <p>+6281234567890<br>+6281234567891</p>
                </div>
                <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                  <i class="bx bx-envelope"></i>
                  <h4>Email Us</h4>
                  <p>admin@yahoo.com<br>info@yahoo.com</p>
                </div>
                <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                  <i class="bx bx-time-five"></i>
                  <h4>Working Hours</h4>
                  <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                </div>
              </div>

            </div>

            <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="8" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Kampus Indonesia</h3>
            <p>
              Malang <br>
              Jawa Timur, Indonesia<br><br>
              <strong>Phone: +62 81234567890</strong> +<br>
              <strong>Email:</strong> info@yahoo.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login">Login</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Shuffle</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('lading/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lading/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('lading/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('lading/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('lading/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('lading/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('lading/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('lading/assets/js/main.js') }}"></script>

</body>

</html>
