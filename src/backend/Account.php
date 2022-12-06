<?php
// create user class and methods
include_once './Connection.php';
class User {
    private $conn;
    private $username;
    private $password;
    private $password_repeat;
    private $email;
    
    public function __construct() {
        $connection = connect();
        $this->conn = $connection;
    }
    
    public function logout(){
        //check if user is logged in
        if(isset($_SESSION['username'])){
            //unset session
            session_unset();
            session_destroy();
            //redirect to login page
            header('Location: index.php');
        }
        else{
            //redirect to login page
            header('Location: .');
        }
    }
    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        $users = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }
    
    public function getUser($id) {
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        }
        return $user;
    }
    
    public function createUser($username, $password, $email, $fullname) {
        if($this->password != $this->password_repeat) {
            echo "Passwords do not match";
            return false;
        }
        else{
            $sql = "INSERT INTO users (username, password, email, fullname) VALUES ('$username', '$password', '$email', '$fullname')";
            $result = $this->conn->query($sql);
            return $result;
        }
    }
    

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        }

        $u = $this->getUserByUsername($username);
        if(count($u)>0){
            $_SESSION['userid'] = $u['id'];
        }
        return $user;
    }

    // define setters and getters
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword_repeat($password_repeat) {
        $this->password_repeat = $password_repeat;
    }
    public function getPassword_repeat() {
        return $this->password_repeat;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }
    public function getFullname() {
        return $this->fullname;
    }

    public function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        }
        return $user;
    }

    public function getUserByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        }
        return $user;
    }

    public function contact($name, $email, $message, $subject) {
        $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
        $result = $this->conn->query($sql);
        
        if($result){
            $headers = "From: ".$email;
			$txt = "You have received an email from ".$name.".\n\n".$message;
            $to = "nfonandrew73@gmail.com";
			if(mail($to,$subject,$txt,$headers)){
				return true;
			}
			else{
				return false;
			}
        }
        else{
            return false;
        }
    }

    public function getMessages() {
        $sql = "SELECT * FROM contacts";
        $result = $this->conn->query($sql);
        $messages = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $messages[] = $row;
            }
        }
        return $messages;
    }

}


