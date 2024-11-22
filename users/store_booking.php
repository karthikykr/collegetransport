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

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO bookings (vehicle, travel_date, purpose, num_people, num_days, pickup_from, pickup_time, drop_to, drop_time, booking_status) VALUES (?, ?, ?, ?, ?, ?, ?, ? ,?, ?)");
    $stmt->bind_param("sssiisssss", $vehicle, $travel_date, $purpose, $num_people, $num_days, $pickup_from, $pickup_time, $drop_to, $drop_time, $status);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Booking confirmed! Your details have been stored in the database.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
