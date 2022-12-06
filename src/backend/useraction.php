<?php

session_start();
include '../backend/Connection.php';
include '../backend/Blog.php';
include '../backend/Account.php';


if(isset($_POST['register-submit'])) {

    $user = new User();
    $user->setEmail($_POST['email']);
    $user->setFullname($_POST['fullname']);
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setPassword_repeat($_POST['password_repeat']);
    if($user->createUser($user->getEmail(), $user->getPassword(), $user->getPassword_repeat(), $user->getFullname())) {
        return header("Location: ../index.php?success=true");
    }
    else {

        return header("Location: ./index.php?success=false");
    }
}elseif(isset($_POST['login-submit'])){
    $user  = new User();
    $password = $_POST['password'];
    $username = $_POST['username'];
    if($user->login($username, $password)){
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        return header("location: ./dashboard.php?success");
    }else{
        header("Location: ./index.php?error");
    }
}
elseif(isset($_POST['logout-submit'])){
    session_destroy();
    return header('Location: ../index.php');
}
elseif(isset($_POST['blog-submit'])){
    $blog = new Blog();
    $blog->setTitle($_POST['title']);
    $blog->setContent($_POST['content']);
    $blog->setImage($_FILES['image']);
    $blog->setVid($POST['url']);
    $author = $_SESSION['userid'];

        if($file_name = $blog->uploadImage($blog->getImage())){
            if($blog->createPost($blog->getTitle(), $blog->getContent(), $author, $file_name, $blog->getVid())){
                return header("Location: ./dashboard.php?success");
            }else{
                echo "POST ERROR";
            }
        }else{
            echo "IMAGE ERROR";
        }
}

elseif(isset($_POST['edit-blog-submit'])){
    $blog = new Blog();
    $slug = $_POST['slug'];
    $blog->setTitle($_POST['title']);
    $blog->setContent($_POST['content']);
    $blog->setImage($_FILES['image']);
    $blog->setVid($POST['url']);
    $author = $_SESSION['userid'];
    
    if($blog->getImage() == NULL){
         if($blog->updatePost($slug, $blog->getTitle(), NULL, $blog->getContent(), $blog->getVid())){
            return header("Location: ./dashboard.php?success");
        }else{
            echo "POST ERROR";
        }
    }
    else{
         if($file_name = $blog->uploadImage($blog->getImage())){
            if($blog->updatePost($slug, $blog->getTitle(), $file_name, $blog->getContent(), $blog->getVid())){
                return header("Location: ./dashboard.php?success");
            }else{
                echo "POST ERROR";
            }
        }else{
            echo "IMAGE ERROR";
        }

    
    }
}


elseif(isset($_POST['logout-submit'])){
    //call the user logout function
    $user = new User();
    $user->logout();    
}

elseif(isset($_POST['blog-delete'])){
    //call the user logout function
    $id = $_POST['id'];
    $post = new Blog();
    if($post->deletePost($id) == True){
        header("Location: ./all-posts.php?id=success");
    }    
    else{
        header("Location: ./all-posts.php?id=error");
    }
}
elseif(isset($_GET['blog-single'])){
    $id = $_GET['postid'];
    return header("Location: ../../Sections/single-blog.php?id=$id");
}
else{
    return header("Location: ./unauthorized.php?error=unauthorized");
}

