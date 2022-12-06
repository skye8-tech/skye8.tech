<!DOCTYPE html>
<?php
include './Connection.php';
include './Blog.php';
include './Account.php';

$post = new Blog();
$user = new User();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
     
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    .flex-container {		
            display: flex;
            background: #eee;
            }
            .item {
                padding: 10px;
            }
            .ml-auto {
                margin-left: auto;
        }
        .card{
            background-color: gray;
            color: white;
            padding: 40px;
            margin: 2%;
        }
    </style>
</head>
<body>

<div class="flex-container">
        <div class="item"><a href="#">Bawash</a></div>
        <div class="item ml-auto"><a href="#"><h4 style="color:blue">
                <?php session_start();
                if($_SESSION){
                    echo "Hi " . $_SESSION['username'];
                }
                ?>
            </h4></a></div>
    </div>
    
    <?php if(isset($_GET['success'])){ ?>
        <div class="alert alert-success">
            <span>Post Successfully uploaded</span>
        </div>
        <?php } ?>
    
    
<!-- design dashboard -->
<div class="container m-auto" style="text-align: center;">
    <div class="row">
        <div class="col-md-5 ">
            <h1>Dashboard</h1>
           
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3>Total Users</h3>
                    <h1><?php
                    $users = $user->getAllUsers();
                    echo count($users);
                    ?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <a class="card-body text-white" href="all-posts.php">
                    <h3>Total Posts</h3>
                    <h1>
                      <?php if($post->getAllPosts() == "No posts found"){
                        echo $post->getAllPosts();
                    }
                    else{
                        echo count($post->getAllPosts());
                    }  ?>
                    </h1>
                </a>
            </div>
        </div>
    </div>
</div>'
 <div class="row justify-content-center">
        <a class="btn btn-primary m-3" style="width: 200px" href="https://bawash.org">Go To Website</a>
        <a class="btn btn-primary m-3" style="width: 200px" href="./addblog.php">Add Blog</a>
    </div>

</body>
</html>