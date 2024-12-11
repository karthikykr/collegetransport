<?php 
session_start();
$u_id=$_SESSION['user_id'];
$role=$_SESSION['role'];
$name=$_SESSION['name'];
$department=$_SESSION['department'];
$email=$_SESSION['email'];

if(!isset($_SESSION['user_id']) && !isset($_SESSION['role'])){
    echo"<script>location.href='../loginpage/login.php';</script>";
    exit();
}
?>