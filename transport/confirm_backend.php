<?php 
include('../session.php');
include('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
    $book_id=$_POST['book_id'];
    $vehicle=$_POST['vehicle'];
    $s_driver= $_POST['search-v'];
    $s_vehicle= $_POST['search-d'];
    $open_km= $_POST['opening_km'];
    $close_km= $_POST['closing_km'];

    echo $book_id.$vehicle.$s_driver.$s_vehicle.$open_km.$close_km;
}
?>