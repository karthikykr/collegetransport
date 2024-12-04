<?php 
session_start();
if(!isset($_SESSION['user_id']) && !isset($_SESSION['role'])){
    echo"<script>location.href='../loginpage/login.php';</script>";
    exit();
}
?>