document.getElementById('vehicleForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent form from submitting and page reload

    // Get form values
    const vehicleType = document.getElementById('vehicles').value;
    const registerNumber = document.getElementById('registerNumber').value;
    const insuranceNumber = document.getElementById('insuranceNumber').value;
    const insuranceValidTill = document.getElementById('insuranceValidTill').value;
    const emissionValidTill = document.getElementById('emissionValidTill').value;

    // Create a new grid item
    const gridItem = document.createElement('div');
    gridItem.classList.add('grid-item');
    
    // Add an ID or data attribute to uniquely identify the vehicle (optional)
    gridItem.dataset.registerNumber = registerNumber;

    // Add the vehicle data to the grid item (only registration number initially)
    gridItem.innerHTML = `
        <div class="vehicle-summary">
            <h4 class="vehicle-register">${registerNumber}</h4> <!-- Display vehicle reg number -->
        </div>
        <div class="vehicle-details" style="display: none;">
            <p><strong>Type:</strong> ${vehicleType}</p>
            <p><strong>Insurance Number:</strong> ${insuranceNumber}</p>
            <p><strong>Insurance Valid Till:</strong> ${insuranceValidTill}</p>
            <p><strong>Emission Valid Till:</strong> ${emissionValidTill}</p>
        </div>
    `;

    // Append the new grid item to the grid container
    document.getElementById('vehicleGrid').appendChild(gridItem);

    // Clear form fields after submission
    document.getElementById('vehicleForm').reset();
});

// Handle hover effect to show only registration number
document.addEventListener('mouseover', function(event) {
    if (event.target.closest('.grid-item')) {
        const vehicleItem = event.target.closest('.grid-item');
        vehicleItem.querySelector('.vehicle-summary').style.display = 'block';
    }
});

// Handle click event to toggle full details visibility
document.getElementById('vehicleGrid').addEventListener('click', function(event) {
    const clickedItem = event.target.closest('.grid-item');
    if (clickedItem) {
        const details = clickedItem.querySelector('.vehicle-details');
        const summary = clickedItem.querySelector('.vehicle-summary');
        
        // Toggle visibility of the vehicle details
        if (details.style.display === 'none') {
            details.style.display = 'block';
            summary.style.display = 'none';
        } else {
            details.style.display = 'none';
            summary.style.display = 'block';
        }
    }
});
