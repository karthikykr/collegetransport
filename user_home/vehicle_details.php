<?php  
include('../session.php');
include('../db.php');
include('../header.php');

$v_id = $_GET['v_id'];
$sql="SELECT * FROM `add_vehicle` WHERE `v_id`='$v_id'";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    ?>

<link rel="stylesheet" href="../styles/vehicle_details.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

<div class="board-header">
    <h1>Vehicle Information</h1>
</div>
<div class="container">
    <form action="update_vehicle.php" method="POST">
        <table class="table table-hover">
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