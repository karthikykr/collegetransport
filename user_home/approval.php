
<?php
 include('../session.php');
include('../db.php');

if($role=='hod'){
   
$query="SELECT `department` FROM `users` WHERE `id`='$u_id'";
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
    }else if($role=='transport'){
        $status='d_approved';
    }else{
        $status='t_approved';
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
                        <form action="booking_details.php" method="POST">
                            <input type="hidden" name="booking_id" value="<?= htmlspecialchars($row['bookid']) ?>">
                            <input type="hidden" name="user_id" value="<?= htmlspecialchars($row['id']) ?>">
                            <input type="hidden" name="vehicle" value="<?= htmlspecialchars($row['vehicle']) ?>">
                            <input type="hidden" name="t_date" value="<?= htmlspecialchars($row['travel_date']) ?>">
                            <input type="hidden" name="purpose" value="<?= htmlspecialchars($row['purpose']) ?>">
                            <input type="hidden" name="n_people" value="<?= htmlspecialchars($row['num_people']) ?>">
                            <input type="hidden" name="n_days" value="<?= htmlspecialchars($row['num_days']) ?>">
                            <input type="hidden" name="from" value="<?= htmlspecialchars($row['pickup_from']) ?>">
                            <input type="hidden" name="p_time" value="<?= htmlspecialchars($row['pickup_time']) ?>">
                            <input type="hidden" name="to" value="<?= htmlspecialchars($row['drop_to']) ?>">
                            <input type="hidden" name="drop_time" value="<?= htmlspecialchars($row['drop_time']) ?>">
                            <input type="hidden" name="status" value="<?= htmlspecialchars($row['booking_status']) ?>">
                            <input type="hidden" name="time" value="<?= htmlspecialchars($row['created_at']) ?>">
                            <input type="hidden" name="name" value="<?= htmlspecialchars($row['name']) ?>">
                            <input type="hidden" name="role" value="<?= htmlspecialchars($row['role']) ?>">
                            <input type="hidden" name="department" value="<?= htmlspecialchars($row['department']) ?>">


                            <div class="btn-con">
                            <button type="submit" name="submit"  class="view-btn">View</button>
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
