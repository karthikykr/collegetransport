<?php
session_start();
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
            <h2>St Joseph Engineering College, Vamanjoor - Mangalore</h2>
        </div>
        <div class="divgrp">
            <div class="profile-section">
                <img src="../Assets/image.png" class="profile" alt="Profile">
            </div>
            <div class="logoutbtn">
                <button class="logout-btn" onclick="location.href='../loginpage/login.php'">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="logout-text">Logout</span>
                </button>
            </div>
        </div>
    </div>

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
        <!-- Your content goes here -->
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sidebarToggle = document.getElementById("sidebarToggle");
            const sidebar = document.getElementById("sidebar");

            // Toggle sidebar on sidebar toggle click
            sidebarToggle.addEventListener("click", () => {
                sidebar.classList.toggle("collapsed");
                sidebar.classList.toggle("visible");
            });
        });
    </script>
</body>

</html>
