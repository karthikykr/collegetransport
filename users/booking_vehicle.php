<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../header2.php');?>
    <link rel="stylesheet" href="../styles/booking_vehicle.css">
    <link rel="stylesheet" href="../styles/style_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <title>Vehicle Booking Form</title>
</head>
<body>
    <main>
        <!-- Vehicle Booking Form -->
        <div class="form-container">
            <center><h2>Vehicle Booking Form</h2></center><br>
            <form action="confirm_booking.php" method="POST">
                
                <div class="row">
                    <div class="form-group">
                        <label for="vehicle">Type of Vehicle:</label>
                        <select id="vehicle" name="vehicle" required>
                            <option value="Car">Car</option>
                            <option value="Bus">Bus</option>
                            <option value="Tempo Traveller">Tempo Traveller</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="num_people">Number of People:</label>
                        <input type="number" id="num_people" name="num_people" min="1" placeholder="Enter number of people" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="num_days">Number of Days:</label>
                        <input type="number" id="num_days" name="num_days" min="1" placeholder="Enter number of days" required>
                    </div>
                <div class="form-group">
                    <label for="travel_date">Travel Date:</label>
                    <input type="date" id="travel_date" name="travel_date" required>
                </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="pickup_from">Pick-up Location:</label>
                        <input type="text" id="pickup_from" name="pickup_from" placeholder="Enter pick-up location" required>
                    </div>
                    <div class="form-group">
                        <label for="drop_to">Drop Location:</label>
                        <input type="text" id="drop_to" name="drop_to" placeholder="Enter drop-off location" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="pickup_time">Pick-up Time:</label>
                        <input type="time" id="pickup_time" name="pickup_time" required>
                    </div>

                    <div class="form-group">
                        <label for="drop_time">Drop Time:</label>
                        <input type="time" id="drop_time" name="drop_time" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="purpose">Purpose:</label>
                    <textarea rows="4" cols="50" id="purpose" name="purpose" placeholder="Enter purpose of travel" required></textarea>
                </div>
                <div class="btn-con">
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
