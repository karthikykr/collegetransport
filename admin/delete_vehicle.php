<?php 
include('../db.php');

$vid=$_GET['vid'];

$query="DElETE FROM `add_vehicle` WHERE `v_id`='$vid'";

if($conn->query($query)){
    echo"deleted sucessfully";
}else{
    echo"not deleted";
}


?>