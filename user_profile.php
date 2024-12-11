<?php
include('session.php');
?>
<link rel="stylesheet" href="../styles/user_profile.css">
<div id="user-info" class="hidden">
    <div class="user-profile-section">
        <img src="../Assets/image.png" class="user-profile" alt="Profile">
        <h3 class="user-name"><?php echo "$name"?></h3>
        <h6 class="user-email"><?php echo "$email"?></h6>
    </div>
    <div class="line"></div>
    <div class="user-details">
    <?php
                $user_role = $_SESSION['role'];
                if (in_array($user_role, ['faculty','hod'])) {
                    echo '<p><strong>Department:</strong> <?php echo "$department"?></p>';
                }
                ?>
        <p><strong>Role:</strong> <?php echo "$role"?></p>
    </div>
    <div class="line"></div>
    <div class="logoutbtn">
        <button class="change-password" onclick="location.href='change_pass_admin.php'">
            <i class="fa-solid fa-key"></i>
            <span class="logout-text">Change Password</span>
        </button>
        <button class="logout-btn" onclick="location.href='../loginpage/login.php'">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="logout-text">Logout</span>
        </button>
    </div>
</div>
