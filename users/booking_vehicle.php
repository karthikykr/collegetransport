<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transport</title>
    <link rel="stylesheet" href="../styles/booking_vehicle.css">
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
            <li><a href="#" class="active">Vehicles</a></li>
            <li><a href="#">Status</a></li>
            <li><a href="#">My Bookings</a></li>
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
                <h3>Book Vehicle</h3>
            </div>
        </section>
    </main>
    <div class="form-container">
    <h2>Vehicle Booking Form</h2>
    <form action="submit_booking.php" method="POST">
        <div class="form-group">
            <label for="vehicle">Type of Vehicle:</label>
            <select id="vehicle" name="vehicle" required>
                <option value="Car">Car</option>
                <option value="Bus">Bus</option>
                <option value="Tempo Traveller">Tempo Traveller</option>
            </select>
        </div>

        <div class="form-group">
            <label for="travel_date">Travel Date:</label>
            <input type="date" id="travel_date" name="travel_date" required>
        </div>

        <div class="form-group">
            <label for="purpose">Purpose:</label>
            <textarea rows="4" cols="50" id="purpose" name="purpose" placeholder="Enter purpose of travel" required></textarea>
        </div>

        <div class="form-group">
            <label for="num_people">Number of People:</label>
            <input type="number" id="num_people" name="num_people" min="1" placeholder="Enter number of people" required>
        </div>

        <div class="form-group">
            <label for="pickup_from">Pick-up Location:</label>
            <input type="text" id="pickup_from" name="pickup_from" placeholder="Enter pick-up location" required>
        </div>

        <div class="form-group">
            <label for="pickup_time">Pick-up Time:</label>
            <select id="pickup_time" name="pickup_time" required>
                <option value="Morning">Morning</option>
                <option value="Evening">Evening</option>
            </select>
        </div>

        <div class="form-group">
            <label for="drop_to">Drop Location:</label>
            <input type="text" id="drop_to" name="drop_to" placeholder="Enter drop-off location" required>
        </div>

        <div class="form-group">
            <label for="drop_time">Drop Time:</label>
            <select id="drop_time" name="drop_time" required>
                <option value="Morning">Morning</option>
                <option value="Evening">Evening</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="submit-btn">Submit</button>
        </div>
    </form>
</div>

</body>

</html>