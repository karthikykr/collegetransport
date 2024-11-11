
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
            <form action="login_backend.php" method="POST">
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