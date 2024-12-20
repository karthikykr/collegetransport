<?php 
include('../session.php');
include('../db.php');
include('../header.php');
?>
<link rel="stylesheet" href="../styles/add_user.css">

<body>
    <!-- Dashboard Section -->
    <section class="board">
        <div id="main" class="main">
            <div class="board-header">
                <h6>Add User</h6>
            </div>
            <div class="container">
                <form id="userForm" action="add_driver_backend.php" method="POST">

                    <!-- Name -->
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" class="user_input" placeholder="Enter full name"
                        required><br>

                    <!-- Email -->
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" class="user_input" placeholder="Enter email"
                        required><br>

                    <!-- Password -->
                    <label for="password">age</label>
                    <input type="number" id="age" name="age" class="user_input" placeholder="Enter Age"
                        required><br>

                    <!-- Submit Button -->
                    <div class="btn-con">
                        <button type="submit" class="add-btn">Add Driver</button>
                    </div>
                </form>
            </div>
            </main>
</body>

</html>