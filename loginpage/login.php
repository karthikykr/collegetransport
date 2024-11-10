<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="../Assets/logo.jpg" alt="Logo">
                <h2>St Joseph Engineering College</h2>
            </div>
            <form action="login.php" method="POST">
                <h3>Login</h3>
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>


<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from form
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];


    // Query to check if the user exists
    $sql = "SELECT id, password, role FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Verify password

        //if (password_verify($password, $user['password']))  if the passsword is hashed this function should be used

        if (($password === $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];

            // Redirect based on role
            if ($user['role'] == 'admin') {
                header("Location: admin_panel.php");
            } else {
                header("Location: user_panel.php");
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
}
$conn->close();
