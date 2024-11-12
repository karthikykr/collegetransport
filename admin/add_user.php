<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Transport</title>
<link rel="stylesheet" href="../styles/add_user.css"> <!-- Your custom CSS file -->

<!-- Sidebar Navigation -->
<aside class="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <img src="../Assets/logo.jpg" alt="transport">
        </div>
    </div>
    <ul class="nav-links">
        <li><a href="../admin/admin_home.php" class="active">Vehicles</a></li>
        <!-- <li><a href="#">Add</a></li> -->
        <!-- <li><a href="#">Book</a></li> -->
        <!-- <li><a href="#">Status</a></li> -->
        <!-- <li><a href="#">My Bookings</a></li> -->
    </ul>
</aside>

<!-- Main Content Area -->
<main class="main-content">
    <!-- Header -->
    <header class="header">
        <h2>St Joseph Engineering College</h2>
        <img src="../Assets/logo.jpg" alt="Profile">
    </header>
    </head>

    <body>

        <!-- Form to Add User -->
        <div class="add_user_container">
            <div class="add_user">
                <h2>Add User</h2><br>
                <form id="userForm" action="#" method="POST">

                    <!-- Name -->
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" class="user_input" placeholder="Enter full name"
                        required><br><br>

                    <!-- Designation -->
                    <label for="designation">Designation:</label>
                    <select id="designation" name="designation" class="user_input" required>
                        <option value="" disabled selected>Select Designation</option>
                        <option value="faculty">Faculty</option>
                        <option value="hod">HOD</option>
                        <option value="assistant director">Assistant Director</option>
                        <option value="principal">Principal</option>
                        <option value="director">Director</option>
                    </select><br><br>

                    <!-- Department -->
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" class="user_input"
                        placeholder="Enter department" required><br><br>

                    <!-- Email -->
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" class="user_input" placeholder="Enter email"
                        required><br><br>

                    <!-- Password -->
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="user_input" placeholder="Enter password"
                        required><br><br>

                    <!-- Role (Hidden by default) -->
                    <input type="hidden" id="role" name="role" value="user">

                    <!-- Submit Button -->
                    <input type="submit" value="Add User" class="btnAdd"><br><br>
                </form>
            </div>
        </div>
    </body>

    </html>