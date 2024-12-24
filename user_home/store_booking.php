<?php
include('../session.php');
include('../db.php');

// Retrieve the role of the current user
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

    // Determine booking status based on user role
    if ($role === 'faculty') {
        $status = 'pending';
        $approver_email = $email; 
    } elseif ($role === 'hod') {
        $status = 'hod_approved';
        $approver_email = $email; 
    } elseif ($role === 'principal') {
        $status = 'p_approved';
        $approver_email = $email; 
    } elseif ($role === 'assistant director') {
        $status = 'a_d_approved';
        $approver_email = $email; 
    } elseif ($role === 'director') {
        $status = 'd_approved';
    } else {
        echo "<script>alert('No role selected');</script>";
        exit();
    }

    // Insert booking into the database
    $query = "INSERT INTO `bookings` (`vehicle`, `travel_date`, `purpose`, `num_people`, `num_days`, `pickup_from`, `pickup_time`, `drop_to`, `drop_time`, `booking_status`, `user_id`) 
              VALUES ('$vehicle', '$travel_date', '$purpose', '$num_people', '$num_days', '$pickup_from', '$pickup_time', '$drop_to', '$drop_time', '$status', '$u_id')";

    if ($conn->query($query)) {
        // Send email to the approver
        if (isset($approver_email)) {
            $subject = "New Booking Approval Required";
            $message = "A new booking request has been submitted.\n\n" .
                       "Vehicle: $vehicle\n" .
                       "Travel Date: $travel_date\n" .
                       "Purpose: $purpose\n" .
                       "Number of People: $num_people\n" .
                       "Number of Days: $num_days\n" .
                       "Pickup From: $pickup_from\n" .
                       "Pickup Time: $pickup_time\n" .
                       "Drop To: $drop_to\n" .
                       "Drop Time: $drop_time\n\n" .
                       "Please log in to the system to approve or reject this booking.";

            $headers = "From: karthikykr16@gmail.com"; 

            if (mail($approver_email, $subject, $message, $headers)) {
                echo "<script>alert('Booking confirmed and email notification sent!');</script>";
            } else {
                echo "<script>alert('Booking confirmed but email notification failed.');</script>";
            }
        }

        echo "<script>location.href='home.php'</script>";
    } else {
        echo "<script>alert('Booking could not be completed. Please try again.');</script>";
        echo "<script>location.href='booking_vehicle.php';</script>";
    }
}

$conn->close();
?>