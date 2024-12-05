<?php
 include('../session.php');
// Database connection (replace with your actual credentials)
include('../db.php');

// $role=$_SESSION['role'];

echo $role;
// Retrieve the form data
if (isset($_POST['confirm'])) {
    $vehicle = $_POST['vehicle'];
    $travel_date = $_POST['travel_date'];
    $purpose = $_POST['purpose'];
    $num_people = $_POST['num_people'];
    $num_days = $_POST['num_days'];
    $pickup_from = $_POST['pickup_from'];
    $pickup_time = $_POST['pickup_time'];
    $drop_to = $_POST['drop_to'];
    $drop_time = $_POST['drop_time'];
    // $user_id=$_SESSION['user_id'];

    if($role==='faculty'){
        $status = 'pending';
    }else if($role==='hod'){
        $status='hod_approved';
    }else if($role==='principal'){
        $status='p_approved';
    }else if($role==='assistant director'){
        $status='a_d_approved';
    }else if($role==='director'){
        $status='d_approved';
    }else{
        echo"<script>alert('no role selected');</script>";
        exit();
    }


    $query = "INSERT INTO `bookings` (`vehicle`, `travel_date`, `purpose`, `num_people`, `num_days`,`pickup_from`,`pickup_time`,`drop_to`,`drop_time`,`booking_status`,`user_id`) VALUES ('$vehicle','$travel_date','$purpose','$num_people','$num_days','$pickup_from','$pickup_time','$drop_to','$drop_time','$status','$u_id')";
           
    if($conn->query($query)){
        echo"<script>alert('Booking confirmed! ');</script>";
         echo"<script>location.href='home.php'</script>";
    }else{
            echo"<script>alert('booking is not done');</script>";
             echo"<script>location.href='booking_vehicle.php';</script>";
        }
        echo"<script>alert('Invalid booking!....');</script>";
        echo"<script>location.href='booking_vehicle.php';</script>";
    }
   $conn->close();
?>



