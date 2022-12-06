<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Style and Script -->
    <!-- Offline -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!-- User defines Style -->
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/services.css">
    <link rel="stylesheet" href="../src/css/about.css">

      <!-- Extras CSS Files -->
  <link href="../src/extras/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <title>Contact Section | Skye8</title>
</head>
<body class="d-flex flex-column min-vh-100 p-0">
    <?php include './header.php'; ?>


    <div class="container-fluid bg-services text-center p-5 text-light-blue">
        <h1>Contact Us</h1>
    </div>



    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">
    
            <div class="section-title">
              <p>Our team is ready to implement your ideas.
                Contact us now to discuss your roadmap!</p>
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
    
                <form action="../src/backend/useraction.php" method="POST">
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
                  
                  <button type="submit" name="contact-submit">Send Message</button>
                </form>

                <div class="my-3">
                      <?php
                        if(isset($_SESSION['message'])){
                          ?>
                          <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION['message']; ?>
                            <?php unset($_SESSION['message']); ?>

                          </div>
                          <?php
                        }
                        if(isset($_SESSION['error'])){
                          ?>
                          <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['error']; ?>
                            <?php unset($_SESSION['error']); ?>
                          </div>
                          <?php
                        }
                      ?>

                  </div>
    
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
    <script src="../src/extras/swiper/swiper-bundle.min.js"></script>
    <script src="../src/extras/php-email-form/validate.js"></script>

    <script src="../src/js/script.js"></script>
    <script src="../src/js/services.js"></script>
    <script src="../src/js/about.js"></script>
</body>
</html>
