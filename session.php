<?php 
session_start();
$u_id=$_SESSION['user_id'];
$role=$_SESSION['role'];
if(!isset($_SESSION['user_id']) && !isset($_SESSION['role'])){
    echo"<script>location.href='../loginpage/login.php';</script>";
    exit();
}
?>