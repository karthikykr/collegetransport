<?php 
session_start();
include('../db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <title>my bookings</title>
    <style>
        a{
            text-decoration:none;
            color:black;
        }

    </style>
</head>
<body>
    <section class="board">
        <div class="board-header">
            <h3>My Bookings</h3>
        </div>
    <div class="grid-container">

        <?php 
            $id=$_SESSION['user_id'];
            $sql = "SELECT * FROM `bookings` WHERE `user_id` = '$id';";
                $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // Loop through the results and display them
                while ($row = $result->fetch_assoc()) {   ?>       
                    <a  href="vehicle_detail.php ?v_id=<?php echo $row['id']; ?>">
                    <div class="grid-item">     
                        <h3><?php  echo $row['vehicle'] ;?></h3>
                        <h3><?php  echo "Travel Date:". $row['travel_date'] ?></h3>
                        <h6><?php  echo "number of people: " . $row['num_people']; ?></h6>
                        <h6><?php  echo "number of days: " . $row['num_days'] ;?></h6>
                        <p><?php  echo "purpose: " . $row['purpose'] ;?></p>
                        <h3><?php   if($row['booking_status']==='d_approved'){ 
                                        echo"approved by director";
                                    }else if($row['booking_status']==='a_d_approved'){ 
                                        echo"approved by assistent director";
                                    }else if($row['booking_status']==='p_approved'){ 
                                        echo"approved by principal";
                                    }else if($row['booking_status']==='hod_approved'){ 
                                        echo"approved by HOD";
                                    }else{
                                        echo"pending";
                                    }
                        } ?></h3>
                    </div>
                     </a>
                <?php   
        } else {
            echo "No Bookings...";
        }
        $conn->close()
    
        ?>
            </div>
        </section>
</body>
</html>

<!-- echo"booking status:".$row['booking_status']; -->