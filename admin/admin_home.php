<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../header.php');?>
    <title>transport</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
        <!-- Dashboard Section -->
        <section class="board">
            <div class="board-header">
                <h6>Vehicle Information</h6>
            </div>

         
        <div id="main" class="main">
            <div class="grid-container">
            
            <?php 

include('../selecting_vehicle.php');

if ($result->num_rows > 0) {
    // Loop through the results and display them
    while ($row = $result->fetch_assoc()) {
        // Display each field from the row
       // echo "Vehicle ID: " . $row['v_id'] . "<br>";
        //echo "Vehicle Name: " . $row['vehicle_name'] . "<br>";
        //echo "Vehicle Model: " . $row['vehicle_model'] . "<br>";
        //echo "<hr>"; // Separator between records
?>
                
        <a class="details-link" href="vehicle_detail.php ?v_id=<?php echo $row['v_id']; ?>">
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

         
        </div>
        </section>
    </main>

</body>

</html>