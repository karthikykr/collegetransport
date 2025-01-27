<?php 
include('../session.php');
include('../db.php');

$vid=$_GET['vid'];

$query="DElETE FROM `add_vehicle` WHERE `v_id`='$vid'";

if($conn->query($query)){
    echo"<script>alert('Deleted sucessfully..');</script>";
    echo"<script>location.href='../user_home/home.php'</script>";
}else{
    echo"<script>alert('Vehicle detail not Deleted..');</script>";
    echo"<script>location.href='../user_home/home.php'</script>";
}


?>