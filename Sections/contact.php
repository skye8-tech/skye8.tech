<?php if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Style and Script -->
    <!-- Offline -->
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- User defines Style -->
    <link rel="stylesheet" href="./../src/css/style.css">
    <link rel="stylesheet" href="./../src/css/services.css">
    <link rel="stylesheet" href="./../src/css/about.css">

      <!-- Extras CSS Files -->
  <link href="./../src/extras/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <title>Contact Section | Skye8</title>
</head>
<body class="d-flex flex-column min-vh-100 p-0">
    <?php include './header.php'; ?>

    <?php include './contact-section.php'; ?>
    
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

    <!-- url for particle library used for background particle animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.1/particles.min.js"></script>
    
    <script src="./../src/js/script.js"></script>
    <script src="./../src/js/services.js"></script>
</body>
</html>
