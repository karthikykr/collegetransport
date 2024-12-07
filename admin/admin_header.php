<?php
// Get the current script name to dynamically show/hide links
$current_page = basename($_SERVER['PHP_SELF']);
// Database inclusion (if needed)
// include('.../db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport</title>
    <link rel="stylesheet" href="../styles/style_header.css">
    <link rel="stylesheet" href="../styles/user_profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!-- Font Awesome for icons -->
</head>

<body>

    <!-- Top Navbar -->
    <div class="topbar">
        <div class="divgrp">
            <div class="sidebar-toggle" id="sidebarToggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div class="logo-section">
                <img src="../Assets/SJECLogo.png" alt="College Logo" class="logo">
            </div>
        </div>
        <div class="search-bar">
            <h2>ST JOSEPH ENGINEERING COLLEGE MANGALORE</h2><br>
            <center><h3>AN AUTONOMOUS INSTITUTION</H3><center>
        </div>
        <div class="divgrp">
            <div class="profile-section" id="userInfoToggle">
                <img src="../Assets/image.png" class="profile" alt="Profile">
            </div>
        </div>
    </div>

    <!-- User Info
    <div class="user-info" id="userInfo">
        <h1>Name</h1>
        <h2>Department</h2>
        <h2>Role</h2>
    </div> -->

    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
        <ul class="sidebar-links">
            <!-- Admin Dashboard Links -->
                <li><a href="../admin/admin_home.php" class="active"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li><a href="../admin/add_user.php"><i class="fa fa-user-plus"></i> <span>Add User</span></a></li>
                <li><a href="../admin/add_vehicle.php"><i class="fa fa-car">+</i><span>Add Vehicle</span></a></li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <main class="main-content">
    <div id="user-info" class="hidden">
    <div class="user-profile-section">
        <img src="../Assets/image.png" class="user-profile" alt="Profile">
        <h3 class="user-name">John Doe</h3>
        <p class="user-email">john.doe@example.com</p>
    </div>
    <div class="line"></div>
    <div class="user-details">
        <p><strong>Department:</strong> IT</p>
        <p><strong>Role:</strong> Administrator</p>
    </div>
    <div class="line"></div>
    <div class="logoutbtn">
        <button class="change-password" onclick="location.href='change_pass_admin.php'">
            <i class="fa-solid fa-key"></i>
            <span class="logout-text">Change Password</span>
        </button>
        <button class="logout-btn" onclick="location.href='../loginpage/login.php'">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="logout-text">Logout</span>
        </button>
    </div>
</div>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sidebarToggle = document.getElementById("sidebarToggle");
            const sidebar = document.getElementById("sidebar");
            const userInfoToggle = document.getElementById("userInfoToggle");
            const userInfo = document.getElementById("user-info");

            // Toggle sidebar on sidebar toggle click
            sidebarToggle.addEventListener("click", () => {
                sidebar.classList.toggle("collapsed");
                sidebar.classList.toggle("visible");
            });
            userInfoToggle.addEventListener("click", () => {
            userInfo.classList.toggle("hidden");
            userInfo.classList.toggle("visible");
        });
        });

    
    </script>
</body>

</html>
