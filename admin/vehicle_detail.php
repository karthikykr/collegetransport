<?php  
include('../db.php');
include('admin_header.php');

$v_id = $_GET['v_id'];
$sql="SELECT * FROM `add_vehicle` WHERE `v_id`='$v_id'";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    ?>
    
        <link rel="stylesheet" href="../styles/vehicle_details.css" >
        <div class="board-header">
            <h1>Vehicle Information</h1>
        </div>
    <div class="container">
        <form action="update_vehicle.php" method="POST">
        <table class="table table-hover">
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
                <th>Emission Test Date</th>
                <th><input type="date" name="v_emission_test_date" value="<?php echo $row['v_emission_test_date']; ?>" required></th>
            </tr>
            <tr>
                <th>Emission Valid Date</th>
                <th><input type="date" name="v_emission_valid" value="<?php echo $row['v_emission_valid']; ?>" required></th>
            </tr>
            
        </table>  
        <div class="btn-con">
                <td><button type="submit" name="updatebtn"  class="update-btn">Update</button></td>
                <td><button type=button onclick="confirmDelete()" name="deletebtn" class="delete-btn">Delete</button></td>
        </div>
    </form>
    </div>
<script>
        function confirmDelete() {
            const userConfirmed = confirm("Are you sure you want to delete this record?");
            if (userConfirmed) {
                // Perform delete operation here, e.g., call an API or submit a form
                location.href='delete_vehicle.php ?vid=<?php echo $v_id; ?>'
            } else {
                alert("Deletion canceled.");
            }
        }
    </script>
    </body>
    </html>
    <?php $conn->close(); ?>

      