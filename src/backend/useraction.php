<?php

session_start();
include '../backend/Connection.php';
include '../backend/Blog.php';
include '../backend/User.php';
$user = new User();
$blog = new Blog();



if(isset($_POST['register-submit'])) {

    $user->setEmail($_POST['email']);
    $user->setFullname($_POST['fullname']);
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setPassword_repeat($_POST['password_repeat']);
    if($user->createUser($user->getEmail(), $user->getPassword(), $user->getPassword_repeat(), $user->getFullname())) {
        return header("Location: ../index?success=true");
    }
    else {

        return header("Location: ./index?success=false");
    }
}elseif(isset($_POST['login-submit'])){
    $password = $_POST['password'];
    $username = $_POST['username'];
    if($user->login($username, $password)){
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        return header("location: ./dashboard?success");
    }else{
        header("Location: ./index?error=wrong-username-or-password");
    }
}
elseif(isset($_POST['blog-submit'])){
    $blog->setTitle($_POST['title']);
    $blog->setContent($_POST['content']);
    $blog->setImage($_FILES['image']);
    $blog->setVid($POST['url']);
    $author = $_SESSION['userid'];

        if($file_name = $blog->uploadImage($blog->getImage())){
            if($blog->createPost($blog->getTitle(), $blog->getContent(), $author, $file_name, $blog->getVid())){
                return header("Location: ./dashboard?success");
            }else{
                echo "POST ERROR";
            }
        }else{
            echo "IMAGE ERROR";
        }
}

elseif(isset($_POST['edit-blog-submit'])){
    $slug = $_POST['slug'];
    $blog->setTitle($_POST['title']);
    $blog->setContent($_POST['content']);
    $blog->setImage($_FILES['image']);
    $blog->setVid($POST['url']);
    $author = $_SESSION['userid'];
    
    if($blog->getImage() == NULL){
         if($blog->updatePost($slug, $blog->getTitle(), NULL, $blog->getContent(), $blog->getVid())){
            return header("Location: ./dashboard?success");
        }else{
            echo "POST ERROR";
        }
    }
    else{
         if($file_name = $blog->uploadImage($blog->getImage())){
            if($blog->updatePost($slug, $blog->getTitle(), $file_name, $blog->getContent(), $blog->getVid())){
                return header("Location: ./dashboard?success");
            }else{
                echo "POST ERROR";
            }
        }else{
            echo "IMAGE ERROR";
        }

    
    }
}


elseif(isset($_POST['logout-submit'])){
    $user->logout();    
}

elseif(isset($_POST['blog-delete'])){
    //call the user logout function
    $id = $_POST['id'];
    $post = new Blog();
    if($post->deletePost($id) == True){
        header("Location: ./all-posts?id=success");
    }    
    else{
        header("Location: ./all-posts?id=error");
    }
}
elseif(isset($_GET['blog-single'])){
    $id = $_GET['postid'];
     header("Location: ../../Sections/single-blog?id=$id");
}
elseif(isset($_POST['contact-submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    echo "$name, $email, $subject, $message";
    if($user->contact($name, $email, $message, $subject)){
        $_SESSION['message'] = "Thank you for contacting us. We will get back to you shortly";
         header("Location:". $_SERVER['HTTP_REFERER']);
    }
    else{
        $_SESSION['error'] = "There was an error sending your message. Please try again later";
        header("Location:". $_SERVER['HTTP_REFERER']);
    }
}
elseif(isset($_POST['newsletter-submit'])){
    $email = $_POST['email'];
    if($user->subscribeToNewsletter($email)){
        $_SESSION['message'] = "Thank you for subscribing to our newsletter";
         header("Location:". $_SERVER['HTTP_REFERER']);
    }
    else{
        $_SESSION['error'] = "There was an error subscribing to our newsletter. Please try again later";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
}
else{
    return header("Location: ./unauthorized?error=unauthorized");
}

