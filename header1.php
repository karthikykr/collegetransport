<?php
 // Get the current script name to dynamically show/hide links
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport</title>
    <link rel="stylesheet" href="../styles/style1.css">
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
        <!-- <div class="nav-icon" id="navIcon">
            <i class="fa fa-bars"></i>
        </div> -->
        <div class="logoutbtn">
            <button class="logout-btn">Logout</button>
        </div>
    </div>
    </div>

    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
        
        <ul class="sidebar-links">
            <li><a href="#" class="active"><i class="fa fa-car"></i> <span>Home</span></a></li>
        <li><a href="../users/booking_vehicle.php"><i class="fa fa-book"></i> <span>Book Vehicle</span></a></li>
        <?php if ($current_page == 'hod_home.php'): ?>
            <li><a href="../user_hod/hod_approval.php">Add New Vehicle</a></li>
        <?php endif; ?>
            <li><a href="#"><i class="fa fa-tasks"></i> <span>Status</span></a></li>
            <li><a href="#"><i class="fa fa-calendar"></i> <span>My Bookings</span></a></li>
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
            // const navIcon = document.getElementById("navIcon");

            // Toggle sidebar on sidebar toggle click
            sidebarToggle.addEventListener("click", () => {
                sidebar.classList.toggle("collapsed");
                sidebar.classList.toggle("visible");
            });

            // Toggle sidebar visibility on mobile nav icon click
            // navIcon.addEventListener("click", () => {
            //     sidebar.classList.toggle("visible");
            // });
        });
    </script>
</body>
</html>
