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

<?php include './header.php'; 
		include '../src/backend/Blog.php';
		$blog = new Blog();


		$id = $_GET['id'];
		$blogpost = $blog->getPostBySlug($id);

?>


    <div class="container-fluid bg-services text-center mb-4 p-5 text-light-blue">
        <h1>Blog </h1>
    </div>

	<div class="container-fluid">
		<div class="flex flex-wrap">
			<div class="w-full md:w-1/2 lg:w-1/3 p-4">
				<div class="bg-white rounded-lg shadow-lg p-4">
					<!-- blog image -->
					<div class="h-64 overflow-hidden rounded-lg">
						<img class="h-full w-full object-cover object-center" src="../src/backend/<?php echo $post['image']; ?>" alt="blog">
					</div>
					<div class="flex flex-col justify-between flex-1">
						<h5 class="text-xl font-bold mb-2"><?php echo $blogpost['title']; ?></h5>
						<p class="text-gray-700 text-base"><?php echo $blogpost['content']; ?></p>
					</div>

					<!-- like and comment icon -->
					<div class="flex justify-between items-center mt-4">
						<div class="flex items center">
							<div class="flex items center mr-4">
								<!-- font awesome like icon -->
								<i class="fas fa-thumbs-up"></i>
								<span class="text-gray-700 text-sm ml-2"><?php echo $blogpost['likes']; ?></span>
							</div>
							<div class="flex items center">
								<!-- font awesome comment icon -->
								<i class="fas fa-comment"></i>
								<span class="text-gray-700 text-sm ml-2"><?php echo $blogpost['comments']; ?></span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

		</div>
		</div>
      </div>	
	<?php include './footer.php'; ?>
    <script src="../src/extras/swiper/swiper-bundle.min.js"></script>
    <script src="../src/extras/php-email-form/validate.js"></script>
    
    <script src="../src/js/script.js"></script>
    <script src="../src/js/services.js"></script>
    <script src="../src/js/about.js"></script>
</body>
</html>