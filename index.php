<?php require_once('Connections/coneccion.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CB Fundraising</title>
    <meta content="A different and fun way to raise funds. Register for free, create a donation link and start receiving funds"

      name="description">
    <meta content="Fundraising ; Raise funds for schools ; Beneficial causes" name="keywords">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Favicons -->
    <link href="assets/img/android-icon-72x72.png" rel="icon">
    <link href="assets/img/apple-icon-57x57.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CRaleway:300,300i,400,400i,500,500i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i"

      rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
	<!--  <style>
	font {
    display: none;
</style>-->
	  
	  
  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
     <a href="index.php"

          class="logo"><img src="assets/img/CB%20Fundraising%20Logo%20Dorado.png"

            alt="logotipo" class="img-fluid"></a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="login.php">Log In</a></li>
            <li><a class="getstarted scrollto" href="register.php">Sign Up</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i> </nav>
        <!-- .navbar --> </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade"

        data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators">
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/Bacground\ Hero.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>CB
                    Fundraising</span></h2>
                <p class="animate__animated animate__fadeInUp">We work to
                  connect your event with the world</p>
                <a href="register.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign
                  Up</a> <a href="https://consultoriafinanciera-rivera.wistia.com/medias/jgkhm1vj33"

                  class="glightbox btn-watch-video" target="blank"><i class="bi bi-play-circle"></i><span>Watch
                    Video</span></a> </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/1.png)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Create an
                  account !</h2>
                <p class="animate__animated animate__fadeInUp">Creating an
                  account is quick and easy, just sign up and discover the new
                  way to raise funds.</p>
                <a href="https://consultoriafinanciera-rivera.wistia.com/medias/dli2ngti5z"

                  class="glightbox btn-watch-video" target="blank"><i class="bi bi-play-circle"></i><span>Watch
                    Video</span></a> </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/2.png)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Share your
                  event on your social networks</h2>
                <p class="animate__animated animate__fadeInUp">Create a donation
                  link and share with all your friends to support your cause</p>
                <a href="login.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a> <a class="carousel-control-next" href="#heroCarousel" role="button"

          data-bs-slide="next"> <span class="carousel-control-next-icon bi bi-chevron-right"

            aria-hidden="true"></span> </a> </div>
    </section>
    <!-- End Hero -->
    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="section-title">
          <h2>About</h2>
          <p>Find out more about us</p>
        </div>
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in"

              data-aos-delay="100">
              <script src="https://fast.wistia.com/embed/medias/q9p20c4s4g.jsonp"

async=""></script>
              <script src="https://fast.wistia.com/assets/external/E-v1.js" async=""></script>
              <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                  <div class="wistia_embed wistia_async_q9p20c4s4g videoFoam=true"

                    style="height:100%;position:relative;width:100%">
                    <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img

                        src="https://fast.wistia.com/embed/medias/q9p20c4s4g/swatch"

                        style="filter:blur(5px);height:100%;object-fit:contain;width:100%;"

                        alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 pt-3 pt-lg-0 content">
              <h3>We reinvent the way of raising funds</h3>
              <p class="fst-italic"> CB Fundraising helps you provide a friendly
                space to raise funds. In a fun and easy way with just a click,
                Share your link and start raising funds. </p>
              <ul>
                <li><i class="bx bx-check-double"></i>Sign up free</li>
                <li><i class="bx bx-check-double"></i>Share on social networks</li>
                <li><i class="bx bx-check-double"></i>Raise funds</li>
                <li><i class="bx bx-check-double"></i>Obtain big profits</li>
              </ul>
              <p> You can register and obtain funds instantly, without the need
                of sales or collecting money. their has never been an easy and
                fun way to raise funds . All the above can be found in one place
                at CB Fundraising. </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->
      <!-- ======= About Boxes Section ======= -->
      <section id="about" class="about-boxes">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"

              data-aos-delay="100">
              <div class="card"> <img src="assets/img/Mision/1.png" class="card-img-top"

                  alt="...">
                <div class="card-icon"> <i class="bi bi-bullseye"></i> </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Mission</a></h5>
                  <p class="card-text">We are a platform that helps raise funds
                    in an easy and fun way. Making your experience unique and
                    different, 100% virtual.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"

              data-aos-delay="200">
              <div class="card"> <img src="assets/img/Mision/3.png" class="card-img-top"

                  alt="...">
                <div class="card-icon"> <i class="ri-calendar-check-line"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Commitment</a></h5>
                  <p class="card-text">Our leaders are committed in helping you
                    with your needs, So we can meet your goals.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"

              data-aos-delay="300">
              <div class="card"> <img src="assets/img/Mision/2.png" class="card-img-top"

                  alt="...">
                <div class="card-icon"> <i class="bi bi-graph-up-arrow"></i> </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Vision</a></h5>
                  <p class="card-text">To become by the year 2025 a platform
                    used throughout the world and in all languages ​​to raise
                    funds for public and private charitable causes.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Boxes Section -->
      <!-- ======= Counts Section ======= -->
      <section id="about" class="counts">
        <div class="container" data-aos="fade-up">
          <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box"> <i class="bi bi-emoji-smile"></i> <span

                  data-purecounter-start="0" data-purecounter-end="80237" data-purecounter-duration="1"

                  class="purecounter"></span>
                <p><strong>Happy Donors</strong> consequuntur quae qui deca rode</p>
                <a href="#">Find out more »</a> </div>
            </div>
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box"> <i class="bi bi-journal-richtext"></i> <span

                  data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"

                  class="purecounter"></span>
                <p><strong>Promoted events</strong> adipisci atque cum quia aut
                  numquam delectus</p>
                <a href="#">Find out more »</a> </div>
            </div>
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box"> <i class="bi bi-headset"></i> <span data-purecounter-start="0"

                  data-purecounter-end="3463" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hours Of Support</strong> aut commodi quaerat.
                  Aliquam ratione</p>
                <a href="#">Find out more »</a> </div>
            </div>
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box"> <i class="bi bi-people"></i> <span data-purecounter-start="0"

                  data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Sponsors</strong> rerum asperiores dolor molestiae
                  doloribu</p>
                <a href="#">Find out more »</a> </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in"

              data-aos-delay="100">
              <script src="https://fast.wistia.com/embed/medias/dli2ngti5z.jsonp"

