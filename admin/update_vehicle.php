<?php 

include('../db.php');

$vid=$_POST['v_id'];
$v_insu_no=$_POST['v_insurance_no'];
$v_insu_valid=$_POST['v_insurance_valid'];
$v_emi_test_date=$_POST['v_emission_test_date'];
$v_emi_valid=$_POST['v_emission_valid'];

$query = "UPDATE `add_vehicle` SET `v_insurance_no` ='$v_insu_no', `v_insurance_valid` ='$v_insu_valid',`v_emission_test_date` ='$v_emi_test_date' ,`v_emission_valid` ='$v_emi_valid' WHERE `v_id` = '$vid'";

 if($conn->query($query)){
    echo "<script>alert('updated sucessfully')</script>";
    echo "<script>location.href='admin_home.php'</script>";
 }else{
    echo "error";
 }
$conn->close();
?>
