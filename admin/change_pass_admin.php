<?php 
    include('../session.php');
    include('../db.php');
    include('admin_header.php');
?>
<link rel="stylesheet" href="../styles/change_password.css">

<body>
    <!-- Dashboard Section -->
    <section class="board">
        <div id="main" class="main">
            <div class="board-header">
                <h6>Change Password</h6>
            </div>
            <div class="container">
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="old_pass">Old Password</label>
                        <input type="password" id="old_pass" name="old_pass" placeholder="Old password" required>
                    </div>
                    <div class="form-group">
                        <label for="new_pass">New Password</label>
                        <input type="password" id="new_pass" name="new_pass" placeholder="New password" required>
                    </div>
                    <div class="btn-con">
                        <button type="submit" class="submit-btn" name="submit">Submit</button>
                    </div>
                </form>
            </div>
            <?php 

        $sql="SELECT * FROM `users` WHERE `id`='$u_id'";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $pass=$row['password']; 

        if (isset($_POST['submit'])) {
            
           $old_pass=$_POST['old_pass']; 
           $new_pass=$_POST['new_pass']; 

           if($pass===$old_pass){
            $query = "UPDATE `users` SET `password` ='$new_pass' WHERE `id` = '$u_id'";
            $conn->query($query);
            echo"<script>alert('password changed..');</script>";
            echo"<script>location.href='admin_home.php';</script>";
           }else{
            echo"<script>alert('Incorrect old password!...');</script>";
           }
        }

    ?>
</body>

</html>