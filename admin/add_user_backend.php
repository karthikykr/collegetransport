<?php 
        include('../db.php');
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name=$_POST['name'];
            $designation=$_POST['designation'];
            $department= $_POST['department'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $role=$_POST['role'];

            
            $query="INSERT INTO `users`(`name`,`designation`,`department`,`email`,`password`,`role`)VALUES('$name','$designation','$department','$email','$password',`$role`)";
           
            if($conn->query($query)){
                echo"<script>alert('inserted sucessfully');</script>";
                echo"<script>location.href='admin_home.php.php'</script>";
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