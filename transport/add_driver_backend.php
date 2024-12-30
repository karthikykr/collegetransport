<?php 
        include('../session.php');
        include('../db.php');
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name=$_POST['name'];
            $email= $_POST['email'];
            $age= $_POST['age'];
            $contact= $_POST['contact_no'];

            $sql="SELECT * FROM `driver`";
            
            $result=$conn->query($sql);

            while($row=$result->fetch_assoc()){
                if($row['email']==$email){
                    echo"<script>alert('E-mail already exists');</script>";
                    echo"<script>location.href='add_driver.php'</script>"; 
                    exit; 
                }
            }

            $query = "INSERT INTO `driver` (`name`,`email`, `age`,`contact`) VALUES ('$name','$email','$age','$contact')";
            
            if($conn->query($query)){
                echo"<script>alert('user added sucessfully');</script>";
                echo"<script>location.href='../user_home/home.php'</script>";
            }else{
                    echo"<script>alert('User not added');</script>";
                    echo"<script>location.href='add_driver.php';</script>";
                }
                echo"<script>alert('Invalid!....');</script>";
                echo"<script>location.href='add_driver.php';</script>";
            }
                
            
       
         $conn->close();

        // // End output buffering and flush the buffer
        // ob_end_flush();
    ?>