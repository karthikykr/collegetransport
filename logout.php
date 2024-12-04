<?php
session_start();
// Unset all session variables
session_unset();
// Destroy the session
session_destroy();
header("Location: loginpage/login.php");
// echo"<script>alert('sessionn destroyed');</script>";

// exit();
?>
