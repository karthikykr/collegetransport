<?php
// Get the current script name to dynamically show/hide links
$current_page = basename($_SERVER['PHP_SELF']);
// Database inclusion (if needed)

// $sql="SELECT * FROM `users` where $_SESSION['user_id']=`id`";
// $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport</title>
    <link rel="stylesheet" href="../styles/style_header.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
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
            <!-- Admin Dashboard Links -->
            <li><a href="../admin/admin_home.php" class="<?php if($current_page==='admin_home.php')echo"active";?>"><i
                        class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="../admin/add_user.php" class="<?php if($current_page==='add_user.php')echo"active";?>"><i
                        class="fa fa-user-plus"></i> <span>Add User</span></a></li>
            <li><a href="../admin/add_vehicle.php" class="<?php if($current_page==='add_vehicle.php')echo"active";?>"><i
                        class="fa fa-car"><span class="h5">+</span></i><span>Add Vehicle</span></a></li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <main class="main-content">
        <?php 
    include('../user_profile.php');
    ?>


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