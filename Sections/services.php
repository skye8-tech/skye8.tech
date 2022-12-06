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
    
    <title>Services Section | Skye8</title>
</head>
<body class="d-flex flex-column min-vh-100 p-0">

<?php include './header.php'; ?>


    <div class="container-fluid bg-services text-center mb-4 p-5 text-light-blue">
        <h1>Services</h1>
    </div>

    <!-- <section class="container p-4 shadow-lg mb-5">
        <div class="row row-cols-1 d-md-flex align-items-sm-center justify-content-center gap-4 mt-5">
                <div class="animate shadow-lg border-0 col-sm-5 col-lg-3 card text-bg-light text-center">
                  <div class="p-2 fs-1"><i class="bi bi-book text-danger"></i></div>
                    <h5 class="card-title text-center">Our services to Schools</h5>
                    <p>Providing a school management system alongside a report card management. Staff IT training and online / distant training is part of our suit.</p>
                </div>
              <div class="animate shadow-lg border-0 col-sm-5 col-lg-3 card text-bg-light text-center">
                <div class="p-2 fs-1"><i class="bi bi-hospital text-danger"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Our Services to Health Facilities</h5>
                  <p>We provide computerized systems for hospitals, that facilitates their management and give medical personnel easy access to patient records, manage finances, pharmacy and other hospital units.</p>
                </div>
              </div>
              <div class="animate shadow-lg border-0 col-sm-5 col-lg-3 card text-bg-light text-center">
                <div class="p-2 fs-1"><i class="bi bi-cash-coin text-danger"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Our Services to Financial Institutions.</h5>
                  <p class="card-text">We develop strong financial technology software that facilitates financial transactions online, records systems adn general management of the affairs of financial institutions and their users.</p>
                </div>
              </div>
              <div class="animate shadow-lg border-0 col-sm-5 col-lg-3 card text-bg-light text-center">
                <div class="p-2 fs-1"><i class="bi bi-airplane text-danger"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Our Services to the Transport Sector</h5>
                  <p class="card-text">We develop logistic and transport management systems and also online booking services.</p>
                </div>
              </div>
              <div class="animate shadow-lg border-0 col-sm-5 col-lg-3 card text-bg-light text-center">
                <div class="p-2 fs-1"><i class="bi bi-wallet text-danger"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Our services to Business Enterprises.</h5>
                  <p class="card-text">We automate various business processes, include robust AI mechanisms that help in market prediction and also aid in accurate and fast decision making process.</p>
                </div>
              </div>
              <div class="animate shadow-lg border-0 col-sm-5 col-lg-3 card text-bg-light text-center">
                <div class="p-2 fs-1"><i class="bi bi-heart-pulse text-danger"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Our Services to NGO</h5>
                    <p>We develop websites including management systems, collect and analyze data and widening the public scope of the NGO.</p>
                </div>
              </div>
        </div>
    </section> -->

    <section class="container p-4 shadow-lg mb-5">
      <div class="row row-cols-1 d-md-flex align-items-sm-center justify-content-center gap-4 mt-5">
        <div class="card pb-4 text-center">
          <span class="text-primary fas fa-school mt-3"></span>
          <p class="h4">Our services to Schools</p>
          <p class="p1 text-muted">
            Providing a school management system alongside a report card management. Staff IT training and online / distant training is part of our suit.
          </p>
          <a href="./contact.php" class="btn btn-primary fas fa-arrow-right"></a>
        </div>
        <div class="card pb-4 text-center">
          <span class="text-primary fas fa-hospital mt-3"></span>
          <p class="h4">Our Services to Health Facilities</p>
          <p class="p1 text-muted">
            We provide computerized systems for hospitals, that facilitates their management and give medical personnel easy access to patient records, manage finances, pharmacy and other hospital units.
          </p>
          <a href="./contact.php" class="btn btn-primary fas fa-arrow-right"></a>
        </div>
        <div class="card pb-4 text-center">
          <span class="text-primary fas fa-money-bill mt-3"></span>
          <p class="h4">Our Services to Financial Institutions</p>
          <p class="p1 text-muted">
            We develop strong financial technology software that facilitates financial transactions online, records systems adn general management of the affairs of financial institutions and their users.
          </p>
          <a href="./contact.php" class="btn btn-primary fas fa-arrow-right"></a>
        </div>
        <div class="card pb-4 text-center">
          <span class="text-primary fas fa-plane-departure mt-3"></span>
          <p class="h4">Our Services to the Transport Sector</p>
          <p class="p1 text-muted">
            We develop logistic and transport management systems and also online booking services.
          </p>
          <a href="./contact.php" class="btn btn-primary fas fa-arrow-right"></a>
        </div>
        <div class="card pb-4 text-center">
          <span class="text-primary fas fa-code mt-3"></span>
          <p class="h4">IT & Graphic Design Training Services</p>
          <p class="p1 text-muted">
            We offer IT and Graphic design training to individuals and institutions.
          </p>
          <a href="./contact.php" class="btn btn-primary fas fa-arrow-right"></a>
        </div>
        <div class="card pb-4 text-center">
          <span class="text-primary fas fa-business-time mt-3"></span>
          <p class="h4">Our services to Business Enterprises</p>
          <p class="p1 text-muted">
            We automate various business processes, include robust AI mechanisms that help in market prediction and also aid in accurate and fast decision making process.
          </p>
          <a href="./contact.php" class="btn btn-primary fas fa-arrow-right"></a>
        </div>
        <div class="card pb-4 text-center">
          <span class="text-primary fas fa-hands-helping mt-3"></span>
          <p class="h4">Our Services to NGO</p>
          <p class="p1 text-muted">
            We develop websites including management systems, analyzing collected data and widening the NGO's public scope.
          </p>
          <a href="./contact.php" class="btn btn-primary fas fa-arrow-right"></a>
        </div>
      </div>
  </section>


    <!-- ======= Contact Section ======= -->
    <?php include './contact-section.php'; ?>
    <!-- End Contact Section -->

    
    <!-- Back to top button -->
    <button
    type="button"
    class="btn btn-outline-primary btn-floating btn-md"
    id="btn-back-to-top"
    >
    <i class="bi bi-arrow-up"></i>
    </button>
    
       <?php include './footer.php'; ?>
    
    <!-- Extras JS Files -->
    <script src="../src/extras/swiper/swiper-bundle.min.js"></script>
    <script src="../src/extras/php-email-form/validate.js"></script>
    
    <script src="../src/js/script.js"></script>
    <script src="../src/js/services.js"></script>
    <script src="../src/js/about.js"></script>
</body>
</html>
