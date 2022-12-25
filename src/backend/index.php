<!-- html login page -->
<?php 
session_start();
 if (isset($_SESSION['username'])) { 
    header("Location: dashboard");
} ?>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
<!-- bootstrap 4 cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container w-25">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8 justify-content-center">
                            <a href="#login-form" class="active" id="login-form-link" onclick="hideLogin()">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#register-form" id="register-form-link" onclick="showRegister()">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <?php  if (isset($_GET['error'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <span class="error">
                                        <?php 
                                        $msg = $_GET['error'];
                                        echo str_replace("-", " ", $msg); 
                                        // clear error message after 5 seconds
                                        header("refresh:5;url=.");
                                         ?></span>
                                </div>
                                <?php } ?>
                            <form id="login-form" action="useraction" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group m-auto">
                                    <button type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-primary">Log In</button>
                                </div>
                            </form>
                            <form id="register-form" class="form" action="useraction" method="post" role="form" style="display: none; ">
                                 <div class="form-group">
                                    <input type="text" name="fullname" id="fullname" tabindex="1" class="form-control" placeholder="Full Name" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_repeat" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group m-auto">
                                    <button type="submit" name="register-submit" id="login-submit" tabindex="4" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bootstrap cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/login.js"></script>
</body>

<script>
    function showRegister() {
        document.getElementById("register-form").style.display = "none";
        document.getElementById("login-form").style.display = "none";
        // replace the register for with a div
        document.getElementById("register-form").innerHTML = "<div class='alert alert-warning card-body' role='alert'>Registration is currently disabled. Please contact the administrator.</div>";
        document.getElementById("register-form").style.display = "block";




        }

    function hideLogin() {
        document.getElementById("register-form").style.display = "none";
        document.getElementById("login-form").style.display = "block";
        }
</script>
