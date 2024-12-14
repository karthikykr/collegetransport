<?php 
 include('../session.php');
include('../db.php');
include('../header.php');
?>
<link rel="stylesheet" href="../styles/my_booking.css">
<section style="margin-left: 220px;" class=" board">
    <div class="board-header">
        <h3>My Bookings</h3>
    </div>

    <div class="grid-container">
        <?php
      
        $sql = "SELECT * FROM `bookings` WHERE `user_id` = '$u_id';";
        $result = $conn->query($sql);
    if ($result->num_rows > 0) 
      // Loop through the results and display them
        while ($row = $result->fetch_assoc()) { 
            $statuses = ['hod_approved', 'p_approved', 'a_d_approved', 'd_approved'];
            $progress = 0;


            if (in_array($row['booking_status'], $statuses)) {
                // Calculate the progress based on the approval stage
                $progress = (array_search($row['booking_status'], $statuses) + 1) / count($statuses) * 100;
            }
            
            ?>
        <!-- <a  href="vehicle_detail.php ?v_id=<?php echo $row['id']; ?>"> -->
        <div class="grid-item">
            <h3><?php echo $row['vehicle']; ?></h3>
            <h3><?php echo "Travel Date: " . $row['travel_date']; ?></h3>
            <h6><?php echo "Number of people: " . $row['num_people']; ?></h6>
            <h6><?php echo "Number of days: " . $row['num_days']; ?></h6>

            <div class="step-progress">
                <div class="step-indicator ">
                    <span
                        class="step-circle <?php echo ($progress >= 25) ? 'approved' : ''; echo ($row['booking_status'] == 'hod_rejected') ? 'rejected' : ''; ?>">

                        <?php echo ($progress >= 25) ? '✔' : ''; echo ($row['booking_status'] == 'hod_rejected' ) ? '✘' : '';?></span>
                    <span class="step-label">HOD</span>
                </div>

                <div class="step-line <?php echo ($progress >= 50) ? 'active' : ''; ?>"></div>

                <div class="step-indicator <?php echo ($progress >= 50) ? 'completed' : ''; ?>">
                    <span
                        class="step-circle <?php echo ($progress >= 50) ? 'approved' : ''; echo ($row['booking_status'] == 'p_rejected') ? 'rejected' : ''; ?>">

                        <?php echo ($progress >= 50) ? '✔' : ''; echo ($row['booking_status'] == 'p_rejected' ) ? '✘' : '';?></span>
                    <span class="step-label">Principal</span>
                </div>

                <div class="step-line <?php echo ($progress >= 75) ? 'active' : ''; ?>"></div>

                <div class="step-indicator <?php echo ($progress >= 75) ? 'completed' : ''; ?>">
                    <span
                        class="step-circle <?php echo ($progress >= 75) ? 'approved' : ''; echo ($row['booking_status'] == 'a_d_rejected') ? 'rejected' : ''; ?>">

                        <?php echo ($progress >= 75) ? '✔' : ''; echo ($row['booking_status'] == 'a_d_rejected' ) ? '✘' : '';?></span>
                    <span class="step-label">Assistant Director</span>
                </div>

                <div class="step-line <?php echo ($progress == 100) ? 'active' : ''; ?>"></div>

                <div class="step-indicator <?php echo ($progress == 100) ? 'completed' : ''; ?>">
                    <span
                        class="step-circle <?php echo ($progress >= 100) ? 'approved' : ''; echo ($row['booking_status'] == 'd_rejected') ? 'rejected' : ''; ?>">

                        <?php echo ($progress >= 100) ? '✔' : ''; echo ($row['booking_status'] == 'd_rejected' ) ? '✘' : '';?></span>
                    <span class="step-label">Director</span>
                </div>
            </div>

            <h3>
                <?php 
                            // Check and display booking status
                            switch ($row['booking_status']) {
                                case 'd_approved': echo "Approved by Director"; break;
                                case 'd_rejected': echo "Rejected by Director"; break;
                                case 'a_d_approved': echo "Approved by Assistant Director"; break;
                                case 'a_d_rejected': echo "Rejected by Assistant Director"; break;
                                case 'p_approved': echo "Approved by Principal"; break;
                                case 'p_rejected': echo "Rejected by Principal"; break;
                                case 'hod_approved': echo "Approved by HOD"; break;
                                case 'hod_rejected': echo "Rejected by HOD"; break;
                                default: echo "Pending"; break;
                            }
                        ?>
            </h3>
        </div>
        </a>
        <?php } else {
            echo "No Bookings...";
        }
        $conn->close()
        ?>

    </div>
</section>
</body>

</html>

<!-- echo"booking status:".$row['booking_status']; -->