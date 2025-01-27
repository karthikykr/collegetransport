<?php 
 include('../session.php');
 include('../db.php');
include('../header.php');
include('../selecting_vehicle.php');
?>
<link rel="stylesheet" href="../styles/style.css">
<!-- Dashboard Section -->
<section class="board">
    <div id="main" class="main">
        <div class="board-header">
            <h6>Vehicle Information</h6>
        </div>
        <div class="grid-container">
            <?php 

include('../selecting_vehicle.php');

if ($result->num_rows > 0) {
    // Loop through the results and display them
    while ($row = $result->fetch_assoc()) {
   
?>

<?php if($user_role =='transport'){?>
    <a class="details-link" href="../transport/vehicle_detail.php?v_id=<?php echo $row['v_id']; ?>">
<?php } else {?>
    <a class="details-link" href="vehicle_details.php?v_id=<?php echo $row['v_id']; ?>">
<?php }?>
                <div class="grid-item">
                    <h3><?php  echo $row['vehicle_type'] ;?></h3>
                    <h3><?php  echo  $row['v_reg_no'] ?></h3>
                    <h6><?php  echo "Insurance valid    till: " . $row['v_insurance_valid']; ?></h6>
                    <h6><?php  echo "emission valid till: " . $row['v_emission_valid'] ;
                ?></h6>

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
<!-- <script src="../scripts/script.js"></script> -->
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