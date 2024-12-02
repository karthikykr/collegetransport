<?php
session_start();
include('../db.php');

// Handle booking status updates
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'], $_POST['action'])) {
//     $booking_id = $_POST['booking_id'];
//     $action = $_POST['action'];
//     $new_status = ($action === 'approve') ? 'hod_approved' : 'hod_rejected';

//     $stmt = $conn->prepare("UPDATE bookings SET booking_status = ? WHERE id = ?");
//     $stmt->bind_param("si", $new_status, $booking_id);

//     if ($stmt->execute()) {
//         echo "<script>alert('Booking status updated successfully.');</script>";
//     } else {
//         echo "<script>alert('Booking status updated.');</script>" . $stmt->error;
//     }
//     $stmt->close();
// }SS

// Display pending booking requests
$role=$_SESSION['role'];
$id=$_SESSION['user_id'];

echo $role; 



if($role=='hod'){
   
$query="SELECT `department` FROM `users` WHERE `id`='$id'";
$dept=$conn->query($query);

$row=$dept->fetch_assoc();
$department=$row['department'];
$sql = "SELECT *, bookings.id AS bookid FROM bookings JOIN users ON bookings.user_id = users.id WHERE bookings.booking_status='pending' AND users.department='$department'";
}else{

    if($role=='principal'){
        $status='hod_approved';
    }else if($role==='assistant director'){
        $status='p_approved';
    }else if($role=='director'){
        $status='a_d_approved';
    }else{
        $status='d_approved';
    }

    $sql = "SELECT *, bookings.id AS bookid FROM bookings JOIN users ON bookings.user_id = users.id WHERE booking_status='$status'";
}


$result = $conn->query($sql);
?>
<link rel="stylesheet" href="../styles/style_approval.css">
<?php include('../header.php'); ?>
<section class="board">
        <div id="main" class="main">
        <div class="board-header">
            <h6>Booking Requests for Approval</h6>
        </div>
        <div class="grid-container">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="grid-item">
                        <p>Name: <?= htmlspecialchars($row['name']) ?></p>
                        <p>Vehicle: <?= htmlspecialchars($row['vehicle']) ?></p>
                        <p>Travel Date: <?= htmlspecialchars($row['travel_date']) ?></p>
                        <form action="#" method="POST">
                            <input type="hidden" name="booking_id" value="<?= htmlspecialchars($row['bookid']) ?>">
                            <div class="btn-con">
                            <button type="submit" name="action" value="approve" class="view-btn">View</button>
                            <!-- <button type="submit" name="action" value="reject" class="reject-btn">Reject</button> -->
                            </div>
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
