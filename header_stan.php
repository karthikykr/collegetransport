<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$base_url = "/IA-Management-System/department/";
?>

<!-- CSS and JS Links -->
<link href="home.css" rel="stylesheet">
<script src="home_stan.js" defer></script>

<!-- Sidebar -->
<div id="sidebar" class="sidebar">
    <nav class="sidebar-content">
        <a href="../department/Management/dpt_faculty.php">Faculty Management</a>
        <a href="../department/Management/dpt_student.php">Student Management</a>
        <a href="../department/Management/dpt_subject.php">Subject Management</a>
        <a href="../department/Management/dpt_attend.php">Attendance</a>
        <a href="../department/Management/dpt_announce.php">Notifications & Announcements</a>
        <a href="../department/Management/dpt_timetable.php">Timetable</a>
    </nav>
</div>

<!-- Header -->
<header class="bg-primary text-white py-3 px-4 d-flex align-items-center sticky-top">
    <!-- Sidebar Toggle Button -->
    <button class="navbar-toggler" type="button" id="sidebarToggle" onmouseover="openSidebar()" onmouseout="closeSidebar()">
        <div class="toggler-icon"></div>
        <div class="toggler-icon"></div>
        <div class="toggler-icon"></div>
    </button>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <!-- Logo -->
    <img src="Assets/SJECLogo.png" alt="College Logo" class="me-3" style="height: 50px;">

    <!-- College Info -->
    <div>
        <h1 class="fs-5 mb-0">St Joseph Engineering College, Vamanjoor - Mangalore</h1>
        <h2 class="fs-6 mb-0">Department of MCA</h2>
    </div>

    <!-- Profile Dropdown -->
    <div class="ms-auto dropdown">
        <img src="Assets/image.png" alt="Profile Icon" class="rounded-circle border border-light me-2" style="width: 40px; height: 40px; cursor: pointer;" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><p class="dropdown-item-text text-muted mb-0">Welcome, </p></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
            <li><a class="dropdown-item" href="settings.php">Settings</a></li>
            <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
        </ul>
    </div>
</header>
