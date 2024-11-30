<?php include('../header.php'); ?>
<link rel="stylesheet" href="../styles/style.css">

<body>
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
                        // Display each field from the row
                ?>
                    <a class="details-link" href="vehicle_detail.php?v_id=<?php echo urlencode($row['v_id']); ?>" aria-label="View details for vehicle <?php echo htmlspecialchars($row['v_reg_no']); ?>">
                        <div class="grid-item">     
                            <h3><?php echo htmlspecialchars($row['vehicle_type']); ?></h3>
                            <h3><?php echo htmlspecialchars($row['v_reg_no']); ?></h3>
                            <h6><?php echo "Insurance valid till: " . htmlspecialchars($row['v_insurance_valid']); ?></h6>
                            <h6><?php echo "Emission valid till: " . htmlspecialchars($row['v_emission_valid']); ?></h6>
                        </div>
                    </a>
                <?php 
                    }
                } else {
                    echo "<p>No records found.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <script>
        const sidebar = document.querySelector('.sidebar-toggle'); // Sidebar element
        const gridContainer = document.querySelector('.grid-container'); // Grid container

        sidebar.addEventListener('click', () => {
            // Toggle the grid container's class for resizing
            gridContainer.classList.toggle('sidebar-collapsed');
        });
    </script>
</body>

</html>
