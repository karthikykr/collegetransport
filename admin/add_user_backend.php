<?php 
        include('../session.php');
        include('../db.php');
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name=$_POST['name'];
            $designation=$_POST['designation'];
            $department= $_POST['department'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $role=$_POST['role'];

            $sql="SELECT * FROM `users`";
            
            $result=$conn->query($sql);

            while($row=$result->fetch_assoc()){
                if($row['email']==$email){
                    echo"<script>alert('E-mail already exists');</script>";
                    echo"<script>location.href='add_user.php'</script>"; 
                    exit; 
                }
            }

            $query = "INSERT INTO `users` (`name`, `role`, `department`, `email`, `password`) VALUES ('$name','$designation','$department','$email','$password')";
           
            if($conn->query($query)){
                echo"<script>alert('user added sucessfully');</script>";
                echo"<script>location.href='admin_home.php'</script>";
            }else{
                    echo"<script>alert('User not added');</script>";
                    echo"<script>location.href='add_user.php';</script>";
                }
                echo"<script>alert('Invalid!....');</script>";
                echo"<script>location.href='add_user.php';</script>";
            }
                
            
       
         $conn->close();

        // // End output buffering and flush the buffer
        // ob_end_flush();
    ?>