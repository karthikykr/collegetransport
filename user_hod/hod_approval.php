<?php
include('../db.php');

// Handle booking status updates
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'], $_POST['action'])) {
    $booking_id = $_POST['booking_id'];
    $action = $_POST['action'];
    $new_status = ($action === 'approve') ? 'hod_approved' : 'hod_rejected';

    $stmt = $conn->prepare("UPDATE bookings SET booking_status = ? WHERE id = ?");
    $stmt->bind_param("si", $new_status, $booking_id);

    if ($stmt->execute()) {
        echo "<script>alert('Booking status updated successfully.');</script>";
    } else {
        echo "<script>alert('Booking status updated.');</script>" . $stmt->error;
    }
    $stmt->close();
}

// Display pending booking requests
$sql = "SELECT *, bookings.id AS bookid FROM bookings JOIN users ON bookings.user_id = users.id WHERE booking_status='pending'" ;
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD Approval</title>
</head>
<body>
    <section class="board">
        <div class="board-header">
            <h3>Booking Requests for Approval</h3>
        </div>
        <div class="grid-container">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="grid-item">
                        <h4>Booking ID: <?= htmlspecialchars($row['id']) ?></h4>
                        <h4>Booking ID: <?= htmlspecialchars($row['bookid']) ?></h4>
                        <p>Vehicle: <?= htmlspecialchars($row['vehicle']) ?></p>
                        <p>Travel Date: <?= htmlspecialchars($row['travel_date']) ?></p>
                        <p>Purpose: <?= htmlspecialchars($row['purpose']) ?></p>
                        <p>name: <?= htmlspecialchars($row['name']) ?></p>
                        <form method="POST">
                            <input type="hidden" name="booking_id" value="<?= htmlspecialchars($row['bookid']) ?>">
                            <button type="submit" name="action" value="approve">Approve</button>
                            <button type="submit" name="action" value="reject">Reject</button>
                        </form>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No pending bookings.</p>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>

<?php
$conn->close();
?>
