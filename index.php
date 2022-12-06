<?php
include './src/backend/Blog.php';

$blogs = new Blog();
$allBlogs = $blogs->getAllPosts();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Style and Script -->
    <!-- Offline -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core" defer>
    <!-- User defines Style -->
    <link rel="stylesheet" href="./src/css/style.css">
    
    <title>Live The Future | Skye8</title>
</head>

<body class="overflow-hidden">
    <header class="menu overflow-hidden">
        <nav class="navbar bg-transparent fixed-top">
            <div class="container-fluid container-lg">
                <a class="navbar-brand link-light fs-3 fw-bold" href="./index.html">SKYE8</a>
                <button class="navbar-toggle border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="bi bi-list fw-bolder text-light fs-1"></span>
                </button>
    
                    <div  class="offcanvas w-100 offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                                    <div class="container offcanvas-header">
                
                                        <h5 class="offcanvas-title fs-3 fw-bold" id="offcanvasNavbarLabel"><a href="./index.html">SKYE8</a></h5>
                
                        <button type="button" class="bi bi-x-lg bg-transparent fs-2 border-0 close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="container offcanvas-body  d-flex flex-column justify-content-evenly">
                        <div class="row">
                            <div class="col-md-4 d-none d-md-block h-100"></div>
                            <div class="no-overflow col-md-3 offset-md-5">
                                <ul class="nav navbar-nav animate-nav-items  justify-content-end align-items-end flex-grow-1 py-2 pe-2 fs-2 overflow-hidden"
                                    xyz="down-100%">
                                    <li class="nav-item invisible">
                                        <a class="nav-link active" aria-current="page" href="./Sections/about.php">About Us</a>
                                    </li>
                                    <li class="nav-item invisible">
                                        <a class="nav-link link-secondary opacity-100" href="./Sections/services.php">Services</a>
                                    </li>
                                    <li class="nav-item invisible">
                                        <a class="nav-link link-secondary opacity-100" href="./Sections/projects.php">Projects</a>
                                    </li>
                                    <li class="nav-item invisible">
                                        <a class="nav-link link-secondary opacity-100" href="./Sections/blog.php">Blog</a>
                                    </li>
                                    <li class="nav-item invisible">
                                        <a class="nav-link link-secondary opacity-100" href="./Sections/contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item invisible">
                                        <a class="nav-link link-secondary opacity-100" href="#">Internship</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-lg social-media invisible" xyz="fade flip-up origin-bottom stagger-rev-2 delay-20">
                                <div class="social-links d-flex fs-3 gap-3">
                                    <a class="xyz-nested" href="/"><span class="bi bi-twitter link-secondary opacity-100"></span></a>
                                    <a class="xyz-nested" href="/"><span class="bi bi-instagram link-secondary opacity-100"></span></a>
                                    <a class="xyz-nested" href="/"><span class="bi bi-linkedin link-secondary opacity-100"></span></a>
                                    <a class="xyz-nested" href="/"><span class="bi bi-facebook link-secondary opacity-100"></span></a>
                                    <a class="xyz-nested" href="/"><span class="bi bi-whatsapp link-secondary opacity-100"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
        
        <!-- Hero section, bg imgs and carousel -->
        <div class="container-fluid h-100 w-100 p-0">
            <div class="row hero g-0 position-relative">
                <div class="col-lg-5 col-12 hero-left">
                    <img class="" src="./src/images/back.jpg" alt="">
                </div>
                <div class="col-lg-7 col-12 hero-right d-flex justify-content-center align-content-center align-items-center">
                    <div id="carouselExampleCaptions" class="carousel w-100 slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>
                        <!-- use php to show a list of blogs -->

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="fake-img"></div>
                                <div class="carousel-caption">
                                    <div class="slide-text-content">
                                        <h5 class="text-muted anime-text">BLOG TITLE 1</h5>
                                        <div class="w-100 my-1">
                                            <p class="fs-4 anime-text">Welcome to the world of technology, at Skye8, we offer you just the best ...</p>
                                        </div>
                                        <a href="" class="link-secondary text-decoration-none anime-text">MORE BLOG POSTS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="fake-img w-100"></div>
                                <div class="carousel-caption">
                                    <div class="slide-text-content">
                                        <h5 class="text-muted anime-text">BLOG TITLE 2</h5>
                                        <div class="w-100 my-1">
                                            <p class="fs-4 anime-text">Welcome to the world of technology, at Skye8, we offer you just the best ...</p>
                                        </div>
                                        <a href="" class="link-secondary text-decoration-none anime-text">MORE BLOG POSTS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="fake-img w-100"></div>
                                <div class="carousel-caption" data-bg="true">
                                        <div class="slide-text-content">
                                            <h5 class="text-muted anime-text">BLOG TITLE 3</h5>
                                            <div class="w-100 my-1">
                                                <p class="fs-4 anime-text">Welcome to the world of technology, at Skye8, we offer you just the best ...</p>
                                            </div>
                                            <a href="" class="link-secondary text-decoration-none anime-text">MORE BLOG POSTS</a>
                                        </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="fake-img w-100"></div>
                                <div class="carousel-caption" data-bg="true">
                                        <div class="slide-text-content">
                                            <h5 class="text-muted anime-text">BLOG TITLE 4</h5>
                                            <div class="w-100 my-1">
                                                <p class="fs-4 anime-text">Welcome to the world of technology, at Skye8, we offer you just the best ...</p>
                                            </div>
                                            <a href="" class="link-secondary text-decoration-none anime-text">MORE BLOG POSTS</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <button class="navigators position-absolute bg-transparent border-0" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="navigators position-absolute bg-transparent border-0" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436720/particles.js"></script>
    <script src="./src/js/script.js"></script>
    <script src="./src/js/particle.js"></script>
</body>
</html>
