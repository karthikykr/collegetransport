
<?php
 // Get the current script name to dynamically show/hide links
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transport</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="../Assets/logo.jpg" alt="transport">
            </div>
        </div>
        <ul class="nav-links">
        <li><a href="#" class="active">Vehicles</a></li>
        <li><a href="../users/booking_vehicle.php">Book Vehicle</a></li>

        <!-- to assign the approval requests if it hod user -->
        <?php if ($current_page == 'hod_home.php'): ?>
            <li><a href="../user_hod/hod_approval.php">Requests Approval</a></li>
        <?php endif; ?>

        <!-- to assign the approval requests if it hod user -->
        <?php if ($current_page == 'a_dir_home.php'): ?>
            <li><a href="../user_a_dir/a_dir_approval.php">Requests Approval</a></li>
        <?php endif; ?>

            <li><a href="#">Status</a></li>
            <li><a href="#">My Bookings</a></li>
        </ul>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <h2>St Joseph Engineering College</h2>
            <img src="../Assets/logo.jpg" alt="Profile">
        </header>