async=""></script>
              <script src="https://fast.wistia.com/assets/external/E-v1.js" async=""></script>
              <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                  <div class="wistia_embed wistia_async_dli2ngti5z videoFoam=true"

                    style="height:100%;position:relative;width:100%">
                    <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img

                        src="https://fast.wistia.com/embed/medias/dli2ngti5z/swatch"

                        style="filter:blur(5px);height:100%;object-fit:contain;width:100%;"

                        alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 pt-3 pt-lg-0 content">
              <h3>Advantages of working with<strong> CB Fundraising</strong></h3>
              <p class="fst-italic"> In such a connected world, CBFundraising
                becomes a one-of-a-kind platform that allows all parties that
                make up its model to benefit. </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->
      <!-- ======= Featured Section ======= -->
      <section id="about" class="featured">
        <div class="container">
          <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <figure> <img src="assets/img/features/100%20Online%20Final.gif"

                      alt="" class="img-fluid"> </figure>
                </div>
                <div class="tab-pane" id="tab-2">
                  <figure> <img src="assets/img/features/Grandes%20Ganancias.gif"

                      alt="" class="img-fluid"> </figure>
                </div>
                <div class="tab-pane" id="tab-3">
                  <figure> <img src="assets/img/features/No%20colectas%20de%20dinero.gif"

                      alt="" class="img-fluid"> </figure>
                </div>
                <div class="tab-pane" id="tab-4">
                  <figure> <img src="assets/img/features/Venta%20via%20redes.gif"

                      alt="" class="img-fluid"> </figure>
                </div>
                <div class="tab-pane" id="tab-5">
                  <figure> <img src="assets/img/features/No%20venta%20de%20puerta%20en%20puerta%20.gif"

                      alt="" class="img-fluid"> </figure>
                </div>
                <div class="tab-pane" id="tab-6">
                  <figure> <img src="assets/img/features/Envio%20no.gif" alt=""

                      class="img-fluid"> </figure>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item"> <a class="nav-link active show" data-bs-toggle="tab"

                    href="#tab-1">
                    <h4>100% Online</h4>
                    <p>All in one place with just a click.</p>
                  </a> </li>
                <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab"

                    href="#tab-2">
                    <h4>Big profits</h4>
                    <p>There is no fundraising limit</p>
                  </a> </li>
                <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab"

                    href="#tab-3">
                    <h4>No collection </h4>
                    <p>it is no longer necessary to involve many people for your
                      event.</p>
                  </a> </li>
                <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab"

                    href="#tab-4">
                    <h4>Sell ​​on social media</h4>
                    <p>Share your donation link on your social networks to all
                      your friends and tell them to support your cause or event</p>
                  </a> </li>
                <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab"

                    href="#tab-5">
                    <h4>No door to door sales</h4>
                    <p>Donate comfortably from your home or wherever you are.
                      It's that simple and fun.</p>
                  </a> </li>
                <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab"

                    href="#tab-6">
                    <h4>No delivery</h4>
                    <p>You no longer need shipping to donate</p>
                  </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Featured Section -->
      <!-- ======= Services Section ======= -->
      <section id="services" class="about">
        <div class="section-title">
          <h2>SERVICES</h2>
          <p>We work for you</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
              <script src="https://fast.wistia.com/embed/medias/jgkhm1vj33.jsonp"

