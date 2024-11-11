<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport</title>
    <link rel="stylesheet" href="style/add_vehicle.css"> <!-- Your custom CSS file -->

    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="Assets/logo.jpg" alt="transport">
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="#" class="active">Vehicles</a></li>
            <!-- <li><a href="#">Add</a></li> -->
            <!-- <li><a href="#">Book</a></li> -->
            <!-- <li><a href="#">Status</a></li> -->
            <!-- <li><a href="#">My Bookings</a></li> -->
        </ul>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <h2>St Joseph Engineering College</h2>
            <img src="Assets/logo.jpg" alt="Profile">
        </header>
    </head>
<body>

<!-- Form to Add Vehicle -->
<div class="add_vehicles">
    <h2>Add Vehicle</h2><br>
    <form id="vehicleForm">
        <label for="vehicles">Select Vehicle Type:</label>
        <select id="vehicles" name="vehicleType" class="vehicle">
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
        <input type="date" id="emissionValidTill" name="emissionValidTill" required><br><br>

        <input type="submit" value="Add Vehicle" class="btnAdd"><br><br>
    </form>
</div>
</body>
</html>
