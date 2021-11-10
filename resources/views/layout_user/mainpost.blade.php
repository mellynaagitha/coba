<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pariwisata Sumut</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/blog/IMG_20210622_100831_969.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.3.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="http://127.0.0.1:8000/ "><span>Pariwisata</span>Sumut</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="http://127.0.0.1:8000/">Home</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          
          &nbsp&nbsp&nbsp

          <!-- Start kode untuk form pencarian -->
    <form class="form" method="get" action="{{ route('search') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
    </form>
          <!-- Start kode untuk form pencarian -->
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

   <!-- ======= Blog Header ======= -->
 <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">@yield('header1')</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">@yield('header2')</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
               
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                  
                 <!-- start single post -->
                  <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/Binahal">
                          <img src="assets/img/blog/binahal.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="/2"> Binahal Indah Resort</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/Sipiso">
                          <img src="assets/img/blog/piso.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="/5"> Air Terjun Sipiso-piso.</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/Lumbini">
                          <img src="assets/img/blog/lumbi.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="/1"> Taman Alam Lumbini</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/Linting">
                          <img src="assets/img/blog/lint.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="/6"> Danau Linting</a></p>
                      </div>
                    </div>
                    <!-- End single post -->

                  </div>
                </div>
                <!-- recent end -->
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>Last Post</h4>
                  <ul>
                    <li>
                      <a href="/3">Gundaling</a>
                    </li>
                    <li>
                      <a href="/6">Linting</a>
                    </li>
                    <li>
                      <a href="/7">Pantai Pandan</a>
                    </li>
                    <li>
                      <a href="/9">Bukit Kubu</a>
                    </li>
                    <li>
                      <a href="/10">Istana Maimun</a>
                    </li>
                    <li>
                      <a href="/4">Salju Panas</a>
                    </li>
                    <li>
                      <a href="/2">Binahal</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="single-blog-page">
                <div class="left-tags blog-tags">
                  <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                    <li>
                      <a href="/3">Gundaling</a>
                    </li>
                    <li>
                      <a href="/6">Linting</a>
                    </li>
                    <li>
                      <a href="/7">Pantai Pandan</a>
                    </li>
                    <li>
                      <a href="/9">Bukit Kubu</a>
                    </li>
                    <li>
                      <a href="/10">Istana Maimun</a>
                    </li>
                    <li>
                      <a href="/4">Salju Panas</a>
                    </li>
                    <li>
                      <a href="/2">Binahal</a>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                     @yield('mainimage')
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="bi bi-chat"></i>
                      <a href="#">0 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">@yield('tittle')</a>
                    </h4>
                  
                    @yield('text')
                    
                  </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span></span></h2>
                </div>

                <p></p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://instagram.com/cutecatonline?utm_medium=copy_link"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="rio@gmail.com"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://instagram.com/cutecatonline?utm_medium=copy_link"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="rio@gmail.com"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Information</h4>
                <p>
                  
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                <a href="#"><img src="assets/img/portfolio/cagar.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/telaga.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/museum.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/Lake.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

