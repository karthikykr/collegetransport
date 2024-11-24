<?php  
include('db.php');


$v_id = $_GET['v_id'];

$sql="SELECT * FROM `add_vehicle` WHERE `v_id`='$v_id'";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles/booking_vehicle.css" >
        <link rel="stylesheet" href="styles/style_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!-- Font Awesome for icons -->
    </head>
    <h1>Vehicle details</h1>
    <body>

    <?php include('header2.php') ?>
        <form action="update_vehicle.php" method="POST">
        <table class="booking-details" border="1">
        <input type="hidden" name="v_id" value="<?php echo $row['v_id']; ?>">
            <tr>
                <th>Vehicle Type</th>
               <th> <?php echo $row['vehicle_type']; ?> </th>
            </tr>
            <tr>
                <th>Register No</th>
                <th><?php echo $row['v_reg_no']; ?> </th>
            </tr>

            <tr>
                <th>Insurance No</th>
                <th><input type="text" name="v_insurance_no" value="<?php echo $row['v_insurance_no']; ?>" required></th>
            </tr>

            <tr>
                <th>Insurance Valid date</th>
                <th><input type="date" name="v_insurance_valid" value="<?php echo $row['v_insurance_valid']; ?>" required></th>

            </tr>
            <tr>
                <th>Emission Valid Date</th>
                <th><input type="date" name="v_emission_valid" value="<?php echo $row['v_emission_valid']; ?>" required></th>

            </tr>
        </table> 
</form>

    </body>
    </html>
    <?php $conn->close(); ?>

      