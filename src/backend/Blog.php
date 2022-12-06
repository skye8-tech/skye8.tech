<?php
include_once 'Connection.php';

class Blog {
    private $conn;
    private $title;
    private $content;
    private $author;
    private $image;
    private $date;
    private $video_url;
    
    public function __construct() {
        $connection = connect();
        $this->conn = $connection;
    }
    
     public function getAllPosts() {
        $sql = "SELECT posts.id as postid, users.id as userid, posts.title, posts.content, posts.image, posts.date, posts.video_url, posts.slug FROM posts INNER JOIN users ON users.id = posts.userid";
        $result = $this->conn->query($sql);
        $posts = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }
        else{
            $posts =  "No posts found";
        }
        return $posts;
    }
    

    public function getPost($id) {
        $sql = "SELECT * FROM posts WHERE id='$id'";
        $result = $this->conn->query($sql);
        $post = array();
        if ($result->num_rows > 0) {
            $post = $result->fetch_assoc();
        }
        return $post;
    }
    
    public function getPostBySlug($slug) {
        $sql = "SELECT * FROM posts WHERE slug='$slug'";
        $result = $this->conn->query($sql);
        $post = array();
        if ($result->num_rows > 0) {
            $post = $result->fetch_assoc();
        }
        return $post;
    }

    public function createPost($title, $content, $author, $image, $video_url) {
        $slug = $this->createUrlSlug($title);
        $sql = "INSERT INTO posts (title, content, userid, date, image, video_url, slug) VALUES ('$title', '$content', '$author', NOW(), '$image', '$video_url', '$slug')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
        
    }

    public function updatePost($slug, $title, $filename, $content, $video_url) {
        $sql = "UPDATE posts SET title='$title', content='$content', image='$filename', video_url='$video_url' WHERE slug='$slug'";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    
    public function createUrlSlug($urlString)
        {
          $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
          return $slug;
        }


    public function deletePost($id) {
        $sql = "DELETE FROM posts WHERE id='$id'";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getUser($id){
        $sql = "SELECT username FROM users WHERE id=$id";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        }
        return $user;
    }

    // setters and getters
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getDate() {
        //return todays date
        return date("Y-m-d");
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }
    
    public function getVid(){
        return $this->video_url;
    }

    public function setVid($video_url){
        $this->video_url = $video_url;
    }
    

    function uploadImage($file){
        $target_dir = "../images/";
        $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($file["tmp_name"]);
            if($check !== false) {
                $message = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $message = "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $message = "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($file["size"] > 500000) {
            $message = "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $message =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $message =  "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
               return $target_file;
            } else {
                return false;
            }
        }
    }
}