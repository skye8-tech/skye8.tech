<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Style and Script -->
    <!-- Offline -->
    <link rel="stylesheet" href="././../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="././../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!-- User defines Style -->
    <link rel="stylesheet" href="././../src/css/style.css">
    <link rel="stylesheet" href="././../src/css/about.css">
    <link rel="stylesheet" href="././../src/css/services.css">

    <link rel="shortcut icon" href="./../favicon.ico" type="image/x-icon">


      <!-- Extras CSS Files -->
  <link href="././../src/extras/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" integrity="sha512-vh3qZydgHrPxdxwRhcgtoovKGWVolDZmOW9s4qDyPYnlqqPm5uzOoVj4Rq4I7bxfhuNFhgKZXp4LUIJDbCvmIA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    
    <title>About Section | Skye8</title>
</head>
<body class="d-flex flex-column min-vh-100 p-0">
    <?php include './header.php'; ?>


    <div class="container-fluid bg-services p-5 text-light-blue text-center">
        <h1>About Us</h1>
    </div>



    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container">
    
            <div class="row content mx-0">
              <div class="col-lg-6">
                <div class="lead">
                  <h4>Our Expertise is Digital Solutions Design</h4>
                </div>
                <p class="lead my-4">
                  <strong>Skye8 is a Tech Startup Company that provide digital solutions for personal and enterprise consumption.</strong>
                </p>
                <a href="#contact" class="btn-learn-more">Contact Us</a>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <div class="row row-cols-1 row-cols-sm-2 g-2 mx-0">
                  <div class="col-auto d-flex flex-wrap">
                      <div class="card-body border text-center p-4">
                        <h5><i class="text-s8-orange fas fa-book-open"></i></h5>
                        <p class="lead">Education</p>
                      </div>
                      <div class="card-body border text-center p-4">
                        <h5><i class="text-s8-orange fas fa-plane-departure"></i></h5>
                        <p class="lead">Transport</p>
                      </div>
                      <div class="card-body border text-center p-4">
                        <h5><i class="text-s8-orange fas fa-bank"></i></h5>
                        <p class="lead">FinTech</p>
                      </div>
                      <div class="card-body border text-center p-4">
                        <h5><i class="text-s8-orange fas fa-award"></i></h5>
                        <p class="lead">Training</p>
                      </div>
                      <div class="card-body border text-center p-4">
                        <h5><i class="text-s8-orange fas fa-database"></i></h5>
                        <p class="lead">IT Management</p>
                      </div>
                      <div class="card-body border text-center p-4">
                        <h5><i class="text-s8-orange fas fa-code"></i></h5>
                        <p class="lead">Software Development</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End About Section -->
    
        <!-- ======= Our Values Section ======= -->
        <section id="our-values" class="our-values">
          <div class="container">
    
            <div class="row mx-0">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card" style='background-image: url("././../src/images/our-values-1.jpeg");'>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Our Core Values</a></h5>
                    <p class="card-text">We inculcate certain core values into our company to provide a good customer experience and service to humanity.</p>
                    <ol>
                      <li><p class="card-text">Superior Customer Service for better customer experience.</p></li>
                      <li><p class="card-text">Innovation and Creativity to provide the best solutions to our customers.</p></li>
                      <li><p class="card-text">Dignity and Transparency.</p></li>
                      <li><p class="card-text">Giving back to our customers and community.</p></li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch mt-4 mt-sm-0">
                <div class="card" style='background-image: url("././../src/images/our-values-2.jpeg");'>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Our Mission</a></h5>
                    <p class="card-text">It is our mission to see ethical technology prevail in developing community, easing the management and running of affairs and improving efficiency and productivity.</p>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Our Values Section -->
    
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
          <div class="container">
    
            <div class="row">
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="./../src/images/clients/client-1.png" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="./../src/images/clients/client-2.png" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="./../src/images/clients/client-3.png" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="./../src/images/clients/client-4.png" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="./../src/images/clients/client-5.png" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="./../src/images/clients/client-6.png" class="img-fluid" alt="">
              </div>
    
            </div>
    
          </div>
        </section><!-- End Clients Section -->
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
          <div class="container">
    
            <div class="section-title">
              <h2>Our Team</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
    
            <div class="row">
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Jovi</h4>
                    <span>Chief Executive Officer</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-2.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-3.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-4.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                  </div>
                </div>
              </div>
    
            </div>
            <div class="row">
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-5.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-6.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-7.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="./../src/images/team/team-8.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        </section>
        <!-- End Team Section --> 

        <!-- ======= Testimonials Section ======= -->
        <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
          <button class="carousel-control-prev position-relative" type="button"
            data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next position-relative" type="button"
            data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner py-4">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="./../src/images/testimonials/testimonials-1.jpg"
                    style="width: 150px;" />
                  <h5 class="mb-3">Tinwa Mackinley</h5>
                  <p>Entrepreneur</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    I see entrepreneurship in youths when I look at SKYE8. The future of positive changes belongs to such as these.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                  </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="./../src/images/testimonials/testimonials-2.jpg"
                    style="width: 150px;" />
                  <h5 class="mb-3">Fofou Kelvine</h5>
                  <p>Business Owner</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Managing and running my business has become more easy with the vendor management system I got from SKYE8.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li>
                      <i class="fas fa-star-half-alt fa-sm"></i>
                    </li>
                  </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="./../src/images/testimonials/testimonials-3.jpg"
                    style="width: 150px;" />
                  <h5 class="mb-3">Tamfu Ameline</h5>
                  <p>Principal</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    SKYE8 connected with me about the services they could offer to my school, and I gave it a try. I certainly wasn't disappointed. Their report card management system has helped improve the running of exams period in my institution.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="./../src/images/testimonials/testimonials-4.jpg"
                    style="width: 150px;" />
                  <h5 class="mb-3">Senka Elvis</h5>
                  <p>Founder</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    My years of working with SKYE8 has been those of professionalism, commitment and meeting up to expectations. This tech start up has much potentials.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                  </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="./../src/images/testimonials/testimonials-5.jpg"
                    style="width: 150px;" />
                  <h5 class="mb-3">Ngu Delsen</h5>
                  <p>Bank Manager</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    I heard of SKYE8, did my findings and partnered with them. the demo of the daily savings app for my financial institution which they build is perfect. We are scaling this up for public consumption already.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                  </ul>
                </div>

                <!-- <div class="col-lg-4 d-none d-lg-block">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar"
                    style="width: 150px;" />
                  <h5 class="mb-3">Alex Rey</h5>
                  <p>Web Developer</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid commodi.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li>
                      <i class="fas fa-star-half-alt fa-sm"></i>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>

          <!-- Single item -->
          <!-- <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="./../src/images/testimonials/testimonials-5.jpg"
                    style="width: 150px;" />
                  <h5 class="mb-3">Ngu Delsen</h5>
                  <p>Bank Manager</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    I heard of SKYE8, did my findings and partnered with them. the demo of the daily savings app for my financial institution which they build is perfect. We are scaling this up for public consumption already.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                  </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(8).webp" alt="avatar"
                    style="width: 150px;" />
                  <h5 class="mb-3">John Doe</h5>
                  <p>Web Developer</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid commodi.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li>
                      <i class="fas fa-star-half-alt fa-sm"></i>
                    </li>
                  </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(7).webp" alt="avatar"
                    style="width: 150px;" />
                  <h5 class="mb-3">Maria Kate</h5>
                  <p>Photographer</p>
                  <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti.
                  </p>
                  <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- Inner -->
        </div>
        <!-- Carousel wrapper -->
        <!-- End Testimonials Section -->
    
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
          <div class="container">
    
            <div class="section-title">
              <h2>Frequently Asked Questions</h2>
              <p>If you have any questions you can’t find the answers to on this page, or you are eager to discuss the project details before starting out cooperation, just contact us and we will gladly answer all your questions.</p>
            </div>
    
            <div class="faq-list">
              <ul>
                <li data-aos="fade-up">
                  <i class="fas fa-info-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">How do you guarantee the product quality?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
                  <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>
                      We work in a short iteration mode and regularly test the work results, taking into account all customer preferences and the target audience reaction. This approach allows us to provide our customers with high-quality products, observing the specified deadlines. Quality is our top priority.
                    </p>
                  </div>
                </li>
    
                <li data-aos="fade-up" data-aos-delay="100">
                  <i class="fas fa-info-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Do you provide product support services after the app development is complete?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
                  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Yes, we are always glad to provide technical support and service the apps we have developed. We can also further develop your software product if you need to implement new features or integrate third-party services.
                    </p>
                  </div>
                </li>
    
                <li data-aos="fade-up" data-aos-delay="200">
                  <i class="fas fa-info-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What information do you need from me to start work?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
                  <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Share the details of your project – like scope, timeframes, or business challenges you’d like to solve.
                    </p>
                  </div>
                </li>
    
                <li data-aos="fade-up" data-aos-delay="300">
                  <i class="fas fa-info-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Should I be familiar with the technical details to work with you?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
                  <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      There is absolutely no need for this. After all, you do not have to know medical nuances when seeking a dentist’s services. You do not have to be an expert in software development because, actually, we are. We are ready to explain to you all unclear moments and the essence of all stages while working on the project.<br />
                      On your part, all you need is a clear vision of what objectives you want to achieve using the desired software product. Therefore, you just have to focus on your needs, and we will help you make them a reality.
                    </p>
                  </div>
                </li>
    
                <li data-aos="fade-up" data-aos-delay="400">
                  <i class="fas fa-info-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How long does software development take?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></a>
                  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      We cannot possibly answer this question precisely because there are projects finished in 2 to 3 weeks, but there are also tasks that take several years to complete. <br />
                      To provide you with a precise answer, we have to evaluate the project complexity and the work scope. Knowing this information, we can provide you with the estimated time frame.
                    </p>
                  </div>
                </li>
    
              </ul>
            </div>
    
          </div>
        </section><!-- End Frequently Asked Questions Section -->
    
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">
    
            <div class="section-title">
              <h2>Contact</h2>
              <p>Reach out to us for a quote or let's work together and get that project of yours working now.</p>
            </div>
    
            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.01476812689398!2d10.167011561836555!3d5.962153896081931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f16088ef74b0d%3A0x1af7cdce9354f007!2sVILEN%20PHARMACY!5e0!3m2!1sen!2scm!4v1661965326468!5m2!1sen!2scm" frameborder="0" allowfullscreen></iframe>
            </div>
    
            <div class="row mt-5">
    
              <div class="col-lg-4">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Vilen Pharmacy | Ghana street, Bamenda | NW | Cameroon</p>
                  </div>
    
                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>admin@skye8.tech</p>
                  </div>
    
                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>(+237) 672 269 760</p>
                  </div>
    
                </div>
    
              </div>
    
              <div class="col-lg-8 mt-5 mt-lg-0">
    
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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
        </section><!-- End Contact Section -->
    
      </main><!-- End #main -->

    
    <!-- Back to top button -->
    <button
    type="button"
    class="btn btn-outline-primary btn-floating btn-md"
    id="btn-back-to-top"
    >
    <i class="bi bi-arrow-up"></i>
    </button>
    
        <!-- Footer -->
        <?php include './footer.php'; ?>




        <!-- Extras JS Files -->
    <script src="./../src/extras/swiper/swiper-bundle.min.js"></script>
    <script src="./../src/extras/php-email-form/validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" integrity="sha512-jgqnY5wi2gxl4Yj4iXEEpVWrBI6JeJQc67LVC/a65X/TeMotFC0veqlMqYHAI3FfS3hCdx5z6fqKFzXqdnKXDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- url for particle library used for background particle animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.1/particles.min.js"></script>
    <script src="./../src/js/script.js"></script>
    <script src="./../src/js/about.js"></script>
    <script src="./../src/js/services.js"></script>
</body>
</html>
