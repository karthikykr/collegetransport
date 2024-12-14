<?php 
include('../session.php');
include('../db.php');
include('admin_header.php');?>
<link rel="stylesheet" href="../styles/add_vehicle.css"> 
    
<!-- Form to Add Vehicle -->
 <div class="board-header">
 <h1>Add Vehicle</h1>
 </div>
    <div class="container" >
    <form id="vehicleForm" action="add_vehicle_backend.php" method="POST" >  <!--redirect to add_vehicle_backend --> 
         
                <div class="row">
                    <div class="form-group">
                        <label for="vehicle">Type of Vehicle:</label>
                        <select id="vehicle" name="vehicle" required>
                            <option value="Bus">Bus</option>
                            <option value="Car">Car</option>
                            <option value="Tempo Traveller">Tempo Traveller</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="registerNumber">Enter Vehicle Register Number</label>
                        <input type="text" id="registerNumber" name="registerNumber" class="reg_input" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="insuranceNumber">Enter Insurance Number</label>
                        <input type="text" id="insuranceNumber" name="insuranceNumber" class="lic_input" required>
                    </div>
                    <div class="form-group">
                        <label for="insuranceValidTill">Insurance Valid Till</label>
                        <input type="date" id="insuranceValidTill" name="insuranceValidTill" required>
                    </div>
                </div>

            <div class="row">
                <div class="form-group">
                    <label for="emissionValidTill">Date of Emission Test</label>
                    <input type="date" id="emissionTestDate" name="emissionTestDate"  required>
                </div>
                <div class="form-group">
                    <label for="emissionValidTill">Emission Valid Till</label>
                    <input type="date" id="emissionValidTill" name="emissionValidTill"  required>
                </div>
            </div>
                <div class="btn-con">
                    <button type="submit"  class="add-btn">Add</button>
                </div>        
    </form>
</div>
</body>
</html>