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

<?php include './header.php'; 
    include '../src/backend/User.php';
    include '../src/backend/Blog.php';
    $blogpost = new Blog();
    $user = new User();
    $posts = $blogpost->getAllPosts();


?>

    <div class="container-fluid bg-services text-center p-5 text-light-blue">
        <h1>Our Blog</h1>
    </div>



    <main id="main">

       <!-- blog section -->
        <section class="blog-section">
          <div class="container">
              <div class="row">
                
                <?php 
                if(count($posts) > 0){
                  foreach($posts as $post){

                ?>
                  <div class="col-md-4">
                      <div class="blog-item">
                          <div class="blog-img">
                              <img src="../src/backend/<?php echo $post['image']; ?>" alt="image" class="img-fluid w-100">
                          </div>
                          <div class="blog-text">
                              <h2 class="blog-title"><?php echo $post['title']; ?></h2>
                              <div class="blog-meta">
                                  <span><i class="fa fa-user"></i> <?php echo $user->getUserName($post['user_id']); ?></span>
                                  <span><i class="fa fa-clock-o"></i> 5 min</span>
                                  <span><i class="fa fa-calendar"></i> <?php echo $post['date']; ?></span>
                              </div>
                              <p>
                                <?php echo $post['content']; ?>
                                <form action="../src/backend/useraction.php" method="GET">
                                  <input type="hidden" value="<?php echo $post['slug']; ?>" name="postid">
                                  <button type="submit" name='blog-single' class="btn btn-secondary" style="color: white; text-decoration: none"> View More</button>
                                </form>
                              </p>
                          </div>
                      </div>
                  </div>
                  <?php }} ?>
                  
              </div>
          </div>
      </section>
      <!-- blog section end -->
    
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
