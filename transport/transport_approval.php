<?php 
include('../session.php');
include('../db.php');
  
$book_id=$_SESSION['book_id'];
$vehicle=$_SESSION['vehicle'];


$sql1="SELECT * FROM `add_vehicle` WHERE `vehicle_type`='$vehicle'";

    $result1 = $conn->query($sql1);

$sql2="SELECT * FROM `driver`";

    $result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searchable Dropdown</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    .dropdown-container {
        position: relative;
        width: 300px;
        margin-bottom: 20px;
    }

    .search-box {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    .dropdown {
        width: 100%;
        max-height: 200px;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow-y: auto;
        background: #fff;
        display: none;
        /* Hidden initially */
        position: absolute;
        z-index: 1000;
    }

    .dropdown-item {
        padding: 8px;
        cursor: pointer;
    }

    .dropdown-item:hover {
        background: #f0f0f0;
    }
    </style>
</head>

<body>


    <h1>Assign vehicle and Driver</h1>

    <form method="POST" action="confirm_backend.php">
        <div class="dropdown-container">
            <label for="search-v">Vehicle</label>
            <input type="hidden" name="vehicle_id">
            <input type="text" name="search-v" class="search-box" placeholder="Search vehicle..."
                onfocus="toggleDropdown(this, true)" required>
            <div class="dropdown">

                <?php  
            if ($result1->num_rows > 0) {
                // Loop through the results and display them
                while ($row1 = $result1->fetch_assoc()) {
        ?>
                <div class="dropdown-item"><?php echo($row1['v_reg_no']); ?></div>
                <input type="hidden" value="<?php echo($row1['v_id']); ?>">
                <?php
                }
            }
        ?>
            </div>
        </div>


        <div class="dropdown-container">
            <label for="search-d">Driver</label>
            <input type="hidden" name="driver_id">
            <input type="text" class="search-box" name="search-d" placeholder="Search driver..."
                onfocus="toggleDropdown(this, true)" required>
            <div class="dropdown">
                <?php  

            if ($result2->num_rows > 0) {
                // Loop through the results and display them
                while ($row2 = $result2->fetch_assoc()) {
        ?>
                <div class="dropdown-item"><?php echo($row2['name']); ?></div>
                <input type="hidden" value="<?php echo($row2['d_id']); ?>">
                <?php
                }
            }
        ?>
            </div>
        </div>

        <div>
            <label for="search-d">Opening KM</label><br>
            <input type="text" name="opening_km" required>
        </div>

        <div>
            <label for="search-d">Closing KM</label><br>
            <input type="text" name="closing_km" required>
        </div>
        <div>
            <input type="submit" name="confirm">
        </div>

        <input type="hidden" value="<?php echo $book_id; ?> " name="book_id" required>
        <input type="hidden" value="<?php echo $vehicle; ?>" name="vehicle" required>

    </form>
    <script>
    // Show/hide dropdown for a specific input box
    function toggleDropdown(input, show) {
        const dropdown = input.nextElementSibling;
        dropdown.style.display = show ? 'block' : 'none';
    }

    // Filter dropdown items based on the corresponding input box
    document.querySelectorAll('.search-box').forEach(searchBox => {
        searchBox.addEventListener('input', function() {
            const dropdown = this.nextElementSibling;
            const filter = this.value.toLowerCase();
            const items = dropdown.querySelectorAll('.dropdown-item');

            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                item.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    });

    // Hide dropdown when clicking outside
    document.addEventListener('click', function(e) {
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            if (!dropdown.parentElement.contains(e.target)) {
                dropdown.style.display = 'none';
            }
        });
    });

    // Handle item selection for multiple dropdowns
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function() {
            const dropdown = this.parentElement     ;
            const values = this.nextElementSibling.value;
            const searchBox = dropdown.previousElementSibling;
            const id=searchBox.previousElementSibling;
            searchBox.value = this.textContent;
            id.value = values;

            dropdown.style.display = 'none';
        });
    });
    </script>
</body>

</html>