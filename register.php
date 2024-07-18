<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup-username'])) {
        $userName = $_POST['signup-username'];
        $email = $_POST['signup-email'];
        $password = $_POST['signup-password'];
        $role = $_POST['role'];
        $password = md5($password);

        $checkEmail = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($checkEmail);
        if ($result->num_rows > 0) {
            echo "Email Address Already Exists!";
        } else {
            $insertQuery = "INSERT INTO users (userName, email, password) VALUES ('$userName', '$email', '$password')";
            if ($conn->query($insertQuery) === TRUE) {
                header("Location: login.php"); 
                exit();
            } else {
                echo "Error: " . $conn->error;
            }
        }
    } elseif (isset($_POST['login-email'])) {
        
        $email = $_POST['login-email'];
        $password = $_POST['login-password'];
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "Incorrect Email or Password";
        }
    }
}
?>
