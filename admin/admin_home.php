<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transport</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="../Assets/logo.jpg" alt="transport">
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="add_vehicle.php">Add Vehicle</a></li>
            <li><a href="add_user.php">Add User</a></li>
        </ul>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <h2>St Joseph Engineering College</h2>
            <img src="../Assets/logo.jpg" alt="Profile">
        </header>

        <!-- Dashboard Section -->
        <section class="board">
            <div class="board-header">
                <h3>Vehicle Information</h3>
            </div>

         
         
            <div class="grid-container">

            <?php 

include('admin_home_backend.php');

if ($result->num_rows > 0) {
    // Loop through the results and display them
    while ($row = $result->fetch_assoc()) {
        // Display each field from the row
       // echo "Vehicle ID: " . $row['v_id'] . "<br>";
        //echo "Vehicle Name: " . $row['vehicle_name'] . "<br>";
        //echo "Vehicle Model: " . $row['vehicle_model'] . "<br>";
        //echo "<hr>"; // Separator between records
?>
                
        <a href="vehicle_detail.php ?v_id=<?php echo $row['v_id']; ?>">
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