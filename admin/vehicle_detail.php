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
        <table border=1>
            <tr>
                <th>Vehicle Type</th>
                <th><?php echo $row['vehicle_type']; ?></th>
            </tr>
            <tr>
                <th>Register No</th>
                <th><?php echo $row['v_reg_no']; ?></th>
            </tr>

            <tr>
                <th>Insurance No</th>
                <th><?php echo $row['v_insurance_no']; ?></th>
            </tr>

            <tr>
                <th>Insurance Valid date</th>
                <th><?php echo $row['v_insurance_valid']; ?></th>
            </tr>
            <tr>
                <th>Emission Valid Date</th>
                <th><?php echo $row['v_emission_valid']; ?></th>
            </tr>

        </table>
    </body>
    </html>

<?php 
$conn->close();
?>