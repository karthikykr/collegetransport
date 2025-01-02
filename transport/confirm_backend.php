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
    $v_id= $_POST['vehicle_id'];
    $d_id= $_POST['driver_id'];

    echo $book_id.$vehicle.$s_driver.$s_vehicle.$open_km.$close_km."\n";
    echo $v_id."\n".$d_id;

    $stmt=$conn->prepare("INSERT INTO t_approval(book_id,vehicle_id,driver_id,open_km,close_km) VALUES(?,?,?,?,?)");
    $stmt->bind_param("iiiss",$book_id,$v_id,$d_id,$open_km,$close_km);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>