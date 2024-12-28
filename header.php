<?php
// Get the current script name to dynamically show/hide links
$current_page = basename($_SERVER['PHP_SELF']);
// Database inclusion (if needed)
// include('../db.php');
// include('session.php');
// $sql="SELECT * FROM `users` where $_SESSION['user_id']=`id`";
// $result = $conn->query($sql);
$user_role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport</title>
    <link href="Assets/image.png" rel="icon">
    <link rel="stylesheet" href="../styles/style_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Font Awesome for icons -->
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
        <div class="college-name">
            <h1>ST JOSEPH ENGINEERING COLLEGE MANGALORE</h1><br>
            <h2>AN AUTONOMOUS INSTITUTION</h2>
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
            <!-- Faculty and Other User Links -->
            <li><a href="../user_home/home.php" class="<?php if($current_page==='home.php')echo"active";?>"><i
                        class="fa-solid fa-house"></i> <span>Home</span></a>
            </li>
            <?php
                if($user_role != 'admin' && $user_role != 'transport' ){
                    ?>
            <li><a href="../user_home/booking_vehicle.php"
                    class="<?php if($current_page==='booking_vehicle.php')echo"active";?>"><i class="fa fa-book"></i>
                    <span>Book Vehicle</span></a></li>

            <?php }
            ?>
            <!-- Approval Request Link for roles other than 'faculty' -->
            <?php
                if($user_role != 'faculty') {
                    ?>
            <li><a href="approval.php" class="<?php if($current_page==='approval.php')echo"active";?>"><i
                        class="fa fa-check-circle"></i> <span>Approval Request</span></a></li>
            <?php }
                ?>

            <?php
            if($user_role !='transport'){
                ?>
            <li><a href="my_bookings.php" class="<?php if($current_page==='my_bookings.php')echo"active";?>"><i
                        class="fa fa-calendar"></i> <span>My Bookings</span></a></li>
            <?php }
            
            if($user_role =='transport'){
            ?>
            <li><a href="../user_home/add_driver.php"
                    class="<?php if($current_page==='transport/add_driver.php')echo"active";?>"><i
                        class="fa fa-user-plus"></i>
                    <span>Add Driver</span></a></li>
            <?php }
            ?>
        </ul>
    </div>
    <!-- Main Content Area -->
    <main class="main-content">
        <?php include('user_profile.php');?>
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

            document.querySelector('.board').addEventListener('click', (e) => {
                userInfo.classList.add("hidden");
                userInfo.classList.remove("visible");
            })

        });
        </script>