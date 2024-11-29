<?php
session_start();
 // Get the current script name to dynamically show/hide links
    $current_page = basename($_SERVER['PHP_SELF']);
    // database inclusion
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
        <!-- <div class="nav-icon" id="navIcon">
            <i class="fa fa-bars"></i>
        </div> -->
        <div class="logoutbtn">
            <button class="logout-btn" onclick="location.href='../loginpage/login.php'">Logout</button>
        </div>
    </div>
    </div>

    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
        
        <ul class="sidebar-links">
        
        <!-- Admin Dashboard changes -->
        <?php if ($current_page == 'admin_home.php' || $current_page == 'add_user.php' || $current_page == 'add_vehicle.php' || $current_page == 'vehicle_detail.php'):?>
            <li><a href="../admin/admin_home.php" class="active"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="../admin/add_user.php"><i class="fa fa-user-plus"></i> <span>Add User</a></li>
            <li><a href="../admin/add_vehicle.php"><i class="fa fa-car">+</i><span>Add Vehicle</a></li>

        <!--  Navigation links for other users-->
        <?php else: ?>
            <li><a href="../faculty/user_home.php" class="active"><i class="fa-solid fa-house"></i> <span>Home</span></a></li>
            <li><a href="../faculty/booking_vehicle.php"><i class="fa fa-book"></i> <span>Book Vehicle</span></a></li>
        
            <!-- Approval request is hidden for faculty -->
            <?php
            $user_role=$_SESSION['role'];
            if (!in_array($user_role, ['faculty'])) {
            echo '<li><a href="hod_approval.php"><i class="fa fa-check-circle"></i> Approval Request</a></li>';
            }?>

            <!-- <li><a href="../user_hod/hod_approval.php"><i class="fa fa-check-circle"></i> <span>Approval Requests</a></li> -->
            <li><a href="#"><i class="fa fa-tasks"></i> <span>Status</span></a></li>
            <li><a href="#"><i class="fa fa-calendar"></i> <span>My Bookings</span></a></li>
        <?php endif; ?>
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
