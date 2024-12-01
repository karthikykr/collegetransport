<?php  
include('../db.php');
include('../header.php');


$v_id = $_GET['v_id'];

$sql="SELECT * FROM `add_vehicle` WHERE `v_id`='$v_id'";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    ?>
    <link rel="stylesheet" href="../styles/vehicle_details.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> Font Awesome for icons -->
    </head>
    <h1>Vehicle details</h1>
    <body>
        <form action="update_vehicle.php" method="POST">
        <table class="table table-hover" border="1">
        <input type="hidden" name="v_id" value="<?php echo $row['v_id']; ?>">
            <tr>
                <th>Vehicle Type</th>
               <td> <?php echo $row['vehicle_type']; ?> </td>
            </tr>
            <tr>
                <th>Register No</th>
                <td><?php echo $row['v_reg_no']; ?> </td>
            </tr>

            <tr>
                <th>Insurance No</th>
                <td><?php echo $row['v_insurance_no']; ?></td>
            </tr>

            <tr>
                <th>Insurance Valid date</th>
                <td><?php echo $row['v_insurance_valid']; ?></td>

            </tr>
            <tr>
                <th>Emission Valid Date</th>
                <td><?php echo $row['v_emission_valid']; ?></td>

            </tr>
        </table> 
</form>

    </body>
    </html>
    <?php $conn->close(); ?>

      