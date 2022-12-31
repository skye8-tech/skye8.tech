<!DOCTYPE html>
<?php
include './Connection.php';
include './Blog.php';
include './User.php';

$post = new Blog();
$user = new User();

if(!isset($_SESSION['username'])){
    // get the ip address of the user
    $ip = $_SERVER['REMOTE_ADDR'];
    // get the user agent of the user
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    // get the current time
    $time = date("Y-m-d H:i:s");
    // get the current page
    $page = $_SERVER['PHP_SELF'];
    header("Location: ./unauthorized?ip=$ip&user_agent=$user_agent&time=$time");
    
}
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
        <div class="item"><a href="#">SKYE8</a></div>
        <div class="item ml-auto"><a href="#"><h4 style="color:blue">
                <?php 
                if($_SESSION){
                    echo "Hi " . $_SESSION['username'];
                }
                ?>
            </h4></a>
            <!-- logout -->
            <form action="./useraction.php" method="post">
                <button type="submit" name="logout-submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

    </div>
    
    <?php if(isset($_GET['success'])){ ?>
        <div class="alert alert-success">
            <span><?php echo $_GET['success']; ?></span>
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
        <div class="col-md-4">
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
        <div class="col-md-4">
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

        <div class="col-md-4">
            <div class="card">
                <a class="card-body text-white" href="all-messages.php">
                    <h3>Total Messages</h3>
                    <h1><?php
                        echo count($user->getMessages());?>
                    </h1>
                </a>
            </div>
        </div>
    </div>
</div>'
 <div class="row justify-content-center">
        <a class="btn btn-primary m-3" style="width: 200px" href="https://SKYE8.org">Go To Website</a>
        <a class="btn btn-primary m-3" style="width: 200px" href="./addblog.php">Add Blog</a>
    </div>

</body>
</html>