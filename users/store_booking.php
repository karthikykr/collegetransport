<?php
// Database connection (replace with your actual credentials)
include('../db.php');

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

    $status = 'pending';


    $query = "INSERT INTO `bookings` (`vehicle`, `travel_date`, `purpose`, `num_people`, `num_days`,`pickup_from`,`pickup_time`,`drop_to`,`drop_time`,`booking_status`) VALUES ('$vehicle','$travel_date','$purpose','$num_people','$num_days','$pickup_from','$pickup_time','$drop_to','$drop_time','$status')";
           
    if($conn->query($query)){
        echo"<script>alert('Booking confirmed!');</script>";
         echo"<script>location.href='user_home.php'</script>";
    }else{
            echo"<script>alert('booking is not done');</script>";
             echo"<script>location.href='booking_vehicle.php';</script>";
        }
        echo"<script>alert('Invalid booking!....');</script>";
        echo"<script>location.href='booking_vehicle.php';</script>";
    }
   $conn->close();
?>