async=""></script>
              <script src="https://fast.wistia.com/assets/external/E-v1.js" async=""></script>
              <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                  <div class="wistia_embed wistia_async_jgkhm1vj33 videoFoam=true"

                    style="height:100%;position:relative;width:100%">
                    <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img

                        src="https://fast.wistia.com/embed/medias/jgkhm1vj33/swatch"

                        style="filter:blur(5px);height:100%;object-fit:contain;width:100%;"

                        alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
              <h3>Raise funds with one click</h3>
              <p class="fst-italic"> CB Fudraising is the solution you need to
                raise funds </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Fast</li>
                <li><i class="bi bi-check-circle"></i> Sure</li>
                <li><i class="bi bi-check-circle"></i>Easy</li>
                <li><i class="bi bi-check-circle"></i>Funny</li>
              </ul>
              <p> Sign up for free and start receiving funds in a matter of
                minutes </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->
      <!-- ======= Why Us Section ======= -->
      <section id="services" class="why-us1">
        <h1 class="title">Features</h1>
        <div class="container">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up">
              <div class="box"> <span>01</span>
                <h4>Fast<i class="bi bi-lightning-charge-fill"></i></h4>
                <p>Start receiving funds in a few minutes</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
              <div class="box"> <span>02</span>
                <h4>Sure<i class="bi bi-lock"></i></h4>
                <p>Our platform is secure and helps you withdraw your account
                  directly.</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box"> <span>03</span>
                <h4>Easy<i class="bi bi-gear-fill"></i></h4>
                <p>To generate the link you only have to configure your event
                  and share</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box"> <span>04</span>
                <h4>Funny<i class="bi bi-share-fill"></i></h4>
                <p>You can share your event to your friends and these to their
                  friends on any social network.</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box"> <span>05</span>
                <h4>Simple<i class="bi bi-sliders"></i></h4>
                <p>A 5 year old could use it</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box"> <span>06</span>
                <h4>Free of charge<i class="bi bi-bookmark-star"></i></h4>
                <p>You do not pay anything to use it, it is totally free</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->
      <!-- ======= Features Section ======= -->
      <section class="features1">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-md-6"> <img src="assets/img/features-1.svg" class="img-fluid"

                alt=""> </div>
            <div class="col-md-6 pt-5">
              <h3>Top 10 on Technology</h3>
              <p class="fst-italic"> Our platform has the best technology on the
                market </p>
              <ul>
                <li><i class="bi bi-check"></i>Resposive</li>
                <li><i class="bi bi-check"></i>Customizable dashboard</li>
                <li><i class="bi bi-check"></i>Automated</li>
                <li><i class="bi bi-check"></i>Ux/Ix</li>
              </ul>
            </div>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2"> <img src="assets/img/features-3.svg"

                class="img-fluid" alt=""> </div>
            <div class="col-md-7 pt-5 order-2 order-md-1">
              <h3>There's still more</h3>
              <p class="fst-italic"> You can chat with us in real time </p>
              <p> Let's go! one of our agents are waiting ... </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Features 1 Section -->
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">
          <div class="quote-icon"> <i class="bx bxs-quote-right"></i> </div>
          <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p> It has been a pleasure working with you. I would highly
                    recommend your company to anyone who is fundraising for the
                    first time. </p>
                  <img src="assets/img/testimonials/1.jpg" class="testimonial-img"

                    alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
              <!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p> This is the first time we worked with CB Fundraising it
                    was so simple and easy to use. Totally recommended. </p>
                  <img src="assets/img/testimonials/2.png" class="testimonial-img"

                    alt="">
                  <h3>Ruth peralta</h3>
                  <h4>Student</h4>
                </div>
              </div>
              <!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p> Thank you for everything your company did to make our
                    fundraiser a success. We will definitely be using your
                    company again. </p>
                  <img src="assets/img/testimonials/3.png" class="testimonial-img"

                    alt="">
                  <h3>Jesus Alvarez</h3>
                  <h4>Businessman</h4>
                </div>
              </div>
              <!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p> CB Fundraising has been a wonderful company to deal with,
                    I am so pleased your service was and has been excellent. </p>
                  <img src="assets/img/testimonials/4.jpg" class="testimonial-img"

                    alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
              <!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p> Thanks to your excellent fundraising system, our small
                    group of students was able to raise enough money. The
                    fundraiser was just super and we were very happy with the
                    results. </p>
                  <img src="assets/img/testimonials/5.png" class="testimonial-img"

                    alt="">
                  <h3>Migdalia Vargas</h3>
                  <h4>Teacher</h4>
                </div>
              </div>
              <!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p> Big thanks to cb fundraising.. very easy to use and it
                    helped me raise fund for my kids baseball uniforms. Please
                    follow if you need to raise fund for your activity. </p>
                  <img src="assets/img/testimonials/6.png" class="testimonial-img"

                    alt="">
                  <h3>Rene Alicea</h3>
                  <h4>Baseball Team</h4>
                </div>
              </div>
              <!-- End testimonial item --> </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </div>
          <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up"

            data-aos-delay="100">
            <div class="col-lg-5"> <i class="bx bx-help-circle"></i>
              <h4>How can you use CB Fundraising?</h4>
            </div>
            <div class="col-lg-7">
              <p> Using CBFundraising is easy and fun. You just have to enter
                the page, register, log in, fill in your information, customize
                your event, publish it, get a donation link and share it to
                start receiving donations. </p>
            </div>
          </div>
          <!-- End F.A.Q Item-->
          <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up"

            data-aos-delay="200">
            <div class="col-lg-5"> <i class="bx bx-help-circle"></i>
              <h4>How can I share the link?</h4>
            </div>
            <div class="col-lg-7">
              <p> You can share it from your mobile, computer or tablet, with
                just one click. </p>
            </div>
          </div>
          <!-- End F.A.Q Item-->
          <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up"

            data-aos-delay="300">
            <div class="col-lg-5"> <i class="bx bx-help-circle"></i>
              <h4>Do I have to invest?</h4>
            </div>
            <div class="col-lg-7">
              <p> You don't have to invest anything, just fill in the required
                information and start fundraising. </p>
            </div>
          </div>
          <!-- End F.A.Q Item-->
          <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up"

            data-aos-delay="400">
            <div class="col-lg-5"> <i class="bx bx-help-circle"></i>
              <h4>How do I raise funds?</h4>
            </div>
            <div class="col-lg-7">
              <p> Just fill in your information share the link and start
                fundraising easy and fun. </p>
            </div>
          </div>
          <!-- End F.A.Q Item-->
          <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up"

            data-aos-delay="500">
            <div class="col-lg-5"> <i class="bx bx-help-circle"></i>
              <h4>For which events can I raise funds with CBFundraising?</h4>
            </div>
            <div class="col-lg-7">
              <p> School, Sports, Personal and life events; Among others. </p>
            </div>
          </div>
          <!-- End F.A.Q Item--> </div>
      </section>
      <!-- End Frequently Asked Questions Section -->
      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>Sign up, it's free!</h3>
            <p>Register and discover how we can help you connect your
              fundraising event with your friends, family or anyone in the
              world. We work to connect your event with the world.</p>
            <a class="cta-btn" href="register.html">Raise Funds Now</a> </div>
        </div>
      </section>
      <!-- End Cta Section -->
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box"> <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Ocean Springs MS 39564-8425</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4"> <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@cbfundraising.site<br>
                      contact@cbfundraising.site</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4"> <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+1 (228)609-0619</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group"> <input name="name" class="form-control"

                      id="name" placeholder="Your Name" required="" type="text">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0"> <input class="form-control"

                      name="email" id="email" placeholder="Your Email" required=""

                      type="email"> </div>
                </div>
                <div class="form-group mt-3"> <input class="form-control" name="subject"

                    id="subject" placeholder="Subject" required="" type="text">
                </div>
                <div class="form-group mt-3"> <textarea class="form-control" name="message"

rows="5" placeholder="Message" required=""></textarea> </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="sent-message">Your message has been sent. Thank
                    you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section --> </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <h3>CB Fundraising</h3>
                <p class="pb-3"><em>Your fundraising platform</em></p>
                <p> Ocean Springs MS 39564-8425 <br>
                  Mississipi, USA<br>
                  <br>
                  <strong>Phone:</strong> (228) 609-0519<br>
                  <strong>Email:</strong> info@cbfundraising </p>
                <div class="social-links mt-3"> <a href="#" class="facebook"><i

                      class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i

                      class="bx bxl-instagram"></i></a> <a href="#" class="linkedin"><i

                      class="bx bxl-linkedin"></i></a> </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of
                    service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy
                    policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright"> © Copyright <strong><span>CB Fundraising</span></strong>.
          All Rights Reserved </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
          Power by <a href="https://consulfinhn.site/">Consulfinhn</a> </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
