<?php 
include('../session.php');
include('../db.php');
include('../header.php');
$book_id=$_POST['bookid'];

$stmt=$conn->prepare("SELECT * FROM bookings WHERE id=?");
$stmt->bind_param("i",$book_id);
$stmt->execute();
$result=$stmt->get_result();
if($result->num_rows>0){
    $row=$result->fetch_assoc();
?>
<link rel="stylesheet" href="../styles/confirm_vehicle.css">
<body>
    <div class="board-header">
        <h2>Approval Details</h2>
    </div> 
    <div class="container">
    <table class="confirm-details" border="1">
            <tr>
                <th>Vehicle Type</th>
                <td><?php echo $row["vehicle"]; ?></td>
            </tr>
            <tr>
                <th>Travel Date</th>
                <td><?php echo $row["travel_date"];  ?></td>
            </tr>
            <tr>
                <th>Number of People</th>
                <td><?php echo $row["num_people"];  ?></td>
            </tr>
            <tr>
                <th>Number of Days</th>
                <td><?php echo $row["num_days"];?></td>
            </tr>
            <tr>
                <th>Pick-up Location</th>
                <td><?php echo $row["pickup_from"]; ?></td>
            </tr>
            <tr>
                <th>Drop Location</th>
                <td><?php echo $row["drop_to"]; ?></td>
            </tr>
            <tr>
                <th>Pick-up Time</th>
                <td><?php echo $row["pickup_time"]; ?></td>
            </tr>
            <tr>
                <th>Drop Time</th>
                <td><?php echo $row["drop_time"]; ?></td>
            </tr>
            <tr>
                <th>Booked On</th>
                <td><?php echo $row["created_at"]; ?></td>
            </tr>
            <tr>
                <th>Purpose</th>
                <td><?php echo $row["purpose"]; ?></td>
            </tr>
        </table> 

        <?php if($row["booking_status"]==='hod_rejected'){
                $reject="HOD has been Rejected your Request";
            }else if($row["booking_status"]==='p_rejected'){
                $reject="Principal has been Rejected your Request";
            }else if($row["booking_status"]==='a_d_rejected'){
                $reject="Assistant Director has been Rejected your Request";
            }else if($row["booking_status"]==='d_rejected'){
                $reject="Director has been Rejected your Request";
            }else if($row["booking_status"]==='t_rejected'){
                $reject="Transport Department has been Rejected your Request";
            }
            if($row["booking_status"]==='hod_rejected'||$row["booking_status"]==='p_rejected'||$row["booking_status"]==='a_d_rejected'||$row["booking_status"]==='d_rejected'){
            ?>
            <h3><?php echo $reject; ?></h3>
            <table class="confirm-details" border="1">
            <tr>
                <th>Reason</th>
                <td><?php echo $row["reason"]; ?></td>
            </tr>
            </table>

     <?php 
            }
        }
     else{
        echo "<script>alert('record not found');</script>";
     }

     if($row['booking_status']==='t_approved'){

        
        
        $stmt1=$conn->prepare("SELECT a.open_km as open_km,a.close_km as close_km,d.name as d_name,d.email as email,d.age as d_age,d.contact as d_contact,v.v_reg_no as reg_no,v.v_insurance_no as insurance_no,v.v_insurance_valid as insurnce_valid,v.v_emission_test_date as emission_test_date,v.v_emission_valid as emission_valid FROM t_approval a JOIN driver d ON a.driver_id=d.d_id JOIN add_vehicle v ON a.vehicle_id=v.v_id WHERE a.book_id=?");
        $stmt1->bind_param("i", $book_id);
        $stmt1->execute();
        $result1=$stmt1->get_result();
        if($result1->num_rows>0){
        $row1=$result1->fetch_assoc();
?>
        <h3>Your transport has been approved</h3>
        <table class="confirm-details" border="1">
            <tr>
                <th>Driver name</th>
                <td><?php echo $row1["d_name"]; ?></td>
            </tr>
            <tr>
                <th>Driver Contact</th>
                <td><?php echo $row1["d_contact"]; ?></td>
            </tr>
            <tr>
                <th>Vehicle No</th>
                <td><?php echo $row1["reg_no"]; ?></td>
            </tr>
            <tr>
                <th>Vehicle Insurance No</th>
                <td><?php echo $row1["insurance_no"]; ?></td>
            </tr>
            <tr>
                <th>Insurance Valid</th>
                <td><?php echo $row1["insurnce_valid"]; ?></td>
            </tr>
        </table>
       
       <?php
        }else{
            echo "no record";
        }
     }
     ?>
</div>
</body>
</html> 