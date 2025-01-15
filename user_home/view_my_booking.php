<?php 
include('../session.php');
include('../db.php');
include('../header.php');
$book_id=$_POST['bookid'];

$stmt=$conn->prepare("SELECT * FROM bookings WHERE id=?");
$stmt->bind_param("i",$book_id);
$stmt->execute();
$result=$stmt->get_result();
if($result->num_rows>0){
    $row=$result->fetch_assoc();
}
?>

<div class="board-header">
        <h2>Approval Details</h2>
    </div> 
    <div class="container">
    <table class="confirm-details" border="1">
    <tr>
                <th>Name</th>
                <td><?php echo $row[""] ?></td>
            </tr>
            <tr>
                <th>Department</th>
                <td><?php echo htmlspecialchars($department); ?></td>
            </tr>
            <tr>
                <th>Designation</th>
                <td><?php echo htmlspecialchars($role); ?></td>
            </tr>
            <tr>
                <th>Vehicle Type</th>
                <td><?php echo htmlspecialchars($vehicle); ?></td>
            </tr>
            <tr>
                <th>Travel Date</th>
                <td><?php echo htmlspecialchars($travel_date); ?></td>
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
                <th>Pick-up Location</th>
                <td><?php echo htmlspecialchars($from); ?></td>
            </tr>
            <tr>
                <th>Drop Location</th>
                <td><?php echo htmlspecialchars($to); ?></td>
            </tr>
            <tr>
                <th>Pick-up Time</th>
                <td><?php echo htmlspecialchars($pickup_time); ?></td>
            </tr>
            <tr>
                <th>Drop Time</th>
                <td><?php echo htmlspecialchars($drop_time); ?></td>
            </tr>
            <tr>
                <th>Booked On</th>
                <td><?php echo htmlspecialchars($time); ?></td>
            </tr>
            <tr>
                <th>Purpose</th>
                <td><?php echo htmlspecialchars($purpose); ?></td>
            </tr>
        </table> 
     

</body>
</html>