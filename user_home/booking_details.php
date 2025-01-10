<?php  
include('../session.php');
include('../db.php');
include('../header.php');

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
    <link rel="stylesheet" href="../styles/approval_details.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> Font Awesome for icons -->
    <div class="board-header">
        <h2>Approval Details</h2>
    </div> 
    <div class="container">
    <center>
    <table class="confirm-details" border="1">
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
            </table> 
            
        <form action="approve_backend.php" method="POST">
            <input type="hidden" name="booking_id" value="<?php echo $b_id; ?>">
            <input type="hidden" name="vehicle" value="<?php echo $vehicle ?>">
            <div class="btn-con">
                <button type="submit" name="action" value="approve" class="confirm-btn">Approve</button>
                <button type="button" id="openPopupBtn" class="cancel-btn">Reject</button>
            </div>     
            <!-- Popup Modal for Reason -->
            <div id="popup" class="popup">
                <div class="popup-content">
                    <span id="closePopupBtn" class="close-btn">&times;</span>
                    <h2>Enter Your Reason</h2>
                    <label for="reason">Reason:</label>
                    <textarea id="reason" name="reason" rows="4" cols="50" ></textarea>
                    <br>
                    <button type="submit" name="action" value="reject" class="confirm-btn">Confirm</button>       
                </div>
            </div>
        </form>
        </div>
<?php  
}else{
    echo"Invalid method";
}
?>

<script>
// Get elements
const openPopupBtn = document.getElementById('openPopupBtn');
const closePopupBtn = document.getElementById('closePopupBtn');
const popup = document.getElementById('popup');
const reason = document.getElementById('reason');

// Open the popup when the "Reject" button is clicked
openPopupBtn.addEventListener('click', () => {
  popup.style.display = 'flex'; // Show the popup
  reason.setAttribute("required", "required");
});

// Close the popup when the "×" button is clicked
closePopupBtn.addEventListener('click', (e) => {
   e.preventDefault();

  popup.style.display = 'none'; // Hide the popup
  reason.removeAttribute("required");
  reason.value="";


});

</script>
</body>
</html>
