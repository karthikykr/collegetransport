<?php
// Assuming data is passed from the booking form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve POST data
    $vehicle = $_POST['vehicle'];
    $travel_date = $_POST['travel_date'];
    $purpose = $_POST['purpose'];
    $num_people = $_POST['num_people'];
    $num_days = $_POST['num_days'];
    $pickup_from = $_POST['pickup_from'];
    $pickup_time = $_POST['pickup_time'];
    $drop_to = $_POST['drop_to'];
    $drop_time = $_POST['drop_time'];

    // Convert 24-hour time to 12-hour AM/PM format
    $pickup_time_formatted = date("g:i A", strtotime($pickup_time)); // 12-hour format with AM/PM
    $drop_time_formatted = date("g:i A", strtotime($drop_time));     // 12-hour format with AM/PM
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../header1.php');?>
    <link rel="stylesheet" href="../styles/booking_vehicle.css">
</head>
<body>
    <div class="container">
        <h2>Confirm Vehicle Booking</h2>
        <table class="booking-details" border="1">
            <tr>
                <th>Vehicle Type</th>
                <td><?php echo htmlspecialchars($vehicle); ?></td>
            </tr>
            <tr>
                <th>Number of People</th>
                <td><?php echo htmlspecialchars($num_people); ?></td>
            </tr>
            <tr>
                <th>Number of Days</th>
                <td><?php echo htmlspecialchars($num_days); ?></td>
            </tr>
            <tr>
                <th>Travel Date</th>
                <td><?php echo htmlspecialchars($travel_date); ?></td>
            </tr>
            <tr>
                <th>Pick-up Location</th>
                <td><?php echo htmlspecialchars($pickup_from); ?></td>
            </tr>
            <tr>
                <th>Drop Location</th>
                <td><?php echo htmlspecialchars($drop_to); ?></td>
            </tr>
            <tr>
                <th>Pick-up Time</th>
                <td><?php echo htmlspecialchars($pickup_time_formatted); ?></td>
            </tr>
            <tr>
                <th>Drop Time</th>
                <td><?php echo htmlspecialchars($drop_time_formatted); ?></td>
            </tr>
            <tr>
                <th>Purpose</th>
                <td><?php echo htmlspecialchars($purpose); ?></td>
            </tr>
        </table>

        <form action="booking_backend.php" method="POST">
            <input type="hidden" name="vehicle" value="<?php echo htmlspecialchars($vehicle); ?>">
            <input type="hidden" name="travel_date" value="<?php echo htmlspecialchars($travel_date); ?>">
            <input type="hidden" name="purpose" value="<?php echo htmlspecialchars($purpose); ?>">
            <input type="hidden" name="num_people" value="<?php echo htmlspecialchars($num_people); ?>">
            <input type="hidden" name="num_days" value="<?php echo htmlspecialchars($num_days); ?>">
            <input type="hidden" name="pickup_from" value="<?php echo htmlspecialchars($pickup_from); ?>">
            <input type="hidden" name="pickup_time" value="<?php echo htmlspecialchars($pickup_time); ?>">
            <input type="hidden" name="drop_to" value="<?php echo htmlspecialchars($drop_to); ?>">
            <input type="hidden" name="drop_time" value="<?php echo htmlspecialchars($drop_time); ?>">
            <div class="btn-con">
                <button type="submit" name="confirm" class="submit-btn">Confirm</button>
                <button  name="cancel" class="submit-btn" href="booking_vehicle.php">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>
