<?php
// // Start output buffering
// ob_start();

// // Start session
session_start();

// Enable error reporting for debugging
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// // Database credentials
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "user_management";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include('../db.php');
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from form
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Query to check if the user exists
    $sql = "SELECT `id`, `name`, `department`,`email`,`password`, `role` FROM `users` WHERE `email` = '$email'";
    $result = $conn->query($sql);

     

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        echo $user['password'];
        echo $email,$user['id'];
        // Verify password
        // Use password_verify() if the password is hashed
        // if (password_verify($password, $user['password']))
        if ($password === $user['password']) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['department'] = $user['department'];
            $_SESSION['email'] = $user['email'];

            // Redirect based on role
            if ($user['role'] == 'admin') {
                header("Location: ../admin/admin_home.php");
                exit();
            } elseif ($user['role'] == 'hod') {
                header("Location: ../user_home/home.php");
                exit();
            }elseif($user['role'] == 'faculty'){
                header("Location: ../user_home/home.php");
                exit();
            }elseif($user['role'] == 'principal'){
                header("Location: ../user_home/home.php");
                exit();
            }elseif($user['role'] == 'assistant director'){
                header("Location: ../user_home/home.php");
                exit();
            }elseif($user['role'] == 'director'){
                header("Location: ../user_home/home.php");
                exit();
            } else {
                echo "Invalid password.";
            }
    } else {
        echo "No user found with that email.";
    }
}

}

$conn->close();

// End output buffering and flush the buffer
ob_end_flush();
?>