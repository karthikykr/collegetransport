<?php  
include('../session.php');
// include('../db.php');
include('../header.php');


// $b_id = $_POST['booking_id'];
// $u_id = $_POST['user_id'];



// $sql = "SELECT * FROM bookings JOIN users ON bookings.user_id = users.id WHERE bookings.id='$b_id'";
// $result = $conn->query($sql);

//     $row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve POST data
    $b_id = $_POST['booking_id'];
    //$u_id= $_POST['user_id'];
    $vehicle = $_POST['vehicle']; //
    $travel_date = $_POST['t_date'];//
    $purpose = $_POST['purpose'];//
    $num_people = $_POST['n_people'];//
    $num_days = $_POST['n_days'];//
    $from = $_POST['from']; //
    $to = $_POST['to']; //
    $drop_time = $_POST['drop_time']; //
    // $status = $_POST['status'];
    $pickup_time = $_POST['p_time']; //
    $time = $_POST['time']; //
    $name = $_POST['name']; //
    $role = $_POST['role']; //
    $department = $_POST['department'];//
?>
    <link rel="stylesheet" href="../styles/vehicle_details.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> Font Awesome for icons -->
    </head>
    <h1>Bookings detail</h1>
    <body>
        <div class="container">
    <table class="table table-hover" border="1">
    <tr>
                <th>Name</th>
                <td><?php echo htmlspecialchars($name); ?></td>
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
            </center>
            </table>
            
        <form action="approve_backend.php" method="POST">
            <input type="hidden" name="booking_id" value="<?php echo $b_id; ?>">
            <div class="btn-con">
            <button type="submit" name="action" value="approve" class="update-btn">Approve</button>
            <button type="submit" name="action" value="reject" class="delete-btn">Reject</button>
            </div>
        </form>
        </div>
<?php  
}else{
    echo"invallid method";
}

?>
    </body>
    </html>
    

      