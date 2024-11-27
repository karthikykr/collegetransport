<?php 
session_start();   //starting session 
include('../header.php');
 $user_id= $_SESSION['user_id'];
 $user_role=$_SESSION['role'];
?>


        <!-- Dashboard Section -->
        <section class="board">
            <div class="board-header">
                <h3>Vehicle Information</h3>
                <a href="my_bookings.php">My bookings</a>
            </div>
            <div class="grid-container">
<?php 
include('../header1.php');
include('../selecting_vehicle.php');

if ($result->num_rows > 0) {
    // Loop through the results and display them
    while ($row = $result->fetch_assoc()) {
         //Display each field from the row
         //echo "Vehicle ID: " . $row['v_id'] . "<br>";
         //echo "Vehicle Name: " . $row['vehicle_name'] . "<br>";
         //echo "Vehicle Model: " . $row['vehicle_model'] . "<br>";
         //echo "<hr>"; // Separator between records
?>
                
        <a href="../vehicle_details.php ?v_id=<?php echo $row['v_id']; ?>">
            <div class="grid-item">     
                <h3><?php  echo $row['vehicle_type'] ;?></h3>
                <h3><?php  echo  $row['v_reg_no'] ?></h3>
                <h6><?php  echo "Insurance valid    till: " . $row['v_insurance_valid']; ?></h6>
                <h6><?php  echo "emission valid till: " . $row['v_emission_valid'] ;?></h6>

            </div>
        </a>

                <?php       }
        } else {
            echo "No records found.";
        }

        $conn->close();

        ?>
            </div>

         

        </section>
    </main>

</body>

</html>