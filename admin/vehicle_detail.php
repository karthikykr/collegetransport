<?php  
include('../db.php');

$v_id = $_GET['v_id'];
include('../db.php');
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
    </head>
    <h1>Vehicle details</h1>
    <body>
        <form action="update_vehicle.php" method="POST">
        <table border=1>
        <input type="hidden" name="v_id" value="<?php echo $row['v_id']; ?>">
            <tr>
                <th>Vehicle Type</th>
               <th> <input type="text" name="vehicle_type" value="<?php echo $row['vehicle_type']; ?>" required></th>
            </tr>
            <tr>
                <th>Register No</th>
                <th><input type="text" name="v_reg_no" value="<?php echo $row['v_reg_no']; ?>" required></th>
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

<?php 
$conn->close();
?>