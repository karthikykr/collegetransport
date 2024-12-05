<?php 

$sql="SELECT * FROM `users` WHERE `id`='$user_id' ";

 
$result = $conn->query($sql);

$row = $result->fetch_assoc();
include('../header.php');?>
    <link rel="stylesheet" href="../styles/style.css">

<body>
        <!-- Dashboard Section -->
        <section class="board">
        <div id="main" class="main">
        <div class="user-info">
            <h1>Name</h1>
            <h2>Role</h2>
        </div>
        <div class="board-header">
            <h6>Vehicle Information</h6>
        </div>
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

    <!-- <script>
        const sidebar = document.querySelector('.sidebar-toggle'); // Sidebar element
const gridContainer = document.querySelector('.grid-container'); // Grid container

document.querySelector('.sidebar-toggle').addEventListener('click', () => {

    // Toggle the grid container's class for resizing
    gridContainer.classList.toggle('sidebar-collapsed');
});
    </script> -->
    
    <script>
        const sidebar = document.querySelector('.sidebar'); // Sidebar element
        const gridContainer = document.querySelector('.grid-container'); // Grid container
        const sidebarToggle = document.querySelector('.sidebar-toggle');

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-collapsed'); 
        // Adjust the grid container margin to account for the sidebar collapse
        gridContainer.classList.toggle('sidebar-collapsed');
});
    </script>
</body>

</html>