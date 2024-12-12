<?php 
        include('../session.php');
        include('../db.php');
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $vehicle_type=$_POST['vehicle'];
            $v_regno=$_POST['registerNumber'];
            $v_insurance_no= $_POST['insuranceNumber'];
            $insurance_valid= $_POST['insuranceValidTill'];
            $emission_test_date= $_POST['emissonTestDate'];
            $emission_valid= $_POST['emissionValidTill'];

            
            $query="INSERT INTO `add_vehicle`(`vehicle_type`,`v_reg_no`,`v_insurance_no`,`v_insurance_valid`,`v_emission_test_date`,`v_emission_valid`)VALUES('$vehicle_type','$v_regno','$v_insurance_no','$insurance_valid','$emission_test_date','$emission_valid')";
           
            if($conn->query($query)){
                echo"<script>alert('inserted sucessfully');</script>";
                echo"<script>location.href='admin_home.php'</script>";
            }else{
                echo"<script>alert('Not inserted');</script>";
                echo"<script>location.href='add_vehicle.php'</script>";
                }
            }
                
            //$con->query($query);
       
         $conn->close();

        // // End output buffering and flush the buffer
        // ob_end_flush();
    ?>