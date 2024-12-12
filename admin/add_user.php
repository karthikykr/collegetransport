<?php 
include('../session.php');
include('../db.php');
include('admin_header.php');?>
<link rel="stylesheet" href="../styles/add_user.css"> 
 
        <!-- Form to Add User -->
            <div class="board-header">
            <h1>Add User</h1>
            </div>
            <div class="container">
                <form id="userForm" action="add_user_backend.php" method="POST">

                    <!-- Name -->
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" class="user_input" placeholder="Enter full name"
                        required><br>

                    <!-- Designation -->
                    <label for="designation">Designation:</label>
                    <select id="designation" name="designation" class="user_input" onchange="displayDepartment()" required>
                        <option value="" disabled selected>Select Designation</option>
                        <option value="admin">Admin</option>
                        <option value="faculty">Faculty</option>
                        <option value="hod">HOD</option>
                        <option value="assistant director">Assistant Director</option>
                        <option value="principal">Principal</option>
                        <option value="director">Director</option>
                    </select><br>

                    <!-- Department -->
                   <label for="department" id="department_lbl">Department:</label>
                     <input type="text" id="department" name="department" class="user_input"
                        placeholder="enter Department" >

                    <!-- Email --> 
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" class="user_input" placeholder="Enter email"
                        required><br>

                    <!-- Password -->
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="user_input" placeholder="Enter password"
                        required><br>

                    <!-- Role (Hidden by default) -->
                    <input type="hidden" id="role" name="role" value="user">

                    <!-- Submit Button -->
                     <div class="btn-con">
                    <button type="submit" value="Add User" class="add-btn">Add<br>
                    </div>
                </form>
                <script>
        function displayDepartment() {
            const selectedItem = document.getElementById("designation").value;
            const department = document.getElementById("department");
            const departmentLabel = document.getElementById("department_lbl");

            if (selectedItem === "hod" || selectedItem === "faculty") {
                department.style.display = "block";
                departmentLabel.style.display = "block";
                department.setAttribute("required","required");
            } else {
                department.style.display = "none";
                departmentLabel.style.display = "none";
            }
        }
    </script>

    </div>
    </body>

    </html>