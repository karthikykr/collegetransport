
<?php include('../header.php');?>
    <title>Transport</title>
    <link rel="stylesheet" href="../styles/add_vehicle.css"> <!-- Your custom CSS file -->

    <!-- Main Content Area -->
    <main class="main-content">
        <!-- Header -->
        
    </head>
<body>

<!-- Form to Add Vehicle -->
<div class="add_vehicles">
    <h2>Add Vehicle</h2><br>
    <form id="vehicleForm" action="add_vehicle_backend.php" method="POST">  <!--redirect to add_vehicle_backend -->     
        <label for="vehicles">Select Vehicle Type:</label>
        <select id="vehicles" name="vehicleType" class="vehicle" required>
            <option value="" disabled selected>Select a vehicle</option>
            <option value="bus">Bus</option>
            <option value="car">Car</option>
            <option value="truck">Truck</option>
        </select><br><br>

        <label for="registerNumber">Enter Vehicle Register Number:</label>
        <input type="text" id="registerNumber" name="registerNumber" class="reg_input" required><br><br>

        <label for="insuranceNumber">Enter Insurance Number:</label>
        <input type="text" id="insuranceNumber" name="insuranceNumber" class="lic_input" required><br><br>

        <label for="insuranceValidTill">Insurance Valid Till:</label>
        <input type="date" id="insuranceValidTill" name="insuranceValidTill" required><br><br>

        <label for="emissionValidTill">Emission Valid Till:</label>
        <input type="date" id="emissionValidTill" name="emissionValidTill"  required><br><br>

        <input type="submit" value="Add Vehicle" class="btnAdd"><br><br>
    </form>
   
</div>
</body>
</html>