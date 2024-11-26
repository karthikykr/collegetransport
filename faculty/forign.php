<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include('../db.php');

    // Correct SQL query with proper column aliasing
    $query = "SELECT users.name AS name, bookings.vehicle AS vehicle 
              FROM bookings 
              JOIN users ON bookings.user_id = users.id";
    
    $result = $conn->query($query);

    // Check if any records are found
    if ($result->num_rows > 0) {
        // Loop through the results and display them
        while ($row = $result->fetch_assoc()) {
            ?>
            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
            <h3><?php echo htmlspecialchars($row['vehicle']); ?></h3>
            <?php
        }
    } else {
        echo "<h3>No records found</h3>";
    }
    ?>
</body>
</html>
